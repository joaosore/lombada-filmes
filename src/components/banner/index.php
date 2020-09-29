<?php 
  $ponto_preto = get_dados('ponto_preto');
?>

<section class="banner pontopreto">
  <div class="container">
    <img class="img-desktop" src="<?php echo $ponto_preto['banner_desktop']['url']; ?>" alt="">
    <img class="img-mobile" src="<?php echo $ponto_preto['banner_mobile']['url']; ?>" alt="">
    <div class="box-dados">
      <img src="<?php echo $ponto_preto['logo']['url']; ?>" alt="">
      <div class="texto" >
        <?php echo $ponto_preto['descricao']; ?>
      </div>
      <?php 
        echo jd_component('button', array(
          'data' => $ponto_preto['botao']
        ));
      ?>
    </div>
  </div>
</section>