<?php
include_once 'functions/construct_old_url.php';
include_once 'functions/register_filter.php';
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

function enqueue_themes_script() {
  wp_enqueue_script(
      'theme', // Handle for the script
      get_stylesheet_directory_uri() . '/assets/js/functions.js', 
      array(), // Dependencies (empty array means no dependencies)
      null, // Version number
      true // Load in footer (true) or header (false)
  );
}
add_action('wp_enqueue_scripts', 'enqueue_themes_script');


function enqueue_gsap_assets() {
  wp_enqueue_script(
      'gsap',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
      array(),
      '3.12.2',
      true
  );

  wp_enqueue_script(
      'gsap-scroll-trigger',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',
      array('gsap'),
      '3.12.2',
      true
  );


          wp_enqueue_script(
              'gsap-animations-mark',
              get_stylesheet_directory_uri() . '/assets/js/gsap/is-style-mark-animate.js',
              array('gsap', 'gsap-scroll-trigger'),
             null,
              true
          );

          wp_enqueue_script(
            'gsap-timeline',
            get_stylesheet_directory_uri() . '/assets/js/gsap/timeline.js',
            array('gsap', 'gsap-scroll-trigger'),
           null,
            true
        );


}
add_action('wp_enqueue_scripts', 'enqueue_gsap_assets');

register_meta(
  'post',
  'up_size', // Your meta key
  array(
  'label' => 'Surface',
      'show_in_rest'      => true, // Required
      'single'            => true, // Required
      'type'              => 'string',
      'sanitize_callback' => 'wp_strip_all_tags' // The name of the sanitization function
  )
);
register_meta(
  'post',
  'up_price', // Your meta key
  array(
      'show_in_rest'      => true, // Required
  'label' => 'Prix',
      'single'            => true, // Required
      'type'              => 'string',
      'sanitize_callback' => 'wp_strip_all_tags' // The name of the sanitization function
  )
);