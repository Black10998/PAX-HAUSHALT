</main><!-- Close main content -->

<footer class="site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-column">
                    <div class="footer-logo">
                        <svg class="footer-logo-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 8L8 28v28h16V40h16v16h16V28L32 8z" fill="currentColor"/>
                            <path d="M52 48l-8-8 4-4 8 8-4 4z" fill="currentColor" opacity="0.8"/>
                            <circle cx="48" cy="48" r="3" fill="currentColor"/>
                        </svg>
                        <h3 class="footer-logo-text"><?php bloginfo('name'); ?></h3>
                    </div>
                    <p class="footer-description">
                        Ihr zuverlässiger Partner für professionelle Haushaltsreparaturen und Handwerksdienstleistungen. 
                        Schnell, fachgerecht und zu fairen Preisen.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Services -->
                <div class="footer-column">
                    <h4 class="footer-title">Unsere Dienstleistungen</h4>
                    <ul class="footer-menu">
                        <li><a href="#elektroservice">Elektroservice</a></li>
                        <li><a href="#sanitaer">Sanitär & Installationen</a></li>
                        <li><a href="#geraete">Geräte-Reparaturen</a></li>
                        <li><a href="#handwerker">Allgemeiner Handwerkerdienst</a></li>
                        <li><a href="#notdienst">24/7 Notdienst</a></li>
                        <li><a href="#wartung">Wartung & Inspektion</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="footer-column">
                    <h4 class="footer-title">Wichtige Links</h4>
                    <ul class="footer-menu">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Startseite</a></li>
                        <li><a href="#ueber-uns">Über uns</a></li>
                        <li><a href="#preise">Preise & Leistungen</a></li>
                        <li><a href="#referenzen">Referenzen</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>
                        <li><a href="#datenschutz">Datenschutz</a></li>
                        <li><a href="#impressum">Impressum</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-column">
                    <h4 class="footer-title">Kontaktinformationen</h4>
                    <ul class="footer-contact">
                        <li class="contact-item">
                            <i class="icon-location"></i>
                            <div>
                                <strong>Adresse:</strong><br>
                                Musterstraße 123<br>
                                12345 Berlin, Deutschland
                            </div>
                        </li>
                        <li class="contact-item">
                            <i class="icon-phone"></i>
                            <div>
                                <strong>Telefon:</strong><br>
                                <a href="tel:+491234567890">+49 123 456 7890</a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <i class="icon-mail"></i>
                            <div>
                                <strong>E-Mail:</strong><br>
                                <a href="mailto:info@haushalt-reparatur.de">info@haushalt-reparatur.de</a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <i class="icon-clock"></i>
                            <div>
                                <strong>Öffnungszeiten:</strong><br>
                                Mo-Fr: 08:00 - 18:00 Uhr<br>
                                Sa: 09:00 - 14:00 Uhr
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency Banner -->
    <div class="footer-emergency">
        <div class="container">
            <div class="emergency-content">
                <div class="emergency-icon">
                    <i class="icon-alert-circle"></i>
                </div>
                <div class="emergency-text">
                    <h4>24/7 Notdienst Hotline</h4>
                    <p>Wir sind rund um die Uhr für Sie erreichbar</p>
                </div>
                <a href="tel:+491234567890" class="emergency-phone">
                    <i class="icon-phone"></i>
                    +49 123 456 7890
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Alle Rechte vorbehalten.
                </p>
                <div class="footer-bottom-links">
                    <a href="#datenschutz">Datenschutz</a>
                    <span class="separator">|</span>
                    <a href="#impressum">Impressum</a>
                    <span class="separator">|</span>
                    <a href="#agb">AGB</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="back-to-top" aria-label="Nach oben scrollen">
    <i class="icon-arrow-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
