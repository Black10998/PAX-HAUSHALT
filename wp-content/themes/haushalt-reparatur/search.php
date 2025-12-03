<?php
/**
 * The template for displaying search results pages
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">
            <?php
            printf(
                esc_html__('Suchergebnisse für: %s', 'haushalt-reparatur'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </div>
</div>

<div class="search-results section-padding">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="results-count" style="margin-bottom: 30px; color: var(--text-light);">
                <?php
                global $wp_query;
                printf(
                    esc_html__('%s Ergebnisse gefunden', 'haushalt-reparatur'),
                    '<strong>' . $wp_query->found_posts . '</strong>'
                );
                ?>
            </div>

            <div class="search-results-list" style="display: flex; flex-direction: column; gap: 30px;">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('search-result-item'); ?> style="background: var(--white); padding: 30px; border-radius: var(--border-radius); box-shadow: var(--shadow-sm);">
                        <h2 style="font-size: 24px; margin-bottom: 10px;">
                            <a href="<?php the_permalink(); ?>" style="color: var(--dark-color);">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <div class="post-meta" style="display: flex; gap: 15px; margin-bottom: 15px; font-size: 14px; color: var(--text-light);">
                            <span><?php echo get_the_date(); ?></span>
                            <span>von <?php the_author(); ?></span>
                        </div>
                        
                        <div class="search-excerpt" style="color: var(--text-color); margin-bottom: 15px;">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more" style="color: var(--primary-color); font-weight: 600;">
                            Weiterlesen →
                        </a>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <div class="pagination" style="margin-top: 50px; text-align: center;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('← Zurück', 'haushalt-reparatur'),
                    'next_text' => __('Weiter →', 'haushalt-reparatur'),
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="no-results" style="text-align: center; padding: 60px 20px; background: var(--light-color); border-radius: var(--border-radius);">
                <h2 style="font-size: 28px; margin-bottom: 20px;">Keine Ergebnisse gefunden</h2>
                <p style="font-size: 18px; color: var(--text-light); margin-bottom: 30px;">
                    Leider konnten wir keine Ergebnisse für Ihre Suche finden. Versuchen Sie es mit anderen Suchbegriffen.
                </p>
                
                <div style="max-width: 500px; margin: 0 auto;">
                    <?php get_search_form(); ?>
                </div>
                
                <div style="margin-top: 40px;">
                    <h3 style="margin-bottom: 20px;">Benötigen Sie Hilfe?</h3>
                    <a href="tel:+491234567890" class="btn btn-primary">
                        <i class="icon-phone"></i>
                        Jetzt anrufen
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
