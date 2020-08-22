<?php 
 $inicial = get_dados('inicial')
?>
<section class="introduction">
  <div class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/banner-parte-1.jpg" alt="">
    <div class="box-texto">
      <?php 
        echo $inicial['frase_de_impacto'];
      ?>
    </div>
  </div>
  <div class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/banner-parte-2.jpg" alt="">
  </div>
  <div class="arrow">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/arrow.svg" alt="">
  </div>
</section>
