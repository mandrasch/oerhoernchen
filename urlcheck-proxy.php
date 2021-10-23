<?php
// This file needs to be hosted on a PHP enabled webserver

// This needs to be set in .htaccess (CORS):
// # https://gist.github.com/armno/4959387
// <IfModule mod_headers.c>
// SetEnvIf Origin "^http(s)?://(.+\.)?(oerhoernchen\.de|app-ionos\.space)$" origin_is=$0
// Header always set Access-Control-Allow-Origin %{origin_is}e env=origin_is
// </IfModule>

// Script
if (isset($_GET["u"])) {
    $url = $_GET["u"];
    $url = filter_var($url, FILTER_SANITIZE_URL); // TODO: more sanitizing needed?

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

    if ($html !== false) {
        // The * is important!! Otherwise rel=license noopener won't be match
        foreach ($html->find('[rel*="license"]') as $element) {
            $nodes_rel_license[] = array('html' => (string)$element, 'href' => $element->href, 'innertext' => $element->innertext);
        }

        // rdfa infos -> 
        $node_title = @$html->find('[property*="dct:title"]', 0)->innertext;
        if ($node_title === NULL) {
            $node_title =  @$html->find('title', 0)->innertext;;
        } else {
            $node_title = strip_tags($node_title);
        }

        $attribution_url_rdfa = @$html->find('[rel*="cc:attributionURL"]', 0);
        $node_attribution_url = array();
        if ($attribution_url_rdfa !== NULL) {
            $node_attribution_url = array('href' => $attribution_url_rdfa->href, 'innertext' => $attribution_url_rdfa->innertext);
        }

        $node_creator = @$html->find('[property*="cc:attributionName"]', 0)->innertext;

        $data = array('success' => true, 'nodes_rel_license' => $nodes_rel_license, 'node_title' => $node_title, 'node_creator' => $node_creator, 'node_attribution_url' => $node_attribution_url);



        // TODO: catch curl errors and show it

    } // eo if false
    else {
        $data = array('success' => false);
    }
    print(json_encode($data));
} else {
    exit('No url submitted'); // TODO: Better error message
}
