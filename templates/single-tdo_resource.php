<?php

/**
 *
 * Single page
 *
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>

<section id="gk-mainbody">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php gk_content_nav(); ?>

		<?php include(tdo_get_template_hierarchy( 'content-tdo_resource' )); ?>

		<?php comments_template( '', true ); ?>
	<?php endwhile; // end of the loop. ?>
</section>

<?php

include_once('after-tdo_resource.php');
// gk_load('after');
gk_load('footer');

// EOF
