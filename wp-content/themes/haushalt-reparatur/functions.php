<?php
/**
 * Haushalt Reparatur Theme Functions
 *
 * @package Haushalt_Reparatur
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function haushalt_reparatur_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Hauptmenü', 'haushalt-reparatur'),
        'footer'  => __('Footer Menü', 'haushalt-reparatur'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'haushalt_reparatur_setup');

/**
 * Set the content width in pixels
 */
function haushalt_reparatur_content_width() {
    $GLOBALS['content_width'] = apply_filters('haushalt_reparatur_content_width', 1200);
}
add_action('after_setup_theme', 'haushalt_reparatur_content_width', 0);

/**
 * Enqueue scripts and styles
 */
function haushalt_reparatur_scripts() {
    // Main stylesheet
    wp_enqueue_style('haushalt-reparatur-style', get_stylesheet_uri(), array(), '1.0.0');

    // Custom styles
    wp_enqueue_style('haushalt-reparatur-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Main JavaScript
    wp_enqueue_script('haushalt-reparatur-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

    // Add inline script for mobile menu
    wp_add_inline_script('haushalt-reparatur-main', '
        document.addEventListener("DOMContentLoaded", function() {
            const mobileToggle = document.getElementById("mobile-menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");
            const mobileClose = document.getElementById("mobile-menu-close");
            const header = document.getElementById("site-header");
            const backToTop = document.getElementById("back-to-top");

            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener("click", function() {
                    mobileMenu.classList.add("active");
                    document.body.style.overflow = "hidden";
                });
            }

            if (mobileClose && mobileMenu) {
                mobileClose.addEventListener("click", function() {
                    mobileMenu.classList.remove("active");
                    document.body.style.overflow = "";
                });
            }

            // Sticky header
            window.addEventListener("scroll", function() {
                if (window.scrollY > 100) {
                    header.classList.add("sticky");
                    if (backToTop) backToTop.classList.add("visible");
                } else {
                    header.classList.remove("sticky");
                    if (backToTop) backToTop.classList.remove("visible");
                }
            });

            // Back to top
            if (backToTop) {
                backToTop.addEventListener("click", function() {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll(\'a[href^="#"]\').forEach(anchor => {
                anchor.addEventListener("click", function(e) {
                    const href = this.getAttribute("href");
                    if (href !== "#" && document.querySelector(href)) {
                        e.preventDefault();
                        document.querySelector(href).scrollIntoView({
                            behavior: "smooth"
                        });
                        if (mobileMenu.classList.contains("active")) {
                            mobileMenu.classList.remove("active");
                            document.body.style.overflow = "";
                        }
                    }
                });
            });

            // Contact form handling
            const contactForm = document.getElementById("contact-form");
            if (contactForm) {
                contactForm.addEventListener("submit", function(e) {
                    e.preventDefault();
                    alert("Vielen Dank für Ihre Anfrage! Wir werden uns schnellstmöglich bei Ihnen melden.");
                    contactForm.reset();
                });
            }
        });
    ');

    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'haushalt_reparatur_scripts');

/**
 * Fallback menu for primary navigation
 */
function haushalt_reparatur_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Startseite</a></li>';
    echo '<li><a href="#dienstleistungen">Dienstleistungen</a></li>';
    echo '<li><a href="#notdienst">Notdienst 24/7</a></li>';
    echo '<li><a href="#ueber-uns">Über uns</a></li>';
    echo '<li><a href="#kontakt">Kontakt</a></li>';
    echo '</ul>';
}

/**
 * Add custom body classes
 */
function haushalt_reparatur_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    if (is_front_page()) {
        $classes[] = 'home-page';
    }

    return $classes;
}
add_filter('body_class', 'haushalt_reparatur_body_classes');

/**
 * Add custom excerpt length
 */
function haushalt_reparatur_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'haushalt_reparatur_excerpt_length');

/**
 * Add custom excerpt more
 */
function haushalt_reparatur_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'haushalt_reparatur_excerpt_more');

/**
 * Register widget areas
 */
function haushalt_reparatur_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'haushalt-reparatur'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets für die Sidebar', 'haushalt-reparatur'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'haushalt-reparatur'),
        'id'            => 'footer-1',
        'description'   => __('Widgets für Footer Spalte 1', 'haushalt-reparatur'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'haushalt-reparatur'),
        'id'            => 'footer-2',
        'description'   => __('Widgets für Footer Spalte 2', 'haushalt-reparatur'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'haushalt-reparatur'),
        'id'            => 'footer-3',
        'description'   => __('Widgets für Footer Spalte 3', 'haushalt-reparatur'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'haushalt_reparatur_widgets_init');

/**
 * Implement the Custom Header feature
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';
