<?php

// standard search
$kirby->set('template','oerhoernchen-search',__DIR__ . '/templates/oerhoernchen-search.php');
$kirby->set('template','oerhoernchen-profisearch',__DIR__ . '/templates/oerhoernchen-profisearch.php');
$kirby->set('template','oerhoernchen-bildungsteiler',__DIR__ . '/templates/oerhoernchen-bildungsteiler.php');
$kirby->set('template','oerhoernchen-page',__DIR__ . '/templates/oerhoernchen-page.php');
// always create blueprint for template, otherwise it won't show up
$kirby->set('blueprint', 'oerhoernchen-search', __DIR__ . '/blueprints/oerhoernchen-search.yml');
$kirby->set('blueprint', 'oerhoernchen-profisearch', __DIR__ . '/blueprints/oerhoernchen-profisearch.yml');
$kirby->set('blueprint', 'oerhoernchen-bildungsteiler', __DIR__ . '/blueprints/oerhoernchen-bildungsteiler.yml');
$kirby->set('blueprint', 'oerhoernchen-page', __DIR__ . '/blueprints/oerhoernchen-page.yml');
// snippets for templates
$kirby->set('snippet','oerhoernchen-header', __DIR__ . '/snippets/oerhoernchen-header.php');
$kirby->set('snippet','oerhoernchen-scripts', __DIR__ . '/snippets/oerhoernchen-scripts.php');
$kirby->set('snippet','oerhoernchen-footer', __DIR__ . '/snippets/oerhoernchen-footer.php');
$kirby->set('snippet','oerhoernchen-license-filter-box', __DIR__ . '/snippets/oerhoernchen-license-filter-box.php');

//homepage redirect page
// 2DO: is this the correct way?
$kirby->set('route', array(
  'pattern' => '/',
  'action'  => function() {
  	// 2DO: check if page exists...
  	return go('/suche');
  }
));