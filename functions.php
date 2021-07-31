<?php

require get_theme_file_path('/inc/custom-post-type.php');
require get_theme_file_path('/inc/custom-field.php');
require get_theme_file_path('/inc/custom-menu-walker.php');
require get_theme_file_path('/inc/theme-customize.php');

/**
 * Enqueue Stylesheet and JavaScript
 * 
 */

add_action('wp_enqueue_scripts', 'restaurantly_asset');

function restaurantly_asset() {
    
    /* Google Fonts */
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

    /* Vendor CSS Files */
    wp_enqueue_style('animate-min', get_theme_file_uri('assets/vendor/animate.css/animate.min.css'));
    wp_enqueue_style('aos', get_theme_file_uri('assets/vendor/aos/aos.css'));
    wp_enqueue_style('bootstrap-min', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('bootstrap-icon', get_theme_file_uri('assets/vendor/bootstrap-icons/bootstrap-icons.css'));
    wp_enqueue_style('boxicon-min', get_theme_file_uri('assets/vendor/boxicons/css/boxicons.min.css'));
    wp_enqueue_style('glightbox-min', get_theme_file_uri('assets/vendor/glightbox/css/glightbox.min.css'));
    wp_enqueue_style('swiper-bundle-min', get_theme_file_uri('assets/vendor/swiper/swiper-bundle.min.css'));

    /* Template Main CSS File */
    wp_enqueue_style('restaurantly_template_main_stylesheet', get_theme_file_uri('assets/css/style.css'));

    /* Theme Main CSS File */
    wp_enqueue_style('restaurantly_main_stylesheet', get_stylesheet_uri());

    /* Vendor JS Files */
    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), false, true);
    wp_enqueue_script('aos', get_theme_file_uri('assets/vendor/aos/aos.js'), array(), false, true);
    wp_enqueue_script('bootstrap-min', get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'), array(), false, true);
    wp_enqueue_script('glightbox-min', get_theme_file_uri('assets/vendor/glightbox/js/glightbox.min.js'), array(), false, true);
    wp_enqueue_script('isotope-layout', get_theme_file_uri('assets/vendor/isotope-layout/isotope.pkgd.min.js'), array(), false, true);
    wp_enqueue_script('validate', get_theme_file_uri('assets/vendor/php-email-form/validate.js'), array(), false, true);
    wp_enqueue_script('swiper-bundle-min', get_theme_file_uri('assets/vendor/swiper/swiper-bundle.min.js'), array(), false, true);

    /* Template Main JS Files */
    wp_enqueue_script('restaurantly_template_main_javascript', get_theme_file_uri('assets/js/main.js'), array(), false, true);

    /* Theme Main JS Files */
    wp_enqueue_script('restaurantly_main_javascript', get_theme_file_uri('/assets/js/theme.main.js'), array(), false, true);
    wp_enqueue_script('restaurantly_search_javascript', get_theme_file_uri('/assets/js/search.js'), array(), false, true);

    wp_localize_script('restaurantly_search_javascript', 'restaurantly_data', array(
        'root_url' => get_site_url()
    ));

}

/**
 * Theme setup.
 * 
 */

add_action('after_setup_theme', 'restaurantly_features');

function restaurantly_features() {
    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu_1', 'Footer Menu 1');
    register_nav_menu('footer_menu_2', 'Footer Menu 2');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('chef-thumbnail', 500, 500, true);
    add_image_size('gallery-image', 800, 600, true);
}

/**
 * Customizing WP Rest API
 *  
 */

add_action('rest_api_init', 'restaurantly_rest');

function restaurantly_rest() {
    register_rest_field('post', 'author_name', array(
        'get_callback' => function () {
            return get_the_author();
        }
    ));
}

/**
 * Use radio inputs instead of checkboxes for term checklists in `categories` taxonomy.
 *
 * @param   array   $args
 * @return  array
 */

function wpse_139269_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'categories' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { // Don't override 3rd party walkers.
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                /**
                 * Custom walker for switching checkbox inputs to radio.
                 *
                 * @see Walker_Category_Checklist
                 */
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'wpse_139269_term_radio_checklist' );

/**
 * Adding custom stylesheet to wp-admin
 * 
 */

add_action('admin_head', 'my_custom_fonts'); // admin_head is a hook my_custom_fonts is a function we are adding it to the hook

function my_custom_fonts() {
  echo 
  '<style>
    input.setting-input {
        width: 25em;
    }
  </style>';
}