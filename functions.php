<?php
/**
 * Car Repair Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Car_Repair_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function car_repair_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Car Repair Theme, use a find and replace
		* to change 'car-repair-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'car-repair-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'car-repair-theme' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'car-repair-theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'car_repair_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'car_repair_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function car_repair_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'car_repair_theme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'car_repair_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function car_repair_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'car-repair-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'car-repair-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	// Register footer widget areas
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 1', 'car-repair-theme' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'car-repair-theme' ),
            'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 2', 'car-repair-theme' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'car-repair-theme' ),
            'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 3', 'car-repair-theme' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'car-repair-theme' ),
            'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 4', 'car-repair-theme' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'car-repair-theme' ),
            'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'car_repair_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function car_repair_theme_scripts() {
	wp_enqueue_style( 'car-repair-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'car-repair-theme-style', 'rtl', 'replace' );
	
	// Enqueue custom styles
	wp_enqueue_style( 'car-repair-custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION );
	
	// Enqueue Bookly custom styles
	wp_enqueue_style( 'car-repair-bookly-style', get_template_directory_uri() . '/assets/css/custom-bookly.css', array(), _S_VERSION );
	
	// Enqueue print styles
	wp_enqueue_style( 'car-repair-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), _S_VERSION, 'print' );
	
	// Note: Font Awesome is included directly in header.php via CDN

	// Enqueue scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'car-repair-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'car-repair-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'car_repair_theme_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add CSS class to menu items
 */
function car_repair_add_menu_link_class( $atts, $item, $args ) {
    if( property_exists( $args, 'link_class' ) ) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'car_repair_add_menu_link_class', 1, 3 );

/**
 * Add CSS class to menu items
 */
function car_repair_add_additional_class_on_li( $classes, $item, $args ) {
    if( property_exists( $args, 'add_li_class' ) ) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'car_repair_add_additional_class_on_li', 1, 3 );

/**
 * Create Contact Form Shortcode
 */
