<?php
/**
 * Template Name: Contatti
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

                    <div class="container">
                        <div class="row py-8">
                            <div class="col-12 col-lg-8">
                                <h3 class="pb-3"><?php the_field('titolo_contatti'); ?></h3>
                                <?php the_field('descrizione_contatti'); ?>
                            </div>
                            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                                <?php 
                                $image = get_field('immagine_contatti');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="130px" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                        <?php get_template_part('global-templates/form-contatti'); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
