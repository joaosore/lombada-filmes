<?php
function button($data) {
  $data = (object) $data;
  return '<a class="button" href="'.$data->href.'" tagert="'.$data->target.'">
            '.$data->title.'
          </a>';
}
?>