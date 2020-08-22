<?php 
 $video_de_destaque = get_dados('video_de_destaque')
?>
<section class="box-player">
  <?php 
    $data = array(
      'id' => $video_de_destaque['id_video']
    );
    echo jd_component('player', array(
      'data' => $data
    ));
  ?>
</section>
