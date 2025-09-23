<?php get_header(); ?>

<main>
    <div class="container">
        <!-- Hero Section -->
        <section id="hem" class="hero">
            <div class="hero-content">
                <h1><?php echo get_theme_mod('hero_title', 'Data Technology Stack med AI-touch'); ?></h1>
                <p><?php echo get_theme_mod('hero_description', 'Vi njuter av data – vi \"äter\" den, smälter den och serverar den tillbaka som tydliga insikter, smarta processer och mätbara resultat.'); ?></p>
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

        <!-- About Us Section -->
        <section id="om-oss" class="about-us-section">
            <div class="about-hero">
                <h2>Om Stack Eaters</h2>
                <p class="about-tagline">Där teknik möter kreativitet för att forma framtidens digitala lösningar</p>
            </div>
            
            <div class="about-content">
                <div class="about-story">
                    <h3>Vår historia & mission</h3>
                    <p>Stack Eaters grundades med visionen att bygga en bro mellan komplex teknologi och praktiska affärsresultat. Som en modern konsultbyrå med sju expertområden inom Data Technology Stack är vår mission att förenkla det komplexa och leverera mätbara resultat.</p>
                    
                    <p>Vårt namn speglar vår filosofi – vi ‘äter upp’ tekniska utmaningar och förvandlar dem till kraftfulla lösningar. Med över 100 framgångsrika projekt har vi visat att rätt stack, kombinerad med AI, kan revolutionera hur företag arbetar med data.</p>

                    <p>Vi bygger sammanhängande ekosystem – från Google Analytics och CRM till Marketing Automation och Looker/PowerBI – där varje komponent samspelar och skapar värde som är större än summan av delarna.</p>
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

<!-- Modals for detailed service information -->
<?php get_template_part('template-parts/service-modals'); ?>

<?php get_footer(); ?>
