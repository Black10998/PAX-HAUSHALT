<?php
/**
 * The template for displaying all pages
 *
 * @package Haushalt_Reparatur
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
        } ?>
    </div>
</div>

<div class="page-content section-padding">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Seiten:', 'haushalt-reparatur'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
