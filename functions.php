<?php
/**
 * Funny WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Funny_WP
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */

function funnywp_scripts() {
    wp_enqueue_style( 'funnywp-style', get_stylesheet_uri() );

    wp_enqueue_script( 'funnywp-header-nav', get_template_directory_uri() . '/js/header-nav.js', array(), '1.1', false );
}

//add_action( 'wp_head', 'funnywp_add_scripts' );
add_action( 'wp_enqueue_scripts', 'funnywp_scripts' );

/**
 * Header Navigation
 * This theme uses wp_nav_menu()
 */
register_nav_menus(
    array(
        'header-nav' => __( 'Header Nav', 'funnywp' ),
        'footer-nav' => __( 'Footer Nav', 'funnywp' )
    )
);
function nav_item_css_class_filter( $classes, $item, $args, $depth ) {
    array_push( $classes, 'header-nav-menu-item' );
    return $classes;
}
add_filter( 'nav_menu_css_class', 'nav_item_css_class_filter' );


/**
 * Sidebar
 */
register_sidebar( array(
    'name' => __('Sidebar widget area', 'funnywp' ),
    'id' => 'sidebar-primary',
    'description' => __('Sidebar widget area', 'funnywp' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

//require get_template_directory() . '/inc/nav_walker.php';


?>