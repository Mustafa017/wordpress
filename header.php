<!doctype html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description');?>">

    <title><?php bloginfo('name');?> |
     <?php is_front_page() ? bloginfo('description') : wp_title()?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <!-- custom style for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head()?>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1><?php bloginfo('name');?></h1>
            <p><?php bloginfo('description');?></p>
        </div>