<?php
/**
 * The main template file
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<?php get_template_part('template-parts/hero-section'); ?>

<!-- Services Section -->
<section class="services-section section-padding" id="dienstleistungen">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-subtitle">Unsere Leistungen</span>
            <h2 class="section-title">Professionelle Reparatur- und Handwerksdienstleistungen</h2>
            <p class="section-description">
                Von Elektroarbeiten bis zu Sanitärinstallationen – wir sind Ihr kompetenter Partner für alle Haushaltsreparaturen
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-electric"></i>
                </div>
                <h3 class="service-title">Elektroservice</h3>
                <p class="service-description">
                    Professionelle Elektroinstallationen, Reparaturen und Wartungen. Von der Steckdose bis zur kompletten Elektroanlage.
                </p>
                <ul class="service-features">
                    <li>Elektroinstallationen</li>
                    <li>Fehlersuche & Reparatur</li>
                    <li>Sicherheitsprüfungen</li>
                    <li>Smart Home Integration</li>
                </ul>
                <a href="#kontakt" class="service-link">Mehr erfahren →</a>
            </div>

            <div class="service-card featured">
                <div class="service-badge">Beliebt</div>
                <div class="service-icon">
                    <i class="icon-wrench"></i>
                </div>
                <h3 class="service-title">Sanitär & Installationen</h3>
                <p class="service-description">
                    Schnelle Hilfe bei Wasserschäden, verstopften Rohren und allen sanitären Problemen. 24/7 Notdienst verfügbar.
                </p>
                <ul class="service-features">
                    <li>Rohrinstallationen</li>
                    <li>Sanitärreparaturen</li>
                    <li>Wasserschaden-Notdienst</li>
                    <li>Bad-Modernisierung</li>
                </ul>
                <a href="#kontakt" class="service-link">Mehr erfahren →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-appliance"></i>
                </div>
                <h3 class="service-title">Geräte-Reparaturen</h3>
                <p class="service-description">
                    Reparatur und Wartung von Haushaltsgeräten aller Art. Schnell, zuverlässig und kostengünstig.
                </p>
                <ul class="service-features">
                    <li>Waschmaschinen & Trockner</li>
                    <li>Kühlschränke & Gefriertruhen</li>
                    <li>Herde & Backöfen</li>
                    <li>Geschirrspüler</li>
                </ul>
                <a href="#kontakt" class="service-link">Mehr erfahren →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-tools"></i>
                </div>
                <h3 class="service-title">Allgemeiner Handwerkerdienst</h3>
                <p class="service-description">
                    Ihr Allround-Handwerker für alle Reparaturen und Renovierungsarbeiten im Haushalt.
                </p>
                <ul class="service-features">
                    <li>Möbelmontage</li>
                    <li>Malerarbeiten</li>
                    <li>Bodenverlegung</li>
                    <li>Kleinreparaturen</li>
                </ul>
                <a href="#kontakt" class="service-link">Mehr erfahren →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-alert"></i>
                </div>
                <h3 class="service-title">24/7 Notdienst</h3>
                <p class="service-description">
                    Rund um die Uhr für Sie da. Bei Notfällen sind wir innerhalb kürzester Zeit vor Ort.
                </p>
                <ul class="service-features">
                    <li>Sofortige Verfügbarkeit</li>
                    <li>Schnelle Anfahrt</li>
                    <li>Professionelle Notfallhilfe</li>
                    <li>Transparente Preise</li>
                </ul>
                <a href="tel:+491234567890" class="service-link">Jetzt anrufen →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="icon-maintenance"></i>
                </div>
                <h3 class="service-title">Wartung & Inspektion</h3>
                <p class="service-description">
                    Regelmäßige Wartungen verlängern die Lebensdauer Ihrer Geräte und Anlagen.
                </p>
                <ul class="service-features">
                    <li>Wartungsverträge</li>
                    <li>Sicherheitsinspektionen</li>
                    <li>Vorbeugende Instandhaltung</li>
                    <li>Dokumentation</li>
                </ul>
                <a href="#kontakt" class="service-link">Mehr erfahren →</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-us-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-subtitle">Warum wir?</span>
            <h2 class="section-title">Ihr zuverlässiger Partner für Haushaltsreparaturen</h2>
        </div>

        <div class="why-us-grid">
            <div class="why-us-item">
                <div class="why-us-number">01</div>
                <h3>Schnelle Reaktionszeit</h3>
                <p>Wir sind innerhalb von 2 Stunden bei Ihnen vor Ort. Bei Notfällen noch schneller.</p>
            </div>
            <div class="why-us-item">
                <div class="why-us-number">02</div>
                <h3>Faire & Transparente Preise</h3>
                <p>Keine versteckten Kosten. Sie erhalten vorab einen detaillierten Kostenvoranschlag.</p>
            </div>
            <div class="why-us-item">
                <div class="why-us-number">03</div>
                <h3>Erfahrene Fachkräfte</h3>
                <p>Unser Team besteht aus qualifizierten Handwerkern mit langjähriger Erfahrung.</p>
            </div>
            <div class="why-us-item">
                <div class="why-us-number">04</div>
                <h3>Garantie auf alle Arbeiten</h3>
                <p>Wir stehen zu unserer Arbeit und bieten umfassende Garantien auf alle Leistungen.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section-padding" id="kontakt">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <span class="section-subtitle">Kontakt</span>
                <h2 class="section-title">Nehmen Sie Kontakt mit uns auf</h2>
                <p class="contact-description">
                    Haben Sie Fragen oder benötigen Sie einen Reparaturtermin? Kontaktieren Sie uns – wir helfen Ihnen gerne weiter!
                </p>

                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="contact-method-content">
                            <h4>Telefon</h4>
                            <a href="tel:+491234567890">+49 123 456 7890</a>
                            <p>Mo-Fr: 08:00 - 18:00 Uhr</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <i class="icon-mail"></i>
                        </div>
                        <div class="contact-method-content">
                            <h4>E-Mail</h4>
                            <a href="mailto:info@haushalt-reparatur.de">info@haushalt-reparatur.de</a>
                            <p>Antwort innerhalb von 24h</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-method-icon">
                            <i class="icon-location"></i>
                        </div>
                        <div class="contact-method-content">
                            <h4>Adresse</h4>
                            <p>Musterstraße 123<br>12345 Berlin, Deutschland</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <form class="contact-form" id="contact-form">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-Mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service">Dienstleistung</label>
                        <select id="service" name="service">
                            <option value="">Bitte wählen...</option>
                            <option value="elektro">Elektroservice</option>
                            <option value="sanitaer">Sanitär & Installationen</option>
                            <option value="geraete">Geräte-Reparaturen</option>
                            <option value="handwerker">Allgemeiner Handwerkerdienst</option>
                            <option value="notdienst">24/7 Notdienst</option>
                            <option value="wartung">Wartung & Inspektion</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Nachricht *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Anfrage senden
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
