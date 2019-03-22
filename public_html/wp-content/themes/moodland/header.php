<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tomas Matulionis</title>

<link rel="stylesheet" id="admin-bar-css" href="https://moodland.lt/wp-includes/css/admin-bar.min.css?ver=4.9.9" type="text/css" media="all">
<link rel="stylesheet" id="wp-bootstrap-starter-bootstrap-css-css" href="https://moodland.lt/wp-content/themes/moodland/inc/assets/css/bootstrap.min.css?ver=4.9.9" type="text/css" media="all">
<link rel="stylesheet" id="wp-bootstrap-pro-fontawesome-cdn-css" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css?ver=4.9.9" type="text/css" media="all">
<link rel="stylesheet" id="wp-bootstrap-starter-style-css" href="https://moodland.lt/wp-content/themes/moodland/style.css?ver=4.9.9" type="text/css" media="all">
<script type="text/javascript" src="https://moodland.lt/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>

	<style type="text/css" media="print">#wpadminbar { display:none; }</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<div id="content" class="site-content">
                <?php endif; ?>
