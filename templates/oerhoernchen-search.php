<?php snippet('oerhoernchen-header')?>
<div class="container">

<div class="row" style="display:none;">
    <div class="col-lg-8 col-md-10 mx-auto">
             <p class="explanation text-center">Mit der OERhörnchen Projektsuche können gezielt Lehr-/Lernmaterialen gefunden werden, welche frei veränderbar sind und wieder veröffentlicht werden dürfen - sogenannte <a href="https://oerlabs.de/oer/was-sind-oer/" target="_blank">Open Educational Resources (OER)</a>.
                <ul class="nav justify-content-center" style="margin-bottom:12px;">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#edu-projects-search"><i class="fa fa-sitemap" aria-hidden="true"></i> OER-Material finden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#media-search"><i class="fa fa-file-video-o" aria-hidden="true"></i> Medieninhalte für OER-Material</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#web-search"><i class="fa fa-globe" aria-hidden="true"></i> Gesamtes Web</a>
                    </li>
                </ul>
                <h2 data-i18n="header-search-link"><a href="#edu-projects-search"><i class="fa fa-sitemap" aria-hidden="true"></i></a> OER-Material finden</h2> Die erste Möglichkeit: OER-Projekte und Bildungsangebote gebündelt durchsuchen, welche explizit Bildungsmaterialien zum Lehren/Lernen anbieten:</p>
    </div>
</div><!-- eo row -->

<div class="row" id="edu-projects-search">
    <div class="col-lg-8 col-md-10 mx-auto" id="search-box">
    	<p><small>Jetzt testen: Die <a href="https://beta2.oerhoernchen.de/hochschule" target="_blank">Hochschul-OER-Suche</a> (Prototyp) / Neu: <a href="https://github.com/sroertgen/oerhoernchen20_docker" target="_blank">Docker-Fork von Steffen Rörtgen</a></small></p>

    	<h3 name="projectsearch"><a href="#projectsearch" data-toggle="tooltip" data-html="true" title="Mit der OERhörnchen Projektsuche können gezielt Lehr-/Lernmaterialen aus Bildungsprojekten bzw. von Bildungsplattformen gefunden werden, welche legal nutzbar und frei veränderbar sind."><i class="fa fa-question-circle" aria-hidden="true"></i></a> Projektsuche</h3>
        <div class="card">
            <div class="card-header">Suchbegriff</div>
            <div class="card-body">
                <form id="edu-projects-search-form">
                    <div class="input-group">
                        <input type="text" class="form-control" id="edu-projects-search-query" data-i18n="[placeholder]search-query-input-placeholder" placeholder="Suche nach Begriff(en)...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary edu-projects-search-submit-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto" id="provider-list-box">
        <div class="card">
            <div class="card-header">Deutschsprachige OER-Projekte</div>
            <div class="card-body">
                <div class="row oer-squirrel-provider-list" id="oer-provider-list">
                <!-- here will be a generated list with pages -->
                </div>
                <div class="row">
                    <div class="col-12 select-all">
                    <button class="btn btn-sm btn-secondary oer-squirrel-select-all-button"><i class="fa fa-check-square-o" aria-hidden="true"></i> Alle auswählen</button>
                    <button class="btn btn-sm btn-secondary oer-squirrel-deselect-all-button"><i class="fa fa-square-o" aria-hidden="true"></i> Alle abwählen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto" id="other-provider-list-box">
        <div class="card">
            <div class="card-header">Andere Bildungsangebote (nicht ausschließlich OER)</div>
             <div class="card-body">
                <div class="row oer-squirrel-provider-list" id="mixed-provider-list"><!-- here will be a generated list with pages -->
                </div>
                <div class="row">
                    <div class="col-12 select-all">
                        <button class="btn btn-sm btn-secondary oer-squirrel-select-all-button"><i class="fa fa-check-square-o" aria-hidden="true"></i> Alle auswählen</button>
                        <button class="btn btn-sm btn-secondary oer-squirrel-deselect-all-button"><i class="fa fa-square-o" aria-hidden="true"></i> Alle abwählen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- deactivated by now, because it was overload -->
    <div class="col-lg-8 col-md-10 mx-auto" id="custom-site-url-box" style="display:none;">
        <div class="card">
            <div class="card-header">Benutzerdefinierte Webseite/Domain durchsuchen</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="margin-left: 0;">
                    <label class="form-check-label" for="defaultCheck1">Benutzerdefinierte Webseite/Domain durchsuchen</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="custom-site-url" data-i18n="[placeholder]custom-site-input-placeholder" placeholder="Domain angeben, z.B. uni-koeln.de" disabled>
                    <small id="emailHelp" class="form-text text-muted">Um zu sehen, wie viele Seiten unter offener Lizenz stehen, einfach den Suchbegriff leer lassen.</small>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-10 mx-auto">
    <div class="license-filter-box" id="edu-projects-search-license-filter">
        <?php snippet('oerhoernchen-license-filter-box');?>
    </div><!-- eo license filter box -->
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg edu-projects-search-submit-button">
            <i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="search-button">Projektsuche starten</span>
            </button>
        </div>
    </div>
