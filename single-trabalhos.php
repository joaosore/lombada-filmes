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
      </div>
      <?php 
    }
  endwhile;
  ?>
    </div>  
  <?php 
 get_footer();
?>


