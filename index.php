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
                        <span class="hero-stat-number"><?php echo get_theme_mod('stat1_number', '7'); ?></span>
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

        <!-- Services Section -->
        <section id="tjanster" class="services-section">
            <div class="services-header">
                <h2>Våra Expertområden</h2>
                <p class="services-subtitle">Sju specialiserade tjänster inom Data Technology Stack med AI-integration</p>
            </div>

            <div class="services-container">
                <!-- Service Card 1: Google Analytics -->
                <div class="service-card-modern" data-service="analytics">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop&crop=center" alt="Google Analytics Dashboard" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">📊</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Google Analytics med AI</h3>
                        <p class="service-brief">Avancerad datainsamling och AI-driven analys för djupare insikter om användarbeteende och affärsresultat.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ GA4-implementation och konfiguration</li>
                                    <li>✓ AI-driven användaranalyser</li>
                                    <li>✓ Konverteringsoptimering</li>
                                    <li>✓ Anpassade rapporter och dashboards</li>
                                    <li>✓ E-handelsspårning och attribuering</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Få djupare förståelse för era kunders beteende med AI som identifierar mönster och trender automatiskt. Våra experter hjälper er att fatta datadrivna beslut som ökar konvertering och ROI.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 2: CRM -->
                <div class="service-card-modern" data-service="crm">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=250&fit=crop&crop=center" alt="CRM System Interface" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">🤝</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">CRM-hantering med AI</h3>
                        <p class="service-brief">Intelligent kundhantering som automatiskt organiserar leads, förutsäger kundbeteende och optimerar försäljning.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ CRM-systemimplementation (HubSpot, Salesforce)</li>
                                    <li>✓ AI-driven lead-scoring</li>
                                    <li>✓ Automatiserad kundkommunikation</li>
                                    <li>✓ Försäljningsprognoser</li>
                                    <li>✓ Integration med andra system</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Förbättra era kundrelationer med AI som hjälper er att förstå och förutsäga kundbehov. Automatisera repetitiva uppgifter och fokusera på att bygga värdefulla kundrelationer.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 3: Marketing Automation -->
                <div class="service-card-modern" data-service="automation">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&crop=center" alt="Marketing Automation Dashboard" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">⚡</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Marketing Automation med AI</h3>
                        <p class="service-brief">Helhetslösning för marketing automation med AI som maximerar era marknadsföringsresultat.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ E-postmarknadsföring och automation</li>
                                    <li>✓ AI-driven innehållspersonalisering</li>
                                    <li>✓ Lead nurturing-kampanjer</li>
                                    <li>✓ Social media automation</li>
                                    <li>✓ ROI-optimering</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Automatisera era marknadsföringsprocesser med AI som levererar rätt meddelande till rätt person vid rätt tidpunkt. Öka konvertering och minska manuellt arbete.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 4: Data Visualization -->
                <div class="service-card-modern" data-service="visualization">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop&crop=center" alt="Data Visualization Dashboard" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">📈</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Looker/PowerBI med AI</h3>
                        <p class="service-brief">Avancerad datavisualisering och rapportering med AI-genererade insikter som gör komplexa data förståeliga.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ Anpassade dashboards och rapporter</li>
                                    <li>✓ AI-driven dataanalys</li>
                                    <li>✓ Realtidsvisualisering</li>
                                    <li>✓ Prediktiv analys</li>
                                    <li>✓ Self-service BI-lösningar</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Förvandla komplexa data till tydliga, handlingsbara insikter. AI hjälper er att upptäcka dolda mönster och möjligheter i era data som annars skulle förbli oupptäckta.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 5: Google Tag Manager -->
                <div class="service-card-modern" data-service="gtm">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop&crop=center" alt="Google Tag Manager Interface" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">🏷️</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Google Tag Manager</h3>
                        <p class="service-brief">Effektiv hantering av tracking-koder och marknadsföringstaggar utan teknisk utveckling.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ GTM-setup och konfiguration</li>
                                    <li>✓ Automatiserad tagghantering</li>
                                    <li>✓ Konverteringsspårning</li>
                                    <li>✓ Event tracking implementation</li>
                                    <li>✓ Utbildning för era team</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Förenkla er tracking-implementation och få full kontroll över era marknadsföringstaggar. Snabbare implementering och mindre beroende av utvecklarresurser.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 6: Ads Management -->
                <div class="service-card-modern" data-service="ads">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop&crop=center" alt="Digital Advertising Campaign" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">🎯</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Annonssystem: Meta & Google Ads</h3>
                        <p class="service-brief">Maximera er räckvidd med AI-optimerade annonser på Facebook, Instagram och Google.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ Google Ads & Meta Ads hantering</li>
                                    <li>✓ AI-driven målgruppsoptimering</li>
                                    <li>✓ A/B-testning av annonser</li>
                                    <li>✓ Konverteringsoptimering</li>
                                    <li>✓ ROI-maximering</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Nå rätt målgrupp med rätt budskap vid rätt tidpunkt. AI hjälper oss att optimera era annonser kontinuerligt för maximal ROI och lägre kostnader per konvertering.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>

                <!-- Service Card 7: E-commerce -->
                <div class="service-card-modern" data-service="ecommerce">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=250&fit=crop&crop=center" alt="E-commerce Platform" loading="lazy">
                        <div class="service-overlay">
                            <div class="service-icon">🛒</div>
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">E-handel med AI-analys</h3>
                        <p class="service-brief">Komplett e-handelslösning med säker betalning, lagerstyrning och integrerad AI-analys.</p>
                        <div class="service-details" style="display: none;">
                            <div class="service-features">
                                <h4>Vad vi erbjuder:</h4>
                                <ul>
                                    <li>✓ E-handelsplattform setup</li>
                                    <li>✓ AI-driven produktrekommendationer</li>
                                    <li>✓ Automatiserad lagerstyrning</li>
                                    <li>✓ Säkra betalningslösningar</li>
                                    <li>✓ Konverteringsoptimering</li>
                                </ul>
                            </div>
                            <div class="service-benefits">
                                <h4>Fördelar:</h4>
                                <p>Bygga en skalbar e-handelsplattform som växer med ert företag. AI hjälper er att öka genomsnittlig ordervärde och förbättra kundupplevelsen med personaliserade rekommendationer.</p>
                            </div>
                        </div>
                        <button class="service-toggle-btn" onclick="toggleServiceDetails(this)">
                            <span class="btn-text">Läs mer</span>
                            <span class="btn-icon">▼</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="om-oss" class="about-us-section">
            <div class="about-hero">
                <h2>Om Stack Eaters</h2>
                <p class="about-tagline">Där teknik möter kreativitet för att forma framtidens digitala lösningar</p>
            </div>

            <div class="about-content">
                <div class="about-story">
                    <h3>Vår historia</h3>
                    <p>Stack Eaters grundades med en vision: att bygga bro mellan komplex teknologi och praktiska affärsresultat. Som en modern konsultbyrå med experter inom sju specialistområden av Data Technology Stack, har vi gjort det till vår mission att förenkla det komplexa och leverera mätbara resultat.</p>

                    <p>Vårt namn speglar vår filosofi – vi "äter upp" tekniska utmaningar och transformerar dem till kraftfulla lösningar. Med över 100 framgångsrika projekt bakom oss, har vi bevisat att rätt teknisk stack kombinerat med AI-driven intelligens kan revolutionera hur företag arbetar med data.</p>
                </div>

                <div class="about-mission">
                    <h3>Vår mission</h3>
                    <p>Vi skapar sammanhängande tekniska ekosystem där varje komponent arbetar i harmoni. Från Google Analytics (datainsamling) till CRM-system (kundhantering), Marketing Automation (automatiserad marknadsföring) och Looker/PowerBI (visualisering) – vi bygger stacks som levererar mer än summan av sina delar.</p>

                    <p>Vår AI-integration är inte bara teknik för teknikens skull. Varje algoritm, varje automatisering och varje intelligent funktion är noggrant utformad för att lösa verkliga affärsutmaningar och skapa konkret värde för våra kunder.</p>
                </div>

                <div class="about-values">
                    <h3>Våra värderingar</h3>
                    <div class="values-grid">
                        <div class="value-item">
                            <div class="value-icon">🎯</div>
                            <h4>Resultatfokus</h4>
                            <p>"Mindre snack, mer stack" – vi levererar mätbara resultat, inte tomma löften.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon">🤖</div>
                            <h4>AI med mänsklig touch</h4>
                            <p>Teknologi ska stärka människors kapacitet, inte ersätta den. Vi bygger AI som förstärker er expertis.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon">🔒</div>
                            <h4>Säkerhet först</h4>
                            <p>GDPR-efterlevnad, krypterad lagring och transparenta AI-beslut är inte förhandlingsbara för oss.</p>
                        </div>
                        <div class="value-item">
                            <div class="value-icon">🚀</div>
                            <h4>Innovation med stabilitet</h4>
                            <p>Vi kombinerar banbrytande teknik med beprövade metoder för hållbara, skalabara lösningar.</p>
                        </div>
                    </div>
                </div>

                <div class="about-team">
                    <h3>Vårt team</h3>
                    <p>Sju experter inom sju specialistområden, en gemensam vision. Vårt team kombinerar djup teknisk kunskap inom sina respektive specialområden med en gemensam passion för att lösa komplexa utmaningar. Från dataarkitekter och AI-specialister till CRM-experter, e-handelsspecialister och visualiseringsguider – tillsammans täcker vi hela spektrumet av modern data technology stack.</p>

                    <div class="team-stats">
                        <div class="team-stat">
                            <span class="stat-number">7</span>
                            <span class="stat-label">Experter</span>
                        </div>
                        <div class="team-stat">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Genomförda projekt</span>
                        </div>
                        <div class="team-stat">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">AI-driven övervakning</span>
                        </div>
                        <div class="team-stat">
                            <span class="stat-number">7</span>
                            <span class="stat-label">Specialistområden</span>
                        </div>
                    </div>
                </div>

                <div class="about-approach">
                    <h3>Vår arbetsmetod</h3>
                    <div class="approach-steps">
                        <div class="approach-step">
                            <div class="step-number">1</div>
                            <h4>Analys & strategi</h4>
                            <p>Vi börjar med att förstå era specifika utmaningar och affärsmål för att skapa en skräddarsydd teknisk roadmap.</p>
                        </div>
                        <div class="approach-step">
                            <div class="step-number">2</div>
                            <h4>Stack-design</h4>
                            <p>Vi utformar en sammanhängande teknisk arkitektur där alla komponenter kommunicerar seamless med varandra.</p>
                        </div>
                        <div class="approach-step">
                            <div class="step-number">3</div>
                            <h4>AI-integration</h4>
                            <p>Intelligent automatisering och AI-driven insikter integreras naturligt i arbetsflödet för att maximera effektiviteten.</p>
                        </div>
                        <div class="approach-step">
                            <div class="step-number">4</div>
                            <h4>Kontinuerlig optimering</h4>
                            <p>Genom 24/7 AI-driven övervakning säkerställer vi att era system alltid presterar på toppnivå.</p>
                        </div>
                    </div>
                </div>

                <div class="about-commitment">
                    <h3>Vårt löfte till er</h3>
                    <p>Vi förbinder oss att vara mer än bara teknikleverantörer – vi är era strategiska partners i den digitala transformationen. Med transparenta processer, regelbundna rapporter och dedikerad support säkerställer vi att era investeringar i teknik genererar konkret affärsnytta.</p>

                    <p>Vår framgång mäts inte bara i tekniska metrics, utan i er ökade konkurrenskraft, förbättrade kundupplevelser och växande intäkter. Det är därför vi finns – för att göra er bättre på det ni gör bäst.</p>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Contact Section -->
