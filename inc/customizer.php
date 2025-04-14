<?php
/**
 * Car Repair Theme Theme Customizer
 *
 * @package Car_Repair_Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function car_repair_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Add Theme Colors Section
	$wp_customize->add_section( 'car_repair_theme_colors', array(
		'title'       => __( 'Theme Colors', 'car-repair-theme' ),
		'priority'    => 30,
		'description' => __( 'Customize the colors of your car repair theme', 'car-repair-theme' ),
	) );
	
	// Primary Color
	$wp_customize->add_setting( 'primary_color', array(
		'default'           => '#2C3E50',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
		'label'    => __( 'Primary Color', 'car-repair-theme' ),
		'section'  => 'car_repair_theme_colors',
		'settings' => 'primary_color',
	) ) );
	
	// Secondary Color
	$wp_customize->add_setting( 'secondary_color', array(
		'default'           => '#E74C3C',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
		'label'    => __( 'Secondary Color', 'car-repair-theme' ),
		'section'  => 'car_repair_theme_colors',
		'settings' => 'secondary_color',
	) ) );
	
	// Accent Color
	$wp_customize->add_setting( 'accent_color', array(
		'default'           => '#3498DB',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
		'label'    => __( 'Accent Color', 'car-repair-theme' ),
		'section'  => 'car_repair_theme_colors',
		'settings' => 'accent_color',
	) ) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'car_repair_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'car_repair_theme_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'car_repair_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function car_repair_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function car_repair_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function car_repair_theme_customize_preview_js() {
	wp_enqueue_script( 'car-repair-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'car_repair_theme_customize_preview_js' );

/**
 * Output customizer styles in the frontend
 */
function car_repair_theme_customizer_css() {
	$primary_color = get_theme_mod( 'primary_color', '#2C3E50' );
	$secondary_color = get_theme_mod( 'secondary_color', '#E74C3C' );
	$accent_color = get_theme_mod( 'accent_color', '#3498DB' );
	
	?>
	<style type="text/css">
		:root {
			--primary-color: <?php echo esc_attr( $primary_color ); ?>;
			--secondary-color: <?php echo esc_attr( $secondary_color ); ?>;
			--accent-color: <?php echo esc_attr( $accent_color ); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'car_repair_theme_customizer_css' );
