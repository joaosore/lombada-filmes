<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jd
 */

  $data = get_dados('trabalhos');
  
  $data = (object) $data;

  $video = str_replace('https://vimeo.com/', '', $data->video);
  $video = array(
    'id' => $video
  );

get_header();

?>
  <div class="pdg-header"> 
<?php 

  while ( have_posts() ) : the_post();
    if(get_the_ID() != NULL)
    {
      echo jd_component('player', array(
        'data' => $video
      ));
      ?>
      <div class="container">
        <div class="box">
          <?php 
            echo $data->descricao_bloco_1;
          ?>
        </div>
        <div class="box">
          <?php 
            echo $data->descricao_bloco_2;
          ?>
        </div>
        <div class="box">
          <?php 
            echo $data->descricao_bloco_3;
          ?>
        </div>
        <div class="mais-producoes">
          <hr>
          <h3>mais produções</h3>
          <section class="carousel">
            <div class="container">
              <div class="owl-carousel owl-theme">
                <?php foreach(get_trabalhos(get_the_ID(), 3) as $item) { ?>
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
        </div>
      </div>
      <?php 
    }
  endwhile;
  ?>
    </div>
    
    <div class="footer-interna">
      <?php 
      jd_component('footer');
      jd_component('redes-social');
      ?>
    </div>
  <?php
  get_footer();
?>


