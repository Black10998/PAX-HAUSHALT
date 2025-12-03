<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">404 - Seite nicht gefunden</h1>
    </div>
</div>

<section class="error-404 section-padding">
    <div class="container">
        <div class="error-content" style="text-align: center; max-width: 600px; margin: 0 auto;">
            <div style="font-size: 120px; font-weight: 700; color: var(--primary-color); margin-bottom: 20px;">404</div>
            <h2 style="font-size: 32px; margin-bottom: 20px;">Seite nicht gefunden</h2>
            <p style="font-size: 18px; color: var(--text-light); margin-bottom: 40px;">
                Die von Ihnen gesuchte Seite existiert leider nicht oder wurde verschoben.
            </p>
            
            <div style="margin-bottom: 40px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    Zurück zur Startseite
                </a>
            </div>

            <div style="background: var(--light-color); padding: 30px; border-radius: var(--border-radius);">
                <h3 style="margin-bottom: 20px;">Benötigen Sie Hilfe?</h3>
                <p style="margin-bottom: 20px;">Kontaktieren Sie uns für eine schnelle Reparatur:</p>
                <a href="tel:+491234567890" class="btn btn-secondary">
                    <i class="icon-phone"></i>
                    +49 123 456 7890
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
