<div class="container">

<?php if( have_rows('card_maschi') ): ?>
<?php while( have_rows('card_maschi') ): the_row(); 

    $id = rand();
    $img = get_sub_field('immagine_card_M');

    ?>

    <?php if( $img ): ?>

    <div id="<?php echo "accordionExample-" . $id; ?>">
        <div class="py-5">
            <div class="card">
                <div class="row">

                    <div class="col-12 col-md-4">
                        <img class="card-img-top" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="card-body">
                            <h4><?php the_sub_field('nome_card_M'); ?></h4>
                            <?php the_sub_field('descrizione_card_M'); ?>
                            <hr>
                            <a class="link-collapse list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#<?php echo "collapseExample2-" . $id; ?>" role="button" aria-expanded="true" aria-controls="<?php echo "collapseExample2-" . $id; ?>">Galleria ></a>
                        </div>
                    </div>

                </div>


                <div class="collapse" id="<?php echo "collapseExample2-" . $id; ?>" data-parent="#<?php echo "accordionExample-" . $id; ?>">
                    <div class="card-body">

                    <?php if( have_rows('galleria_card_M') ): ?>
                    <div class="row py-2">
                    <?php while( have_rows('galleria_card_M') ): the_row(); 

                        $imgGallery = get_sub_field('immagine_galleria_M');

                        ?>

                        <?php if( $img ): ?>
                        
                            <div class="col-12 col-sm-4">
                                <img src="<?php echo $imgGallery['url']; ?>" alt="<?php echo $imgGallery['alt']; ?>" />
                            </div>

                        <?php endif; ?>

                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

</div>
