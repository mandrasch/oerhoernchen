<!doctype html>
<html lang="<?php echo site()->language() ? site()->language()->code() : 'en'; ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html(); ?> | <?php echo $page->title()->html(); ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- Beginn der OpenGraph Tags für Facebook & Co. -->
    <meta name="DC.Title" content="<?php echo html($page->title()) ?>" />
    <meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
    <meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
    <meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
    <meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
    <meta name="DC.Language" content="de_DE" />
    <meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo html($site->url()) ?>" />
    <meta property="og:image" content="<?php echo url('assets/plugins/oerhoernchen/img/squirrel-2781394_1920_pixabay_annawaldl.jpg');?>" />
    <meta property="og:description" content="<?php echo html($page->description()) ?>" />
    <meta itemprop="name" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
    <meta itemprop="description" content="<?php echo html($page->description()) ?>">
    <!-- Bei Bedarf folgende Favicons als Basis -->
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo url('/assets/plugins/oerhoernchen/img/favicon.ico') ?>" />


  <?php echo css(array('assets/plugins/oerhoernchen/css/bootstrap.min.css',
      'assets/plugins/oerhoernchen/css/font-awesome/css/font-awesome.min.css',
      'assets/plugins/oerhoernchen/css/clean-blog.min.css',
      'assets/plugins/oerhoernchen/css/oerhoernchen.css',
      'assets/plugins/oerhoernchen/css/oerhoernchen-search.css')); ?>

<style type="text/css">

/* Google Font local replacement */
/* lora-regular - latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 400;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.eot'); /* IE9 Compat Modes */
  src: local('Lora Regular'), local('Lora-Regular'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-regular.svg#Lora') format('svg'); /* Legacy iOS */
}
/* lora-italic - latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 400;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.eot'); /* IE9 Compat Modes */
  src: local('Lora Italic'), local('Lora-Italic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-italic.svg#Lora') format('svg'); /* Legacy iOS */
}
/* lora-700 - latin */
@font-face {
  font-family: 'Lora';
  font-style: normal;
  font-weight: 700;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Lora Bold'), local('Lora-Bold'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700.svg#Lora') format('svg'); /* Legacy iOS */
}
/* lora-700italic - latin */
@font-face {
  font-family: 'Lora';
  font-style: italic;
  font-weight: 700;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.eot'); /* IE9 Compat Modes */
  src: local('Lora Bold Italic'), local('Lora-BoldItalic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/lora-v12-latin-700italic.svg#Lora') format('svg'); /* Legacy iOS */
}

/* open-sans-300 - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Light'), local('OpenSans-Light'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-300italic - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-300italic.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-regular - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Regular'), local('OpenSans-Regular'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-regular.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-italic - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Italic'), local('OpenSans-Italic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-italic.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-600 - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.eot'); /* IE9 Compat Modes */
  src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-600italic - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.eot'); /* IE9 Compat Modes */
  src: local('Open Sans SemiBold Italic'), local('OpenSans-SemiBoldItalic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-600italic.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-700 - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Bold'), local('OpenSans-Bold'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-700italic - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.eot'); /* IE9 Compat Modes */
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-700italic.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-800 - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.eot'); /* IE9 Compat Modes */
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-800italic - latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 800;
  src: url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.eot'); /* IE9 Compat Modes */
  src: local('Open Sans ExtraBold Italic'), local('OpenSans-ExtraBoldItalic'),
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.woff2') format('woff2'), /* Super Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.woff') format('woff'), /* Modern Browsers */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.ttf') format('truetype'), /* Safari, Android, iOS */
       url('<?php echo url('assets/plugins/oerhoernchen/'); ?>fonts/open-sans-v15-latin-800italic.svg#OpenSans') format('svg'); /* Legacy iOS */
}
</style>

</head>

<body>

<?php
// main menu items
$items = $pages->visible();
// only show the menu if items are available
// if($items->count()):
?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo url(); ?>">OERhörnchen</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
    <?php foreach ($items as $item): ?>
    <li class="nav-item"><a<?php e($item->isOpen(), ' class="nav-link active"', ' class="nav-link"') ?> href="<?= $item->url() ?>">
      <?php if ($item->menu_title()->empty()) {
    echo $item->title()->html();
} else {
          echo $item->menu_title()->html();
      }
      ?></a></li>
    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>


    <?php //2DO: use blueprint image field to select different image for each page or default one?>
    <header class="masthead" style="background-image: url('<?php echo url('assets/plugins/oerhoernchen/img/squirrel-2781394_1920_pixabay_annawaldl.jpg');?>')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1><?php echo $page->heading()->html(); ?></h1>
                        <span class="subheading"><?php echo html($page->subheading()); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
