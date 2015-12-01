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

/*Hook to run when plugin is activated*/
register_activation_hook(__FILE__, 'iamjdcollins_book_reviews_rewrite_rules');

/*Defines the content type*/
function iamjdcollins_book_reviews_init() {
	$labels = array(
		'name'               => __( 'Book Reviews' ),
		'singular_name'      => __( 'Book Review' ),
		'menu_name'          => __( 'Book Reviews' ),
		'name_admin_bar'     => __( 'Book Review' ),
		'add_new'            => __( 'Add New Book Review' ),
		'add_new_item'       => __( 'Add New Book Review' ),
		'new_item'           => __( 'New Book Review' ),
		'edit_item'          => __( 'Edit Book Review' ),
		'view_item'          => __( 'View Book Review' ),
		'all_items'          => __( 'All Book Reviews' ),
		'search_items'       => __( 'Search Book Reviews' ),
		'parent_item_colon'  => __( 'Parent Book Reviews:' ),
		'not_found'          => __( 'No book reviews found.' ),
		'not_found_in_trash' => __( 'No book reviews found in Trash.' )
	);

	$args = array(
		'label'	             => __( 'Book Reviews' ),
		'labels'             => $labels,
        'description'        => __( 'Keeping track of the books I am reading and the reviews of read books.' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book-review' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'supports'           => array( 'title' )
	);

	register_post_type( 'book-reviews', $args );
}

/* Flush the rewrite rules to allow permalinks to work on the new content type */
function iamjdcollins_book_reviews_rewrite_rules() {
	iamjdcollins_book_reviews_init();
	flush_rewrite_rules( false );
}
/* Creates a metabox */
function iamjdcollins_book_review_add_author_metabox() {
	add_meta_box( 'iamjdcollins_book_review', 'Book Review Details', 'iamjdcollins_book_review_metabox', 'book-reviews', 'normal', 'default' );
}

/* Adds information to the metabox */
function iamjdcollins_book_review_metabox() {
	global $post;

	wp_nonce_field( 'iamjdcollins_book_review_save_author_metabox', 'iamjdcollins_book_review_nonce' );
	
	echo '<label for="iamjdcollins_book_review_author">Author</label>';
	echo '<input class="book-author" type="text" id="iamjdcollins_book_review_author" name="iamjdcollins_book_review_author" value="' . get_post_meta( $post->ID, 'iamjdcollins_book_review_author', true ) . '" />';

	echo '<label for="iamjdcollins_book_review_isbn">ISBN</label>';
	echo '<input class="book-isbn" type="text" id="iamjdcollins_book_review_isbn" name="iamjdcollins_book_review_isbn" value="' . get_post_meta( $post->ID, 'iamjdcollins_book_review_isbn', true ) . '" />';
	
	echo '<label for="iamjdcollins_book_review_rating">Rating</label>';
	echo '<input class="book-rating" type="text" id="iamjdcollins_book_review_rating" name="iamjdcollins_book_review_rating" value="' . get_post_meta( $post->ID, 'iamjdcollins_book_review_rating', true ) . '" />';

	

}

/* Function to run when saving a post */
function iamjdcollins_book_review_save_author_metabox($post_id) {
	$author = $_POST['iamjdcollins_book_review_author'];
	$isbn = $_POST['iamjdcollins_book_review_isbn'];
	$rating = $_POST['iamjdcollins_book_review_isbn'];

	update_post_meta($post_id, 'iamjdcollins_book_review_author', $author );
	update_post_meta($post_id, 'iamjdcollins_book_review_isbn', $isbn );
	update_post_meta($post_id, 'iamjdcollins_book_review_rating', $rating );
}

/* Adds to content type during init */
add_action( 'init', 'iamjdcollins_book_reviews_init' );
/* Triggers the addition of the custom metabox */
add_action( 'add_meta_boxes', 'iamjdcollins_book_review_add_author_metabox' );
/* Triggers the save function when a post is saved. */
add_action( 'save_post', 'iamjdcollins_book_review_save_author_metabox' );