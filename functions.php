<?php
/**
 * Stack Eaters Theme Functions
 */

// Theme setup
function stack_eaters_setup() {
    // Add theme support for custom logo
    add_theme_support('custom-logo');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'stack_eaters_setup');

// Enqueue styles and scripts
function stack_eaters_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('stack-eaters-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom JavaScript if needed
    wp_enqueue_script('stack-eaters-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'stack_eaters_enqueue_assets');

// Theme customizer
function stack_eaters_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Data Technology Stack med AI-touch',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Vi hjälper kunder med fullständiga lösningar från Google Analytics till visualisering med Looker/PowerBI',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => 'Hero Description',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Stats
    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("stat{$i}_number", array(
            'default' => ($i == 1) ? '4' : (($i == 2) ? '100+' : '24/7'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control("stat{$i}_number", array(
            'label' => "Stat {$i} Number",
            'section' => 'hero_section',
            'type' => 'text',
        ));
        
        $wp_customize->add_setting("stat{$i}_label", array(
            'default' => ($i == 1) ? 'Experter' : (($i == 2) ? 'Framgångsrika projekt' : 'AI-driven analys'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control("stat{$i}_label", array(
            'label' => "Stat {$i} Label",
            'section' => 'hero_section',
            'type' => 'text',
        ));
    }
    
    // Company Info Section
    $wp_customize->add_section('company_section', array(
        'title' => 'Company Information',
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('company_title', array(
        'default' => 'Om Stack Eaters',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_title', array(
        'label' => 'Company Section Title',
        'section' => 'company_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('company_description', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('company_description', array(
        'label' => 'Company Description',
        'section' => 'company_section',
        'type' => 'textarea',
    ));
    
    // Security Section
    $wp_customize->add_section('security_section', array(
        'title' => 'Security Section',
        'priority' => 32,
    ));
    
    $wp_customize->add_setting('security_text', array(
        'default' => 'Vi på Stack Eaters sätter datasäkerhet främst. All hantering sker i enlighet med GDPR, med krypterad lagring och strikt åtkomstkontroll. Våra AI-lösningar är alltid transparenta – människan har det sista ordet.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('security_text', array(
        'label' => 'Security Text',
        'section' => 'security_section',
        'type' => 'textarea',
    ));
    
    // Site Identity
    $wp_customize->add_setting('site_title', array(
        'default' => 'Stack Eaters',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('site_title', array(
        'label' => 'Site Title',
        'section' => 'title_tagline',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('site_tagline', array(
        'default' => '"Mindre snack, mer stack"',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('site_tagline', array(
        'label' => 'Site Tagline',
        'section' => 'title_tagline',
        'type' => 'text',
    ));
    
    // Footer
    $wp_customize->add_setting('footer_text', array(
        'default' => 'Alla rättigheter förbehållna.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_text', array(
        'label' => 'Footer Text',
        'section' => 'title_tagline',
        'type' => 'text',
    ));
}
add_action('customize_register', 'stack_eaters_customize_register');

// Widget areas
function stack_eaters_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Widgets',
        'id' => 'footer-widgets',
        'description' => 'Widgets for footer area',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'stack_eaters_widgets_init');

// Custom post types (if needed for services)
function stack_eaters_custom_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in trash',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'services'),
    ));
    
    // Case studies post type
    register_post_type('case_studies', array(
        'labels' => array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new' => 'Add New Case Study',
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'new_item' => 'New Case Study',
            'view_item' => 'View Case Study',
            'search_items' => 'Search Case Studies',
            'not_found' => 'No case studies found',
            'not_found_in_trash' => 'No case studies found in trash',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-analytics',
        'rewrite' => array('slug' => 'case-studies'),
    ));
}
add_action('init', 'stack_eaters_custom_post_types');

// Remove WordPress version from head
function stack_eaters_remove_wp_version() {
    return '';
}
add_filter('the_generator', 'stack_eaters_remove_wp_version');

// Security enhancements
function stack_eaters_security() {
    // Remove WordPress version from RSS feeds
    add_filter('the_generator', '__return_empty_string');
    
    // Hide login errors
    add_filter('login_errors', '__return_empty_string');
    
    // Remove WP version from scripts and styles
    function remove_wp_version_strings($src) {
        if (strpos($src, 'ver=')) {
            $src = remove_query_arg('ver', $src);
        }
        return $src;
    }
    add_filter('script_loader_src', 'remove_wp_version_strings', 15, 1);
    add_filter('style_loader_src', 'remove_wp_version_strings', 15, 1);
}
add_action('init', 'stack_eaters_security');

// Performance optimizations
function stack_eaters_performance() {
    // Remove unnecessary WordPress features
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'stack_eaters_performance');

?>