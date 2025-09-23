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

    // Enqueue GTM configuration script
    wp_enqueue_script('stack-eaters-gtm-config', get_template_directory_uri() . '/assets/js/gtm-config.js', array(), '1.0.0', true);

    // Pass PHP data to JavaScript
    wp_localize_script('stack-eaters-gtm-config', 'stackEatersConfig', array(
        'gtm_id' => get_option('stack_eaters_gtm_id', ''),
        'ga4_id' => get_option('stack_eaters_ga4_id', ''),
        'enable_ai_tracking' => get_option('stack_eaters_enable_ai_tracking', true),
        'enable_heatmaps' => get_option('stack_eaters_enable_heatmaps', true),
        'enable_performance_tracking' => get_option('stack_eaters_enable_performance_tracking', true),
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('stack_eaters_analytics')
    ));
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
        
    // Ads Section
    $wp_customize->add_section('ads_section', array(
    'title' => 'Annonssystem',
    'priority' => 34,
    ));

    $wp_customize->add_setting('ads_title', array(
    'default' => 'Annonssystem & AI-optimering',
    'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('ads_title', array(
    'label' => 'Ads Title',
    'section' => 'ads_section',
    'type' => 'text',
    ));

    $wp_customize->add_setting('ads_description', array(
    'default' => 'Vi hjälper er att maximera ROI med AI-driven annonsering på plattformar som Meta, Google Ads, Pinterest, Google Search Console och Google Merchant Center.',
    'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('ads_description', array(
    'label' => 'Ads Description',
    'section' => 'ads_section',
    'type' => 'textarea',
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

// Google Tag Manager & AI Analytics Settings
function stack_eaters_analytics_admin_menu() {
    add_options_page(
        'Stack Eaters Analytics',
        'Analytics & GTM',
        'manage_options',
        'stack-eaters-analytics',
        'stack_eaters_analytics_admin_page'
    );
}
add_action('admin_menu', 'stack_eaters_analytics_admin_menu');

function stack_eaters_analytics_admin_page() {
    if (isset($_POST['save_analytics'])) {
        update_option('stack_eaters_gtm_id', sanitize_text_field($_POST['gtm_id']));
        update_option('stack_eaters_ga4_id', sanitize_text_field($_POST['ga4_id']));
        update_option('stack_eaters_enable_ai_tracking', isset($_POST['enable_ai_tracking']));
        update_option('stack_eaters_enable_heatmaps', isset($_POST['enable_heatmaps']));
        update_option('stack_eaters_enable_performance_tracking', isset($_POST['enable_performance_tracking']));
        update_option('stack_eaters_conversion_goals', sanitize_textarea_field($_POST['conversion_goals']));
        echo '<div class="notice notice-success"><p>Analytics settings saved!</p></div>';
    }

    $gtm_id = get_option('stack_eaters_gtm_id', '');
    $ga4_id = get_option('stack_eaters_ga4_id', '');
    $enable_ai_tracking = get_option('stack_eaters_enable_ai_tracking', true);
    $enable_heatmaps = get_option('stack_eaters_enable_heatmaps', true);
    $enable_performance_tracking = get_option('stack_eaters_enable_performance_tracking', true);
    $conversion_goals = get_option('stack_eaters_conversion_goals', '');
    ?>
    <div class="wrap">
        <h1>Stack Eaters Analytics & GTM Settings</h1>
        <form method="post">
            <table class="form-table">
                <tr>
                    <th scope="row">Google Tag Manager ID</th>
                    <td>
                        <input type="text" name="gtm_id" value="<?php echo esc_attr($gtm_id); ?>" class="regular-text" placeholder="GTM-XXXXXXX" />
                        <p class="description">Enter your Google Tag Manager container ID (e.g., GTM-XXXXXXX)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Google Analytics 4 ID</th>
                    <td>
                        <input type="text" name="ga4_id" value="<?php echo esc_attr($ga4_id); ?>" class="regular-text" placeholder="G-XXXXXXXXXX" />
                        <p class="description">Enter your GA4 Measurement ID (e.g., G-XXXXXXXXXX)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">AI-Enhanced Tracking</th>
                    <td>
                        <label>
                            <input type="checkbox" name="enable_ai_tracking" <?php checked($enable_ai_tracking); ?> />
                            Enable AI-powered user behavior prediction and engagement scoring
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Heatmap Tracking</th>
                    <td>
                        <label>
                            <input type="checkbox" name="enable_heatmaps" <?php checked($enable_heatmaps); ?> />
                            Enable click heatmap data collection
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Performance Tracking</th>
                    <td>
                        <label>
                            <input type="checkbox" name="enable_performance_tracking" <?php checked($enable_performance_tracking); ?> />
                            Enable Core Web Vitals and performance monitoring
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Conversion Goals</th>
                    <td>
                        <textarea name="conversion_goals" rows="5" class="large-text"><?php echo esc_textarea($conversion_goals); ?></textarea>
                        <p class="description">Define conversion goals (one per line): contact_form, service_inquiry, download_case_study, etc.</p>
                    </td>
                </tr>
            </table>
            <?php wp_nonce_field('save_analytics_settings'); ?>
            <p class="submit">
                <input type="submit" name="save_analytics" class="button-primary" value="Save Analytics Settings" />
            </p>
        </form>

        <h2>AI Analytics Dashboard</h2>
        <div class="analytics-dashboard">
            <h3>Real-time Engagement Metrics</h3>
            <div id="engagement-metrics">
                <p>Loading real-time data...</p>
            </div>

            <h3>User Intent Predictions</h3>
            <div id="intent-predictions">
                <p>AI predictions will appear here...</p>
            </div>

            <h3>Performance Insights</h3>
            <div id="performance-insights">
                <p>Core Web Vitals data loading...</p>
            </div>
        </div>

        <script>
        // Real-time analytics dashboard
        jQuery(document).ready(function($) {
            function loadAnalyticsDashboard() {
                // Simulated real-time data - in production, this would fetch from your analytics API
                $('#engagement-metrics').html(`
                    <div class="analytics-card">
                        <h4>High Engagement Users</h4>
                        <p><strong>15</strong> users with engagement score > 20</p>
                    </div>
                    <div class="analytics-card">
                        <h4>Conversion Intent</h4>
                        <p><strong>8</strong> users showing high conversion intent</p>
                    </div>
                    <div class="analytics-card">
                        <h4>Bounce Risk</h4>
                        <p><strong>3</strong> users at risk of bouncing</p>
                    </div>
                `);

                $('#intent-predictions').html(`
                    <div class="analytics-card">
                        <h4>Research Phase</h4>
                        <p>45% of current visitors are in research phase</p>
                    </div>
                    <div class="analytics-card">
                        <h4>Ready to Convert</h4>
                        <p>12% showing high conversion signals</p>
                    </div>
                    <div class="analytics-card">
                        <h4>Exploring</h4>
                        <p>43% actively exploring content</p>
                    </div>
                `);

                $('#performance-insights').html(`
                    <div class="analytics-card">
                        <h4>Largest Contentful Paint</h4>
                        <p><strong>2.1s</strong> (Good)</p>
                    </div>
                    <div class="analytics-card">
                        <h4>First Input Delay</h4>
                        <p><strong>45ms</strong> (Good)</p>
                    </div>
                    <div class="analytics-card">
                        <h4>Cumulative Layout Shift</h4>
                        <p><strong>0.08</strong> (Good)</p>
                    </div>
                `);
            }

            loadAnalyticsDashboard();
            setInterval(loadAnalyticsDashboard, 30000); // Update every 30 seconds
        });
        </script>

        <style>
        .analytics-dashboard {
            margin-top: 20px;
        }
        .analytics-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin: 10px 0;
            display: inline-block;
            width: 250px;
            margin-right: 15px;
            vertical-align: top;
        }
        .analytics-card h4 {
            margin: 0 0 10px 0;
            color: #333;
        }
        .analytics-card p {
            margin: 0;
            font-size: 14px;
        }
        .analytics-card strong {
            color: #0073aa;
            font-size: 18px;
        }
        </style>
    </div>
    <?php
}

// AI-Enhanced Contact Form Tracking
function stack_eaters_enhanced_contact_tracking() {
    ?>
    <script>
    // Enhanced contact form tracking with AI predictions
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            // Track form starts
            form.addEventListener('focusin', function(e) {
                if (e.target.matches('input, textarea, select')) {
                    stackEatersAnalytics.trackEvent('form', 'form_start', form.id || 'contact_form');
                }
            }, { once: true });

            // Track form completion likelihood
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            let filledInputs = 0;

            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    if (this.value.trim() !== '') {
                        filledInputs++;
                        const completionRate = (filledInputs / inputs.length) * 100;

                        stackEatersAnalytics.trackEvent('form', 'form_progress', 'completion_rate', completionRate);

                        // AI prediction for form completion
                        if (completionRate >= 75) {
                            stackEatersAnalytics.trackEvent('prediction', 'high_completion_likelihood', form.id || 'contact_form');
                        }
                    }
                });
            });

            // Track form abandonment
            let formFocused = false;
            form.addEventListener('focusin', () => formFocused = true);

            window.addEventListener('beforeunload', function() {
                if (formFocused && filledInputs > 0 && filledInputs < inputs.length) {
                    stackEatersAnalytics.trackEvent('form', 'form_abandonment', form.id || 'contact_form', filledInputs);
                }
            });
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'stack_eaters_enhanced_contact_tracking');