</div> <!-- eo project search -->

<div class="row" id="media-search"  style="margin-top:30px;" >
    <div class="col-lg-8 col-md-10 mx-auto">
    	<h3 name="mediasearch"><a href="#mediasearch" data-toggle="tooltip" data-html="true" title='Nach offenen Inhalten (Audio, Foto, Video, etc.) auf Medienportalen suchen, die nicht zwangsläufig für Lehren/Lernen erstellt wurden. Diese können aber für die Erstellung von OER-Material eingesetzt werden.'><i class="fa fa-question-circle" aria-hidden="true"></i></a> Mediensuche</h3>
          <p class="explanation" style="line-height:1.1;margin-top:10px;"></small></p>
                    <div class="card">
                        <div class="card-header">
                            Suchbegriff
                        </div>
                        <div class="card-body">
                            <form id="media-search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="media-search-query" data-i18n="[placeholder]search-query-input-placeholder" placeholder="Suche nach Begriff...">
                                    <span class="input-group-btn">
                    <button class="btn btn-secondary media-search-submit-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                                </div>
                            </form>
                        </div>
                    </div>
                <div id="provider-list-box">
                    <div class="card">
                        <div class="card-header">
                            Medienplattformen, Portale und Blogs
                        </div>
                        <div class="card-body">
                            <p style="display:none"><small><i>Hinweis: Einige Plattformen unterstützen die Lizenzfilterung nicht in vollem Umfang - die Suche nach OER-kompatiblen Lizenzen funktioniert aber auf allen aufgeführten Seiten. Mehrfachauswahl ist möglich:</i></small></p>
                            <div class="row oer-squirrel-media-provider-list" id="media-provider-list">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="1" id="media-search-multiselect-checkbox" data-toggle="collapse" data-target="#media-search-select-buttons" aria-expanded="false"
  aria-controls="#media-search-select-buttons">
                                      <label class="form-check-label" for="media-search-multiselect-checkbox">
                                        Profimodus: Mehrfachauswahl aktivieren
                                      </label>
                                    </div>
                                </div>
                                <div class="col-12 select-all" style="display:none;" id="media-search-select-buttons">
                                    <button class="btn btn-sm btn-secondary oer-squirrel-select-all-button"><i class="fa fa-check-square-o" aria-hidden="true"></i> Alle auswählen</button>
                                    <button class="btn btn-sm btn-secondary oer-squirrel-deselect-all-button"><i class="fa fa-square-o" aria-hidden="true"></i> Alle abwählen</button><br>
                                    <a href="https://www.youtube.com/watch?v=euTFZ-lEDTo" target="_blank">Videoanleitung zur Profisuche</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div><!-- eo col -->

            <div class="license-filter-box-container col-lg-8 col-md-10 mx-auto">

            </div>

            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-lg media-search-submit-button">
                        <i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="search-button">Mediensuche starten</span>
                    </button>
                </div>
            <!-- license filter is appended here after page generation -->
    </div>
</div> <!-- eo media search -->


