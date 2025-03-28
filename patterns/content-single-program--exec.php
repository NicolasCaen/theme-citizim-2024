<?php
/**
 * Title: Contenu single Programme
 * Slug: citizim-2024/content-single-program--exec
 * Description: Contenu des pages single Programme
 * Inserter: no
 *
 */
?>
<?php 
$location = get_metadata( 'post', get_the_ID(), 'up_location', true );
$coordinates = explode(",", $location);
$latitude = $coordinates[0];  
$longitude = $coordinates[1]; 

$sub_title  = get_metadata( 'post', get_the_ID(), 'up_sub_title', true );

$title = get_the_title();
$all_meta = get_post_meta(get_the_ID());
print_r($all_meta); 



?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"metadata":{"name":"Hero | program v2"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
    <!-- wp:group {"metadata":{"name":"slider-banner"},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:spacer {"height":"148px","className":"is-style-only-in-back-office"} -->
<div style="height:148px" aria-hidden="true" class="wp-block-spacer is-style-only-in-back-office"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:html -->
<?php echo do_shortcode('[banner_slider  include_ids="3967,3964"]');?>
<!-- /wp:html --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"148px","className":"is-style-only-in-back-office"} -->
<div style="height:148px" aria-hidden="true" class="wp-block-spacer is-style-only-in-back-office"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
     <!-- wp:group {"metadata":{"name":"Hero | 2 | Program"},"align":"wide","style":{"spacing":{"margin":{"top":"-176px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignwide" style="margin-top:-176px"><!-- wp:columns {"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-section-style2","style":{"spacing":{"blockGap":"var:preset|spacing|3","padding":{"right":"var:preset|spacing|6","left":"var:preset|spacing|6","top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group is-style-section-style2" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"h-three"} -->
<h1 class="wp-block-heading has-text-align-left has-h-three-font-size"><?php echo $title; ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">!
</mark></h1>
<!-- /wp:heading -->  

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>À quelques minutes du centre </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Quartier attractif Cuisine aménagée et semi-équipée</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li> Balcon ou terasse et stationnement intérieur </li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Livraison 2ème semestre 2025</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);flex-basis:50%">
<?php if(!empty($sub_title)):?>
<!-- wp:heading {"textAlign":"center"} -->
     <h2 class="wp-block-heading has-text-align-center"><?php echo $sub_title; ?>
    </h2>
    <!-- /wp:heading -->
<?php endif; ?>   
<!-- wp:shortcode -->
<?php echo do_shortcode('[prix_minimum_lots format="true" prefix="À partir de " suffix=" €"]');?>
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Textes \u0026 Boutons"},"align":"full","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|3","padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--2)"><!-- wp:group {"metadata":{"name":"Textes"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    DESCRIPTION DU PROGRAMME

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"accent","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button">Voir tous les lots</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"transparent","className":"is-style-with-arrow"} -->
<div class="wp-block-button is-style-with-arrow"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button">Voir la notice descriptive du programme</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Grille tarifs"},"align":"full","className":"is-style-section-style1","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|2","right":"var:preset|spacing|2"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-style1" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--2)"><!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Consultez les documents <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">du lotissement</mark></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo do_shortcode('[display_pdf_buttons]');?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
    <!-- wp:group {"metadata":{"name":"Grille tarifs"},"align":"full","className":"is-style-section-style1","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|2","right":"var:preset|spacing|2"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-style1" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--2)"><!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Découvrez la grille tarifaire selon <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">votre projet immobilier</mark></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo do_shortcode('[program_properties]');?>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php if(isset($latitude) && isset($longitude)) : ?>
    <!-- wp:group {"metadata":{"name":"Section | Localisation"},"align":"full","className":"is-style-section-style1","style":{"spacing":{"padding":{"top":"var:preset|spacing|5"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull is-style-section-style1" style="padding-top:var(--wp--preset--spacing--5)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|2","left":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="padding-right:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)">Localisation du programme :</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<?php echo do_shortcode('[display_leaflet_map lat="'.$latitude.'" lng="'.$longitude.'" zoom="17" width="100%"]');?>
<!-- /wp:html -->
  
</div>
<!-- /wp:group -->
<?php endif; ?>  
    <!-- wp:group {"metadata":{"name":"Section | Contact","categories":<?php echo do_shortcode('["section"]');?>,"patternName":"citizim-2024/section-contact"},"align":"full","className":"is-style-section-style1","style":{"layout":{"rowSpan":1,"columnSpan":1},"spacing":{"padding":{"right":"var:preset|spacing|2","left":"var:preset|spacing|2","top":"var:preset|spacing|7","bottom":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull is-style-section-style1" id="contact" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--2)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"h-four"} -->
<h3 class="wp-block-heading has-text-align-center has-h-four-font-size" style="font-style:normal;font-weight:600">Plus d’informations ? <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">Contactez-nous !</mark></h3>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Contact"},"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"shadow":"var:preset|shadow|outlined 2"},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-base-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--outlined-2)"><!-- wp:html -->
<?php echo do_shortcode('[contact-form-7 id="725f2bc" title="Formulaire de contact 1"]');?>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">CITIZIM en tant que responsable de traitement met en œuvre un traitement de données ayant pour finalités la réponse aux demandes des personnes ayant souhaité entrer en contact avec elle et la prospection. Ce traitement est fondé sur l’intérêt légitime du responsable de traitement de développer son activité et de gérer les relations avec les clients et les prospects. Vous disposez d’un droit d’accès, d’interrogation, de rectification, d’effacement, de limitation et d’opposition au traitement de vos données ainsi qu’un droit à la portabilité de ces dernières. Pour en savoir plus sur le traitement des données et vos droits&nbsp;cliquez ici</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->






