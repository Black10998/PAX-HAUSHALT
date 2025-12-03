<?php
/**
 * The template for displaying all single posts
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="post-meta">
            <span class="post-date">
                <i class="icon-calendar"></i>
                <?php echo get_the_date(); ?>
            </span>
            <span class="post-author">
                <i class="icon-user"></i>
                <?php the_author(); ?>
            </span>
            <?php if (has_category()) : ?>
                <span class="post-category">
                    <i class="icon-folder"></i>
                    <?php the_category(', '); ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="single-content section-padding">
    <div class="container">
        <div class="content-wrapper">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Seiten:', 'haushalt-reparatur'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <i class="icon-tag"></i>
                        <?php the_tags('', ', ', ''); ?>
                    </div>
                <?php endif; ?>
            </article>

            <div class="post-navigation">
                <div class="nav-previous">
                    <?php previous_post_link('%link', '<i class="icon-arrow-left"></i> Vorheriger Beitrag'); ?>
                </div>
                <div class="nav-next">
                    <?php next_post_link('%link', 'Nächster Beitrag <i class="icon-arrow-right"></i>'); ?>
                </div>
            </div>

            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
