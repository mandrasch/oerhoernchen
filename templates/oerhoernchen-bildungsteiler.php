<?php snippet('oerhoernchen-header') ?>

<div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                 <p style="line-height:1.2" class="text-center"><small><i>Neu: Du möchtest Inhalte wie Fotos von anderen Personen in deinem Werk einbinden? Nutze die <b><a href="http://kurzelinks.de/x7ir" target="_blank">Automagische „TULLU+V“-Tabelle</a></b> (Google Drive), um die verwendeten Werke rechtssicher zu dokumentieren.</i></small></p> 


                <form id="formWorkInformation">
                    <h2 style="text-align:center;">Eigenes Werk mit der Welt teilen</h2>
                     <p style="line-height:1.2"><small><span class="badge badge-warning">Vorsicht: Beta-Version!</span> Mit diesem Werkzeug können Sie einen Creative-Commons-Lizenzhinweis für ein selbst erstelltes Werk erzeugen, welches veröffentlicht werden soll. Mit dem erzeugten Lizenzhinweis kann das Werk (z.B. eine Präsentation, ein Video) als <i>Open Educational Resource</i> offen mit der Welt geteilt werden: Lehrer*innen, Lehrende an Hochschule, freiberufliche Pädagogen oder anderen Personen können es dadurch frei benutzen, anpassen, verändern, übersetzen und wiederveröffentlichen.</small></p>
                    <p><b>Ersteller/in des Werks</b></p>
                    <div class="form-group row">
                        <label for="inputCreator" class="col-sm-4 col-form-label">Ersteller/in:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputCreator">
                        </div>
                    </div>
                    <p style="margin-top:4px;margin-bottom:8px;"><i>Optionale Angaben zum Werk:</i></p>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-5 col-form-label">Titel des Werks:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputTitle">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWorkLink" class="col-sm-5 col-form-label">Link zum Werk:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputWorkLink" placeholder="https://">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCreatorLink" class="col-sm-5 col-form-label">Link zur Ersteller/in:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputCreatorLink" placeholder="https://">
                        </div>
                    </div>
                    <p><b>Freigeben unter</b></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selectLicense" id="licenseChooser1" value="cc0">
                        <label class="form-check-label" for="exampleRadios1">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/'); ?>cc0.png" alt="cc by logo" style="width:80px;"> Creative Commons Zero (Public Domain)
                            <br>
                            <i><small>Freigaberklärung - keine Bedingungen</small></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selectLicense" id="licenseChooser2" value="ccby" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/'); ?>cc_by.png" alt="cc by logo" style="width:80px;"> Creative Commons BY
                            <br>
                            <i><small>Lizenz - Namensnennung</small></i>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="selectLicense" id="licensecChooser3" value="ccbysa">
                        <label class="form-check-label" for="exampleRadios2">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/'); ?>cc_by_sa.png" alt="cc by logo" style="width:80px;"> Creative Commons BY-ShareAlike
                            <br>
                            <i><small>Lizenz - Namensnennung und Weitergabe-unter-gleichen-Bedingungen</small></i>
                        </label>
                    </div>
                </form>
                <h2 style="text-align:center;margin-top:25px;margin-bottom:25px">Der Lizenzhinweis</h2>
                <!-- <p>Der Freigabe-/Lizenzhinweis wurde während ihrer Eingabe automatisch generiert. Sie können nun 
                zwischen zwei Varianten wählen: </p> -->
                <div class="row">
                    <div class="col-sm-4">
                        <p style="margin-top:0px;"><b>Nutzung auf/in:</b></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selectUsageType" id="selectUsageTypeWeb" value="website" checked>
                            <label class="form-check-label" for="selectUsageTypeWeb">Webseite
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="selectUsageType" id="selectUsageTypeDocument" value="document">
                            <label class="form-check-label" for="selectUsageTypeDocument">Dokument / Print
                            </label>
                        </div>
                        <!-- <p><b>Optionen:</b></p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="usageSettingLongVersion">
                            <label class="form-check-label" for="usageSettingLongVersion">
                                Langversion
                            </label>
                        </div>-->
                    </div>
                    <div class="col-sm-8">Vorschau:
                        <div class="card" style="margin-top:10px;">
                            <div class="card-body">
                                <div id="previewHtml5License" style="font-size:70%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="usageInstructions" style="margin-top:25px;">
                    <div class="usageInstructionsWebsite" style="display:none;">
                        <h4 style="text-align:center;">Den Hinweis einbinden:</h4>
                        <p class="text-center">Um den Hinweis auf einer Webseite maschinlesbar zu nutzen, den folgende HTML-Quelltext kopieren und einfügen:</p>
                        <div class="text-center">
                            <div class="form-group mx-auto" style="max-width:80%;">
                                <textarea class="form-control" id="textareaHtml5LicenseCode" rows="7">
                                </textarea>
                                <div class="form-check" style="font-size:12px;margin-top:10px;">
                                    <input class="form-check-input" type="checkbox" value="1" id="usageSettingSvgBase64" checked>
                                    <label class="form-check-label" for="usageSettingSvgBase64">
                                        Datenschutzfreundlichen SVG-Grafikcode (Base64) nutzen
                                    </label>
                                </div>
                                <button class="btn-copy btn-primary btn-lg" id="copyHtml5" style="margin-top:5px;" data-clipboard-target="#textareaHtml5LicenseCode">In die Zwischenablage kopieren</button>
                            </div>
                            <h4 style="text-align:center;margin-top:50px;">Tutorials</h4>
                            <p>Anleitung für das Content Management System Wordpress: <a href="https://www.youtube.com/watch?v=vJ5eGKXD0qU">Videoanleitung (YouTube)</a>
                               <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vJ5eGKXD0qU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                            </p>
                        </div>
                    </div>
                    <div class="usageInstructionsDocument" style="display:none;">
                        <h4 style="text-align:center;">Den Texthinweis in ein Dokument einfügen:</h4>
                        <div class="text-center">
                            <p>Der generierte Text kann aus der Vorschau oben in ein Dokument kopiert werden: </p>
                            <button class="btn-copy btn-primary btn-lg" id="copyHtml5" style="margin-top:5px;" data-clipboard-target="#previewHtml5License">In die Zwischenablage kopieren</button>
                            <p><small><i>Wichtig: Der Link zum Lizenztext sollte immer vollständig ersichtlich sein, um Missverständnissen vorzubeugen und rechtliche Verbindlichkeit sicherzustellen.</i></small></p>
                            <h4 style="text-align:center;margin-top:50px;">Tutorials</h4>
                            <p>Anleitung für Microsoft Word: <a href="https://www.youtube.com/watch?v=fn6PhsgaCns">Videoanleitung (YouTube)</a>
                                <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/fn6PhsgaCns" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                            </p>
                            <p>Die Grafiken können hier heruntergeladen werden: <a href="https://creativecommons.org/about/downloads/" target="_blank">Creative Commons Icon Download</a></p>
                        </div>
                    </div>
                </div>
                <div id="faq">
                    <h2>FAQ</h2>
                    <h3>Was darf ich als <i>mein Werk</i> lizenzieren?</h3>
                    <p>Siehe <a href="https://wb-web.de/material/medien/ich-mochte-eigene-materialien-als-oer-zur-verfugung-stellen.html" target="_blank"> Ich möchte eigene Materialien als OER zur Verfügung stellen - Eine Checkliste mit sieben Punkten, die Sie beachten sollten</a></p>
                    <h3>Für welche Lizenz soll ich mich entscheiden</h3>
                    <p>Eine mögliche Empfehlung: Auf die Nachnutzer*innen schauen und darauf, um welches Format es sich handelt? Um einen sehr langen Text, ein Grafik oder ein Video? Grafiken können z.B. sehr schnell und einfach bearbeitet und wiederveröffentlicht werden - sollen Nachnutzer dann jedes Mal kompliziert die TULLU-Regel befolgen oder eignet sich hierfür CC0 ohne Bedingungen? Eine Auflistung der Konsequenzen für Nachnutzer*innen findet sich hier:</p>
                    <p><a href="<?php echo url('assets/plugins/oerhoernchen/img/'); ?>/infografik_lizenzauswahl_nachnutzer_full.jpg" target="_blank"><img src="<?php echo url('assets/plugins/oerhoernchen/img/'); ?>infografik_lizenzauswahl_nachnutzer_medium.png"  class="img-fluid" alt="Infografik zu den Konsequenzen, leider nicht barrierefrei derzeit" /></a><br><small><a href="https://goo.gl/nN1pz3">Quelldatei</a></small></p>
                    <h3>Warum dieses Tool? Es gibt doch schon ein offizielles!</h3>
                    <p>In der Arbeit mit Studierenden oder Lehrenden wurde mir oft deutlich, dass das offizielle Werkzeug <a href="https://creativecommons.org/share-your-work/" target="_blank">„Share your Work“</a> bzw. „Choose“ von Creative Commons für OER-Einsteiger*innen kompliziert zu bedienen und teilweise unverständlich ist. So wird oft der HTML-Quelltext in Word-Dokumente kopiert, obwohl es eine Einstellung „offline“ gibt für eben solche Zwecke.</p>
                    <h3>Warum ist ein guter Lizenzhinweis so wichtig?</h3>
                    <p>Der Lizenzhinweis schafft die wichtige Grundlage für die Nutzung, Weiterverbreitung sowie das Remixen durch Nachnutzer*innen. Wenn der Lizenzhinweis unklar ist, entsteht potenziell Misstrauen oder Unsicherheit und das Material wird schlimmstenfalls deswegen nicht genutzt. Beliebte Fehler sind z.B. Angaben wie „Lizenz: CC BY-SA“. Es gibt inzwischen mehrere Lizenztextversionen, daher empfiehlt es sich immer den Lizenztext klar zu verlinken und die ausgeschriebene URL zum Lizentext anzugeben, falls das Material in Dokumenten zum Ausdrucken genutzt wird (z.B. Arbeitsblätter). Bei den Lizenzen „CC BY“ und „CC BY-SA“ müssen Nachnutzer*innen nämlich die <a href="https://open-educational-resources.de/oer-tullu-regel/">TULLU-Regel</a> sehr genau beachten, um keinen Urheberrechtsverstoß zu begehen:</p>
                    <p>
                        <a href="https://www.youtube.com/watch?v=8A0CgS66iE0">Videoanleitung</a>

                       <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8A0CgS66iE0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                    </p>
                    <p>Bei CC0 ist dies deutlich einfacher, hier muss keine Nennung nach einer bestimmten Vorgabe erfolgen.</p>
                    <h3>Warum ist der Link zum Lizenztext wichtig?</h3>
                    <p>Ist die URL (Internetadresse) zum Lizenztext (CC BY, CC BY-SA) oder der Freigabeerklärung (CC0) nicht vollständig ersichtlich oder nicht zu erreichen, dann ist die Freigabe durch die Lizenz streng genommen nicht gültig aus rechtlicher Sicht. Beispiel für nicht erreichbare Links: Hyperlinks auf Papierausdruck, bei denen URL fehlt bzw. nicht klickbar ist ;-).</p>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- Small modal -->
        <div class="modal fade bd-example-modal-sm" id="clipboard-copy-success-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kopieren erfolgreich</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Der Lizenzhinweis wurde erfolgreich in die Zwischenablage kopiert und kann nun mit Rechtsklick->Einfügen oder STRG+V (Windows), CMD+V (Mac) eingefügt werden.
                    </div>
                </div>
            </div>
        </div>


    <?php snippet('oerhoernchen-scripts'); ?>

    <?php echo js(array(
        'assets/plugins/oerhoernchen/js/i18n/libs/CLDRPluralRuleParser/src/CLDRPluralRuleParser.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.messagestore.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.fallbacks.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.language.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.parser.js',
        'assets/plugins/oerhoernchen/js/i18n/js/jquery.i18n.emitter.js',
        'assets/plugins/oerhoernchen/js/clipboard.min.js',
        'assets/plugins/oerhoernchen/js/oerhoernchen_cc_icons_svg_base64.js',
        'assets/plugins/oerhoernchen/js/oerhoernchen-bildungsteiler.js'
    )); ?>

<?php snippet('oerhoernchen-footer') ?>
