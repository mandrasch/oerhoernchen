<?php

require_once __DIR__ . DS . 'simple_html_dom.php';

// standard search
$kirby->set('template', 'oerhoernchen-search', __DIR__ . '/templates/oerhoernchen-search.php');
$kirby->set('template', 'oerhoernchen-cse', __DIR__ . '/templates/oerhoernchen-cse.php');
$kirby->set('template', 'oerhoernchen-bildungsteiler', __DIR__ . '/templates/oerhoernchen-bildungsteiler.php');
$kirby->set('template', 'oerhoernchen-page', __DIR__ . '/templates/oerhoernchen-page.php');
$kirby->set('template', 'oerhoernchen-elixier', __DIR__ . '/templates/oerhoernchen-elixier.php');
$kirby->set('template', 'oerhoernchen-urlcheck', __DIR__ . '/templates/oerhoernchen-urlcheck.php');
// always create blueprint for template, otherwise it won't show up
$kirby->set('blueprint', 'oerhoernchen-search', __DIR__ . '/blueprints/oerhoernchen-search.yml');
$kirby->set('blueprint', 'oerhoernchen-cse', __DIR__ . '/blueprints/oerhoernchen-cse.yml');
$kirby->set('blueprint', 'oerhoernchen-bildungsteiler', __DIR__ . '/blueprints/oerhoernchen-bildungsteiler.yml');
$kirby->set('blueprint', 'oerhoernchen-page', __DIR__ . '/blueprints/oerhoernchen-page.yml');
$kirby->set('blueprint', 'oerhoernchen-elixier', __DIR__ . '/blueprints/oerhoernchen-elixier.yml');
$kirby->set('blueprint', 'oerhoernchen-urlcheck', __DIR__ . '/blueprints/oerhoernchen-urlcheck.yml');
// snippets for templates
$kirby->set('snippet', 'oerhoernchen-header', __DIR__ . '/snippets/oerhoernchen-header.php');
$kirby->set('snippet', 'oerhoernchen-scripts', __DIR__ . '/snippets/oerhoernchen-scripts.php');
$kirby->set('snippet', 'oerhoernchen-footer', __DIR__ . '/snippets/oerhoernchen-footer.php');
$kirby->set('snippet', 'oerhoernchen-license-filter-box', __DIR__ . '/snippets/oerhoernchen-license-filter-box.php');

// controller example
//$kirby->set('controller', 'oerhoernchen-elixier', __DIR__ . '/controllers/oerhoernchen-elixier.php');

//homepage redirect page
// 2DO: is this the correct way?
// 2DO: this overrides everything - not good?

$kirby->routes(array(
    array(
        'pattern' => '/',
        'action'  => function () {
            // 2DO: check if page exists...
            return go('/suche');
        },
    ),
    // maybe here is a better example: https://forum.getkirby.com/t/problem-with-post-field-routes/3966
    array(
        'pattern' => 'ajax-urlproxy',
        'method'  => 'get',
        'action'  => function () {

            // 2DO: put this is in a better place, but is okay by now
            // ONLY used for url check + QUICK & DIRTY :-o

            if (isset($_GET["u"])) {
                $url = $_GET["u"];
                $url = filter_var($url, FILTER_SANITIZE_URL); // 2DO: more sanitizing needed?

                $ch      = curl_init();
                $timeout = 5;
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

                // Get URL content
                $response_html = curl_exec($ch);
                // close handle to release resources
                curl_close($ch);

                // php simple dom
                //to parse a string as html code
                $html = str_get_html($response_html);

                $nodes_rel_license = array();
                
                if($html !== false){
                  // The * is important!! Otherwise rel=license noopener won't be match
                  // 2DO: put in scrapy as well??
                  foreach ($html->find('[rel*="license"]') as $element) {
                      $nodes_rel_license[] = array('html'=>(string)$element,'href'=>$element->href,'innertext'=>$element->innertext);
                  }

                  // rdfa infos -> 
                  $node_title = @$html->find('[property*="dct:title"]',0)->innertext;
                  if($node_title === NULL)
                  {
                     $node_title =  @$html->find('title', 0)->innertext;;
                  }
                  else{
                    $node_title = strip_tags($node_title);
                  }

                  $attribution_url_rdfa = @$html->find('[rel*="cc:attributionURL"]',0);
                  $node_attribution_url = array();
                  if($attribution_url_rdfa !== NULL){
                      $node_attribution_url = array('href'=>$attribution_url_rdfa->href,'innertext'=>$attribution_url_rdfa->innertext);
                  }

                  $node_creator = @$html->find('[property*="cc:attributionName"]',0)->innertext;

                  $data = array('success' => true, 'nodes_rel_license' => $nodes_rel_license,'node_title'=>$node_title,'node_creator'=>$node_creator,'node_attribution_url'=>$node_attribution_url);

                  // 2DO: catch curl errors and show it

                }// eo if false
                else{
                  $data = array('success'=>false);
                }

                // kirby function
                return response::json($data);
            } else {
                exit('No url submitted');
            }
        }
    ),
));

// Is this v3 code?
/*Kirby::plugin('oerhoernchen', [
'routes' => function ($kirby) {
return [
[
'pattern' => '/'
'action' => function () {
return go('/suche');
}
],
[
'pattern' => 'urlproxy/',
'action'  => function() {
echo file_get_contents('https://blog.matthias-andrasch.de/2019/bloggen-mit-studierenden-wordpress-google-sheets-oder-hackmd/');
}
]
];
}
]);*/
