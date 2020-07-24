<?php
/**
 * Shanti Volunteer Association Cambodia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shanti_Volunteer_Association_Cambodia
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.1' );
}

if ( ! function_exists( 'shanti_volunteer_association_cambodia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shanti_volunteer_association_cambodia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shanti Volunteer Association Cambodia, use a find and replace
		 * to change 'shanti-volunteer-association-cambodia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shanti-volunteer-association-cambodia', get_template_directory() . '/languages' );

		add_theme_support( 'post-formats', array('video' ) );

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
				'menu-1' => esc_html__( 'Primary', 'shanti-volunteer-association-cambodia' ),
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
				'shanti_volunteer_association_cambodia_custom_background_args',
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
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'shanti_volunteer_association_cambodia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shanti_volunteer_association_cambodia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shanti_volunteer_association_cambodia_content_width', 640 );
}
add_action( 'after_setup_theme', 'shanti_volunteer_association_cambodia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shanti_volunteer_association_cambodia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'shanti-volunteer-association-cambodia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'shanti-volunteer-association-cambodia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'shanti_volunteer_association_cambodia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shanti_volunteer_association_cambodia_scripts() {
	wp_enqueue_style( 'shanti-khmer-font', get_template_directory_uri().'/assets/style.css', array(), _S_VERSION);
	wp_enqueue_style( 'shanti-volunteer-association-cambodia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'shanti-volunteer-association-cambodia-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'shanti-volunteer-association-cambodia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// wp_enqueue_script( 'shanti-volunteer-association-cambodia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shanti_volunteer_association_cambodia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

require get_template_directory() . '/inc/custom-taxonomy.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('query_vars', 'parameter_queryvars' );
function parameter_queryvars( $qvars ){
	$qvars[] = 'pid';
	return $qvars;
}

function remove_wordpress_version() {
return '';
}
add_filter('the_generator', 'remove_wordpress_version');

// Our custom post type function
function create_posttype_video() {
 
    register_post_type( 'video',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Video' ),
                'singular_name' => __( 'Video' )
            ),
            'hierarchical' => true,
            'public' => true,
            'menu_icon' => 'dashicons-video-alt2',
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video'),
            'show_in_rest' => true,
            'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
 			'taxonomies' => array('post_tag','category'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_video' );

flush_rewrite_rules( false );

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {
	if ( $query->is_home() && $query->is_main_query() ){
		$query->set( 'post_type', array( 'post', 'video') );
		$query->set('orderby', 'meta_value');
		$query->set('meta_key', '_acf_order_post');
		$query->set('order', 'ASC'); 
	}
	
	return $query;
}

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');
 
//Lets add Open Graph Meta Info
 
function insert_fb_in_head() {
    global $post;
    if (is_single() && 'post' == get_post_type()){
    	$des_post = strip_tags( $post->post_content );
        $des_post = strip_shortcodes( $des_post );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
        echo '<meta name="description" content="' . $des_post . '" />';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:description" content="'. $des_post.'" />';
        echo '<meta property="og:site_name" content="'. get_bloginfo('name') .'"/>';
	    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
	        $default_image= get_template_directory_uri().'/assets/images/logo.png'; //replace this with a default image on your server or an image in your media library
	        echo '<meta property="og:image" content="' . $default_image . '"/>';
	    }
	    else{
	        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
	        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	    }
    }
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