<section id="kontakt" class="contact-section">
    <div class="container">
        <div class="contact-header">
            <h2>Kontakta oss</h2>
            <p class="contact-tagline">Redo att transformera er data till konkreta affärsresultat? Låt oss börja samtalet.</p>
        </div>

        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-details">
                        <h4>Telefon</h4>
                        <p><a href="tel:+46812345678">+46 (0)8 123 456 78</a></p>
                        <span class="contact-note">Vardagar 09:00 - 17:00</span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-details">
                        <h4>E-post</h4>
                        <p><a href="mailto:hej@stackeaters.se">hej@stackeaters.se</a></p>
                        <span class="contact-note">Svarar inom 24 timmar</span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">🏢</div>
                    <div class="contact-details">
                        <h4>Kontor</h4>
                        <p>Vasagatan 42, 3 tr<br>111 20 Stockholm</p>
                        <span class="contact-note">Möten efter överenskommelse</span>
                    </div>
                </div>
            </div>

            <div class="contact-form-section">
                <h3>Skicka ett meddelande</h3>
                <form class="contact-form" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Namn *</label>
                            <input type="text" id="contact-name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">E-post *</label>
                            <input type="email" id="contact-email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-company">Företag</label>
                        <input type="text" id="contact-company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="contact-service">Intresserad av</label>
                        <select id="contact-service" name="service">
                            <option value="">Välj tjänst...</option>
                            <option value="analytics">Google Analytics med AI</option>
                            <option value="crm">CRM-hantering med AI</option>
                            <option value="automation">Marketing Automation med AI</option>
                            <option value="visualization">Looker/PowerBI med AI</option>
                            <option value="gtm">Google Tag Manager</option>
                            <option value="ads">Annonssystem (Meta, Google Ads)</option>
                            <option value="ecommerce">E-handel</option>
                            <option value="other">Annat/Konsultation</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Meddelande *</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Berätta om era utmaningar och mål..." required></textarea>
                    </div>
                    <button type="submit" class="btn-contact">
                        <span>Skicka meddelande</span>
                        <i>🚀</i>
                    </button>
                </form>
            </div>
        </div>

        <div class="contact-cta">
            <div class="cta-content">
                <h3>Varför välja Stack Eaters?</h3>
                <div class="cta-benefits">
                    <div class="benefit-item">
                        <span class="benefit-icon">⚡</span>
                        <span>Snabb implementering</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">🎯</span>
                        <span>Mätbara resultat</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">🤝</span>
                        <span>Långsiktigt partnerskap</span>
                    </div>
                    <div class="benefit-item">
                        <span class="benefit-icon">🔒</span>
                        <span>GDPR-säkert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Section -->
