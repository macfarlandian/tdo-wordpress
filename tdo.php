<?php
/**
 * Plugin Name: TDO Resources
 * Plugin URI: http://tdo.berkeley.edu
 * Description: Manage the repo for related instructor and student resources for TDO
 * Version: 0.1
 * Author: Ian MacFarland
 * Author URI: http://macbodachland.com
 * License: GPL2
 */

/*  Copyright 2014  Ian MacFarland  (email : ianmacfarland@ischool.berkeley.edu)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'WP_DEBUG', true );



// TO DO:
// front end: faceted browsing. find by chapter, type

// apply custom template for resources from this plugin
/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/

if ( ! defined( 'TDO_BASE_FILE' ) )
    define( 'TDO_BASE_FILE', __FILE__ );
if ( ! defined( 'TDO_BASE_DIR' ) )
    define( 'TDO_BASE_DIR', dirname( TDO_BASE_FILE ) );
if ( ! defined( 'TDO_PLUGIN_URL' ) )
    define( 'TDO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/*
|--------------------------------------------------------------------------
| PLUGIN FUNCTIONS
|--------------------------------------------------------------------------
*/

function tdo_chapters($chapters, $prefix='', $parent=0){
  $count = count($chapters[0]);
  $titles = $chapters[0];
  $subs = $chapters[1];
  for ($i = 0; $i < $count; $i++){ // loop through title and sub arrays
    // add chapter
    $ch = wp_insert_term($prefix . ($i + 1), 'chapters', array(
      'description' => $titles[$i],
      'parent' => $parent
    ));

    // if it didn't already exist
    if ( !is_wp_error($ch) ){
      $current = $ch['term_id'];
      if ($subs[$i]) {
        // recursive - down chapter tree
        tdo_chapters($subs[$i], $prefix . ($i + 1) . '.', $current);
      }
    }
  }
}

function tdo_taxonomy(){
  // book chapter/section taxonomy
  $chapterlabels = array(
    'name' => _x( 'Chapters', 'taxonomy general name' ),
    'singular_name' => _x( 'Chapter', 'taxonomy singular name' ),
  );
  $chapterargs = array(
    'hierarchical'      => true,
    'labels'            => $chapterlabels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'resources/chapters' ),
  );
  // $types = array('post', 'page', 'attachment');
  $types = 'tdo_resource';

  register_taxonomy( 'chapters', $types, $chapterargs );

  // resource type taxonomy (tags)
  $typelabels = array(
    'name' => _x( 'Resource Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Resource Type', 'taxonomy singular name' ),
  );

  $typeargs = array(
      'hierarchical'      => false,
      'labels'            => $typelabels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'rewrite'           => array( 'slug' => 'resources/types' ),
    );
  register_taxonomy( 'resource_types', $types, $typeargs );
}

function tdo_resources(){
  // custom type
  $labels = array(
    'name' 				=> __('Resources'),
    'singular_name'		=> __('Resource'),
    // 'menu_name'			=> __( 'Resources', 'admin menu'),
    // 'name_admin_bar'    => __( 'Book', 'add new on admin bar'),
    // 'add_new'			=> __( 'Add New', 'book', 'your-plugin-textdomain' ),
    'add_new_item'		=> __( 'Add New Resource'),
    'new_item'          => __( 'New Resource'),
    'edit_item'         => __( 'Edit Resource'),
    'view_item'         => __( 'View Resource'),
    'all_items'         => __( 'All Resources'),
    'search_items'      => __( 'Search Resources'),
    'parent_item_colon' => __( 'Parent Resources:'),
    'not_found'         => __( 'No resources found.'),
    'not_found_in_trash'=> __( 'No resources found in Trash.')
  );

  $supports= array(
    'title',
    'editor',
    'author',
    'revisions'
  );

  $taxonomies = array(
    'resource_types',
    'chapters'
  );

  $rewrite = array(
    'slug' => 'resources' // flush rewrite rules after changing this value
  );

  $args = array(
    'labels'		=> $labels,
    'public'		=> true,
    'show_ui'		=> true,
    'supports'		=> $supports,
    'taxonomies'	=> $taxonomies,
    'has_archive'	=> true,
    'rewrite'		=> $rewrite
  );

  register_post_type( 'tdo_resource', $args );
}

