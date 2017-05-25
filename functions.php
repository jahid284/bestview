<?php
/**
 * bestview functions and setup
 *
 * @link https://github.com/jahid284
 *
 * @package bestview
 *
 */

 /**
  * Sets up theme defaults and registers support for various WordPress features.
  */

  function bestview_setup() {
  	/*
  	 * Make theme available for translation.
  	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
  	 * If you're building a theme based on Twenty Seventeen, use a find and replace
  	 * to change 'twentyseventeen' to the name of your theme in all the template files.
  	 */
  	load_theme_textdomain( 'bview' );

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

  	add_image_size( 'bestview-featured-image', 2000, 1200, true );

  	add_image_size( 'bestview-thumbnail-avatar', 100, 100, true );

  	// Set the default content width.
  	$GLOBALS['content_width'] = 525;

  	// This theme uses wp_nav_menu() in two locations.
  	register_nav_menus( array(
  		'top'    => __( 'Top Menu', 'bview' ),
  		'social' => __( 'Social Links Menu', 'bview' ),
  	) );

  	/*
  	 * Switch default core markup for search form, comment form, and comments
  	 * to output valid HTML5.
  	 */
  	add_theme_support( 'html5', array(
  		'comment-form',
  		'comment-list',
  		'gallery',
  		'caption',
  	) );

  	/*
  	 * Enable support for Post Formats.
  	 *
  	 * See: https://codex.wordpress.org/Post_Formats
  	 */
  	add_theme_support( 'post-formats', array(
  		'aside',
  		'image',
  		'video',
  		'quote',
  		'link',
  		'gallery',
  		'audio',
  	) );

  	// Add theme support for Custom Logo.
  	add_theme_support( 'custom-logo', array(
  		'width'       => 120,
  		'height'      => 120,
  		'flex-width'  => true,
  	) );

  }
  add_action( 'after_setup_theme', 'bestview_setup' );
  /**
   * Enqueue scripts and styles.
   */
   function bestview_scripts(){
     // Load bootstrap 4
     wp_enqueue_style('bootstrap', get_theme_file_uri( '/assets/bootstrap/css/bootstrap.min.css' ), array( ), '4.0');
     //Load tether
     wp_enqueue_script( 'tether', get_theme_file_uri( '/assets/bootstrap/js/tether.min.js' ), array(), '4.0', true );
     //Load bootstrap js
     wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/bootstrap/js/bootstrap.min.js' ), array('tether'), '4.0', true );
     //Load custom script
     wp_enqueue_script( 'custom-script', get_theme_file_uri( '/assets/script.js' ), array(''), '1.0', true );

   }
   add_action( 'wp_enqueue_scripts', 'bestview_scripts' );
