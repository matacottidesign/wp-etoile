<?php
/**
 * Template Name: Femmine
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

						<!--CONTENUTO INIZIALE-->
                        <div class="container">
                            <?php the_content(); ?>
                        </div>

						<?php get_template_part('page-templates/variant-banner'); ?>

						<div class="container">
							<div class="py-8">
								<h3 class="text-center"><?php the_field('titolo_femmine'); ?></h3>
								<?php the_field('descrizione_femmine'); ?>
								
								<div class="text-center">
								<?php 
								$link = get_field('link_femmine'); 
								if( $link ): ?>
									<a class="mx-2" href="<?php echo esc_url( $link ); ?>">Maschi ></a>
								<?php endif; ?>
								</div>
							</div>
						</div>

						<?php get_template_part('global-templates/card-femmine'); ?>

						<div class="container">
							<hr class="my-5">
						</div>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
