<section class="contato">
  <div class="container">
    <div class="formulario">
      <div class="box">
        <span class="style-font-01">Entre em contato</span>
        <form id="contato">
          <input id="nome" type="text" placeholder="Nome">
          <input id="email" type="email" placeholder="E-Mail">
          <input id="telefone" type="text" placeholder="Telefone">
          <textarea name="assunto" id="assunto" cols="30" rows="10" placeholder="Assunto"></textarea>
          <button class="btn-contato">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/send.svg" alt="">
          </button>
          <div class="loading">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block; width: 100px; height: auto;" width="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
              <rect x="17.5" y="30" width="15" height="40" fill="#ffb800">
                <animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="18;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2s"></animate>
                <animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="64;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.2s"></animate>
              </rect>
              <rect x="42.5" y="30" width="15" height="40" fill="#ffb800">
                <animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="20.999999999999996;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.1s"></animate>
                <animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="58.00000000000001;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1" begin="-0.1s"></animate>
              </rect>
              <rect x="67.5" y="30" width="15" height="40" fill="#ffb800">
                <animate attributeName="y" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="20.999999999999996;30;30" keySplines="0 0.5 0.5 1;0 0.5 0.5 1"></animate>
                <animate attributeName="height" repeatCount="indefinite" dur="1s" calcMode="spline" keyTimes="0;0.5;1" values="58.00000000000001;40;40" keySplines="0 0.5 0.5 1;0 0.5 0.5 1"></animate>
              </rect>
            </svg>
          </div>
        </form>
      </div>
    </div>
    <div class="midias">
      <span class="style-font-01">Midias Sociais</span>
      <?php 
        jd_component('redes-social');
      ?>
    </div>
  </div>
</section>
