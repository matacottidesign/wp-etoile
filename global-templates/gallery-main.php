<div class="collapse" id="collapseExample" data-parent="#accordionExample">
        <div class="card card-body">    
        <?php
        // check if the repeater field has rows of data
        if( have_rows('items') ): ?> 
        <?php
        // loop through the rows of data
        while ( have_rows('items') ) : the_row();
            $Id = rand(1,99999999999999999);
            $img = get_sub_field('galleria_items');

        if( $img ): ?> 

            <h5 class="py-3"><?php the_sub_field('titolo_items'); ?></h5>

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

            <?php 
            $link = get_sub_field('link_items');
            if( $link ): ?>
                <a class="button py-3" href="<?php echo esc_url( $link ); ?>">Rai Play - Link diretto della puntata ></a>
            <?php endif; ?>

            <?php the_sub_field('descrizione_items'); ?>

            <hr>   

    <?php endif;                                 
    endwhile;
    else :
        // no rows found
    endif;
    ?>      
</div>
</div>