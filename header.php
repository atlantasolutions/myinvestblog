<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyInvestBLog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]--><head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
        <title><?php wp_title() ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/common.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0929b22fd9.js"></script><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all"><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all"><link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script></head>




<body <?php body_class(); ?>>
<div>
            <div class="coinlore-priceticker-widget" data-mcurrency="usd" data-bcolor="#212121" data-scolor="#fff" data-ccolor="#fff" data-pcolor="#fff"></div>
        </div>

         <section class="big-image">
            <img src="<?= bloginfo('template_directory'); ?>/img/bg.png">
         </section>
       <header class="header">
            <img class="logo" src="<?= bloginfo('template_directory'); ?>/img/logo.png">
            <div class="hamburger"></div>
                <ul class="nav-links nav-links-mob">
                    <li><a class="active" href="/">Блог</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Реклама</a></li>
                    <li><a href="#">Видеообзоры</a></li>
                    <li><a href="#">Акции и предложения</a></li>
                </ul>
                <a class="btn-outline" href="#">Заказать рефбек</a>
        </header>