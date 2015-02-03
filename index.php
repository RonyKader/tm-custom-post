<?php 
/*
 Plugin Name: Custom Post
 Plugin URI: http://www.rony.w3zones.com
 Plugin Author: Rony Kader ( Md.Tarikul Islam )
 Authr URI: http://www.rony.w3zones.com
 Description: This is Custom Post Type Plugin
 */

 /**
 * 
 */
 class  Album_Post_Type {
 	
 	 public function __construct() {
 	 	$this->register_post_type();
 	 

 	}

 	public function register_post_type(){

 		$args = array(

 			'labels' => array(
 				'name' => 'Albums',
 				'singular_name' => 'Album',
 				'add_new' => 'Add New Album',
 				'add_new_item' => 'Add New Album',
 				'edit_item' => 'Add New Item',
 				'view_item' => 'View Album',
 				'search_items' => 'Search Albums',
 				'not_found' => 'No Album Found ',
 				'not_found_in_trash' => 'No Albums Found in Trash'

 				),
 			'description' => 'This is Rony',
 			'rewrite' => array(
 				'slug' => 'album/'
 				),
 			'query_var' => 'album',
 			'public' =>true,
 			'supports' => array(
 				'title',
 				'excerpt',
 				'custom-fields',
 				'thumbnail'
 				),
 			);

 		register_post_type( 'album_rony', $args );
 	}



 }

 add_action( 'init', function() {

 	new Album_Post_Type();

 });







 ?>