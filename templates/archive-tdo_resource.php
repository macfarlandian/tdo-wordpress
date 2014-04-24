<?php

/**
 *
 * Archive page
 * source: MeetGavernWP theme (current for TDO site, spring 2014)
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>
<section id="gk-mainbody">
    <h1>Resources<?php
        if (is_tax()){
            echo ": ";
            $term = $wp_query->get('term');
            $tax = $wp_query->get('taxonomy');
            if ($tax == 'resource_types') {
                echo str_replace('-', ' ', $term);
            } else if ($tax == 'chapters') {
                echo 'Chapter ' . str_replace('-', '.', $term);
            }
    }
    ?></h1>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php include(tdo_get_template_hierarchy( 'content-tdo_resource' )); ?>
		<?php endwhile; ?>

		<?php gk_content_nav(); ?>

	<?php else : ?>

		<h1 class="entry-title"><?php _e( 'Nothing Found', GKTPLNAME ); ?></h1>

		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', GKTPLNAME ); ?></p>

		<?php get_search_form(); ?>

	<?php endif; ?>
</section>

<?php
include_once('after-tdo_resource.php');
// gk_load('after');
gk_load('footer');

// EOF
