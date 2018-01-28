<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package notify
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container clearfix">
        <div class="social-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'menu_class' => 'nav-main',
                'items_wrap' => '%3$s'
            ));
            ?>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
