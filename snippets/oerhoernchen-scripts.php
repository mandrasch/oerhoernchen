 <script type="text/javascript">
        var OERHOERNCHEN_ASSET_IMG_URL = '<?php echo $kirby->urls()->assets().'/plugins/oerhoernchen/img/'; ?>';
         var OERHOERNCHEN_ASSET_URL = '<?php echo $kirby->urls()->assets().'/plugins/oerhoernchen/'; ?>';
         var OERHOERNCHEN_SITE_URL = '<?php echo $site->url('/'); ?>';
</script>

<?php echo js(array(
   'assets/plugins/oerhoernchen/js/jquery.min.js',
  'assets/plugins/oerhoernchen/js/bootstrap.bundle.min.js',
  'assets/plugins/oerhoernchen/js/clean-blog.min.js',
  'assets/plugins/oerhoernchen/js/cookieconsent.min.js',
  'assets/plugins/oerhoernchen/js/oerhoernchen.js',
  'assets/plugins/oerhoernchen/js/oerhoernchen.cookieconsent.matomo.js'
)); ?>
