<div class="collapse" id="collapseExample2" data-parent="#accordionExample">
        <div class="card card-body">    
        <?php
        // check if the repeater field has rows of data
        if( have_rows('items2') ): ?> 
        <?php
        // loop through the rows of data
        while ( have_rows('items2') ) : the_row();
            $Id = rand();
            $img = get_sub_field('galleria_items2');

        if( $img ): ?> 

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
            $link = get_sub_field('link_items2');
            if( $link ): ?>
                <a class="button pt-2" href="<?php echo esc_url( $link ); ?>">Vai alla pagina ></a>
            <?php endif; ?>

    <?php endif;                                 
    endwhile;
    else :
        // no rows found
    endif;
    ?>      
</div>
</div>