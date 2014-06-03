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
      <h5>Related chapters: <?
			$the_chapters = get_the_terms(get_the_ID(), 'chapters');
			$i = 0;
			foreach ($the_chapters as $the_chapter) {
				if ($i != 0) { echo ', '; }
				$i++;
				?>
				<a href="<?php echo get_term_link($the_chapter);  ?>"><?php echo $the_chapter->name; ?></a> [<a target="_blank" href="<?php echo tdo_chapter_link($the_chapter->name);  ?>">read</a>]
				<?
			}

			?>
	  </h5>
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
