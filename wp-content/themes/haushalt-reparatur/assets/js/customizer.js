/**
 * Theme Customizer enhancements for a better user experience
 */

(function($) {
    'use strict';

    // Site title
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.logo-title').text(to);
        });
    });

    // Site description
    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.logo-tagline').text(to);
        });
    });

    // Header text color
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });

    // Contact information
    wp.customize('haushalt_reparatur_phone', function(value) {
        value.bind(function(to) {
            $('.header-contact-item[href^="tel:"]').attr('href', 'tel:' + to).find('span').text(to);
        });
    });

    wp.customize('haushalt_reparatur_email', function(value) {
        value.bind(function(to) {
            $('.header-contact-item[href^="mailto:"]').attr('href', 'mailto:' + to).find('span').text(to);
        });
    });

})(jQuery);
