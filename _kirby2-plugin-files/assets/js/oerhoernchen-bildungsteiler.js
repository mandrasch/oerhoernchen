$(function() {

            // init
            $.i18n({
                locale: 'de' // Locale is Hebrew
            });
            $.i18n().load({
                'message-hello': 'Hello World',
                'message-welcome': 'Welcome'
            }, 'de');
            $.i18n().load({
                'de': OERHOERNCHEN_ASSET_URL+'languages/de.json'
            }).done(function() {
                console.log('done', $.i18n('title'));

                // init clipboardjs
                var clipboard = new Clipboard('.btn-copy');
                // success message
                clipboard.on('success', function(e) {
                    $("#clipboard-copy-success-modal").modal('show');
                    //e.clearSelection();
                });

                var message = 'Welcome $1 <a href="$2">Test</a>';
                var html = $.i18n(message, 'Alice', 'Bob'); // This gives "Welcome, Alice"
                console.log(html);

                // change license select
                $("input[name='selectLicense']").on('change', function(e) {
                    console.log('change event licenses - start generation', this.value)
                    startGeneration();
                });

                // when user enters a creators name / creators name is not empty, we generate
                // 2DO: specify keypress actions
                $("#formWorkInformation input").on('keyup', function(event) {
                    console.log('keypress event - start generation');
                    startGeneration();
                });

                // change settings
                $("#usageSettingLongVersion, #usageSettingSvgBase64").on('change', function(e) {
                    console.log('checkbox change', this);
                    startGeneration();
                });

                // 2DO: does this work in all browsers?
                /*$("#copyHtml5").click(function() {
                    $("#textareaHtml5LicenseCode").select();
                    document.execCommand('copy');
                });
                $("#copyDocumentText").click(function() {
                    $("#previewHtml5License").select();
                    document.execCommand('copy');
                });*/


                // simulate test
                $("#inputCreator").val('Maxi Muster');
                $("#inputCreatorLink").val('https://maxi-muster.de'); //optional
                $("#inputTitle").val('OER-Video Farbenlehre'); // optional
                $("#inputWorkLink").val('https://maxi-muster.de/oer-video-farbenlehre').trigger('change');


                // change usage type
                $("input[name='selectUsageType']").on('change', function(e) {
                    startGeneration();
                });
                // trigger directly:
                $("input[name='selectUsageType']:checked").trigger('change');


            }) // eo done i18n

        }); // eo jquery


        var startGeneration = function() {
            console.log('execute generation', $("input[name='selectUsageType']:checked"));

            // get values
            var creator = $("#inputCreator").val(); 
            var license = $("input[name='selectLicense']:checked").val();
            var licenseTitle = getLicenseName(license); // get license title, e.g. "CC BY 4.0"
            var creatorLink = $("#inputCreatorLink").val(); //optional
            var workTitle = $("#inputTitle").val(); // optional
            var workLink = $("#inputWorkLink").val(); //optional

            // settings
            var usageType = $("input[name='selectUsageType']:checked").val();
            var usageSettingLongVersion = Boolean($("#usageSettingLongVersion").is(':checked'));
            var usageSettingSvgBase64 = Boolean($("#usageSettingSvgBase64").is(':checked'));


            // GENERATE LICENSE INFORMATION

            // generate author text (with link to url if given from user), for every license type same procedure
            // creator of work (must be given)
            // 2DO: is it possible to license something anonymously?
            var creatorHtml = '<span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">';
            // add link to creators homepage/profile if given
            if (creatorLink !== '') {
                creatorHtml += '<a href="' + creatorLink + '" target="_blank">';
            }
            creatorHtml += creator;
            if(creatorLink !== ''){
                creatorHtml += '</a>';
            }
            creatorHtml += '</span>';


            // include title of work if given by user (not necessary in 4.0)
            //console.log('workTitle', workTitle, Boolean(workTitle !== ''));
            var workTitleHtml = ' ';
            if (workTitle !== '') {
                workTitleHtml = '<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">"';
                if (workLink !== '') {
                    workTitleHtml += '<a href="' + workLink + '" target="_blank" xmlns:cc="http://creativecommons.org/ns#" rel="cc:attributionURL">';
                }

                workTitleHtml += workTitle;
                
                if(workLink !== ''){
                    workTitleHtml += '</a>';
                }
                workTitleHtml += '"</span>';
                // append translated by word
                workTitleHtml += ' ' + $.i18n("by") + ' ';
            }

            // 2DO: find better way (remove attributes afterwards?)

            // figure out the differences regarding the different licenses
            var licenseLink, licenseSvg, htmlLicenseInfo, htmlLicenseSuggestion, htmlLinkToLicenseUrl;

            // small helper - use short version?
            var useShortVersion = usageSettingLongVersion ? '' : '-short';
            console.log('use short version',useShortVersion);
            var usageSettingsRemoveHtml = false; // 2DO: implement later?

            // 2DO: use functions for this
            switch (license) {
                case 'cc0':
                    licenseLink = 'https://creativecommons.org/publicdomain/zero/1.0/deed.de';
                    licenseSvg = CC0_SVG_BASE64;
                    licensePng = '//i.creativecommons.org/p/zero/1.0/88x31.png';
                    // the important link - machine readable
                    licenseLinkHtml = '<a href="'+licenseLink+'" rel="license" target="_blank">'+licenseTitle+'</a>';
                    htmlLicenseInfo = $.i18n('license-infotext-cc0' + useShortVersion, licenseLinkHtml);
                    htmlLicenseSuggestion = $.i18n('license-suggestion-cc0' + useShortVersion) + '<i>' + workTitleHtml + creatorHtml + ', ' + $.i18n("released-as") + ': <a href="' + licenseLink + '" target="_blank">' + licenseTitle + '</a></i>. ';
                    htmlLinkToLicenseUrl = $.i18n("link-to-waver");
                    break;
                case 'ccby':
                    licenseLink = 'https://creativecommons.org/licenses/by/4.0/deed.de';
                    licenseSvg = CC_BY_SVG_BASE64;
                    licensePng = '//i.creativecommons.org/l/by/4.0/88x31.png';
                    // the important link - machine readable
                    licenseLinkHtml = '<a href="'+licenseLink+'" rel="license" target="_blank">'+licenseTitle+'</a>';
                    htmlLicenseInfo = $.i18n('license-infotext-ccby-ccbysa' + useShortVersion, licenseLinkHtml);
                    htmlLicenseSuggestion = $.i18n("license-suggestion-ccby" + useShortVersion) +
                        '<i>' + workTitleHtml + creatorHtml + ', ' + $.i18n("License") + ': <a href="' + licenseLink + '" target="_blank">' + licenseTitle + '</a></i>. ';
                    htmlLinkToLicenseUrl = $.i18n("link-to-license");
                    break;

                case 'ccbysa':
                    licenseSvg = CC_BY_SA_SVG_BASE64;
                    licensePng = '//i.creativecommons.org/l/by-sa/4.0/88x31.png';
                    licenseLink = 'https://creativecommons.org/licenses/by-sa/4.0/deed.de';
                    // the important link - machine readable
                    licenseLinkHtml = '<a href="'+licenseLink+'" rel="license" target="_blank">'+licenseTitle+'</a>';
                    htmlLicenseInfo = $.i18n('license-infotext-ccby-ccbysa' + useShortVersion, licenseLinkHtml);
                    htmlLicenseSuggestion = $.i18n("license-suggestion-ccby" + useShortVersion) +
                        '<i>' + workTitleHtml + creatorHtml + ', ' + $.i18n("License") + ': <a href="' + licenseLink + '" target="_blank">' + licenseTitle + '</a></i>. ';
                    // add additional sharealike information
                    htmlLicenseSuggestion += $.i18n('license-suggestion-ccbysa' + useShortVersion);
                    htmlLinkToLicenseUrl = $.i18n("link-to-license");
                    break;
            }


            // GENERATION
            // generate html code based on templates
            var imgSrc = (usageSettingSvgBase64 && usageType !== 'document') ? licenseSvg : licensePng;

            var html = '<div class="oer-cc-licensebox">';
            html += '<a href="' + licenseLink + '"><img src="' + imgSrc + '" alt="' + licenseTitle + '"></a><br>';
            html += htmlLicenseInfo;
            html += " " + htmlLicenseSuggestion;
            // add license link if page is printed
            if (usageType === 'document') {
                html += '<br><br>' + htmlLinkToLicenseUrl + '<a href="' + licenseLink + '">' + licenseLink + '</a> ';
                if (workLink !== '') {
                    html += '<br>' + $.i18n('work-is-online-available-at') + '<br><a href="' + workLink + '">' + workLink + '</a>';
                }
            }
            html += '</div>';

            // FINAL RESULT

            $("#textareaHtml5LicenseCode").html(html);
            $("#previewHtml5License").html(html);

            // remove all html styles if document usage is selected
            if (usageType === 'document' && usageSettingsRemoveHtml) {
                var convertedText = $("#previewHtml5License").html();
                // 2DO: convert line breaks?
                // var regex = '/<br\s*[\/]?>/gi';
                // convertedText = $(convertedText).replace(regex, "\n");
                convertedText = $(convertedText).text();
                $("#previewHtml5License").html(convertedText);
            }

            // show/hide the usage instructions for web/document
            var valCapitalized = usageType.charAt(0).toUpperCase() + usageType.slice(1);
            $("#usageInstructions > div").hide();
            $("#usageInstructions .usageInstructions" + valCapitalized).show();

        }

        var getLicenseName = function(license) {
            switch (license) {
                case 'cc0':
                    return 'CC0/Public Domain';
                    break;
                case 'ccby':
                    return "CC BY 4.0";
                    break;
                case 'ccbysa':
                    return "CC BY-SA 4.0";
                    break;
            }
        }