<?php snippet('oerhoernchen-header') ?>
 <div class="container">
  <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p><small><span class="badge badge-warning">Beta-Version</span> Mit dem Klick auf „Suchen“ wird eine Serververbindung zur Google Cloud aufgebaut und der Suchbegriff sowie die weiteren Einstellungen übermittelt. Hintergrundinformationen: <a href="https://kurzelinks.de/mtyz" targe="_blank">OERhörnchen Profisuche (Google Drive Präsentation)</a>.</small></p>
                <form>
                     <div class="form-row">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search-query" id="search-query" data-i18n="[placeholder]search-query-input-placeholder" placeholder="Suchbegriff(e)...">
                            <span class="input-group-btn">
                    <button class="btn btn-primary search-submit-button" id="search-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="main-search-button">Suchen</span></button>
                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4" style="font-size:80%;"><a href="https://cse.google.de/cse/" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a> Google-CSE-Webseitenliste</label>
                            <select class="form-control" name="cse-id">
                                <option value="015843092106863867313:pkjwkmia8lu">OERhörnchen-Liste: Deutschsprachige OER-/Eduprojekte</option>
                                <option value="007235960935707559381:48lkaqhvmpw">searchoer.com (extern)</option>
                                <option value="016442597058023641471:htiqwuikl9y">US & UK Universities (extern)</option>
                                <option value="">(bald verfügbar) Hochschule DACH Higher Education Institutions Austria, Germany, Switzerland</option>
                                <option value="">(bald verfügbar) Lehrer*innenblogs DACH</option>
                                <option value="custom" data-i18n="option-custom-cse-ide">Eigene/Benutzerdefinierte ID</option>
                            </select>
                            <div class="cse-id-custom" style="display:none;">
                                <div class="form-group">
                                    <input type="text" name="cse-id-custom" class="form-control" value="" placeholder="Benutzerdefinierte Google CSE-ID">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail5" style="font-size:80%;"><a href="https://www.youtube.com/watch?v=Bxy8Yqp5XX0" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i></a> Google Cloud API Schlüssel <!--(if user) <a href="{{'user-profisearch-apikey'|page}}" target="_blank"><i class="fa fa-pencil" aria-hidden="true"></i></a>{% endif %}--></label>
                            <input type="text" name="cloud-api-key" class="form-control" placeholder="Google Cloud API Key" value="">
                        </div>
                    </div>
                   
                <?php snippet('oerhoernchen-license-filter-box'); ?>
                </form>
                
                <h3 id="title-cse-search-results" class="text-center" style="display:none;">Suchergebnisse</h3>
                <div id="cse-search-results">
                    
                </div>
                <div class="cse-paging text-center">
                    <button class="btn btn-primary" id="cse-paging-next" style="display:none;"><i class="fa fa-refresh" aria-hidden="true"></i> Mehr Ergebnisse laden</button>
                </div>
                
            </div>
        </div>


    </div><!-- eo container -->
    <hr>

<!-- search link modal -->
    <div class="modal fade" id="search-link-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" data-i18n="modal-search-title">Bereit zum Absprung!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="search-success">
                        <p data-i18n="modal-text-search-success"> Das OERhörnchen hat die Suchanfrage generiert und vorbereitet. Die vorbereitete Google-Suche kann hier geöffnet werden (derzeit unterstützt nur Google das Filtern nach Lizenzen):</p>
                        <p style="text-align:center;"><a target="_blank" class="modal-search-url search-success-open-url btn-primary btn" data-i18n="modal-link-text"><i class="fa fa-external-link" aria-hidden="true"></i> Google-Suche öffnen</a></p>
                        <!--<p data-i18n="modal-link-share">Link zum Teilen:</p>
            <div class="input-group">
              <input type="text" class="form-control" id="modal-search-input" title="modal-input"/>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"
                data-i18n="modal-button-copy">Kopieren</button>
              </span>
            </div>-->
                    </div>
                    <div class="search-success-multiple">
                        <p> Das OERhörnchen ist bereit für die Suche und wird versuchen, die ausgewählten Webseiten der Online-Dienste automatisch als neue Tabs zu öffnen. Bitte Pop-Ups zulassen hier klicken zum Öffnen: </p>
                        <p style="text-align:center;">
                            <button class="search-success-multiple-open-urls btn-primary btn"><i class="fa fa-external-link" aria-hidden="true"></i> Webseiten öffnen</button>
                        </p>
                        <div class="search-success-multiple-list">
                            <p>Falls das Öffnen nicht geklappt hat, können die Seiten hier manuell geöffnet werden (eventuell verhindert der Pop-Up-Blocker des Browsers das Öffnen, bitte Pop-Ups zulassen!):</p>
                            <ul></ul>
                        </div>
                    </div>
                    <div class="search-error alert alert-danger" role="alert">
                        <p data-i18n="modal-text-search-error">Die Google-Suche erlaubt maximal 32 Wörter im Suchfeld, bitte weniger Suchbegriffe nutzen oder weniger Projekte auswählen (jedes Projekt zählt als ein Wort)</p>
                        <p><a target="_blank" class="modal-search-url" data-i18n="modal-button-search-despite">Suche trotzdem öffnen</a></p>
                    </div>
                    <p> <img src="img/squirrel_pixabay_cocoparisienne_250497_cc0.jpg" class="rounded float-right" style="max-width:120px;" role="presentation" /><small>Das OERhörnchen <b>verlinkt</b> auf externe Online-Dienste bzw. Webseiten. Für die Richtigkeit der Angaben auf externen Seiten wird keine Haftung übernommen, bitte stets selber prüfen! Die hier eingegebenen Suchbegriffe sowie die Lizenzeinstellungen werden mittels der URL (als GET-Parameter) übermittelt. <!--Nutzerbezogene Daten übermittelt das OERhörnchen nicht an externe Anbieter. Anonymisierte Statistiken zur Seitenbenutzung werden anonym auf einem eigenen Piwik/Matomo-Server erhoben und sollen in Zukunft der Allgemeinheit als Open Data zur Verfügung gestellt werden. --> Weitere Informationen: <a href="impressum-datenschutz.html" target="_blank">Datenschutzerklärung</a></small></p>
                    <p data-i18n="[html]modal-text-feedback">Feedback oder Fragen? Sehr gerne <a href="mailto:info@matthias-andrasch.de" target="_blank"> bei mir melden</a>!
                        <br>
                    </p>
                </div>
                <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"
            data-i18n="modal-button-cont-search"><i class="fa fa-angle-double-down" aria-hidden="true"></i> Nichts gefunden? Nächster Schritt
          </button>
        </div> -->
            </div>
        </div>
    </div>
    <!-- eo modal -->

<?php snippet('oerhoernchen-scripts') ?>
    <script type="text/javascript">
        var OERHOERNCHEN_ASSET_IMG_URL = '<?php echo $kirby->urls()->assets().'/plugins/oerhoernchen/img/'; ?>';
    </script>
    <?php echo js(array(
        'assets/plugins/oerhoernchen/js/oerhoernchen-cse.js'
    )); ?>

<?php snippet('oerhoernchen-footer') ?>