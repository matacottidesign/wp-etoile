<div class="row py-8">
    <div class="col-12 col-md-6">
        <h2><?php the_field('titolo_social'); ?></h2>
        <?php the_field('descrizione_social'); ?>
        <div class="mt-4">
            <?php 
            $link = get_field('link_social');
            if( $link ): ?>
                <a class="button pt-5" href="<?php echo esc_url( $link ); ?>">Link diretto Facebook ></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEtoile-Blanche-Cattery-551253915324964%2F&tabs=timeline&width=500px&height=500px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500px" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
</div>