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
      <hgroup>
        <h2><?php the_title(); ?></h2>
        <h5>Contributed by: <?php the_author(); ?></h5>
      </hgroup>
		</header>
    <section class="metacrap">
      <div><? the_terms(get_the_ID(), 'resource_types', 'Resource type: ') ?></div>
      <div><? the_terms(get_the_ID(), 'chapters', 'Related chapters: ') ?></div>
    </section>

		<section class="content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', GKTPLNAME ) ); ?>

			<?php gk_post_fields(); ?>
			<?php gk_post_links(); ?>
		</section>

		<?php get_template_part( 'layouts/content.post.footer' ); ?>
	</article>
