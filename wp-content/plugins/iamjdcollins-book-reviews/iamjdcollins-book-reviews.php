<?php 
/*
Plugin Name: Jd Collins Book Reviews
Plugin URI:  http://www.iamjdcollins/bookreviews
Description: Used for book reviews
Version:     1.0
Author:      Jd Collins
Author URI:  http://www.iamjdcollins.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: iamjdcollins-book-reviews
*/

function iamjdcollins_book_reviews_init() {
	$labels = array(
		'name'               => __( 'Book Reviews' ),
		'singular_name'      => __( 'Book Review' )
		// 'menu_name'          => __( 'Book Reviews' ),
		// 'name_admin_bar'     => __( 'Book Review' ),
		// 'add_new'            => __( 'Add New' ),
		// 'add_new_item'       => __( 'Add New Book Review' ),
		// 'new_item'           => __( 'New Book Review' ),
		// 'edit_item'          => __( 'Edit Book Review' ),
		// 'view_item'          => __( 'View Book Review' ),
		// 'all_items'          => __( 'All Book Reviews' ),
		// 'search_items'       => __( 'Search Book Reviews' ),
		// 'parent_item_colon'  => __( 'Parent Book Reviews:' ),
		// 'not_found'          => __( 'No book reviews found.' ),
		// 'not_found_in_trash' => __( 'No book reviews found in Trash.' )
	);

	$args = array(
		'label'	             => __( 'Book Reviews' ),
		'labels'             => $labels,
  //       'description'        => __( 'Keeping track of the books I am reading and the reviews of read books.' ),
		'public'             => true,
		// 'publicly_queryable' => true,
		// 'show_ui'            => true,
		// 'show_in_menu'       => true,
		// 'query_var'          => true,
		// 'rewrite'            => array( 'slug' => 'book-review' ),
		// 'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'iamjdcollins-book-reviews', $args );
}

add_action( 'init', 'iamjdcollins_book_reviews_init' );