<?php get_header(); ?>

<main>
    <div class="container">
        <!-- Hero Section -->
        <section id="hem" class="hero">
            <div class="hero-content">
                <h1><?php echo get_theme_mod('hero_title', 'Data Technology Stack med AI-touch'); ?></h1>
                <p><?php echo get_theme_mod('hero_description', 'Vi hjälper kunder med fullständiga lösningar från Google Analytics till visualisering med Looker/PowerBI'); ?></p>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <span class="hero-stat-number"><?php echo get_theme_mod('stat1_number', '4'); ?></span>
                        <span class="hero-stat-label"><?php echo get_theme_mod('stat1_label', 'Experter'); ?></span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number"><?php echo get_theme_mod('stat2_number', '100+'); ?></span>
                        <span class="hero-stat-label"><?php echo get_theme_mod('stat2_label', 'Framgångsrika projekt'); ?></span>
                    </div>
                    <div class="hero-stat">
                        <span class="hero-stat-number"><?php echo get_theme_mod('stat3_number', '24/7'); ?></span>
                        <span class="hero-stat-label"><?php echo get_theme_mod('stat3_label', 'AI-driven analys'); ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Info Section -->
        <section class="company-info">
            <h2><?php echo get_theme_mod('company_title', 'Om Stack Eaters'); ?></h2>
            <div class="company-description">
                <?php
                $company_description = get_theme_mod('company_description', '
                    <p>Stack Eaters är en modern konsultbyrå bestående av fyra experter inom Data Technology Stack. Vi erbjuder tjänster inom hela kedjan från datainsamling till visualisering, alltid med en touch av artificiell intelligens för att maximera effektiviteten och resultatet.</p>
                    
                    <p>Vår specialitet ligger i att skapa sammanhängande lösningar där Google Analytics (insamling) → CRM (hantering) → Marketing Automation (hantering) → Looker/PowerBI (analys & visualisering) arbetar tillsammans som en enhetlig stack.</p>
                    
                    <p>Vi tror på att leverera mätbara resultat genom att kombinera beprövad teknik med innovativa AI-lösningar. Vårt motto "Mindre snack, mer stack" speglar vår praktiska approach - vi fokuserar på konkreta resultat snarare än tomma löften.</p>
                ');
                echo $company_description;
                ?>
            </div>
        </section>

        <!-- Services Section -->
        <section id="tjanster" class="services">
            <h2>Våra Tjänster</h2>
            <div class="services-grid">
                <div class="service-card" onclick="openModal('analytics')">
                    <div class="service-icon">📊</div>
                    <h3>Google Analytics med AI</h3>
                    <p>Avancerad datainsamling och analys med hjälp av AI-driven insikter för djupare förståelse av användarbeteende och affärsresultat.</p>
                </div>

                <div class="service-card" onclick="openModal('crm')">
                    <div class="service-icon">🤝</div>
                    <h3>CRM-hantering med AI</h3>
                    <p>Intelligent kundhantering som automatiskt organiserar leads, förutsäger kundbeteende och optimerar försäljningsprocesser.</p>
                </div>

                <div class="service-card" onclick="openModal('automation')">
                    <div class="service-icon">⚡</div>
                    <h3>Marketing Automation med AI</h3>
                    <p>Helhetslösning för marketing automation där vi kombinerar beprövade metoder med artificiell intelligens för maximala resultat.</p>
                </div>

                <div class="service-card" onclick="openModal('visualization')">
                    <div class="service-icon">📈</div>
                    <h3>Looker/PowerBI med AI</h3>
                    <p>Avancerad datavisualisering och rapportering med AI-genererade insikter som gör komplexa data förståeliga och handlingsbara.</p>
                </div>

                <div class="service-card" onclick="openModal('gtm')">
                    <div class="service-icon">🏷️</div>
                    <h3>Google Tag Manager</h3>
                    <p>Effektiv hantering av alla dina tracking-koder och marknadsföringstaggar på ett ställe. Ingen utvecklare behövs för att lägga till nya taggar.</p>
                </div>

                <div class="service-card" onclick="openModal('ads')">
                    <div class="service-icon">🎯</div>
                    <h3>Annonssystem: Meta, Google Ads</h3>
                    <p>Maximera din räckvidd med riktade annonser på Facebook, Instagram och Google. Vi skapar effektiva kampanjer som ger mätbara resultat.</p>
                </div>

                <div class="service-card" onclick="openModal('ecommerce')">
                    <div class="service-icon">🛒</div>
                    <h3>E-handel</h3>
                    <p>Komplett e-handelslösning för att sälja dina produkter online med säker betalning, lagerstyrning och integrerad AI-analys.</p>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Security Section -->
<section class="security-section">
    <div class="container">
        <h3>Trygghet & säkerhet</h3>
        <p><?php echo get_theme_mod('security_text', 'Vi på Stack Eaters sätter datasäkerhet främst. All hantering sker i enlighet med GDPR, med krypterad lagring och strikt åtkomstkontroll. Våra AI-lösningar är alltid transparenta – människan har det sista ordet.'); ?></p>
    </div>
</section>

<!-- Modals for detailed service information -->
<?php get_template_part('template-parts/service-modals'); ?>

<?php get_footer(); ?>