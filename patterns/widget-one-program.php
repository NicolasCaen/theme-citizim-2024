<?php
/**
 * Title: Widget Formulaire de contact
 * Tags: contact
 * keywords: contact,widget,formulaire
 * Slug: citizim-2024/widget-one-program
 * Description: widget formulaire contact
 *
 */
?>
<!-- wp:group {"metadata":{"name":"Commercialisation Prochaine"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"h-four"} -->
<h2 class="wp-block-heading has-h-four-font-size">Commercialisation prochaine</h2>
<!-- /wp:heading -->

<!-- wp:html -->
[query_cards post_type="up_program_program" view="one-program" id="152"]
<!-- /wp:html -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Être recontacté</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->