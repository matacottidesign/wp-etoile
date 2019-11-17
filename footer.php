<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.1026294414537!2d12.489860215820608!3d41.89064987922112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f615e4fb36bf9%3A0x23e7b6d20406d4b8!2sColosseo!5e0!3m2!1sit!2sit!4v1571321019259!5m2!1sit!2sit" height="270" frameborder="0" style="border:0; border-radius: 0.5rem;" allowfullscreen=""></iframe>
            <div class="mt-4 d-flex align-items-center">
              <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/enfi-logo_Tavola disegno 1.svg" width="80px" alt="enfi-logo">
              <img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/cfa-logo-01.svg" width="80px" alt="cfa-logo">
              <small>Allevamento di gatti persiani,<br> silver shaded, chinchilla e golden <br> Copyright &copy 2019-2020 | Barbara Ciamarra</small>
            </div>
        </div>
        <div class="footer-text col-12 col-md-6 text-right">
          <p>Allevamento di Gatti Persiani, Silver Shaded, <br> Chinchilla e Golden <br> <small>di Barbara Ciamarra</small></p>
          <ul>

            <li class="pb-3">      
              <a class="pr-3" href="#">Via di prova - 123 (RM) | Zona Trigoria</a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/position-01.svg" width="25px" alt="position-icon">
            </li>

            <li class="pb-3">
              <a class="pr-3" href="#">348 111 22 33</a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/phone-01.svg" width="25px" alt="mobile-icon">     
            </li>

            <li>      
              <a class="pr-3" href="#">tuamail@gmail.com</a>
              <img src="<?php echo get_template_directory_uri(); ?>/img/email-01.svg" width="25px" alt="mail-icon">
            </li>

          </ul>

          <small>Designed and made by <a href="https://matacottidesign.it/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-restyling.svg" width="20px" alt="logo-matacotti-design"></a></small>
        </div>
      </div>
    </div>
  </footer>

  <div style="margin-bottom: 57px;"></div>

  <div class="fixed-bottom contattaci-banner text-center py-3">
    <a href="#">Contattaci</a>
  </div>


<script type="text/javascript">

var prevScrollpos = window.pageYOffset;
window.onscroll = function(){

var currentScrollpos = window.pageYOffset;

if(prevScrollpos > currentScrollpos){
	document.getElementById('menu').style.top = '0';
} else {
	document.getElementById('menu').style.top = '-100px';
}

prevScrollpos = currentScrollpos;
}

</script>





</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

