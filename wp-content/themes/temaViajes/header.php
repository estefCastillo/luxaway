<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <title><?php wp_title(); ?></title>
   <meta name="viewport" content="width=device-width, minimum-scale=1">
   <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
   <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">




   <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
   <header id="inicio">
      <?php wp_nav_menu(array('menu' => 'Main', 'container' => 'nav')); ?>
      <nav class="menu">
      <ul>
         <li><a href="header.phps">Inicio</a></li>
         <li><a href="#viaja">Viaja</a></li>
         <li><a href="<?php echo get_permalink(get_page_by_title('Sobre Nosotros')); ?>">Sobre Nosotros</a></li>
      </ul>
      </ul>
   </nav>
   </header>
</div>
