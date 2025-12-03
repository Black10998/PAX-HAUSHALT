<?php
/**
 * The template for displaying archive pages
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');
        ?>
    </div>
</div>

<div class="archive-content section-padding">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="background: var(--white); border-radius: var(--border-radius); overflow: hidden; box-shadow: var(--shadow-sm); transition: var(--transition);">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div style="padding: 25px;">
                            <div class="post-meta" style="display: flex; gap: 15px; margin-bottom: 15px; font-size: 14px; color: var(--text-light);">
                                <span><?php echo get_the_date(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span><?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                            
                            <h2 style="font-size: 22px; margin-bottom: 15px;">
                                <a href="<?php the_permalink(); ?>" style="color: var(--dark-color);">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="post-excerpt" style="color: var(--text-light); margin-bottom: 20px;">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="read-more" style="color: var(--primary-color); font-weight: 600;">
                                Weiterlesen →
                            </a>
                        </div>
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
            <div class="no-posts" style="text-align: center; padding: 60px 20px;">
                <h2>Keine Beiträge gefunden</h2>
                <p>Es wurden keine Beiträge in diesem Archiv gefunden.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
