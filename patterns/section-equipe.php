<?php
/**
 * Title: Section Equipe
 * Slug: citizim-2024/section-equipe
 * Categories: group, container
 * Description: Section Equipe
 */
?>

<!-- wp:group {"metadata":{"name":"Section Equipe"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Notre équipe pour <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">votre projet immobilier</mark></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><
    <?php for ($i = 0; $i < 6; $i++) : ?>
        <!-- wp:pattern {"slug":"citizim-2024/card-equipe"} /-->
    <?php endfor; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->