function car_repair_contact_form_shortcode() {
    ob_start();
    ?>
    <form id="contact-form" class="contact-form" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="<?php echo esc_attr__('Your Name', 'car-repair-theme'); ?>" required>
        </div>
        
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="<?php echo esc_attr__('Your Email', 'car-repair-theme'); ?>" required>
        </div>
        
        <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="<?php echo esc_attr__('Your Phone', 'car-repair-theme'); ?>">
        </div>
        
        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="<?php echo esc_attr__('Your Message', 'car-repair-theme'); ?>" required></textarea>
        </div>
        
        <button type="submit" class="btn-primary"><?php echo esc_html__('Send Message', 'car-repair-theme'); ?></button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode( 'contact_form', 'car_repair_contact_form_shortcode' );

/**
 * Breadcrumbs function 
 */
function car_repair_breadcrumbs() {
    // Settings
    $separator          = '<i class="fas fa-chevron-right"></i>';
    $breadcrumbs_id      = 'breadcrumbs';
    $breadcrumbs_class   = 'breadcrumbs';
    $home_title         = esc_html__('Home', 'car-repair-theme');
    
    // Get the query & post information
    global $post, $wp_query;
    
    // Do not display on the homepage
    if (is_front_page()) {
        return;
    }
    
    // Build the breadcrumbs
    echo '<nav aria-label="' . esc_attr__('Breadcrumb', 'car-repair-theme') . '">';
    echo '<ol id="' . esc_attr($breadcrumbs_id) . '" class="' . esc_attr($breadcrumbs_class) . '" itemscope itemtype="http://schema.org/BreadcrumbList">';
    
    // Home page
    echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    echo '<a itemprop="item" href="' . esc_url(home_url('/')) . '" title="' . esc_attr($home_title) . '">';
    echo '<span itemprop="name">' . esc_html($home_title) . '</span>';
    echo '</a>';
    echo '<meta itemprop="position" content="1" />';
    echo '</li>';
    echo '<li class="separator">' . $separator . '</li>';
    
    if (is_archive() && !is_tax() && !is_category() && !is_tag()) {
        
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $post_type = get_post_type_object(get_post_type());
        echo '<span itemprop="name">' . esc_html($post_type->labels->name) . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        
    } else if (is_archive() && is_tax() && !is_category() && !is_tag()) {
        
        // If post is a custom post type
        $post_type = get_post_type_object(get_post_type());
        
        // Display post type archive link
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<a itemprop="item" href="' . esc_url(get_post_type_archive_link(get_post_type())) . '">';
        echo '<span itemprop="name">' . esc_html($post_type->labels->name) . '</span>';
        echo '</a>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        echo '<li class="separator">' . $separator . '</li>';
        
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html($term->name) . '</span>';
        echo '<meta itemprop="position" content="3" />';
        echo '</li>';
        
    } else if (is_single()) {
        
        // If post is a custom post type
        $post_type = get_post_type_object(get_post_type());
        
        // Display post type archive link if not 'post'
        if (get_post_type() != 'post') {
            echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
            echo '<a itemprop="item" href="' . esc_url(get_post_type_archive_link(get_post_type())) . '">';
            echo '<span itemprop="name">' . esc_html($post_type->labels->name) . '</span>';
            echo '</a>';
            echo '<meta itemprop="position" content="2" />';
            echo '</li>';
            echo '<li class="separator">' . $separator . '</li>';
        } else {
            // If post is in a category
            $categories = get_the_category();
            if ($categories) {
                // Display the first category
                $category = $categories[0];
                echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
                echo '<a itemprop="item" href="' . esc_url(get_category_link($category->term_id)) . '">';
                echo '<span itemprop="name">' . esc_html($category->name) . '</span>';
                echo '</a>';
                echo '<meta itemprop="position" content="2" />';
                echo '</li>';
                echo '<li class="separator">' . $separator . '</li>';
            }
        }
        
        // Current post/page title
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(get_the_title()) . '</span>';
        echo '<meta itemprop="position" content="3" />';
        echo '</li>';
        
    } else if (is_page()) {
        
        // Check if the page has any parent pages
        if ($post->post_parent) {
            
            // Get all the parent pages
            $parent_ids = array();
            $parent_ids[] = $post->post_parent;
            
            // Get all the parent page IDs
            while ($parent_ids[count($parent_ids) - 1]) {
                $parent_post = get_post($parent_ids[count($parent_ids) - 1]);
                if ($parent_post->post_parent) {
                    $parent_ids[] = $parent_post->post_parent;
                } else {
                    break;
                }
            }
            
            // Display parent pages, starting from the highest level
            $parent_ids = array_reverse($parent_ids);
            
            $position = 2;
            foreach ($parent_ids as $parent_id) {
                echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
                echo '<a itemprop="item" href="' . esc_url(get_permalink($parent_id)) . '">';
                echo '<span itemprop="name">' . esc_html(get_the_title($parent_id)) . '</span>';
                echo '</a>';
                echo '<meta itemprop="position" content="' . $position . '" />';
                echo '</li>';
                echo '<li class="separator">' . $separator . '</li>';
                $position++;
            }
        }
        
        // Current page
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(get_the_title()) . '</span>';
        echo '<meta itemprop="position" content="' . ($post->post_parent ? $position : '2') . '" />';
        echo '</li>';
        
    } else if (is_category()) {
        
        // Category name
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(single_cat_title('', false)) . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        
    } else if (is_tag()) {
        
        // Tag name
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(single_tag_title('', false)) . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        
    } else if (is_author()) {
        
        // Author archive
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(get_the_author()) . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        
    } else if (is_search()) {
        
        // Search results
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html__('Search Results for', 'car-repair-theme') . ' "' . esc_html(get_search_query()) . '"</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
        
    } else if (is_404()) {
        
        // 404 page
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html__('404 Not Found', 'car-repair-theme') . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
    }
    
    echo '</ol>';
    echo '</nav>';
}

/**
 * Create Services List Shortcode
 */
function car_repair_services_shortcode() {
    ob_start();
    ?>
    <div class="service-list">
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-oil-can"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Öljynvaihto', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('Regular oil changes to keep your engine running smoothly', 'car-repair-theme'); ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-cog"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Renkaiden vaihto + kausisäilytys', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('Tire change and seasonal storage services', 'car-repair-theme'); ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-car"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Määräaikaishuolto', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('Regular maintenance based on your vehicle mileage', 'car-repair-theme'); ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-snowflake"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Ilmastointihuolto', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('AC system maintenance and repair services', 'car-repair-theme'); ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-balance-scale"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Nelipyöräsuuntaus', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('Wheel alignment services for smoother driving', 'car-repair-theme'); ?></p>
            </div>
        </div>
        <div class="service-item">
            <div class="service-icon"><i class="fas fa-lightbulb"></i></div>
            <div class="service-text">
                <h4><?php echo esc_html__('Lampunvaihto', 'car-repair-theme'); ?></h4>
                <p><?php echo esc_html__('Quick light bulb replacement service', 'car-repair-theme'); ?></p>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'services_list', 'car_repair_services_shortcode' );