function tdo_activate(){
  tdo_taxonomy();
  include_once('chapters.php');
  tdo_chapters($chapters);
}

function tdo_init() {
  tdo_taxonomy();
  tdo_resources();
}

/**
 * Returns template file
 *
 */

function tdo_template_chooser( $template ) {

    // Post ID
    $post_id = get_the_ID();
    // For all other CPT
    if ( get_post_type( $post_id ) != 'tdo_resource' ) {
		return $template;
    }

    // Else use custom template
    if ( is_archive() ) {
        return tdo_get_template_hierarchy( 'archive-tdo_resource' );
    } else if ( is_single() ) {
        return tdo_get_template_hierarchy( 'single-tdo_resource' );
    }

}

/**
 * Get the custom template if is set
 *
 * @since 1.0
 */

function tdo_get_template_hierarchy( $template ) {

    // Get the template slug
    $template_slug = rtrim( $template, '.php' );
    $template = $template_slug . '.php';

    $file = TDO_BASE_DIR . '/templates/' . $template;

    return apply_filters( 'tdo_repl_template_' . $template, $file );
}

/**
 * insert custom plugin stylesheet
 *
 *
 */
function tdo_styles() {
  // register styles
  wp_register_style( 'tdo', plugins_url('templates/css/tdo.css', __FILE__));
  wp_register_style( 'jstree', plugins_url('templates/css/jstree/jstree.css', __FILE__));

  // enqueue styles
  wp_enqueue_style('tdo');
  wp_enqueue_style('jstree');
}

/**
 * insert custom plugin scripts
 *
 *
 */
function tdo_scripts() {
  // register scripts
  wp_register_script('jstree', plugins_url('templates/js/jstree.js', __FILE__),
    array('jquery'));
  wp_register_script( 'tdo', plugins_url('templates/js/tdo.js', __FILE__),
     array('jquery', 'jstree'));

  // enqueue scripts
  wp_enqueue_script('jstree');
  wp_enqueue_script('tdo');
}

/**
 * display chapters in a widget-like box
 *
 *
 */
function chapterbox(){
  ?>
  <aside id="gk-sidebar">
    <div class="box">
      <div>
        <h3 class="box-title">Chapters</h3>
        <input id="chaptersearch" />
        <!-- chapter browser -->
        <nav id="chapters">
          <ul id="chapterlist">
          <? wp_list_categories('taxonomy=chapters&hide_empty=0&title_li='); ?>
          </ul>
        </nav>
      </div>
    </div>
    <div class="box">
      <div>
        <h3 class="box-title">Resource types</h3>
        <!-- type browser -->
        <nav class="resource_types">
          <ul id="typelist">
          <? wp_list_categories('taxonomy=resource_types&hide_empty=0&title_li='); ?>
          </ul>
        </nav>
      </div>
    </div>
  </aside>
  <?php
}


// $thesecats = get_categories('taxonomy=chapters&hide_empty=0');
// // build a multidim array out of this result
//
// // make a recursive function
// function multitax($in, $level=0) {
//   // take flat input, return nested output
//   $out = array();
//   foreach ($in as $item) {
//     // one level at a time - recursion handles depth
//     if ($item->parent == $level){
//       // each term is an array: 0 is object, 1 is children
//       $out[] = array($item, multitax())
//     }
//   }
//   return $out;
// }
// // print_r($thesecats);


/*
|--------------------------------------------------------------------------
| ACTIVATION HOOKS
|--------------------------------------------------------------------------
*/

// register our custom types
register_activation_hook(__FILE__, 'tdo_activate');

/*
|--------------------------------------------------------------------------
| FILTERS
|--------------------------------------------------------------------------
*/

add_filter( 'template_include', 'tdo_template_chooser');

/*
|--------------------------------------------------------------------------
| ACTIONS
|--------------------------------------------------------------------------
*/

add_action( 'init', 'tdo_init');
add_action('wp_enqueue_scripts', 'tdo_styles');
add_action('wp_enqueue_scripts', 'tdo_scripts');
add_action('gavernwp_before_column', 'chapterbox');