<section class="security-section">
    <div class="container">
        <h3>Trygghet & säkerhet</h3>
        <p><?php echo get_theme_mod('security_text', 'Vi på Stack Eaters sätter datasäkerhet främst. All hantering sker i enlighet med GDPR, med krypterad lagring och strikt åtkomstkontroll. Våra AI-lösningar är alltid transparenta – människan har det sista ordet.'); ?></p>
    </div>
</section>

<!-- JavaScript for Service Cards -->
<script>
function toggleServiceDetails(button) {
    const serviceCard = button.closest('.service-card-modern');
    const details = serviceCard.querySelector('.service-details');
    const btnText = button.querySelector('.btn-text');
    const btnIcon = button.querySelector('.btn-icon');
    const isExpanded = details.style.display === 'block';

    // Close all other expanded cards
    document.querySelectorAll('.service-card-modern .service-details').forEach(detail => {
        if (detail !== details) {
            detail.style.display = 'none';
            const otherCard = detail.closest('.service-card-modern');
            const otherButton = otherCard.querySelector('.service-toggle-btn');
            const otherBtnText = otherButton.querySelector('.btn-text');
            const otherBtnIcon = otherButton.querySelector('.btn-icon');
            otherBtnText.textContent = 'Läs mer';
            otherBtnIcon.textContent = '▼';
            otherCard.classList.remove('expanded');
        }
    });

    if (isExpanded) {
        // Collapse
        details.style.display = 'none';
        btnText.textContent = 'Läs mer';
        btnIcon.textContent = '▼';
        serviceCard.classList.remove('expanded');
    } else {
        // Expand
        details.style.display = 'block';
        btnText.textContent = 'Dölj detaljer';
        btnIcon.textContent = '▲';
        serviceCard.classList.add('expanded');
    }
}

