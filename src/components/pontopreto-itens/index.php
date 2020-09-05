<section class="pontopreto-itens">
  <div class="container">
    <?php foreach(get_pontopreto(null, 4) as $item) { ?>
      <div class="items">
        <a href="<?php echo $item['link'] ?>">
          <img src="<?php echo $item['thumb']['url'] ?>" alt="">
          <div class="dados">
            <div class="rank"># <?php echo $item['posicao'] ?></div>
            <div class="autor">
              <span>Entrevista com</span>
              <h4><?php echo $item['autor'] ?></h4>
            </div>
            <div class="bt-play">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/bt-play.png" alt="">
            </div>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</section>
