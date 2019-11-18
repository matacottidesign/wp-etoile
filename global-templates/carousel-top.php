<section style="margin-top: 57px;"></section>

  <!--HERO-->
  <div class="pt-3">
    <div class="hero">
      <div class="container">
        <div class="row">
          <div id="bg-logo" class="col-12 col-md-6 d-flex align-items-center">
            <div class="pt-5 description">
                <!-- <h1>Etoile Blanche Cattery</h1> -->
                
                <?php 
                $image = get_field('logo_car');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="540px" />
                <?php endif; ?>

                <h4><?php the_field('sottotitolo_car'); ?></h4>

                <div class="pt-4">
                    <?php 
                    $link1 = get_field('link1_car');
                    if( $link1 ): ?>
                        <a class="mr-5" href="<?php echo esc_url( $link1 ); ?>">Scopri di più ></a>
                    <?php endif; ?>

                    <?php 
                    $link2 = get_field('link2_car');
                    if( $link2 ): ?>
                        <a href="<?php echo esc_url( $link2 ); ?>">Contattaci ></a>
                    <?php endif; ?>
                </div>

            </div>
          </div>
          <div class="col-12 col-md-6">
          <?php
            // check if the repeater field has rows of data
            if( have_rows('car') ): ?> 
            <?php
            // loop through the rows of data
            while ( have_rows('car') ) : the_row();
                $Id = rand();
                $img = get_sub_field('galleria_car');

            if( $img ): ?> 
                <!--CAROSELLO-->
                <div id="<?php echo 'carousel' . $Id ?>" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php $i = 0; foreach( $img as $pic ): ?>

                            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                                <img class="d-block w-100" src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>" />
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
          </div>
        </div>
      </div>
    </div>
  </div>