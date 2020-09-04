<?php

  $pontopretoBanner = get_dados('pontopreto-banner');

?>
<section class="pontopreto-banner" style="background-image: url('<?php echo $pontopretoBanner['imagem_de_fundo']['url']; ?>')">
  <div class="box">
    <img src="<?php echo $pontopretoBanner['logo']['url']; ?>" alt="<?php echo $pontopretoBanner['logo']['alt']; ?>">

    <div class="texto">
      <?php echo $pontopretoBanner['texto']; ?>
    </div>

    <div class="links">
      <a href="<?php echo $pontopretoBanner['link_spotify']; ?>" class="ouvir">
        <img class="svg-icone" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/spotify_icone.svg" alt="">
        <div>
          <span>Ouvir no</span>
          <img class="svg-texto" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/spotify_texto.svg" alt="">
        </div>
      </a>

      <a href="<?php echo $pontopretoBanner['link_spotify']; ?>" class="ouvir">
        <img class="svg-icone" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/google_podcast_icone.svg" alt="">
        <div>
          <span>Ouvir no</span>
          <img class="svg-texto" src="<?php echo get_template_directory_uri(); ?>/dist/imgs/google_podcast_texto.svg" alt="">
        </div>
      </a>
    </div>
  </div>
</section>
