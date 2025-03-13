<?php

function modifier_slug_avec_parent($url, $post_id) {
  switch($post_id){
    case 4194:
        $url = str_replace('/acheter-pour-investir', '/conseils/acheter-pour-investir', $url);
        break;
    case 4195:
        $url = str_replace('/acheter-pour-vendre', '/conseils/acheter-pour-vendre', $url);
        break;
    }

    return $url;
}
add_filter('page_link', 'modifier_slug_avec_parent', 10, 2);


function ajouter_rewrite_rule() {
    // Ajouter une règle de réécriture pour l'URL personnalisée
    add_rewrite_rule(
        '^conseils/acheter-pour-investir/?$', // L'URL personnalisée
        'index.php?pagename=acheter-pour-investir', // La page WordPress à charger
        'top' // Priorité de la règle
    );
    add_rewrite_rule(
        '^conseils/acheter-pour-vivre/?$', // L'URL personnalisée
        'index.php?pagename=acheter-pour-vivre', // La page WordPress à charger
        'top' // Priorité de la règle
    );
}
add_action('init', 'ajouter_rewrite_rule');