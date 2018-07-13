<?php snippet('oerhoernchen-header') ?>
 <div class="container">
  <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p><small><span class="badge badge-danger">Datenübertragung</span> Mit dem Klick auf „Suchen“ werden Suchbegriff und die Lizenzfiltereinstellungen an <a href="https://www.bildungsserver.de/elixier/">https://www.bildungsserver.de/elixier/</a> übertragen und die Webseite in einem iFrame angezeigt, Betreiber der Webseite: Deutsche Institut für Internationale Pädagogische Forschung (DIPF), Schloßstr. 29, D-60486 Frankfurt/Main. Die Datenschutzerklärung des Anbieters findet sich <a href="https://www.bildungsserver.de/elixier/datenschutz.html" target="_blank">hier</a>.</small></p>
                <form>
                     <div class="form-row">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search-query" id="search-query" data-i18n="[placeholder]search-query-input-placeholder" placeholder="Suchbegriff(e)...">
                            <span class="input-group-btn">
                    <button class="btn btn-primary search-submit-button" id="search-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="main-search-button">Suchen</span></button>
                            </span>
                        </div>
                    </div>
                   <div class="form-group" style="margin-top:20px;">
                        <?php snippet('oerhoernchen-license-filter-box'); ?>
                    </div>
                </form>
                
                <h3 id="title-search-results" class="text-center" style="display:none;">Suchergebnisse</h3>
                <div id="search-results">

                </div>
                <div class="cse-paging text-center">
                    <button class="btn btn-primary" id="cse-paging-next" style="display:none;"><i class="fa fa-refresh" aria-hidden="true"></i> Mehr Ergebnisse laden</button>
                </div>
                
            </div>
        </div>


    </div><!-- eo container -->
    <hr>



    <?php snippet('oerhoernchen-scripts'); ?>
    <script type="text/javascript">
        var OERHOERNCHEN_ASSET_IMG_URL = '<?php echo $kirby->urls()->assets().'/plugins/oerhoernchen/img/'; ?>';
    </script>
    <?php echo js(array(
        'assets/plugins/oerhoernchen/js/oerhoernchen-elixier.js'
    )); ?>

<?php snippet('oerhoernchen-footer') ?>