<?php
	/**
	* Plugin Name:	 Choose a Wallpaper
	* Plugin URI:	 #
	* Description:	 This plugin for chooseawallpaper.com
	* Version:		 1.0.0
	* Author:		 Dev. Sunny
	* Author URI:	 #
	*/

		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function cptui_register_my_cpts_cs_wallpaper() {

			/**
			 * Post Type: Wallpaper.
			 */

			$labels = [
				"name" => __( "Wallpaper", "twentytwenty" ),
				"singular_name" => __( "Wallpaper", "twentytwenty" ),
				"menu_name" => __( "My Wallpapers", "twentytwenty" ),
				"all_items" => __( "All Wallpapers", "twentytwenty" ),
				"add_new" => __( "Add Wallpaper", "twentytwenty" ),
				"add_new_item" => __( "Add New Wallpaper", "twentytwenty" ),
				"edit_item" => __( "Edit Wallpaper", "twentytwenty" ),
				"new_item" => __( "New Wallpaper", "twentytwenty" ),
				"view_item" => __( "View Wallpaper", "twentytwenty" ),
				"view_items" => __( "View Wallpapers", "twentytwenty" ),
				"search_items" => __( "Search Wallpapers", "twentytwenty" ),
				"not_found" => __( "No Found", "twentytwenty" ),
				"not_found_in_trash" => __( "No Found", "twentytwenty" ),
				"parent" => __( "Parent Wallpaper", "twentytwenty" ),
				"items_list" => __( "Wallpapers List", "twentytwenty" ),
				"name_admin_bar" => __( "Wallpaper", "twentytwenty" ),
				"parent_item_colon" => __( "Parent Wallpaper", "twentytwenty" ),
			];

			$args = [
				"label" => __( "Wallpaper", "twentytwenty" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "cs_wallpaper", "with_front" => true ],
				"query_var" => true,
				"supports" => [ "title" ],
				"show_in_graphql" => false,
			];

			register_post_type( "cs_wallpaper", $args );
		}

		add_action( 'init', 'cptui_register_my_cpts_cs_wallpaper' );

		function cptui_register_my_taxes_cs_categories() {

			/**
			 * Taxonomy: Categories.
			 */

			$labels = [
				"name" => __( "Categories", "twentytwenty" ),
				"singular_name" => __( "Categories", "twentytwenty" ),
				"menu_name" => __( "Categories", "twentytwenty" ),
				"all_items" => __( "All Categories", "twentytwenty" ),
				"edit_item" => __( "Edit Category", "twentytwenty" ),
				"view_item" => __( "View Category", "twentytwenty" ),
				"update_item" => __( "Update Category", "twentytwenty" ),
				"add_new_item" => __( "Add Category", "twentytwenty" ),
				"new_item_name" => __( "New Category", "twentytwenty" ),
				"parent_item" => __( "Parent Category", "twentytwenty" ),
				"not_found" => __( "No Found", "twentytwenty" ),
				"no_terms" => __( "No Category", "twentytwenty" ),
				"items_list" => __( "Categories List", "twentytwenty" ),
			];

			
			$args = [
				"label" => __( "Categories", "twentytwenty" ),
				"labels" => $labels,
				"public" => true,
				"publicly_queryable" => true,
				"hierarchical" => false,
				"show_ui" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"query_var" => true,
				"rewrite" => [ 'slug' => 'cs_categories', 'with_front' => true, ],
				"show_admin_column" => false,
				"show_in_rest" => true,
				"rest_base" => "cs_categories",
				"rest_controller_class" => "WP_REST_Terms_Controller",
				"show_in_quick_edit" => false,
				"show_in_graphql" => false,
			];
			register_taxonomy( "cs_categories", [ "cs_wallpaper" ], $args );
		}
		add_action( 'init', 'cptui_register_my_taxes_cs_categories' );













