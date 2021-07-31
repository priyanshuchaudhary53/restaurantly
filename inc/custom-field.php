<?php

/**
 * Set `Price` custom field for `Events` and `Menu Items` CPT.
 * 
 */

    function event_add_meta_box() {
    //this will add the metabox for the event post type
    $screens = array( 'event', 'menu-item' );
    
    foreach ( $screens as $screen ) {
    
        add_meta_box(
            'event_sectionid',
            __( 'Price', 'event_textdomain' ),
            'event_meta_box_callback',
            $screen
        );
     }
    }
    add_action( 'add_meta_boxes', 'event_add_meta_box' );
    
    /**
     * Prints the box content.
     *
     * @param WP_Post $post The object for the current post/page.
     */
    function event_meta_box_callback( $post ) {
    
    // Add a nonce field so we can check for it later.
    wp_nonce_field( 'event_save_meta_box_data', 'event_meta_box_nonce' );
    
    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, '_meta_price_value', true );
    
    echo '<label for="event_price_field">';
    _e( 'Price', 'event_textdomain' );
    echo '</label> ';
    echo '<input type="text" id="event_price_field" name="event_price_field" value="' . esc_attr( $value ) . '" size="25" />';
    }
    
    /**
     * When the post is saved, saves our custom data.
     *
     * @param int $post_id The ID of the post being saved.
     */
     function event_save_meta_box_data( $post_id ) {
    
     if ( ! isset( $_POST['event_meta_box_nonce'] ) ) {
        return;
     }
    
     if ( ! wp_verify_nonce( $_POST['event_meta_box_nonce'], 'event_save_meta_box_data' ) ) {
        return;
     }
    
     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
     }
    
     // Check the user's permissions.
     if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
    
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    
     } else {
    
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
     }
    
     if ( ! isset( $_POST['event_price_field'] ) ) {
        return;
     }
    
     $my_data = sanitize_text_field( $_POST['event_price_field'] );
    
     update_post_meta( $post_id, '_meta_price_value', $my_data );
    }
    add_action( 'save_post', 'event_save_meta_box_data' );

/**
 * Set `Designation` custom field for `Testimonial` and `Chef` CPT
 * 
 */

    function designation_add_meta_box() {
        
        $screens = array('testimonial', 'chef');

        foreach ( $screens as $screen ) {
            
            add_meta_box(
                'designation_sectionid',
                __( 'Designation', 'designation_textdomain' ),
                'designation_meta_box_callback',
                $screen
            );

        }
    }

    add_action('add_meta_boxes', 'designation_add_meta_box');

    /**
     * Prints the box content.
     *
     * @param WP_Post $post The object for the current post/page.
     */
    function designation_meta_box_callback( $post ) {
    
        // Add a nonce field so we can check for it later.
        wp_nonce_field( 'designation_save_meta_box_data', 'designation_meta_box_nonce' );
        
        /*
         * Use get_post_meta() to retrieve an existing value
         * from the database and use the value for the form.
         */
        $value = get_post_meta( $post->ID, '_meta_designation_value', true );
        
        echo '<label for="testimonial_designation_field">';
        _e( 'Designation', 'designation_textdomain' );
        echo '</label> ';
        echo '<input type="text" id="testimonial_designation_field" name="testimonial_designation_field" value="' . esc_attr( $value ) . '" size="25" />';
        }

    /**
     * When the post is saved, saves our custom data.
     *
     * @param int $post_id The ID of the post being saved.
     */
    function designation_save_meta_box_data( $post_id ) {
    
        if ( ! isset( $_POST['designation_meta_box_nonce'] ) ) {
           return;
        }
       
        if ( ! wp_verify_nonce( $_POST['designation_meta_box_nonce'], 'designation_save_meta_box_data' ) ) {
           return;
        }
       
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
           return;
        }
       
        // Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
       
           if ( ! current_user_can( 'edit_page', $post_id ) ) {
               return;
           }
       
        } else {
       
           if ( ! current_user_can( 'edit_post', $post_id ) ) {
               return;
           }
        }
       
        if ( ! isset( $_POST['testimonial_designation_field'] ) ) {
           return;
        }
       
        $my_data = sanitize_text_field( $_POST['testimonial_designation_field'] );
       
        update_post_meta( $post_id, '_meta_designation_value', $my_data );
       }
       add_action( 'save_post', 'designation_save_meta_box_data' );


/**
 * Set `Dish Name` custom field for `Special` CPT
 * 
 */

    function dish_name_add_meta_box() {
        
        $screens = array('special');

        foreach ( $screens as $screen ) {
            
            add_meta_box(
                'dish_name_sectionid',
                __( 'Dish Name', 'dish_name_textdomain' ),
                'dish_name_meta_box_callback',
                $screen
            );

        }
    }

    add_action('add_meta_boxes', 'dish_name_add_meta_box');

    /**
     * Prints the box content.
     *
     * @param WP_Post $post The object for the current post/page.
     */
    function dish_name_meta_box_callback( $post ) {
    
        // Add a nonce field so we can check for it later.
        wp_nonce_field( 'dish_name_save_meta_box_data', 'dish_name_meta_box_nonce' );
        
        /*
         * Use get_post_meta() to retrieve an existing value
         * from the database and use the value for the form.
         */
        $value = get_post_meta( $post->ID, '_meta_dish_name_value', true );
        
        echo '<label for="dish_name_field">';
        _e( 'Dish', 'dish_name_textdomain' );
        echo '</label> ';
        echo '<input type="text" id="dish_name_field" name="dish_name_field" value="' . esc_attr( $value ) . '" size="25" required />';
        }

    /**
     * When the post is saved, saves our custom data.
     *
     * @param int $post_id The ID of the post being saved.
     */
    function dish_name_save_meta_box_data( $post_id ) {
    
        if ( ! isset( $_POST['dish_name_meta_box_nonce'] ) ) {
           return;
        }
       
        if ( ! wp_verify_nonce( $_POST['dish_name_meta_box_nonce'], 'dish_name_save_meta_box_data' ) ) {
           return;
        }
       
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
           return;
        }
       
        // Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
       
           if ( ! current_user_can( 'edit_page', $post_id ) ) {
               return;
           }
       
        } else {
       
           if ( ! current_user_can( 'edit_post', $post_id ) ) {
               return;
           }
        }
       
        if ( ! isset( $_POST['dish_name_field'] ) ) {
           return;
        }
       
        $my_data = sanitize_text_field( $_POST['dish_name_field'] );
       
        update_post_meta( $post_id, '_meta_dish_name_value', $my_data );
       }
       add_action( 'save_post', 'dish_name_save_meta_box_data' );