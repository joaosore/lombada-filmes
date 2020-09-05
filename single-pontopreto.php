<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jd
 */


get_header();

?>
  <div class="pdg-header"> 
<?php 

  while ( have_posts() ) : the_post();
    if(get_the_ID() != NULL)
    {
      $pontopretoInternaBanner = get_dados('pontopreto_interna_banner', get_the_ID());
      ?>
      
      <div class="pontopreto-interna-banner" style="background-image: url('<?php echo $pontopretoInternaBanner['imagem_de_fundo']['url']; ?>')">
        <div class="box">
          <div class="dados">
            <img src="<?php echo $pontopretoInternaBanner['logo']['url']; ?>" alt="">
            <h4><?php echo get_the_title(get_the_ID()); ?></h4>
            <div class="rank">
              # <?php echo $pontopretoInternaBanner['posicao'] ?>
            </div>
            <div class="autor">
              <div class="titulo">entrevista com</div>
              <h3><?php echo $pontopretoInternaBanner['autor'] ?></h3>
            </div>
          <?php echo $pontopretoInternaBanner['descricao'] ?>
          </div>
        </div>
        <div class="box">
          <img class="capa" src="<?php echo $pontopretoInternaBanner['capa']['url']; ?>" alt="">
        </div>
        <div class="player">

          <div id="audioplayer">
            <div class="btimeline">
              <button id="pButton" class="play" onclick="play()"></button>
              <div id="timeline">
                <div id="playhead"></div>
              </div>
            </div>
            <div id="tempo">
              <div id="tempo-atual">00:00:00</div>
              <div id="tempo-final">00:00:00</div>
            </div>
          </div>

          <audio id="music" controls="controls">
            <source src="<?php echo $pontopretoInternaBanner['mp3']['url']; ?>" type="audio/mpeg" />
          </audio>

          <script>
            
          </script>
        </div>
      </div>
      <div class="pontopreto-interna-conteudo">
        <div class="container">
          <div class="conteudo">
            <h1><?php echo get_the_title(get_the_ID()); ?></h1>
            <?php
              $pontopretoInternaConteudo = get_dados('pontopreto_interna_conteudo');
              echo $pontopretoInternaConteudo['conteudo'];
            ?>
          </div>
          <div class="compartilhar">
            <p>Compartilhar</p>
            <?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
          </div>
        </div>
      </div>
      <div class="pontopreto-continue-escutando">
        <div class="container">

          <div class="titile">
            <hr>
            <h3>Continue escutando</h3> 
          </div>
          
          <?php foreach(get_pontopreto(get_the_ID(), 3) as $item) { ?>
            <div class="item">
              <a href="<?php echo $item['link'] ?>">
                <img src="<?php echo $item['thumb']['url'] ?>" alt="">
                <div class="title">
                  <span><?php echo $item['titulo'] ?></span>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
      <?php 
    }
  endwhile;
  ?>
    </div>
    
    <div class="footer-interna-pontopreto">
      <?php 
      jd_component('footer');
      jd_component('redes-social');
      ?>
    </div>
  <?php
  get_footer();
?>