<div id="web-search" class="row" style="margin-top:30px;" >
    <div class="col-lg-8 col-md-10 mx-auto">
            <h3 name="web-search" data-i18n="header-web-search-link"><a href="#websearch" data-toggle="tooltip" data-html="true" title='Das World Wide Web nach Webseiten durchsuchen, die mit einer freien Lizenz markiert wurden. Diese Seiten müssen nicht unbedingt Bildungsmaterial ("educational") sein, eignen sich teilweise also eher als Vorlage für pädagogische Zwecke.'><i class="fa fa-question-circle" aria-hidden="true"></i></a>  Das gesamte Web durchsuchen</h3>
                    <div class="card">
                        <div class="card-header">
                            Suchbegriff
                        </div>
                        <div class="card-body">
                            <form id="web-search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="web-search-query" data-i18n="[placeholder]search-query-input-placeholder" placeholder="Suche nach Begriff...">
                                    <span class="input-group-btn">
                  <button class="btn btn-secondary web-search-submit-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
                                </div>
                                <small>Tipp: Den Suchbegriff mit folgenden Begriffen erweitern, um bessere Ergebnisse zu erzielen: "Unterrichtsmaterial", "Arbeitsblatt", "filetype:pdf"</small>
                                <div class="form-group" style="margin-top:5px;">
                                    <label for="web-search-language-select" style="display:none;">Sprache:</label>
                                    <select class="form-control language-select" id="web-search-language-select">
                                        <option selected value="default">Bestimmte Sprache einstellen (optional)</option>
                                        <option value="lang_de">Deutsch</option>
                                        <option value="lang_en">Englisch</option>
                                        <option value="lang_fr">Französisch</option>
                                        <option value="lang_ar">Arabisch</option>
                                        <option value="lang_bg">Bulgarisch</option>
                                        <option value="lang_ca">Katalanisch</option>
                                        <option value="lang_hr">Kroatisch</option>
                                        <option value="lang_zh-Hans">Chinesisch (simpel)</option>
                                        <option value="lang_zh-Hant">Chinesisch (traditionell)</option>
                                        <option value="lang_cs">Tschechisch</option>
                                        <option value="lang_da">Dänisch</option>
                                        <option value="lang_nl">Niederländisch</option>
                                        <option value="lang_fil">Filipino</option>
                                        <option value="lang_fi">Finnish </option>
                                        <option value="lang_el">Greek</option>
                                        <option value="lang_he">Hebrew</option>
                                        <option value="lang_hi">Hindi </option>
                                        <option value="lang_hu">Hungarian </option>
                                        <option value="lang_id">Indonesian </option>
                                        <option value="lang_it">Italian </option>
                                        <option value="lang_ja">Japanese </option>
                                        <option value="lang_ko">Korean </option>
                                        <option value="lang_lv">Latvian </option>
                                        <option value="lang_lt">Lithuanian </option>
                                        <option value="lang_no">Norwegian </option>
                                        <option value="lang_pl">Polish </option>
                                        <option value="lang_pt">Portuguese </option>
                                        <option value="lang_ro">Romanian </option>
                                        <option value="lang_ru">Russian</option>
                                        <option value="lang_sr">Serbian </option>
                                        <option value="lang_sk">Slovak</option>
                                        <option value="lang_sl">Slovenian </option>
                                        <option value="lang_es">Spanish </option>
                                        <option value="lang_sv">Swedish </option>
                                        <option value="lang_th">Thai </option>
                                        <option value="lang_tr">Turkish </option>
                                        <option value="lang_uk">Ukrainian </option>
                                        <option value="lang_vi">Vietnamese </option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                </div><!-- eo col -->
                    <div class="license-filter-box-container col-lg-8 col-md-10 mx-auto">

                <!-- license filter is appended here after page generation -->
                    </div>
                <div class="text-center col-lg-8 col-md-10 mx-auto">
                    <button type="button" class="btn btn-primary btn-lg web-search-submit-button">
                        <i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="search-button">Websuche starten</span>
                    </button>
                </div>
    </div><!-- eo web search -->
    <div id="not-compatible" class="row not-compatible"  style="margin-top:30px;" >
        <div class="col-lg-8 col-md-10 mx-auto">
                <div id="not-compatible-provider-list-box">
                    <div class="card">
                        <div class="card-header">
                            Weitere Seiten
                        </div>
                        <div class="card-body">
                            <div class="row" id="not-compatible-provider-list">
                            </div>
                        </div>
                    </div>

                    <p class="text-center">Viele Webseiten stammen aus der <a href="https://www.was-ist-oer.de/oer-finden-anlaufstellen-fuer-freie-materialien/" target="_blank">Mega-Liste</a> des großartigen Werks <a href="https://www.was-ist-oer.de/buch/" target="_blank">Das OER-Buch: Freie Unterrichtsmaterialien finden, rechtssicher einsetzen, selbst machen und teilen</a> (Beltz Verlag, CC BY SA 4.0) von Jöran Muuß-Merholz.</p>
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
                        <p data-i18n="modal-text-search-success"> Das OERhörnchen hat die Suchanfrage generiert und vorbereitet. Die Google-Suchergebnisseite  kann hier geöffnet werden (derzeit unterstützt nur die Google-Suchmachine das Filtern nach Lizenzen):</p>
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
                    <p style="line-height:1.0;"><!--<img src="img/squirrel_pixabay_cocoparisienne_250497_cc0.jpg" class="rounded float-right" style="max-width:120px;" role="presentation" />--><small>Das OERhörnchen <b>verlinkt</b> auf externe Online-Dienste bzw. Webseiten. Für die Richtigkeit der Angaben auf externen Seiten wird keine Haftung übernommen, bitte stets selber prüfen! <span style="color:red;">Die hier eingegebenen Suchbegriffe sowie die Lizenzeinstellungen werden mittels der URL (als GET-Parameter) an externe Seiten übermittelt.</span> <!--Nutzerbezogene Daten übermittelt das OERhörnchen nicht an externe Anbieter. Anonymisierte Statistiken zur Seitenbenutzung werden anonym auf einem eigenen Piwik/Matomo-Server erhoben und sollen in Zukunft der Allgemeinheit als Open Data zur Verfügung gestellt werden. --> Weitere Informationen: <a href="<?php echo url('impressum'); ?>" target="_blank">Datenschutzerklärung</a></small></p>
                   <!-- <p data-i18n="[html]modal-text-feedback">Feedback oder Fragen? Sehr gerne <a href="mailto:info@matthias-andrasch.de" target="_blank"> bei mir melden</a>!-->
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
    <!-- github info modal -->
    <div class="modal fade" id="github-info-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" data-i18n="modal-search-title">Vorschauversion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Hi! Dies ist die Vorschau auf den aktuellen Entwicklungsstand des OERhörnchens. Diese Version ist noch nicht vollständig getestet und kann noch Fehler enthalten (bitte <a href="https://github.com/programmieraffe/oer-hoernchen/issues">hier</a> melden - danke!). Die offizielle und getestete Version findet sich stets hier:
                        <br><a href="https://oerhoernchen.de">www.oerhoernchen.de</a>.</p>
                    <!-- <p data-i18n="[html]modal-text-feedback">Feedback oder Fragen? Sehr gerne <a href="https://matthias-andrasch.de/kontakt" target="_blank"> bei mir melden</a>!-->
                    </p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="https://oerhoernchen.de">Offizielle Version nutzen</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-i18n="modal-button-cont-search">Ausprobieren!</button>
                </div>
            </div>
        </div>
    </div>

    <?php snippet('oerhoernchen-scripts')?>
    <script type="text/javascript">
        var OER_HOERNCHEN_BASE_URL = '<?php echo $site->url(); ?>';
        var OERHOERNCHEN_ASSET_IMG_URL = '<?php echo $kirby->urls()->assets() . '/plugins/oerhoernchen/img/'; ?>';
    </script>
    <?php echo js(array(
	'assets/plugins/oerhoernchen/js/oerhoernchen-providerlist.js',
	'assets/plugins/oerhoernchen/js/oerhoernchen-search.js',
)); ?>

<?php snippet('oerhoernchen-footer')?>
