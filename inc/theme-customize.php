<?php

add_action('customize_register', 'restaurantly_customize_register');

function restaurantly_customize_register($wp_customize) {
	
	/**
	 * `Restaurantly Options` Panel
	 * 
	 */ 
	$wp_customize->add_panel('restaurantly_options', array(
		'title'		=> __('Restaurantly Options', 'restaurantly'),
		'priority'	=> 1,
	));

		/**
		 * `Restaurant Information` Section
		 * 
		 */
		$wp_customize->add_section('rest_restaurant_information', array(
			'title'		=> __('Restaurant Information', 'restaurantly'),
			'priority'	=> 1,
			'panel'		=> 'restaurantly_options'
		));

			// Setting for Restaurant Location
			$wp_customize->add_setting('rest_restaurant_location', array(
				'type'				=> 'option',
				'default'			=> __('A108 Adam Street, New York, NY 535022', 'restaurantly'),
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Setting for Restaurant Hours
			$wp_customize->add_setting('rest_restaurant_hours', array(
				'type'				=> 'option',
				'default'			=> __('Mon-Sat: 11AM - 23PM', 'restaurantly'),
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Setting for Restaurant Email
			$wp_customize->add_setting('rest_restaurant_email', array(
				'type'				=> 'option',
				'default'			=> __('info@example.com', 'restaurantly'),
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Setting for Restaurant Phone Number
			$wp_customize->add_setting('rest_restaurant_phone', array(
				'type'				=> 'option',
				'default'			=> __('+1 5589 55488 55s', 'restaurantly'),
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Control for Restaurant Location
			$wp_customize->add_control('rest_restaurant_location', array(
				'type'		=> 'text',
				'section'	=> 'rest_restaurant_information',
				'label'		=> 'Location'
			));

			// Control for Restaurant Hours
			$wp_customize->add_control('rest_restaurant_hours', array(
				'type'		=> 'text',
				'section'	=> 'rest_restaurant_information',
				'label'		=> 'Open Hours'
			));

			// Control for Restaurant Email
			$wp_customize->add_control('rest_restaurant_email', array(
				'type'		=> 'text',
				'section'	=> 'rest_restaurant_information',
				'label'		=> 'Email'
			));

			// Control for Restaurant Phone Number
			$wp_customize->add_control('rest_restaurant_phone', array(
				'type'		=> 'text',
				'section'	=> 'rest_restaurant_information',
				'label'		=> 'Phone Number'
			));

		/**
		 * `Hero Section` Section
		 * 
		 */
		$wp_customize->add_section('rest_hero_section', array(
			'title'		=> __('Hero Section', 'restaurantly'),
			'priority'	=> 2,
			'panel'		=> 'restaurantly_options'
		));

			// Setting for Hero Section Video
			$wp_customize->add_setting('rest_hero_video', array(
				'type'				=> 'option',
				'default'			=> 'https://youtu.be/GlrxcuEDyF8',
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Setting for Hero Section Vidoe Checkbox
			$wp_customize->add_setting('rest_hero_video_checkbox', array(
				'type'				=> 'option',
				'default'			=> true,
				'sanitize_callback'	=> 'sanitize_checkbox',
				'transport'			=> 'refresh'
			));

			// Setting for Hero Section BG Image
			$wp_customize->add_setting('rest_hero_bg_image', array());

			// Control for Hero Section Video
			$wp_customize->add_control('rest_hero_video', array(
				'type'			=> 'text',
				'section'		=> 'rest_hero_section',
				'label'			=> 'YouTube Video Link',
				'description'	=> 'This link is used to display video on homepage.'
			));

			// Control for Hero Section Video Checkbox
			$wp_customize->add_control('rest_hero_video_checkbox', array(
				'type'		=> 'checkbox',
				'section'	=> 'rest_hero_section',
				'label'		=> 'Enable YouTube Video',
				'priority'	=> 2
			));

			// Control for Hero Section BG Image
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rest_hero_bg_control', array(
				'settings'		=> 'rest_hero_bg_image',
				'section'		=> 'rest_hero_section',
				'label'			=> 'Background Image',
				'description'	=> 'This image is used for background of Hero Section.',
				'priority'		=> 1
			)));

		/**
		 * `About Section` Section
		 * 
		 */
		$wp_customize->add_section('rest_about_section', array(
			'title'		=> __('About Section', 'restaurantly'),
			'priority'	=> 3,
			'panel'		=> 'restaurantly_options'
		));

			// Setting for About Section BG Image
			$wp_customize->add_setting('rest_about_bg_image', array());

			// Setting for About Section Heading
			$wp_customize->add_setting('rest_about_heading', array(
				'type'				=> 'option',
				'default'			=> 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
				'sanitize_callback'	=> 'sanitize_text_field',
				'transport'			=> 'refresh',
			));

			// Setting for About Section Content
			$wp_customize->add_setting('rest_about_content', array(
				'type'				=> 'option',
				'transport'			=> 'refresh',
			));

			// Setting for About Section Image
			$wp_customize->add_setting('rest_about_image', array());

			// Control for About Section BG Image
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rest_about_bg_control', array(
				'settings'		=> 'rest_about_bg_image',
				'section'		=> 'rest_about_section',
				'label'			=> 'Background Image',
				'description'	=> 'This image is used for background of About Section.',
				'priority'		=> 1
			)));

			// Control for About Section Heading
			$wp_customize->add_control('rest_about_heading', array(
				'type'			=> 'text',
				'section'		=> 'rest_about_section',
				'label'			=> 'About Section Heading'
			));

			// Control for About Section Content
			$wp_customize->add_control('rest_about_content', array(
				'type'			=> 'dropdown-pages',
				'section'		=> 'rest_about_section',
				'label'			=> 'About Section Content',
				'description'	=> 'Select a page which contains About Section details'
			));

			// Control for About Section Image
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rest_about_control', array(
				'settings'		=> 'rest_about_image',
				'section'		=> 'rest_about_section',
				'label'			=> 'Edit About Image',
				'description'	=> 'Update image on About Section'
			)));

		/**
		 * `Event Section` Section
		 * 
		 */
		$wp_customize->add_section('rest_event_section', array(
			'title'		=> __('Event Section', 'restaurantly'),
			'priority'	=> 4,
			'panel'		=> 'restaurantly_options'
		));

			// Setting for Event Section BG Image
			$wp_customize->add_setting('rest_event_bg_image', array());

			// Control for About Section BG Image
			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rest_event_bg_control', array(
				'settings'		=> 'rest_event_bg_image',
				'section'		=> 'rest_event_section',
				'label'			=> 'Background Image',
				'description'	=> 'This image is used for background of Event Section.',
				'priority'		=> 1
			)));

		/**
		 * `Contact Section` Section
		 * 
		 */
		$wp_customize->add_section('rest_contact_section', array(
			'title'		=> __('Contact Section', 'restaurantly'),
			'priority'	=> 5,
			'panel'		=> 'restaurantly_options'
		));

			// Setting for Google Maps Checkbox
			$wp_customize->add_setting('rest_contact_map_checkbox', array(
				'type'				=> 'option',
				'sanitize_callback'	=> 'sanitize_checkbox',
				'default'			=> true,
				'transport'			=> 'refresh'
			));

			// Setting for Google Maps Source
			$wp_customize->add_setting('rest_contact_map_source', array(
				'type'		=> 'option',
				'default'	=> 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621',
				'transport'	=> 'refresh',
			));

			// Control for Goolge Maps Checkbox
			$wp_customize->add_control('rest_contact_map_checkbox', array(
				'type'		=> 'checkbox',
				'section'	=> 'rest_contact_section',
				'label'		=> 'Enable Googles Map',
				'priority'	=> 1
			));

			// Control for Google Maps Source
			$wp_customize->add_control('rest_contact_map_source', array(
				'type'			=> 'text',
				'section'		=> 'rest_contact_section',
				'label'			=> 'Google Maps Source',
				'description'	=> 'Enter Google Maps iframe src'
			));

		/**
		 * `Socials` Section
		 * 
		 */
		$wp_customize->add_section('rest_socials_section', array(
			'title'		=> __('Socials', 'restaurantly'),
			'panel'		=> 'restaurantly_options'
		));

			// Setting for Twitter
			$wp_customize->add_setting('rest_socials_twitter', array(
				'type'		=> 'option',
				'default'	=> '#',
				'transport'	=> 'refresh',
			));

			// Setting for facebook
			$wp_customize->add_setting('rest_socials_facebook', array(
				'type'		=> 'option',
				'default'	=> '#',
				'transport'	=> 'refresh',
			));

			// Setting for Instagram
			$wp_customize->add_setting('rest_socials_instagram', array(
				'type'		=> 'option',
				'default'	=> '#',
				'transport'	=> 'refresh',
			));

			// Setting for Skype
			$wp_customize->add_setting('rest_socials_skype', array(
				'type'		=> 'option',
				'default'	=> '#',
				'transport'	=> 'refresh',
			));

			// Setting for LinkedIn
			$wp_customize->add_setting('rest_socials_linkedin', array(
				'type'		=> 'option',
				'default'	=> '#',
				'transport'	=> 'refresh',
			));


			// Control for Twitter
			$wp_customize->add_control('rest_socials_twitter', array(
				'type'			=> 'text',
				'section'		=> 'rest_socials_section',
				'label'			=> 'Twitter Link'
			));

			// Control for Facebook
			$wp_customize->add_control('rest_socials_facebook', array(
				'type'			=> 'text',
				'section'		=> 'rest_socials_section',
				'label'			=> 'Facebook Link'
			));

			// Control for Instagram
			$wp_customize->add_control('rest_socials_instagram', array(
				'type'			=> 'text',
				'section'		=> 'rest_socials_section',
				'label'			=> 'Instagram Link'
			));

			// Control for Skype
			$wp_customize->add_control('rest_socials_skype', array(
				'type'			=> 'text',
				'section'		=> 'rest_socials_section',
				'label'			=> 'Skype Link'
			));

			// Control for LinkedIn
			$wp_customize->add_control('rest_socials_linkedin', array(
				'type'			=> 'text',
				'section'		=> 'rest_socials_section',
				'label'			=> 'LinkedIn Link'
			));

}

/**
 * Checkbox sanitization callback.
 * 
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * 
 */

function sanitize_checkbox( $checked ) {
    
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}