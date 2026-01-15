<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

<header style="background:#222;color:#fff;padding:20px;text-align:center;">
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
  <button id="themeToggle" style="margin-top:10px;padding:6px 12px;cursor:pointer;">
    Toggle Dark Mode
  </button>
</header>

