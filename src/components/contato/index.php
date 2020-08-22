<section class="contato">
  <div class="container">
    <div class="formulario">
      <div class="box">
        <span class="style-font-01">Entre em contato</span>
        <form action="">
          <input type="text" placeholder="Nome">
          <input type="email" placeholder="E-Mail">
          <input type="text" placeholder="Telefone">
          <textarea name="assunto" id="" cols="30" rows="10" placeholder="Assunto"></textarea>
          <button type="submit">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/send.svg" alt="">
          </button>
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
