<?php 
  function player($data) {
    $data = (object) $data;
    return '<section class="video-play">
            <div class="container">
              <div data-vimeo-id="'.$data->id.'" id="made-in-ny"></div>
              <!-- <div>
                <div class="btn play"></div>
                <div class="box-bar">
                  <div class="bar"></div>
                </div>
              </div> -->
            </div>
          </section>';
  }
?>


