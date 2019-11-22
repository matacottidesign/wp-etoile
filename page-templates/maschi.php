<?php
/**
 * Template Name: Maschi
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

						<div class="container text-center">
							<h3 class="pt-8 pb-3"><?php the_field('titolo_maschi'); ?></h3>
							<?php the_field('descrizione_maschi'); ?>
							
							<?php 
							$link = get_field('link_maschi');
							if( $link ): ?>
								<a class="px-4" href="<?php echo esc_url( $link ); ?>">Femmine ></a>
							<?php endif; ?>
						</div>

						<?php get_template_part('global-templates/card-maschi'); ?>

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