// Welcome Popup Functions
function showWelcomePopup() {
    const popup = document.getElementById('welcomePopup');
    if (popup) {
        popup.classList.add('show');
    }
}

function closeWelcomePopup() {
    const popup = document.getElementById('welcomePopup');
    if (popup) {
        popup.classList.remove('show');
    }
    // Set localStorage to remember user has seen the popup
    localStorage.setItem('welcomePopupSeen', 'true');
}

function scrollToServices() {
    closeWelcomePopup();
    setTimeout(() => {
        document.getElementById('tjanster').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }, 300);
}

function scrollToContact() {
    closeWelcomePopup();
    setTimeout(() => {
        document.getElementById('kontakt').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }, 300);
}

function scrollToAbout() {
    closeWelcomePopup();
    setTimeout(() => {
        document.getElementById('om-oss').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }, 300);
}

// Show welcome popup when page loads (if user hasn't seen it before)
document.addEventListener('DOMContentLoaded', function() {
    // For testing: Clear localStorage to always show popup
    // Remove this line after testing
    localStorage.removeItem('welcomePopupSeen');

    // Check if user has seen the popup before
    const hasSeenPopup = localStorage.getItem('welcomePopupSeen');

    if (!hasSeenPopup) {
        // Show popup after a short delay for better UX
        setTimeout(() => {
            showWelcomePopup();
        }, 1500);
    }
});

