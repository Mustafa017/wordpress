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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head()?>
    <style>
        .showcase{
            background:url(<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/Beautiful-autumn-road-scenery.jpg')?>) no-repeat center center;
        }
    </style>
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
        </div><!-- /.container -->
    </div>
    <section class="showcase">
            <div class="container">
                <h1><?php echo get_theme_mod( 'showcase_heading', 'Custom Wordpress Bootstrap Theme' )?></h1>
                <p><?php echo get_theme_mod( 'showcase_text', 'This is my first Wordpress blog site.' )?></p>
                <a href="<?php echo get_theme_mod( 'btn_url', 'http://test.com' )?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod( 'btn_text', 'Get Started' )?></a>
            </div>
        </section>

        <section class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php if(is_active_sidebar('box1')) : ?>
                            <?php dynamic_sidebar( 'box1' )?>
                        <?php endif;?>
                    </div>

                    <div class="col-md-4">
                        <?php if(is_active_sidebar('box2')) : ?>
                            <?php dynamic_sidebar( 'box2' )?>
                        <?php endif;?>
                    </div>

                    <div class="col-md-4">
                        <?php if(is_active_sidebar('box3')) : ?>
                            <?php dynamic_sidebar( 'box3' )?>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </section>
<footer class="blog-footer">
  <p>Build by <?php the_author();?> &copy <?php echo Date('Y');?><p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer()?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
  </body>
</html>