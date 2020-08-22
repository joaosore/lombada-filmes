<section class="redes-social">
  <ul>
    <?php foreach(get_redes() as $item) { ?>
      <li>
        <a href="<?php echo $item['url']; ?>" alt="<?php echo $item['titulo'] ?>" >
          <div class="icon <?php echo $item['lower_titulo'] ?>"></div>
        </a>
      </li>
    <?php } ?>
  </ul>
</section>