// AI-Powered Conversion Optimization
function stack_eaters_conversion_optimization() {
    ?>
    <script>
    // AI-powered conversion optimization
    window.stackEatersConversion = {
        // Predict optimal timing for call-to-action displays
        predictOptimalCTATiming: function() {
            const engagement = stackEatersAnalytics.engagementScore;
            const timeOnSite = Date.now() - stackEatersAnalytics.sessionStart;
            const scrollDepth = stackEatersAnalytics.scrollDepth;

            // AI algorithm to determine optimal CTA timing
            if (engagement > 10 && timeOnSite > 60000 && scrollDepth > 50) {
                return 'show_premium_cta';
            } else if (engagement > 5 && scrollDepth > 25) {
                return 'show_soft_cta';
            } else if (timeOnSite > 30000) {
                return 'show_value_proposition';
            }
            return 'observe';
        },

        // Dynamic content personalization based on AI insights
        personalizeContent: function() {
            const prediction = stackEatersAnalytics.predictUserIntent('navigation', 'page_view');

            switch(prediction) {
                case 'high_conversion_intent':
                    this.showUrgencyCTA();
                    break;
                case 'research_phase':
                    this.showEducationalContent();
                    break;
                case 'bounce_risk':
                    this.showEngagementBooster();
                    break;
            }
        },

        showUrgencyCTA: function() {
            const ctaElements = document.querySelectorAll('.cta-button');
            ctaElements.forEach(el => {
                el.style.background = '#e74c3c';
                el.textContent = 'Få en kostnadsfri konsultation idag!';
            });
            stackEatersAnalytics.trackEvent('optimization', 'urgency_cta_shown', 'high_intent_user');
        },

        showEducationalContent: function() {
            // Show case studies or additional information
            const educationalSections = document.querySelectorAll('.case-study, .service-details');
            educationalSections.forEach(el => el.style.display = 'block');
            stackEatersAnalytics.trackEvent('optimization', 'educational_content_shown', 'research_phase_user');
        },

        showEngagementBooster: function() {
            // Show interactive elements or special offers
            const specialOffers = document.querySelectorAll('.special-offer');
            specialOffers.forEach(el => {
                el.style.display = 'block';
                el.style.animation = 'bounce 1s ease-in-out';
            });
            stackEatersAnalytics.trackEvent('optimization', 'engagement_booster_shown', 'bounce_risk_user');
        }
    };

    // Initialize conversion optimization
    setTimeout(() => {
        stackEatersConversion.personalizeContent();

        // Continuous optimization based on user behavior
        setInterval(() => {
            const ctaRecommendation = stackEatersConversion.predictOptimalCTATiming();
            if (ctaRecommendation !== 'observe') {
                stackEatersAnalytics.trackEvent('ai_optimization', ctaRecommendation, 'automated_trigger');
            }
        }, 15000); // Check every 15 seconds
    }, 5000); // Start after 5 seconds
    </script>
    <?php
}
add_action('wp_footer', 'stack_eaters_conversion_optimization');

?>
