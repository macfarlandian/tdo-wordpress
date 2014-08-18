<?php

/**
 * Template Name
 * Home Landing Page
 * source: MeetGavernWP theme (current for TDO site, spring 2014)
 *
 **/

global $tpl;

$fullwidth = true;

gk_load('header');
gk_load('before', null, array('sidebar' => false));

?>
<section id="gk-mainbody">
    <?php the_post(); ?>
    <article id="homepage-landing">
        <?php the_content() ?>
    </article>
</section>

<?php
gk_load('after', null, array('sidebar' => false));
gk_load('footer');

// EOF
