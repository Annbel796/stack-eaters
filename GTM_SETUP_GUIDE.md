# Stack Eaters - Google Tag Manager Setup Guide

## AI-Enhanced Analytics Implementation

This guide provides complete setup instructions for implementing Google Tag Manager with AI-powered analytics for the Stack Eaters website.

## 🚀 Quick Setup

### 1. Google Tag Manager Container Setup

1. **Create GTM Container:**
   - Go to [Google Tag Manager](https://tagmanager.google.com)
   - Create new container for `stackeaters.se`
   - Copy your GTM ID (format: GTM-XXXXXXX)

2. **WordPress Configuration:**
   - Go to WordPress Admin → Settings → Analytics & GTM
   - Enter your GTM Container ID
   - Enable all AI tracking features
   - Save settings

### 2. Google Analytics 4 Configuration

1. **Create GA4 Property:**
   - Go to [Google Analytics](https://analytics.google.com)
   - Create new GA4 property for Stack Eaters
   - Copy Measurement ID (format: G-XXXXXXXXXX)

2. **Enhanced Measurements:**
   - Enable all enhanced measurements in GA4
   - Configure custom dimensions (see below)

## 📊 Custom Dimensions Setup (GA4)

Configure these custom dimensions in GA4:

| Dimension Name | Scope | Index | Description |
|---------------|-------|-------|-------------|
| User Type | User | 1 | registered/visitor |
| Engagement Score | Event | 2 | AI-calculated engagement |
| AI Prediction | Event | 3 | User intent prediction |
| Device Type | Session | 4 | mobile/desktop |
| Session Duration | Session | 5 | Time spent on site |
| Scroll Depth | Event | 6 | Maximum scroll percentage |
| Page Depth | Session | 7 | Number of pages viewed |

## 🏷️ GTM Tags Configuration

### Core Tags

1. **Google Analytics 4 Configuration Tag:**
   ```
   Tag Type: Google Analytics: GA4 Configuration
   Measurement ID: G-XXXXXXXXXX
   Trigger: All Pages
   ```

2. **Stack Eaters Events Tag:**
   ```
   Tag Type: Google Analytics: GA4 Event
   Event Name: {{Event}}
   Trigger: Custom Event - stack_eaters_event
   ```

### AI-Enhanced Event Tags

3. **User Journey Tracking:**
   ```
   Tag Type: Google Analytics: GA4 Event
   Event Name: user_journey_update
   Trigger: Custom Event - user_journey_update
   ```

4. **Lead Scoring Tag:**
   ```
   Tag Type: Google Analytics: GA4 Event
   Event Name: lead_scoring_update
   Trigger: Custom Event - lead_scoring_update
   ```

5. **Web Vitals Tracking:**
   ```
   Tag Type: Google Analytics: GA4 Event
   Event Name: web_vitals
   Trigger: Custom Event - web_vitals
   ```

## 🎯 Triggers Configuration

### Standard Triggers

1. **All Pages:**
   - Type: Page View
   - Name: All Pages

2. **Contact Form Submission:**
   - Type: Form Submission
   - Name: Contact Form
   - Filter: Form ID contains "contact"

### AI-Enhanced Triggers

3. **High Engagement Users:**
   ```
   Type: Custom Event
   Event Name: stack_eaters_event
   Condition: engagement_score greater than 15
   ```

4. **Conversion Intent:**
   ```
   Type: Custom Event
   Event Name: stack_eaters_event
   Condition: ai_prediction equals high_conversion_intent
   ```

5. **Lead Qualification:**
   ```
   Type: Custom Event
   Event Name: lead_scoring_update
   Condition: lead_qualification equals hot_lead
   ```

## 📈 Variables Configuration

### Built-in Variables
Enable these in GTM:
- Page URL
- Page Title
- Form Element
- Form ID
- Form Target
- Click Element
- Click URL

### Custom Variables

1. **AI Prediction Variable:**
   ```
   Type: Data Layer Variable
   Name: AI Prediction
   Data Layer Variable Name: ai_prediction
   ```

2. **Engagement Score:**
   ```
   Type: Data Layer Variable
   Name: Engagement Score
   Data Layer Variable Name: engagement_score
   ```

3. **Lead Score:**
   ```
   Type: Data Layer Variable
   Name: Lead Score
   Data Layer Variable Name: lead_score
   ```

## 🔧 Advanced Features

### Enhanced Ecommerce for Services

The system treats services as products for better conversion tracking:

- **Service Views** → Product Views
- **Inquiry Forms** → Add to Cart
- **Consultations** → Purchases

### AI-Powered Personalization

Automatic content optimization based on:
- User engagement patterns
- Scroll behavior
- Time on site
- Previous interactions

### Performance Monitoring

Core Web Vitals tracking:
- Largest Contentful Paint (LCP)
- First Input Delay (FID)
- Cumulative Layout Shift (CLS)

## 📊 Custom Reports & Dashboards

### Recommended GA4 Reports

1. **AI Engagement Report:**
   - Metrics: Sessions, Engagement Score, Conversions
   - Dimensions: AI Prediction, User Type

2. **Lead Scoring Dashboard:**
   - Metrics: Lead Score, Qualification Level
   - Dimensions: Traffic Source, Device Type

3. **Performance Insights:**
   - Metrics: Core Web Vitals
   - Dimensions: Page Path, Device Category

### GTM Debugging

1. **Preview Mode:**
   - Use GTM Preview to test all tags
   - Verify dataLayer events are firing

2. **Real User Monitoring:**
   - Check browser console for stackEatersAnalytics object
   - Verify GTM container loads properly

## 🎛️ WordPress Admin Features

Access the analytics dashboard at:
**WordPress Admin → Settings → Analytics & GTM**

Features include:
- Real-time engagement metrics
- AI prediction insights
- Performance monitoring
- Lead scoring analytics

## 🔗 Integration APIs

### Webhook Integration

For advanced lead management, configure webhooks:

```javascript
// Send high-value leads to CRM
dataLayer.push({
  event: 'crm_integration',
  lead_data: {
    score: leadScore,
    qualification: 'hot_lead',
    contact_info: formData
  }
});
```

### Third-party Analytics

The system supports integration with:
- HubSpot
- Salesforce
- Facebook Pixel
- LinkedIn Insight Tag

## 🚨 GDPR Compliance

### Cookie Consent

Implement cookie consent before GTM loads:

```javascript
// Only load GTM after consent
if (cookieConsentGiven) {
  // GTM code here
}
```

### Data Privacy

- All tracking respects user privacy settings
- Personal data is anonymized
- Compliance with Swedish GDPR requirements

## 📞 Support & Troubleshooting

### Common Issues

1. **GTM Not Loading:**
   - Check container ID is correct
   - Verify no ad blockers interfering

2. **Events Not Firing:**
   - Use GTM Preview mode
   - Check browser console for errors

3. **AI Features Not Working:**
   - Ensure stackEatersAnalytics is loaded
   - Check JavaScript console for errors

### Performance Optimization

- Event batching reduces server load
- Lazy loading for non-critical tracking
- Optimized for Core Web Vitals

---

## 🎯 Success Metrics

After implementation, monitor these KPIs:

- **Conversion Rate Improvement:** Target 15-25% increase
- **Lead Quality Score:** Aim for 70%+ qualified leads
- **User Engagement:** 20%+ increase in session duration
- **Performance Score:** Maintain 90+ PageSpeed score

---

*For technical support, contact the Stack Eaters development team.*