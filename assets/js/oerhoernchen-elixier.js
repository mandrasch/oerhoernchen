$(function() {

	$("#search-button").click(function(e) {
		e.preventDefault();
		startSearch();
	});

	var startSearch = function() {
		// get search term

		// license
		license_filter_val = $("select[name='license-filter']").val();
		var rights = new Array();
		var q = $('#search-query').val();
		var q_encoded =  encodeURI(q);

		switch (license_filter_val) {
			case 'only-oer':
				rights.push({filtervalue:'GEMEINFREI',title:'Gemeinfrei (Public Domain)'});
				rights.push({filtervalue:'CC-BY',title:'CC BY (Namensnennung)'});
				rights.push({filtervalue:'CC-BY-SA',title:'CC BY-SA (ShareAlike)'});
				break;
			case 'nc':
				// 2DO: ugly coding
				rights.push({filtervalue:'GEMEINFREI',title:'Gemeinfrei (Public Domain)'});
				rights.push({filtervalue:'CC-BY',title:'CC BY (Namensnennung)'});
				rights.push({filtervalue:'CC-BY-SA',title:'CC BY-SA (ShareAlike)'});
				rights.push({filtervalue:'CC-BY-NC',title:'CC BY-NC (Nichtkommerziell)'});
				rights.push({filtervalue:'CC-BY-NC-SA',title:'CC BY-NC-SA'});
				break;
			case 'nc-nd':
				// 2DO: ugly coding
				rights.push({filtervalue:'GEMEINFREI',title:'Gemeinfrei (Public Domain)'});
				rights.push({filtervalue:'CC-BY',title:'CC BY (Namensnennung)'});
				rights.push({filtervalue:'CC-BY-SA',title:'CC BY-SA (ShareAlike)'});
				rights.push({filtervalue:'CC-BY-NC',title:'CC BY-NC (Nichtkommerziell)'});
				rights.push({filtervalue:'CC-BY-NC-ND',title:'CC BY-ND (keine Veränderung)'});
				rights.push({filtervalue:'CC-BY-NC-SA',title:'CC BY-NC-SA'});
				rights.push({filtervalue:'CC-BY-NC-ND',title:'CC BY-NC-ND'});
				break;
			// 2DO: no filter?
		}

		// load iframes
		var url_base_template = 'https://www.bildungsserver.de/elixier/elixier2_list.php?feldname1=Titel&feldinhalt1='+q_encoded+'&bool1=and';
		var html = '';
		for (i = 0; i < rights.length; i++) {

			var current_url = url_base_template + '&feldname2=LizenzFac&feldinhalt2=%22'+rights[i].filtervalue+'%22&BoolSelect_2=AND&bool2=and';

			html += '<div class="iframe-block">';
			html += '<h4>'+rights[i].title+'</h4>';
			html += '<small><a href="'+current_url+'">in eigenem Fenster öffnen</a></small>';
			html += '<iframe width="100%" height="350px" src="'+current_url+'"></iframe>';
			html += '</div>';
		}

		$("#search-results").html(html);

		// scroll to?

	}
}); // eo jQuery ready