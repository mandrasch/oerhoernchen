$(function() {

  var u_param = $_GET('u');
  if (u_param !== null) {
    $("#user-url").val(decodeURIComponent(u_param)); // 2DO: Sanitize?
  }

  $("#urlcheck-button").click(function(e) {
    e.preventDefault();
    startUrlcheck();
  });

  $('#urlcheck').submit(function(e) {
    e.preventDefault();
    startUrlcheck();
  });

  var startUrlcheck = function() {
    // URL CHECK TOOL
    // check if this is a real url
    var u = $('#user-url').val();

    // set url parameter - beware this is experimental, not for old browsers
    // fallback?
    history.pushState(null,null,'?u='+encodeURIComponent(u));

    $("#ajax-loading").show();
    $("#workLicenseUrl").html();
    $("#urlcheck-results").hide();
    $("#urlcheck-results-error").hide();

    $.ajax({
      url: 'https://oerhoernchen-urlcheck-proxy.codingbros.eu/urlcheck-proxy.php',
      type: "get",
      data: {'u':u},
      dataType: "json",
      success: function(data) {
        console.log('URL check received html', data);

        if(Boolean(data.success) === false){
          console.log("Error in response signalised by server, maybe wrong url");
          $("#urlcheck-results").hide();
          $("#urlcheck-results-error").html('Fehler beim Laden der URL - ist diese korrekt?').show();
          return; // exit here
        }

        // check if there is a rel="license" tag
        // 2DO: check if it is used in <div about="image.jpg"> or something, would be sitewide (no one really does that by now) ;-)
        // 2DO: some use rel=copyright as well, in most cases it is a rel="license" href=""

        if (data.nodes_rel_license.length == 0) {
          console.log('No license information found on page');
          $("#urlcheck-results").hide();
          $("#urlcheck-results-error").html('Oh nein, ich habe leider keine maschinenlesbare Lizenzinformation auf dieser Webseite gefunden! <br><br> Mit dem <a href="https://oerhoernchen.de/bildungsteiler">OERhörnchen Bildungsteiler</a> kannst Du ganz einfach eine maschinenlesbare Lizenzinfo erstellen für deine eigenen Webseiten.').show();
        } else {
          console.log('Found license information, in total: ', data.nodes_rel_license.length, data.nodes_rel_license);

          // 2DO: empty all inputs
          $("#form-urlcheck-results > span").html('');
          $("#urlcheck-results").show();
          $("#urlcheck-results-error").hide();

          // right now we just select the first one, but pages can have multiple license
          // 2DO: figure out the special case later

          
          var licenseUrl = data.nodes_rel_license[0].href;
          var licenseInnerText = data.nodes_rel_license[0].innertext; // only there if it is a a rel=
          // 2DO: check if empty or any special case
          console.log('First license information used (match, detected license href)',licenseUrl);
          $("#workLicenseUrl").html('<a href="'+data.nodes_rel_license[0].href+'">'+data.nodes_rel_license[0].href+'</a>');
          $("#workLicense").html(licenseInnerText);

          $("#workCreator").html(data.node_creator);

          $("#workUrl").html(u);

          // is this need - switch to lrmi anyway...
          //$("input#workAttributionUrl").val(data.node_attribution_url.href)

          $("#workTitle").html(data.node_title);
          // check out, if creative commons choose tool was used or OERhoernchen Bildungsteiler
        }
      },
      error: function(xhr, status) {
        console.log("Error in URL check (xhr,status)", xhr, status);
        // 2DO: put in function
        $("#urlcheck-results").hide();
        $("#urlcheck-results-error").html('Fehler beim Laden der Seite (Ajax-Error)').show();

           $("#ajax-loading").hide();
       
      },
      complete: function(xhr, status) {
        //$('#showresults').slideDown('slow')

           $("#ajax-loading").hide();
      }
    }); /* eo ajax */


  }


}); // eo jquery