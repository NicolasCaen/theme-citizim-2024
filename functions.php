<?php
remove_theme_support('core-block-patterns');

add_action('init', 'charger_patterns_json');

function charger_patterns_json() {
  $dossier_patterns = get_template_directory() . '/patterns_json';

  if (is_dir($dossier_patterns)) {
    $fichiers_json = glob($dossier_patterns . '/*.json');
    
    foreach ($fichiers_json as $fichier) {
      $contenu = file_get_contents($fichier);
      $pattern = json_decode($contenu, true);
      
  
      if ($pattern && isset($pattern['title'], $pattern['content'])) {
        register_block_pattern(
          $pattern['title'],
          $pattern
        );
      }
    }
  }
}

add_filter('up_cache_control_actions', 'my_custom_cache_actions');

function my_custom_cache_actions($actions) {
    $actions[] = [
        'slug' => 'flush-my-custom-cache',
        'label' => __('My Custom Cache', 'my-theme'),
        'callback' => function () {
            // Your code to flush the custom cache goes here
            // For example:
            delete_transient('my_custom_cache_transient');
            echo '<div class="notice notice-success is-dismissible"><p>' . __('My Custom Cache cleared!', 'my-theme') . '</p></div>';
        },
    ];

    return $actions;
}

function enqueue_theme_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
function ajouter_css_editor_gutenberg() {
  wp_enqueue_style('editor-css', get_template_directory_uri() . '/editor.css', array(), filemtime(get_template_directory() . '/editor.css'));
}
add_action('enqueue_block_editor_assets', 'ajouter_css_editor_gutenberg');