<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png">
    <?php wp_head(); ?>
</head>

<body class="home page-template-default page page-id-15 wp-embed-responsive ui-a-dsmm-slide  elementor-default elementor-kit-3 elementor-page elementor-page-15">
  <div class="uicore-animation-bg"></div>
  <div class="uicore-body-content">
  <!-- 1.2 uicore_before_page_content -->
  <div id="uicore-page">

  <?php
  include('includes/header.php');
  ?>