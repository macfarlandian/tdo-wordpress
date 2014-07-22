<?php

/**
 *
 * Index of all resources
 **/

 $wp_query = new WP_Query(array(
     "post_type" => "tdo_resource",
     "nopaging" => true,

 ));

// start the loop
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<ul>
    <? $the_types = get_the_terms(get_the_ID(), 'resource_types');
    foreach ($the_types as $the_type):
    ?>
    <li>type: <? echo $the_type->name; ?></li>
    <? endforeach;
    $the_chapters = get_the_terms(get_the_ID(), 'chapters');
    foreach ($the_chapters as $the_chapter): ?>
    <li>section: <?php echo $the_chapter->name; ?></li>
    <? endforeach; ?>
    <li>name: <? echo $post->post_name; ?></li>
    <li>title: <? the_title(); ?></li>
    <li>uri: <? the_permalink(); ?></li>
    <li>credit: <? the_author(); ?> </li>
</ul>
<?
// end the loop
endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

 ?>

<!-- Now that I have accessed the TDO resources site, I can see that you have amassed a lot of

        assignments
        exam questions
        in-class exercises
        lecture notes
        stop and think

I am, of course, quit impressed with just how much is there and how well organized it all is.

It would be helpful to my process if you could produce an index of every URI that relates to the categories listed above.

With such an index, I will be able to easily produce a set of DocBook link entries, ready to be sprinkled into the book.

Without such an index, I will have to go through the site and collect the information, one entry at a time.

Properties that should be included in your index are:

        type: [Assignment | ExamQuestion | Exercise | LectureNote | StopAndThink]
        section number: C.S[.s.s]
        name: short-title
        title: Short title
        URI: http://tdo.berkeley.edu/resources/short-title/
        credit: Firstname Surname -->
