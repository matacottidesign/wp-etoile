<div class="py-8">
    <div id="accordionExample">
    <!-- data-parent="#accordionExample" è la proprietà che fa in modo che alterna i testi senza incolonnarli in sequenza -->
        <div class="row" style="margin-left: inherit !important;">

            <!--DICONO DI NOI-->
            <div class="col-12 col-md-6 list-group list-group-flush">
                <div class="d-flex justify-content-center align-items-center pb-3">
                    <?php 
                    $image = get_field('immagine_main');
                    if( !empty( $image ) ): ?>
                        <img class="mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="90px" />
                    <?php endif; ?>
                </div>
                <div>
                    <h2 class="text-center"><?php the_field('titolo_main'); ?></h2>
                    <?php the_field('descrizione_main'); ?>
                    <div class="pt-3 text-center">
                        <a class="link-collapse list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseExample"
                                role="button" aria-expanded="true" aria-controls="collapseExample">
                                Vedi tutto >
                        </a>
                    </div>
                </div>
                <?php include 'gallery-main.php' ?>
            </div>

            <!--LE NOSTRE VINCITE-->
            <div class="col-12 col-md-6 list-group list-group-flush">
                <div class="d-flex justify-content-center align-items-center pb-3">
                    <?php 
                    $image = get_field('immagine2_main');
                    if( !empty( $image ) ): ?>
                        <img class="mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="54px" />
                    <?php endif; ?>
                </div>
                <div>
                    <h2 class="text-center"><?php the_field('titolo2_main'); ?></h2>
                    <?php the_field('descrizione2_main'); ?>
                    <div class="pt-3 text-center">
                        <a class="link-collapse list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseExample2"
                            role="button" aria-expanded="true" aria-controls="collapseExample2">
                            Vedi tutto >
                        </a>
                    </div>
                    <?php include 'gallery-risultati.php' ?>
                </div> 
            </div>

        </div>
    </div>
</div>