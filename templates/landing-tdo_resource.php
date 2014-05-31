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
	<?php the_post(); ?>
    <article id="tdo_resource">
        <h1><? the_title(); ?></h1>
    	<?php the_content() ?>
        <section class="recent">
        <?php
            $all_types = get_terms('resource_types');

            foreach ($all_types as $type) {
                $type_args = array(
                    'post_type' => 'tdo_resource',
                    'numberposts' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'resource_types',
                            'terms' => (int)$type->term_id
                        )
                    )
                );
                $recent_posts = get_posts($type_args)
            ?>
            <h2 class='recent'>Recently posted in '<?php echo $type->name; ?>':</h2>
            <?php
                foreach ($recent_posts as $rpost) {
                    global $post;
                    $post = $rpost;
                    setup_postdata($post);
                    include(tdo_get_template_hierarchy( 'content-tdo_resource' ));
                }
                ?>
                <h3 class="alltype"><a href="<?php echo get_term_link($type); ?>">Browse all <?php echo $type->name; ?>&rarr;</a></h3>
                <?
            }
            wp_reset_postdata();
        ?>
        </section>
    </article>
</section>

<?php
include_once('after-tdo_resource.php');
// gk_load('after');
gk_load('footer');

// EOF
