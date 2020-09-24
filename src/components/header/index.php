<section class="header">
  <div class="container">
    <div class="menu">
      <ul>
        <li>
          <a href="/#sobre-nos">SOBRE NÓS</a>
        </li>
        <li>
          <a href="/#carousel">REPERTÓRIO</a>
        </li>
        <li>
          <a href="/#pontopreto">PONTO PRETO PODCAST</a>
        </li>
        <li class="menu-mobile">
          <div class="img-menu-mobile"></div>
        </li>
      </ul>
    </div>
    <div class="logo">
      <a href="/">
        <?php 
          $word = "pontopreto";
          $URL_ATUAL= "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          $img = '';
          if(strpos($URL_ATUAL, $word) !== false){
            $img = '/dist/imgs/logo-lombada-pride-branco.svg';
          } else{
            $img = '/dist/imgs/logo-lombada-preto.svg';
          }
        ?>
        <object
          id="logo-lombada-preto"
          type="image/svg+xml"
          data="<?php echo get_template_directory_uri() . $img; ?>"
          alt="Logo Lombada Filmes"
        ></object>
      </a>
    </div>
    <div class="menu menu-aling-right">
      <ul>
        <li>
          <a href="/#contato">CONTATO</a>
        </li>
        <!-- <li class="pesquisa">
          <a href="#">
            <div class="img-pesquisa"></div>
          </a>
        </li> -->
      </ul>
    </div>
  </div>
</section>

<div class="container-menu-mobile">
  <div class="box-menu">
    <div class="menu">
      <ul>
        <li class="active">
          <a href="/#sobre-nos">SOBRE NÓS</a>
        </li>
        <li>
          <a href="/#carousel">REPERTÓRIO</a>
        </li>
        <li>
          <a href="/#pontoreto">PONTORETO PODCAST</a>
        </li>
      </ul>
    </div>
    <div class="menu">
      <ul>
        <li>
          <a href="/#contato">CONTATO</a>
        </li>
      </ul>
    </div>
    <?php 
      jd_component('redes-social');
    ?>
  </div>
  
</div>
