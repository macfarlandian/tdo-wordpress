<?php

/**
 *
 * A template for displaying TDO resource content
 *
 **/

global $tpl;

?>

	<article id="resource-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>

        <h2><a href="<? the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if (is_single()): ?>
            <h3>Contributed by: <? the_author(); ?></h3>
        <?php endif; ?>

	</header>
    <section class="metacrap">
      <h5><? the_terms(get_the_ID(), 'resource_types', 'Resource type: ') ?></h5>
      <h5><? the_terms(get_the_ID(), 'chapters', 'Related chapters: ') ?></h5>
    </section>

		<section class="content">
			<?php
            if (is_single()) {
                the_content();
            } else {
                the_excerpt();
            }
            ?>

			<?php gk_post_fields(); ?>
			<?php gk_post_links(); ?>
		</section>

		<?php // get_template_part( 'layouts/content.post.footer' ); ?>
	</article>
