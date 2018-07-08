<div class="card">
            <div class="card-header">
                <a data-toggle="tooltip" data-html="true" title="Das OERhörnchen nutzt maschinenlesbare Lizenzangaben, welche im Quelltext einer Webseite stehen. Mit Hilfe dieser Angabe weiß eine Suchmaschine wie Google, ob eine bestimmte Unterseite unter einer freien Creative Commons Lizenz lizenziert ist. Wer dies für seine eigene Webseite machen möchte, kann den OERhörnchen Bildungsteiler einsetzen."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
            	<a class="card-body-toggle" href="">
            	<i class="fa fa-chevron-down pull-right toggle-icon"></i>
                <!-- <a href="#faq-license-machine-readibility" class="js-scroll-trigger"><i class="fa fa-question-circle" aria-hidden="true"></i></a>--> <span class="license-filter-heading">Lizenzfilter</span> <!-- (Maschinenlesbare Creative-Commons-Lizenzen)-->
            	</a>
            </div>
            <!-- <div> -->
            <div class="card-body" style="display:none;">
                <div class="form-group">
                <!--<label for="exampleFormControlSelect1">Lizenzfilter:</label>-->
                    <select class="form-control" name="license-filter">
                        <option value="only-oer">Ausschließlich nach Inhalten mit OER-kompatibler Lizenz / gemeinfreien Inhalten suchen</option>
                        <option value="nc">Inhalte mit OER-kompatibler Lizenz sowie Inhalte mit NC-Einschränkung</option>
                        <option value="nc-nd">Inhalte mit OER-kompatibler Lizenz sowie Inhalte mit ND- und/oder NC-Einschränkung</option>
                        <option value="no-filter">Lizenzfilter deaktivieren (nicht empfohlen)</option>
                    </select>
                </div><!-- eo form-group -->
                <div class="license-explanation" style="font-size:80%;margin-top:10px;padding-left:25px;padding-right:25px;">
                    <div data-value="oer" class="text-success clearfix">
                        <p style="margin-bottom:2px;"> Es wird nach Inhalten mit OER-kompatibler Lizenz bzw. nach gemeinfreien Inhalten gesucht, dazu zählen Public Domain/CC0, CC-BY, CC-BY-SA (ShareAlike)
                            <br>
                            <i class="fa fa-check" aria-hidden="true"></i> Veränderungen erlaubt
                            <br>
                            <i class="fa fa-check" aria-hidden="true"></i> alle Nutzungsarten erlaubt (kommerziell/nichtkommerziell)
                        </p>
                        <p style="margin-top:2px;">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/public_domain.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc0.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_sa.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                        </p>
                    </div>
                    <div data-value="nc" class="clearfix" style="margin-top:5px;">
                                        <p style="margin-bottom:2px;">Es werden ebenfalls Inhalte in die Suche miteinbezogen, die unter NC-Einschränkung lizenziert wurden (<i class="fa fa-exclamation-triangle" style="color:red;" aria-hidden="true"></i> <a href="#faq-license-filter-noncommercial" class="js-scroll-trigger">kommerzielle Nutzung verboten</a>)</p>
                                        <p style="margin-top:2px;">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nc.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nc_sa.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                        </p>
                    </div>
                    <div data-value="nc-nd" class="clearfix" style="margin-top:5px;">
                                        <p style="margin-bottom:2px;">Es werden ebenfalls Inhalte in die Suche einbezogen, die mit ND- und/oder NC-Einschränkung lizenziert wurden.
                                            <br>(<i class="fa fa-exclamation-triangle" style="color:red;" aria-hidden="true"></i> <a href="#faq-license-filter-derivs" class="js-scroll-trigger">Veränderungen verboten</a> und/oder <i class="fa fa-exclamation-triangle" style="color:red;" aria-hidden="true"></i> <a href="#faq-license-filter-noncommercial" class="js-scroll-trigger">kommerzielle Nutzung verboten</a>)
                                        </p>
                                        <p style="margin-top:2px;">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nc.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nc_sa.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nd.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                            <img src="<?php echo url('assets/plugins/oerhoernchen/img/license_icons/cc_by_nc_nd.png'); ?>" class="float-left" style="padding:2px;height:40px;" alt="...">
                                        </p>
                    </div>
                    <div data-value="no-filter">
                        <p>Die Suche wird nicht nach Lizenzen eingeschränkt.</p>
                    </div>
                </div>
            <!-- </div> -->
        </div><!-- eo collapsible -->
        </div>