<section class="header">
  <div class="container">
    <div class="menu">
      <ul>
        <li>
          <a href="#">SOBRE NÓS</a>
        </li>
        <li>
          <a href="#">REPERTÓRIO</a>
        </li>
        <li>
          <a href="#">PONTORETO PODCAST</a>
        </li>
        <li class="menu-mobile">
          <div class="img-menu-mobile"></div>
        </li>
      </ul>
    </div>
    <div class="logo">
      <a href="/">
        <object
          id="logo-lombada-preto"
          type="image/svg+xml"
          data="<?php echo get_template_directory_uri(); ?>/dist/imgs/logo-lombada-preto.svg"
          alt="Logo Lombada Filmes"
        ></object>
      </a>
    </div>
    <div class="menu menu-aling-right">
      <ul>
        <li>
          <a href="#">CONTATO</a>
        </li>
        <li class="pesquisa">
          <a href="#">
            <div class="img-pesquisa"></div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<div class="container-menu-mobile">
  <div class="box-menu">
    <div class="menu">
      <ul>
        <li class="active">
          <a href="#">SOBRE NÓS</a>
        </li>
        <li>
          <a href="#">REPERTÓRIO</a>
        </li>
        <li>
          <a href="#">PONTORETO PODCAST</a>
        </li>
      </ul>
    </div>
    <div class="menu">
      <ul>
        <li>
          <a href="#">CONTATO</a>
        </li>
      </ul>
    </div>
    <?php 
      jd_component('redes-social');
    ?>
  </div>
  
</div>
