<?php

/*
 *  @Author: Rafael Shouman
 *  @email: shoumanrafael@hotmail.com 
 *  Custom functions, support, custom post types, metaboxes and more.
 */

 
 // All thumbnails sizes
add_theme_support( "post-thumbnails" );
add_image_size('thumb-square', 330, 330, true);
add_image_size('thumb-ret', 330, 210, true);
add_image_size('thumb-custom', 500, 330, true);
add_image_size('home', 935, 520, true);
add_image_size('big-post', 1366, 450, true);
add_image_size('slide', 1900, 1080, true);

function custom_excerpt_length($length) {
    return 30; //Nova quantidade de caracteres do excerpt
}

add_filter('excerpt_length', 'custom_excerpt_length');



// Remove menu
function remove_menus() {
    remove_menu_page( "index.php" ); //Dashboard
    remove_menu_page( "jetpack" ); //Jetpack*
    remove_menu_page( "edit-comments.php" ); //Comments
}

add_action( "admin_menu", "remove_menus" );

/*************************************
********* CUSTOM POSTS TYPES *********
*************************************/
include_once("functions/custom-post-types.php");
include_once("functions/custom-shortcodes.php");
include_once("functions/custom-taxonomies.php");
/*************************************
******* END CUSTOM POSTS TYPES *******
*************************************/

function headless_custom_menu_order( $menu_ord ) {
    if ( !$menu_ord ) return true;

    return array(
        "edit.php?post_type=articles", // Custom Post Type
        "edit.php?post_type=portfolio", // Custom Post Type
        "edit.php?post_type=slider", // Custom Post Type
        "edit.php?post_type=page", // Pages
        "edit.php", // Posts
        "separator1", // First separator

        "upload.php", // Media
        "themes.php", // Appearance
        "plugins.php", // Plugins
        "users.php", // Users
        "separator2", // Second separator

        "tools.php", // Tools
        "options-general.php", // Settings
        "separator-last", // Last separator
    );
}
add_filter( "custom_menu_order", "headless_custom_menu_order", 10, 1 );
add_filter( "menu_order", "headless_custom_menu_order", 10, 1 );

function headless_disable_feed() {
    wp_die( __('No feed available, please visit our <a href="'. get_bloginfo("url") .'">homepage</a>!') );
}

add_action("do_feed", "headless_disable_feed", 1);
add_action("do_feed_rdf", "headless_disable_feed", 1);
add_action("do_feed_rss", "headless_disable_feed", 1);
add_action("do_feed_rss2", "headless_disable_feed", 1);
add_action("do_feed_atom", "headless_disable_feed", 1);
add_action("do_feed_rss2_comments", "headless_disable_feed", 1);
add_action("do_feed_atom_comments", "headless_disable_feed", 1);

/*************************************
*********** CUSTOM ADMIN **************
**************************************/

function my_login_logo_url() {
    return 'http://shouman.xyz/';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Powered by Rafael Shouman';
}

add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/assets/css/style-login.css' );
    wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/assets/js/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );