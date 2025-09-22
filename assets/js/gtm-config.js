/**
 * Stack Eaters - Optimized Google Tag Manager Configuration
 * AI-Enhanced Analytics with Performance Optimization
 */

// GTM Configuration for Stack Eaters
window.stackEatersGTMConfig = {
    // Custom dimensions mapping for GA4
    customDimensions: {
        user_type: 'custom_dimension_1',
        engagement_score: 'custom_dimension_2',
        ai_prediction: 'custom_dimension_3',
        device_type: 'custom_dimension_4',
        session_duration: 'custom_dimension_5',
        scroll_depth: 'custom_dimension_6',
        page_depth: 'custom_dimension_7'
    },

    // Enhanced eCommerce events for service inquiries
    enhancedEcommerce: {
        // Track service page views as product views
        trackServiceView: function(serviceName, serviceCategory, servicePrice) {
            dataLayer.push({
                event: 'view_item',
                ecommerce: {
                    currency: 'SEK',
                    value: servicePrice || 0,
                    items: [{
                        item_id: serviceName.toLowerCase().replace(/\s+/g, '_'),
                        item_name: serviceName,
                        item_category: serviceCategory || 'Data Technology Services',
                        price: servicePrice || 0,
                        quantity: 1
                    }]
                },
                user_type: stackEatersAnalytics.userType,
                engagement_score: stackEatersAnalytics.engagementScore
            });
        },

        // Track when user starts service inquiry (add to cart equivalent)
        trackServiceInquiry: function(serviceName, serviceCategory, inquiryType) {
            dataLayer.push({
                event: 'add_to_cart',
                ecommerce: {
                    currency: 'SEK',
                    value: 5000, // Estimated service value
                    items: [{
                        item_id: serviceName.toLowerCase().replace(/\s+/g, '_'),
                        item_name: serviceName,
                        item_category: serviceCategory || 'Data Technology Services',
                        price: 5000,
                        quantity: 1
                    }]
                },
                inquiry_type: inquiryType,
                ai_prediction: stackEatersAnalytics.predictUserIntent('service', 'inquiry')
            });
        },

        // Track consultation bookings as purchases
        trackConsultationBooking: function(serviceName, consultationType, value) {
            dataLayer.push({
                event: 'purchase',
                ecommerce: {
                    transaction_id: 'consultation_' + Date.now(),
                    currency: 'SEK',
                    value: value || 0,
                    items: [{
                        item_id: 'consultation_' + serviceName.toLowerCase().replace(/\s+/g, '_'),
                        item_name: 'Consultation: ' + serviceName,
                        item_category: 'Consultations',
                        price: value || 0,
                        quantity: 1
                    }]
                },
                consultation_type: consultationType,
                booking_source: 'website'
            });
        }
    },

    // Advanced user journey tracking
    userJourney: {
        touchpoints: [],

        addTouchpoint: function(touchpoint, value) {
            this.touchpoints.push({
                timestamp: Date.now(),
                touchpoint: touchpoint,
                value: value,
                session_id: stackEatersAnalytics.userId,
                engagement_score: stackEatersAnalytics.engagementScore
            });

            // Send to GTM every 3 touchpoints or when high-value touchpoint occurs
            if (this.touchpoints.length % 3 === 0 || value > 5) {
                this.sendJourneyData();
            }
        },

        sendJourneyData: function() {
            dataLayer.push({
                event: 'user_journey_update',
                journey_data: {
                    touchpoints: this.touchpoints,
                    journey_length: this.touchpoints.length,
                    total_engagement: this.touchpoints.reduce((sum, tp) => sum + (tp.value || 0), 0),
                    session_duration: Date.now() - stackEatersAnalytics.sessionStart
                }
            });
        }
    },

    // Performance-optimized event batching
    eventBatcher: {
        batch: [],
        batchSize: 5,
        flushInterval: 10000, // 10 seconds

        init: function() {
            setInterval(() => this.flush(), this.flushInterval);

            // Flush on page unload
            window.addEventListener('beforeunload', () => this.flush());
        },

        addEvent: function(eventData) {
            this.batch.push(eventData);

            if (this.batch.length >= this.batchSize) {
                this.flush();
            }
        },

        flush: function() {
            if (this.batch.length > 0) {
                dataLayer.push({
                    event: 'batch_events',
                    batch_data: {
                        events: [...this.batch],
                        batch_size: this.batch.length,
                        timestamp: Date.now()
                    }
                });
                this.batch = [];
            }
        }
    },

    // AI-powered content optimization tracking
    contentOptimization: {
        // A/B test result tracking
        trackABTest: function(testName, variant, outcome) {
            dataLayer.push({
                event: 'ab_test_result',
                test_name: testName,
                variant: variant,
                outcome: outcome,
                user_engagement: stackEatersAnalytics.engagementScore,
                session_duration: Date.now() - stackEatersAnalytics.sessionStart
            });
        },

        // Content personalization effectiveness
        trackPersonalization: function(contentType, personalizedElement, effectiveness) {
            dataLayer.push({
                event: 'personalization_tracking',
                content_type: contentType,
                personalized_element: personalizedElement,
                effectiveness_score: effectiveness,
                ai_prediction: stackEatersAnalytics.predictUserIntent(contentType, 'view'),
                user_segment: this.getUserSegment()
            });
        },

        getUserSegment: function() {
            const engagement = stackEatersAnalytics.engagementScore;
            const sessionDuration = Date.now() - stackEatersAnalytics.sessionStart;

            if (engagement > 20 && sessionDuration > 300000) { // 5 minutes
                return 'high_value_prospect';
            } else if (engagement > 10) {
                return 'engaged_visitor';
            } else if (sessionDuration > 60000) { // 1 minute
                return 'interested_browser';
            } else {
                return 'casual_visitor';
            }
        }
    },

    // Lead scoring integration
    leadScoring: {
        calculateScore: function() {
            let score = 0;

            // Base engagement scoring
            score += stackEatersAnalytics.engagementScore * 2;

            // Time-based scoring
            const sessionMinutes = (Date.now() - stackEatersAnalytics.sessionStart) / 60000;
            score += Math.min(sessionMinutes * 5, 50); // Max 50 points for time

            // Page depth scoring
            score += stackEatersAnalytics.pageViews * 10;

            // Scroll depth scoring
            score += stackEatersAnalytics.scrollDepth * 0.5;

            // Interaction-based scoring
            if (this.hasContactInteraction()) score += 30;
            if (this.hasServicePageView()) score += 20;
            if (this.hasFormInteraction()) score += 25;

            return Math.round(score);
        },

        hasContactInteraction: function() {
            return this.checkDataLayerForEvent('contact');
        },

        hasServicePageView: function() {
            return window.location.pathname.includes('service') ||
                   this.checkDataLayerForEvent('service_view');
        },

        hasFormInteraction: function() {
            return this.checkDataLayerForEvent('form_interaction');
        },

        checkDataLayerForEvent: function(eventType) {
            return dataLayer.some(item =>
                item.event && item.event.includes(eventType)
            );
        },

        sendLeadScore: function() {
            const score = this.calculateScore();
            const qualification = this.getLeadQualification(score);

            dataLayer.push({
                event: 'lead_scoring_update',
                lead_score: score,
                lead_qualification: qualification,
                scoring_factors: {
                    engagement_score: stackEatersAnalytics.engagementScore,
                    session_duration: Date.now() - stackEatersAnalytics.sessionStart,
                    page_views: stackEatersAnalytics.pageViews,
                    scroll_depth: stackEatersAnalytics.scrollDepth
                },
                recommended_action: this.getRecommendedAction(qualification)
            });
        },

        getLeadQualification: function(score) {
            if (score >= 100) return 'hot_lead';
            if (score >= 70) return 'warm_lead';
            if (score >= 40) return 'interested_lead';
            return 'cold_lead';
        },

        getRecommendedAction: function(qualification) {
            switch(qualification) {
                case 'hot_lead': return 'immediate_contact';
                case 'warm_lead': return 'follow_up_within_24h';
                case 'interested_lead': return 'nurture_sequence';
                default: return 'continue_monitoring';
            }
        }
    },

    // Initialize all tracking components
    init: function() {
        this.eventBatcher.init();

        // Send initial lead score after 30 seconds
        setTimeout(() => {
            this.leadScoring.sendLeadScore();
        }, 30000);

        // Update lead score every 2 minutes
        setInterval(() => {
            this.leadScoring.sendLeadScore();
        }, 120000);

        // Track initial service page view if applicable
        if (window.location.pathname.includes('service')) {
            const serviceName = this.extractServiceNameFromURL();
            if (serviceName) {
                this.enhancedEcommerce.trackServiceView(serviceName, 'Data Technology Services');
            }
        }
    },

    extractServiceNameFromURL: function() {
        const path = window.location.pathname;
        // Extract service name from URL patterns like /services/analytics or /tjanster/data-analys
        const matches = path.match(/(?:services?|tjanster)\/([^\/]+)/);
        return matches ? matches[1].replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase()) : null;
    }
};

// Auto-initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.stackEatersGTMConfig.init();
    });
} else {
    window.stackEatersGTMConfig.init();
}

// Export for external use
window.gtmConfig = window.stackEatersGTMConfig;