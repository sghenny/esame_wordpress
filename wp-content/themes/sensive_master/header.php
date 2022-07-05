<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo("charset");?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo("name");?> | <?php wp_title() ?></title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

   <?php wp_head(); ?>
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="<?php echo home_url() ?>">
            <img src="<?php home_url() ?>"><img src="<?php bloginfo("template_directory");?>/img/logo.png" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <?php 
            if (function_exists('wp_nav_menu') && has_nav_menu('header_menu')){
                wp_nav_menu(array(
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse offset',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'theme_location' => 'header',
                ));
            }
          ?>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <!--<div class="collapse navbar-collapse offset" id="navbarSupportedContent"> -->
            <!-- <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="qui dovrei usare home_url">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li> 
              <li class="nav-item"><a class="nav-link" href="category.html">Category</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul> -->

          <!-- </div> -->
        </div>
      </nav>
    </div>
  </header>