<?php snippet('oerhoernchen-header');?>
 <div class="container">
  <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form id="urlcheck">
                     <div class="form-row">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search-query" id="user-url" data-i18n="[placeholder]search-query-input-placeholder" placeholder="https://">
                            <span class="input-group-btn">
                    <button class="btn btn-primary search-submit-button" id="urlcheck-button" type="button" data-i18n="search-instant-button"><i class="fa fa-search" aria-hidden="true"></i> <span data-i18n="main-search-button">Analysieren</span></button>
                            </span>
                        </div>
                    </div>
                </form>

                <div id="ajax-loading" style="width:200px;display:none;text-align:center;margin:0 auto;margin-top:20px;">

                    <div class="loader"></div>
                    <p>URL wird analysiert... </p>
                </div>

                <div id="urlcheck-results" style="margin-top:20px;display:none;">


                    <div class="alert alert-success" role="alert">
                    Sehr gut! Der URL-Check hat ergeben, dass auf der Webseite mit der eingegebenen URL eine maschinenlesbare Lizenzinformation hinterlegt ist:<br>
                    </div>
                    <div style="padding:2px;background:#CCC;border:1px solid grey;text-align:center;">
                        <p><span id="workLicenseUrl" style="font-size:14px;font-family:'Courier';"></span></p>
                    </div>
                        <div style="display:none">
                    <h5>Weitere Informationen (TULLU)</h5>
                    <form id="form-urlcheck-results">
                    <div class="form-group row">
                        <label for="inputCreator" class="col-sm-4 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <span id="workTitle"class="urlcheck-small-values"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputCreator" class="col-sm-4 col-form-label">Urheber/in:</label>
                        <div class="col-sm-8">
                            <span id="workCreator"class="urlcheck-small-values"></span>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="inputCreator" class="col-sm-4 col-form-label">Lizenz</label>
                        <div class="col-sm-8">
                            <span id="workLicense" class="urlcheck-small-values"></span>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="inputCreator" class="col-sm-4 col-form-label">Link zum Lizenztext</label>
                        <div class="col-sm-8">
                            <span id="workLicenseUrl" class="urlcheck-small-values"></span>
                        </div>
                    </div> -->


                    <div class="form-group row">
                        <label for="inputWorkLink" class="col-sm-5 col-form-label">Ursrpung</label>
                        <div class="col-sm-7">
                            <span id="workUrl" class="urlcheck-small-values"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputCreatorLink" class="col-sm-5 col-form-label">Link zur Ersteller/in:</label>
                        <div class="col-sm-7">
                            <span id="workAtrributionUrl" class="urlcheck-small-values"></span>
                        </div>
                    </div>
                </form>
            </div><!-- eo display:none div -->

            </div><!-- eo results found -->
            <div id="urlcheck-results-error" class="alert alert-danger" role="alert" style="display:none;margin-top:20px;">
            </div>


                  <p style="font-size:70%;text-align:center;"><i>Für die Korrektheit der ermittelten Informationen wird keine Haftung übernommen, bitte noch einmal genau auf der jeweiligen Seite und in den Nutzungsbedingungen nachschauen. Der Check gilt nur für die eingebene URL, andere Unterseiten einer Webseite können eine andere Lizenzinformation enthalten.</i></p>
            <hr>

            <div class="text wrap">
              <?=$page->text()->kirbytext()?>
            </div>


            </div>
        </div>


    </div><!-- eo container -->
    <hr>



    <?php snippet('oerhoernchen-scripts');?>
    <script type="text/javascript">
        var OERHOERNCHEN_ASSET_IMG_URL = '<?php echo $kirby->urls()->assets() . '/plugins/oerhoernchen/img/'; ?>';
    </script>
    <?php echo js(array(
    'assets/plugins/oerhoernchen/js/oerhoernchen-urlcheck.js',
)); ?>

<?php snippet('oerhoernchen-footer')?>