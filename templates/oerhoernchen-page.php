<?php snippet('oerhoernchen-header') ?>

<?php //2DO: put in header with var for image ?>
<header class="masthead" style="background-image: url('<?php echo url('assets/plugins/oerhoernchen/img/squirrel-2781394_1920_pixabay_annawaldl.jpg');?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo $page->title()->html(); ?></h1> 
                    <!--<span class="subheading" style="display:none;">Legal veränderbares Lernmaterial für einen zeitgemäßen Unterrichten finden.</span>-->
                </div>
            </div>
        </div>
    </div>
</header>


<div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

   <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    </div>
</div>

<?php snippet('oerhoernchen-footer') ?>