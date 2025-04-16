<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Car_Repair_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    <style>
        /* Header logo and text alignment fix */
        .site-icon {
            height: 28px;
            width: auto;
            margin-right: 12px;
            vertical-align: middle;
        }
        
        .site-title a {
            display: flex;
            align-items: center;
            font-size: 1.2rem;
            line-height: 1.2;
        }
        
        @media screen and (min-width: 768px) {
            .site-icon {
                height: 30px;
            }
            .site-title a {
                font-size: 1.4rem;
            }
        }
        
        @media screen and (min-width: 992px) {
            .site-icon {
                height: 32px;
            }
            .site-title a {
                font-size: 1.5rem;
            }
        }
    </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'car-repair-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container header-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/home' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-fav.png" alt="BRAHEN AD-AUTOHUOLTO Icon" class="site-icon"> BRAHEN AD-AUTOHUOLTO</a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/home' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/car-fav.png" alt="BRAHEN AD-AUTOHUOLTO Icon" class="site-icon"> BRAHEN AD-AUTOHUOLTO</a></p>
					<?php
				endif;
				$car_repair_theme_description = get_bloginfo( 'description', 'display' );
				if ( $car_repair_theme_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $car_repair_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div class="header-contact">
                    <a href="tel:+358123456789" class="contact-phone">
                        <i class="fas fa-phone"></i> <span>+358 12 345 6789</span>
                    </a>
                </div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="menu-wrapper">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'primary-menu-items',
                            'container'      => false,
                        )
                    );
                    ?>
                </div>
			</nav><!-- #site-navigation -->
		</div><!-- .header-container -->
	</header><!-- #masthead -->
    
    <?php if (is_front_page() && !is_home()) : ?>
    <!-- <section class="hero-section">
        <div class="hero-content">
            <h1><?php echo esc_html__('Ammattimainen Autokorjaamopalvelu Turussa', 'car-repair-theme'); ?></h1>
            <p><?php echo esc_html__('Tarjoamme laadukkaita autonkorjaus- ja huoltopalveluita, jotta ajoneuvosi toimii sujuvasti', 'car-repair-theme'); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/book-now/')); ?>" class="cta-button"><?php echo esc_html__('Varaa Aika', 'car-repair-theme'); ?></a>
                <a href="#services" class="cta-button outline"><?php echo esc_html__('Palvelumme', 'car-repair-theme'); ?></a>
            </div>
        </div>
    </section> -->
    <?php endif; ?>
    
    <div id="content" class="site-content">