// Close popup when clicking outside
document.addEventListener('click', function(event) {
    const popup = document.getElementById('welcomePopup');
    const popupContainer = document.querySelector('.welcome-popup-container');

    if (popup && popup.classList.contains('show') &&
        event.target === popup && !popupContainer.contains(event.target)) {
        closeWelcomePopup();
    }
});
</script>

<!-- Welcome Popup -->
<div id="welcomePopup" class="welcome-popup-overlay">
    <div class="welcome-popup-container">
        <button class="welcome-popup-close" onclick="closeWelcomePopup()">&times;</button>

        <div class="welcome-popup-content">
            <div class="welcome-popup-image">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop&crop=face" alt="Stack Eaters Expert" class="expert-image">
                <div class="welcome-badge">
                    <span class="badge-icon">🤖</span>
                    <span class="badge-text">AI Expert</span>
                </div>
            </div>

            <div class="welcome-popup-text">
                <h3>Välkommen till Stack Eaters!</h3>
                <p class="welcome-greeting">Hej! Jag är här för att hjälpa dig hitta rätt lösning för ditt företag.</p>

                <div class="welcome-options">
                    <p class="options-intro">Vad kan jag hjälpa dig med idag?</p>

                    <div class="welcome-buttons">
                        <button class="welcome-btn primary-btn" onclick="scrollToServices()">
                            <span class="btn-icon">📊</span>
                            Se våra tjänster
                        </button>

                        <button class="welcome-btn secondary-btn" onclick="scrollToContact()">
                            <span class="btn-icon">💬</span>
                            Få personlig rådgivning
                        </button>

                        <button class="welcome-btn tertiary-btn" onclick="scrollToAbout()">
                            <span class="btn-icon">🏢</span>
                            Lär känna oss
                        </button>
                    </div>
                </div>

                <div class="welcome-features">
                    <div class="feature-item">
                        <span class="feature-icon">✅</span>
                        <span>Kostnadsfri konsultation</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">⚡</span>
                        <span>Snabb implementering</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🔒</span>
                        <span>GDPR-säkert</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="welcome-popup-footer">
            <button class="close-btn" onclick="closeWelcomePopup()">Fortsätt till hemsidan</button>
        </div>
    </div>
</div>

<!-- Modals for detailed service information -->
<?php get_template_part('template-parts/service-modals'); ?>

<?php get_footer(); ?>