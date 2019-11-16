<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="pt-5">
    <div class="container">
        <!--CHI SIAMO-->
        <?php //the_content(); ?>
        <?php get_template_part('global-templates/presentazione'); ?>

        <!--MAIN-->
        <?php get_template_part('global-templates/main'); ?>

        <!--FACEBOOK-->
        <?php get_template_part('global-templates/facebook'); ?>
    </div>
</div>

<?php endwhile; ?>





<?php get_footer(); ?> 
