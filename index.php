<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package notify
 */

get_header();
?>


<?php if (have_posts()) :

    if (is_home() && !is_front_page()) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
    <?php
    endif;

    /* Start the Loop */
    while (have_posts()) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part('template-parts/content', get_post_format());

    endwhile;

    the_posts_navigation();

else :

    get_template_part('template-parts/content', 'none');

endif;
?>
    <section id="post" class="background-editable-flat-reach">

        <div class="container">
            <?php echo get_theme_mod('copyright_textbox', 'Текст копирайта еще не придумали'); ?>

            <ul class="gear-star-earth">
                <?php if (have_posts()) : ?>
                    <?php  while (have_posts()) : the_post(); ?>
                        <li class="card">
                            <div class="box-img">
                                <?php the_post_thumbnail('full', 'class=round-img'); ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        </div>
    </section>



<?php
get_sidebar();
get_footer();
?>