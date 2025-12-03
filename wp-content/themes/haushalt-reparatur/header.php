<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-content">
                <div class="header-contact">
                    <a href="tel:+491234567890" class="header-contact-item">
                        <i class="icon-phone"></i>
                        <span>+49 123 456 7890</span>
                    </a>
                    <a href="mailto:info@haushalt-reparatur.de" class="header-contact-item">
                        <i class="icon-mail"></i>
                        <span>info@haushalt-reparatur.de</span>
                    </a>
                </div>
                <div class="header-emergency">
                    <a href="#notdienst" class="emergency-btn">
                        <i class="icon-alert"></i>
                        <span>24/7 Notdienst</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-main">
        <div class="container">
            <div class="header-content">
                <div class="site-branding">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                        <div class="logo">
                            <svg class="logo-icon" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                <!-- House Icon -->
                                <path d="M32 8L8 28v28h16V40h16v16h16V28L32 8z" fill="currentColor"/>
                                <!-- Tool Icon -->
                                <path d="M52 48l-8-8 4-4 8 8-4 4z" fill="currentColor" opacity="0.8"/>
                                <circle cx="48" cy="48" r="3" fill="currentColor"/>
                            </svg>
                            <div class="logo-text">
                                <span class="logo-title"><?php bloginfo('name'); ?></span>
                                <span class="logo-tagline">Professionelle Reparaturdienste</span>
                            </div>
                        </div>
                    </a>
                </div>

                <nav class="main-navigation" id="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => 'haushalt_reparatur_fallback_menu',
                    ));
                    ?>
                </nav>

                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Menü öffnen">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" id="mobile-menu">
    <div class="mobile-menu-header">
        <span class="mobile-menu-title">Menü</span>
        <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Menü schließen">
            <span>&times;</span>
        </button>
    </div>
    <nav class="mobile-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'mobile-nav-menu',
            'container'      => false,
            'fallback_cb'    => 'haushalt_reparatur_fallback_menu',
        ));
        ?>
    </nav>
    <div class="mobile-menu-contact">
        <a href="tel:+491234567890" class="mobile-contact-btn">
            <i class="icon-phone"></i>
            Jetzt anrufen
        </a>
    </div>
</div>

<main id="main-content" class="site-main">
