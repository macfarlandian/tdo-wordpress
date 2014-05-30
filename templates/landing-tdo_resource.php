<?php

/**
 * Template Name
 * Landing page for Instructor Resources
 * source: MeetGavernWP theme (current for TDO site, spring 2014)
 *
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>

<section id="gk-mainbody">
	<?php // the_post(); ?>

	<?php // get_template_part( 'content', 'page' ); ?>

	<?php //comments_template( '', true ); ?>
</section>

<?php
include_once('after-tdo_resource.php');
// gk_load('after');
gk_load('footer');

// EOF
