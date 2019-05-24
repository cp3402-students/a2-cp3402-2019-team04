<?php
/**
 * CoffeeCan Theme Customizer
 *
 * @package CoffeeCan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function coffee_can_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'coffee_can_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'coffee_can_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_setting('footer_text', array(
		'default' => 'Check out our Social Media',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('coffee-can_footer', array(
		'title' => __('Footer Settings', 'coffee-can'),
		'priority' => 30,
	));


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_title', array(
		'label'      => __( 'Footer Menu Heading', 'coffee-can' ),
		'section'    => 'coffee-can_footer',
		'settings'   => 'footer_text',
	)));

}
add_action( 'customize_register', 'coffee_can_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function coffee_can_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function coffee_can_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function coffee_can_customize_preview_js() {
	wp_enqueue_script( 'coffee-can-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'coffee_can_customize_preview_js' );
