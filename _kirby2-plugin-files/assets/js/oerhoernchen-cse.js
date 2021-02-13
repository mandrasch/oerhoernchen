// console.log fallback
if (typeof console === 'undefined') {
  window.console = {
    log: function () {}
  };
}

// 2DO: Use good namespace!

var startProfiSearchApplication = function() {

    registerProfiSearchEvents();

    // AJAX API HANDLING
    // 2DO: USE PROXY

} // eo startApplication


var registerProfiSearchEvents = function() {

    // Smooth scrolling using jQuery easing
    /* From Start Bootstrap - Stylish Portfolio (http://startbootstrap.com/)
     * Copyright 2013-2017 Start Bootstrap
     * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
     */

    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $("#sidebar-wrapper").removeClass("active");
    });


    // listen for select change events
    // license filter explanation
    $('select[name="license-filter"]').change(function() {
        var val = $(this).find(':selected').val();
        console.log('license filter change',val)
        var explanation_div = $(this).parent().find('div.license-explanation:first');
        $('div', explanation_div).hide();
        switch (val) {
            case 'only-oer':
                $('div[data-value="oer"]', explanation_div).show();
                break;
            case 'nc':
                $('div[data-value="oer"]', explanation_div).show();
                $('div[data-value="nc"]', explanation_div).show();
                break;
            case 'nc-nd':
                $('div[data-value="oer"]', explanation_div).show();
                $('div[data-value="nc-nd"]', explanation_div).show();
                break;
            case 'no-filter':
                $('div[data-value="no-filter"]', explanation_div).show();
                break;
        }
    }).change();
    $("#explain-license-filter-icon").click(function(e) {
        e.preventDefault();
        $("div.license-explanation").toggle();
    });

    // custom cse id
    $('select[name="cse-id"]').change(function() {
        var val = $(this).find(':selected').val();
        console.log('change select', val);
        if (val === 'custom') {
            $("div.cse-id-custom").show();
        } else {
            $("div.cse-id-custom").hide();
        }

    });

    $("#search-button").click(function(e) {
        e.preventDefault();
        startSearch();
    });

    // next button/link for paging
    $("#cse-paging-next").click(function(e) {
        e.preventDefault();
        console.log(this,$(this).data('start-index'));
        var target = $("#cse-search-results");
        var nextStartIndex = $(this).data('start-index');

        startSearch(nextStartIndex,false);

        /*$('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, "easeInOutExpo",function(){
            startSearch(nextStartIndex);
        });*/
        
    });


}

var startSearch = function(start = 1,append=false) {

    // user values
    // 2DO: check if null
    var cse_id = $("select[name=cse-id]").val();
    if (cse_id === 'custom') {
        cse_id = $("input[name=cse-id-custom]").val();
    }
    var cloud_api_key = $("input[name=cloud-api-key]").val();
    var q = $("input[name=search-query]").val();

    // url encode values
    cse_id = encodeURI(cse_id);
    cloud_api_key = encodeURI(cloud_api_key);
    q = encodeURI(q);

    // license filter value
    license_filter_val = $("select[name='license-filter']").val();
    var rights = '';
    switch (license_filter_val) {
        case 'only-oer':
            // as_rights=(cc_publicdomain|cc_attribute|cc_sharealike).-(cc_noncommercial|cc_nonderived)
            rights = '%28cc_publicdomain%7Ccc_attribute%7Ccc_sharealike%29.-%28cc_noncommercial%7Ccc_nonderived%29';
            break;
        case 'nc':
            // as_rights=(cc_publicdomain|cc_attribute|cc_sharealike|cc_noncommercial).-(cc_nonderived)
            rights = '%28cc_publicdomain%7Ccc_attribute%7Ccc_sharealike%7Ccc_noncommercial%29.-%28cc_nonderived%29';
            break;
        case 'nc-nd':
            // as_rights=(cc_publicdomain|cc_attribute|cc_sharealike|cc_noncommercial|cc_nonderived)
            rights = '%28cc_publicdomain%7Ccc_attribute%7Ccc_sharealike%7Ccc_noncommercial%7Ccc_nonderived%29';
            break;
    }

    var url = 'https://www.googleapis.com/customsearch/v1?key=' + cloud_api_key + '&cx=' + cse_id + '&q=' + q + '&start=' + start;

    if (rights !== '') {
        url += '&rights=' + rights;
    }

    var jqxhr = $.getJSON(url, function() {
        console.log("success");
    }).done(function(data) {
        console.log('data', data);

        // 2DO: render search results with

        resultsStr = ''; // 2DO: translate

        $("#title-cse-search-results").show();

        if (typeof data.items == "undefined") {
            resultsStr = '<p>Oh Mist, nichts gefunden. Probiere einen andere Begriff - oder erstelle selbst OER-Material zu dem Thema! :-)</p>'
        } else {
            for (i = 0, len = data.items.length; i < len; i++) {
                item = data.items[i];
                resultsStr += '<div class="item">';
                resultsStr += '<h4><a href="' + item.link + '" target="_blank" class="item-link">' +
                    item.title + '</a></h4>';
                resultsStr += '<div class="item-formatted-url"><cite>'+item.formattedUrl+'</cite></div>';
                resultsStr += '<p class="item-snippet">'+item.snippet+'</p>';
                resultsStr += '</div>';
            }

            // next results link
            // 2DO: check and show?
            if(typeof data.queries.nextPage !== "undefined"){
                var nextStartIndex = data.queries.nextPage[0].startIndex;
                $("#cse-paging-next").data('start-index',nextStartIndex);
                $("#cse-paging-next").show();
            }
            else{
                // no more results available, hide next button
                $("#cse-paging-next").hide();
            }
            
        }

        if(append === false){
            $("#cse-search-results").html(resultsStr);
            $('html,body').animate({scrollTop: ($("#title-cse-search-results").offset().top-100)},'slow');
        }
        else{
            $("#cse-search-results").append(resultsStr);
        }
        


    }).fail(function(data) {
        console.log("error", data);

        alert('Fehler - Abrufen der Ergebnisse nicht möglich. Ist der API-Schlüssel korrekt oder wurde das Tageslimit eventuell erreicht? ');

        // 2DO: show error!
    });


    // 2DO: error --> 403 wenn limit erreicht
    // 2DO: error --> API Schlüssel nicht korrekt?


}



// jquery start
$(function() {
    startProfiSearchApplication();
}); // eo jquery

