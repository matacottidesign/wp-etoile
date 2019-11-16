<div class="row">
    <div class="col-12 col-md-6">
        <h2><?php the_field('titolo_presentazione'); ?></h2>
        <?php the_field('descrizione_presentazione'); ?>
    </div>
    <div class="barbara col-12 col-md-6 d-flex justify-content-center align-items-center">
    <?php 
    $image = get_field('immagine_presentazione');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="280px" />
    <?php endif; ?>
    </div>
</div>

<hr class="my-5">

