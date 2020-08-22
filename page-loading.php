<?php
/**
 * 
 * Template Name: Loading
 *
 * @package jd
 *
 */

get_header(); 

?>

<style>

  html, body {
    height: 100%;
  }

  body {
      background-color: #0b0b0b;
      display: flex;
      align-items: center;
      justify-content: center;
  }

  div {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: #FFF;
    font-family: 'Brasilero\ 2018 Free';
    height: 100%;
    align-items: center;
    justify-content: space-evenly;
  }

  .header {
    display: none !important;
  }

  object {
    width: 200px;
  }


</style>

<body>
  <div>
  <object
      id="logo-lombada-preto"
      type="image/svg+xml"
      data="<?php echo get_template_directory_uri(); ?>/dist/imgs/logo-lombada-preto.svg"
      alt="Logo Lombada Filmes"
    ></object>
    <h1>Em breve!</h1>
  </div>
  
</body>