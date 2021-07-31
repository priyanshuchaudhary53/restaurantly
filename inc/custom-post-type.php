<?php

/**
 * Register custom post types and taxonomies.
 * 
 */

add_action('init', 'restaurantly_post_types');

function restaurantly_post_types() {

    /**
     * Register `Event` CPT
     * 
     */
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

    /**
     * Register `Testimonial` CPT
     * 
     */
    register_post_type('testimonial', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon' => 'dashicons-groups'
    ));

    /**
     * Register `Chef` CPT
     * 
     */
    register_post_type('chef', array(
        'supports' => array('title', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Chefs',
            'add_new_item' => 'Add New Chef',
            'edit_item' => 'Edit Chef',
            'all_items' => 'All Chefs',
            'singular_name' => 'Chef'
        ),
        'menu_icon' => 'dashicons-id'
    ));

    /**
     * Register `Menu Item` CPT
     * 
     */
    register_post_type('menu-item', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Menu Items',
            'add_new_item' => 'Add New Menu Item',
            'edit_item' => 'Edit Menu Item',
            'all_items' => 'All Menu Items',
            'singular_name' => 'Menu Item'
        ),
        'menu_icon' => 'dashicons-list-view'
    ));

    /**
     * Register `Special` CPT 
     * 
     */
    register_post_type('special', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Specials',
            'add_new_item' => 'Add New Special',
            'edit_item' => 'Edit Special',
            'all_items' => 'All Specials',
            'singular_name' => 'Special'
        ),
        'menu_icon' => 'dashicons-drumstick'
    ));

    /**
     * Register `Gallery` CPT
     * 
     */
    register_post_type('gallery', array(
        'supports' => array('title', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Gallery Images',
            'add_new_item' => 'Add New Gallery Image',
            'edit_item' => 'Change Gallery Image',
            'all_items' => 'All Gallery Images',
            'singular_name' => 'Gallery Image'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));

    /**
     * Register `Categories` taxonomy
     * 
     */
    register_taxonomy('categories', array('menu-item'), array(
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'label' => 'Categories',
        'singular-label' => 'Category',
        'rewrite' => array(
            'slug' => 'categories',
            'with_front' => false
        )
    ));

    register_taxonomy_for_object_type('categories', 'menu-item');
    
}