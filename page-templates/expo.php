<?php
/**
 * Template Name: Expo
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
                        
                        <!--//////////////////////////////////////////////////////////////////////////////////-->
                        <div class="container">
                        <div class="row py-5">
                            <div class="col-12 col-lg-8">
                                <h3><?php the_field('titolo_expo'); ?></h3>
                                <?php the_field('descrizione_expo'); ?>
                            </div>
                            <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                                <?php 
                                $image = get_field('immagine_expo');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="140px" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--//////////////////////////////////////////////////////////////////////////////////-->
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('ripetitore_expo') ): ?> 
                        <?php
                        // loop through the rows of data
                        while ( have_rows('ripetitore_expo') ) : the_row();
                            $Id = rand();
                            $img = get_sub_field('galleria_rip');

                        if( $img ): ?> 

                            <h3 class="mt-5"><?php the_sub_field('titolo_rip'); ?></h3>

                            <!--CAROSELLO-->
                            <div id="<?php echo 'carousel' . $Id ?>" class="carousel slide" data-parent="#accordionExample">
                                <div class="carousel-inner">

                                    <?php $i = 0; foreach( $img as $pic ): ?>

                                        <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                                            <img class="d-block w-100" src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>" />
                                        </div>
                                        <div class="pulsanti-slide">
                                            <a class="carousel-control-prev" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!--END_CAROSELLO-->     
                                    <?php $i++; endforeach; ?>         
                                </div>
                            </div>
                        <?php endif;                                 
                        endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>      
                        <!--//////////////////////////////////////////////////////////////////////////////////-->
                        <h3 class="mt-5"><?php the_field('titolo_premi_expo'); ?></h3>
                        <?php the_field('descrizione_premi_expo'); ?>
                        <hr class="my-5">
                        </div>
                        <!--//////////////////////////////////////////////////////////////////////////////////-->

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer();
