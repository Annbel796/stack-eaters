<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo get_option('stack_eaters_gtm_id', 'GTM-XXXXXXX'); ?>');</script>
    <!-- End Google Tag Manager -->

    <!-- Stack Eaters AI-Enhanced Analytics -->
    <script>
    window.dataLayer = window.dataLayer || [];

    // AI-Enhanced User Journey Tracking
    window.stackEatersAnalytics = {
        userId: '<?php echo wp_get_current_user()->ID ? wp_get_current_user()->ID : "anonymous_" . session_id(); ?>',
        sessionStart: Date.now(),
        pageViews: 0,
        scrollDepth: 0,
        engagementScore: 0,
        userType: '<?php echo is_user_logged_in() ? "registered" : "visitor"; ?>',
        deviceType: /Mobile|Android|iPhone|iPad/.test(navigator.userAgent) ? 'mobile' : 'desktop',

        // AI-powered event tracking
        trackEvent: function(category, action, label, value) {
            // Calculate engagement score based on user behavior
            this.engagementScore += this.calculateEngagementWeight(category, action);

            // Enhanced dataLayer push with AI insights
            dataLayer.push({
                event: 'stack_eaters_event',
                event_category: category,
                event_action: action,
                event_label: label,
                event_value: value,
                user_id: this.userId,
                session_duration: Date.now() - this.sessionStart,
                engagement_score: this.engagementScore,
                user_type: this.userType,
                device_type: this.deviceType,
                page_depth: this.pageViews,
                scroll_depth: this.scrollDepth,
                ai_prediction: this.predictUserIntent(category, action)
            });
        },

        // AI algorithm to calculate engagement weight
        calculateEngagementWeight: function(category, action) {
            const weights = {
                'page_view': 1,
                'scroll': 0.5,
                'click': 2,
                'form_interaction': 3,
                'contact_form': 5,
                'service_inquiry': 7,
                'download': 4,
                'video_play': 3,
                'social_share': 2
            };
            return weights[action] || 1;
        },

        // AI-powered user intent prediction
        predictUserIntent: function(category, action) {
            const score = this.engagementScore;
            const duration = Date.now() - this.sessionStart;
            const pageDepth = this.pageViews;

            if (category === 'contact' || action === 'service_inquiry') {
                return 'high_conversion_intent';
            } else if (score > 15 && duration > 120000) { // 2 minutes
                return 'high_engagement';
            } else if (pageDepth > 3) {
                return 'research_phase';
            } else if (duration < 30000) { // 30 seconds
                return 'bounce_risk';
            } else {
                return 'exploring';
            }
        },

        // Initialize tracking
        init: function() {
            this.trackPageView();
            this.setupScrollTracking();
            this.setupFormTracking();
            this.setupClickTracking();
            this.setupPerformanceTracking();
        },

        // Enhanced page view tracking
        trackPageView: function() {
            this.pageViews++;
            this.trackEvent('navigation', 'page_view', window.location.pathname, this.pageViews);
        },

        // Advanced scroll depth tracking
        setupScrollTracking: function() {
            let maxScroll = 0;
            let scrollTimeout;

            window.addEventListener('scroll', () => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    const scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);

                    if (scrollPercent > maxScroll) {
                        maxScroll = scrollPercent;
                        this.scrollDepth = maxScroll;

                        // Track milestone scroll depths
                        if ([25, 50, 75, 90].includes(scrollPercent)) {
                            this.trackEvent('engagement', 'scroll', `${scrollPercent}%`, scrollPercent);
                        }
                    }
                }, 250);
            });
        },

        // AI-enhanced form tracking
        setupFormTracking: function() {
            document.addEventListener('focus', (e) => {
                if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
                    this.trackEvent('form', 'form_interaction', e.target.name || e.target.id || 'unnamed_field');
                }
            }, true);

            document.addEventListener('submit', (e) => {
                if (e.target.tagName === 'FORM') {
                    const formType = e.target.id || e.target.className || 'generic_form';
                    this.trackEvent('conversion', 'form_submit', formType, 10);
                }
            });
        },

        // Smart click tracking with heatmap data
        setupClickTracking: function() {
            document.addEventListener('click', (e) => {
                const element = e.target;
                const tagName = element.tagName.toLowerCase();
                const classList = Array.from(element.classList).join(' ');
                const id = element.id;

                // Track important clicks
                if (['a', 'button', 'input'].includes(tagName) || classList.includes('trackable')) {
                    const label = element.textContent?.trim() || id || classList || tagName;
                    this.trackEvent('interaction', 'click', label);

                    // Store click coordinates for heatmap
                    dataLayer.push({
                        event: 'click_heatmap',
                        click_x: e.clientX,
                        click_y: e.clientY,
                        element_tag: tagName,
                        element_classes: classList,
                        element_text: element.textContent?.trim()
                    });
                }
            });
        },

        // Performance tracking with Core Web Vitals
        setupPerformanceTracking: function() {
            // Largest Contentful Paint
            new PerformanceObserver((entryList) => {
                for (const entry of entryList.getEntries()) {
                    dataLayer.push({
                        event: 'web_vitals',
                        metric_name: 'LCP',
                        metric_value: Math.round(entry.startTime),
                        metric_rating: entry.startTime > 4000 ? 'poor' : entry.startTime > 2500 ? 'needs_improvement' : 'good'
                    });
                }
            }).observe({entryTypes: ['largest-contentful-paint']});

            // First Input Delay
            new PerformanceObserver((entryList) => {
                for (const entry of entryList.getEntries()) {
                    dataLayer.push({
                        event: 'web_vitals',
                        metric_name: 'FID',
                        metric_value: Math.round(entry.processingStart - entry.startTime),
                        metric_rating: entry.processingStart - entry.startTime > 300 ? 'poor' : entry.processingStart - entry.startTime > 100 ? 'needs_improvement' : 'good'
                    });
                }
            }).observe({entryTypes: ['first-input']});

            // Cumulative Layout Shift
            new PerformanceObserver((entryList) => {
                let clsValue = 0;
                for (const entry of entryList.getEntries()) {
                    if (!entry.hadRecentInput) {
                        clsValue += entry.value;
                    }
                }
                dataLayer.push({
                    event: 'web_vitals',
                    metric_name: 'CLS',
                    metric_value: Math.round(clsValue * 1000) / 1000,
                    metric_rating: clsValue > 0.25 ? 'poor' : clsValue > 0.1 ? 'needs_improvement' : 'good'
                });
            }).observe({entryTypes: ['layout-shift']});
        }
    };

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => stackEatersAnalytics.init());
    } else {
        stackEatersAnalytics.init();
    }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_option('stack_eaters_gtm_id', 'GTM-XXXXXXX'); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <div class="container">
        <div class="header-content">
            <div>
                <div class="logo">
                    <?php 
                    if (get_theme_mod('custom_logo')) {
                        the_custom_logo();
                    } else {
                        echo get_theme_mod('site_title', 'Stack Eaters');
                    }
                    ?>
                </div>
                <div class="tagline"><?php echo get_theme_mod('site_tagline', '"Mindre snack, mer stack"'); ?></div>
            </div>
        </div>
    </div>
</header>

<nav>
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => '',
            'container' => false,
            'fallback_cb' => 'stack_eaters_fallback_menu'
        ));
        ?>
    </div>
</nav>

<?php
// Fallback menu if no menu is set
function stack_eaters_fallback_menu() {
    echo '<ul>
        <li><a href="#hem">Hem</a></li>
        <li><a href="#tjanster">Tjänster</a></li>
        <li><a href="#om-oss">Om oss</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>';
}
?>