<?php
/**
 * ClubMe Theme Customizer
 *
 * @package ClubMe
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function clubme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'clubme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'clubme_customize_partial_blogdescription',
			)
		);
	}

	// -- Add Footer section to customise Contact details.
	$wp_customize->add_section( 'footer_controls_section',
		array(
			'title' => __( 'Footer Settings' ),
			'description' => esc_html__( 'Customise footer information such as Contact Information' ),
			'priority' => 160
		)
	);

	$wp_customize->add_setting( 'toggle_contact',
		array(
			'default' => 1,
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control( 'toggle_contact',
		array(
			'label' => __( 'Display footer contact information', 'ephemeris' ),
			'section'  => 'footer_controls_section',
			'priority' => 5,
			'type'=> 'checkbox'
		)
	);

	$wp_customize->add_setting( 'contact_name',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control( 'contact_name',
		array(
			'label' => __( 'Contact Name' ),
			'section' => 'footer_controls_section',
			'priority' => 10,
			'type' => 'text',
			'input_attrs' => array(
				'placeholder' => __( 'Freddy Placeholder' )
			),
		)
	);

	$wp_customize->add_setting( 'contact_address',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control( 'contact_address',
		array(
			'label' => __( 'Contact Address' ),
			'section' => 'footer_controls_section',
			'priority' => 15,
			'type' => 'textarea',
			'input_attrs' => array(
				'placeholder' => __( "1 Placeholder Drive\nPlaceholder City, Placeholder, 4000\nEarth" )
			),
		)
	);

	$wp_customize->add_setting( 'contact_email',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control( 'contact_email',
		array(
			'label' => __( 'Contact Email' ),
			'section' => 'footer_controls_section',
			'priority' => 20,
			'type' => 'text',
			'input_attrs' => array(
				'placeholder' => __( 'freddy@placeholder.com.au' )
			),
		)
	);

	$wp_customize->add_setting( 'contact_number',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control( 'contact_number',
		array(
			'label' => __( 'Contact Number' ),
			'section' => 'footer_controls_section',
			'priority' => 25,
			'type' => 'text',
			'input_attrs' => array(
				'placeholder' => __( '+617 4444 4444' )
			),
		)
	);


}
add_action( 'customize_register', 'clubme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function clubme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function clubme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clubme_customize_preview_js() {
	wp_enqueue_script( 'clubme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'clubme_customize_preview_js' );
