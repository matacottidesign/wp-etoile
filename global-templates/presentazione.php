<div class="row py-8">
    <div class="col-12 col-md-6">
        <h2><?php the_field('titolo_presentazione'); ?></h2>
        <?php the_field('intro_presentazione'); ?>

        <a data-toggle="collapse" href="#collapseExample-readmore" role="button" aria-expanded="false" aria-controls="collapseExample-readmore">Leggi di più</a>
        <div class="collapse" id="collapseExample-readmore">
        <?php the_field('descrizione_presentazione'); ?>
        </div>

    </div>
    <div class="barbara col-12 col-md-6 text-center">
    <?php 
    $image = get_field('immagine_presentazione');
    if( !empty( $image ) ): ?>
        <img class="w-100 card" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="280px" />
    <?php endif; ?>
    </div>
</div>

<hr class="mt-5 mb-3">

