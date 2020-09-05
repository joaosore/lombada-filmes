<?php
function button($data) {
  $data = (object) $data;
  return '<a class="button" href="'.$data->url.'" tagert="'.$data->target.'">
            '.$data->title.'
          </a>';
}
?>