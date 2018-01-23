<?php

require 'inc/bs-navmenu.php';

if (!function_exists('real_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own academlyc_setup() function to override in a child theme.
     *
     * @since Twenty Sixteen 1.0
     */
    function real_setup()
    {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 0, true);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'left-menu' => __('Левое меню', 'real'),
            'right-menu' => __('Правое меню', 'real'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));
    }
endif; // academlyc_setup
add_action('after_setup_theme', 'real_setup');

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function real_scripts()
{
    // bootstrap.min.css
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');

    // font-awesome.min.css
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

    // Theme stylesheet.
    wp_enqueue_style('real-style?v=01042016', get_stylesheet_uri());
    
    // bootstrap.min.js
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151219', false);
}

add_action('wp_enqueue_scripts', 'real_scripts');