<section class="carousel">
  <div class="container">
    <div class="owl-carousel owl-theme">
      <?php foreach(get_trabalhos() as $item) { ?>
        <div class="item">
          <a href="<?php echo $item['link'] ?>">
            <img src="<?php echo $item['thumb']['url'] ?>" alt="">
            <div class="title">
              <span><?php echo $item['titulo_simplificado'] ?></span>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
