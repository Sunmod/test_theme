<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <a class="logo" href="http://localhost:8888">
            <img class="logo__img" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
        </a>
        <nav>
            <a href="#1">Link 1</a>
            <a href="#2">Link 2</a>
            <a href="#3">Link 3</a>
        </nav>
    </header>