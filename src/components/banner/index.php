<?php 

  $data = array(
    'href' => '#',
    'target' => '_blank',
    'title' => 'Conheça'
  );

?>

<section class="banner">
  <div class="container">
    <img class="img-desktop" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/banner-desktop.jpg" alt="">
    <img class="img-mobile" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/banner-mobile.jpg" alt="">
    <div class="box-dados">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/logo-ponto-preto.png" alt="">
      <p>Diversidade e visibilidade no audiovisual</p>
      <?php 
        echo jd_component('button', array(
          'data' => $data
        ));
      ?>
    </div>
  </div>
</section>