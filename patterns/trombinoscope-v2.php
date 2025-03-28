<?php
/**
 * Title: Trombinoscope
 * Tags: media
 * keywords: media,text,image
 * Slug: citizim-2024/trombinoscope-v2
 * Categories: media
 * Description: Media Trombinoscope v2
 *
 */
?>

<!-- wp:columns {"metadata":{"name":"Trombinoscope v2"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|2","left":"var:preset|spacing|2"}}}} -->
<div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column">
<?php for ($i = 0; $i < 3; $i++) : ?>
        <!-- wp:pattern {"slug":"citizim-2024/card-equipe-v2"} /-->
    <?php endfor; ?>
</div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}}} -->
<div class="wp-block-column">
    <!-- wp:spacer {"height":"150px"} -->
<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<?php for ($i = 0; $i < 2; $i++) : ?>
        <!-- wp:pattern {"slug":"citizim-2024/card-equipe-v2"} /-->
    <?php endfor; ?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->