<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <div class="header-logo">
    <?php if ( !is_front_page() && !is_home() ){ ?>
      <a href="<?php echo home_url(); ?>">
    <?php } ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
    <?php if ( !is_front_page() && !is_home() ){ ?>
      </a>
    <?php } ?>
  </div><!-- /.header-logo -->
  <header role="banner">
    <div class="container-fluid">
      <div class="row">
        <nav class="header--nav col-xl-12" role="navigation">
          <?php /* wpeHeadNav(); */ ?>
          <ul class="headnav">
            <li><a href="#why">Почему “ТТ”</a></li>
            <li><a href="#forwho">Для кого</a></li>
            <li><a href="#advantages">Преимущества</a></li>
            <li><a href="#about">О Программе</a></li>
            <li><a href="#author">Авторы</a></li>
            <li><a href="#video">Видео</a></li>
            <li><a href="#contacts">Контакты</a></li>
          </ul>
          <span class="header-close">x</span>
        </nav><!-- /header--nav -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
