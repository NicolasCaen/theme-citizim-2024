<?php
/**
 * Title: Contenu single Programme
 * Slug: citizim-2024/content-single-program
 * Description: Contenu des pages single Programme
 * Inserter: no
 *
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:up-bk/slick-slider {"imageSource":"post"} /-->

<!-- wp:post-title /--></main>
<!-- /wp:group -->
 <?php echo get_the_ID(); ?>
 
<?php echo get_post_meta(get_the_ID(), 'up_sub_title', true); ?>


