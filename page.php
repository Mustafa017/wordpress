<?php get_header();?>

        <div class="row">

            <div class="col-sm-8 blog-main">
            <?php if (have_posts(  )) : ?>
                <?php while(have_posts(  )) : the_post(  )?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title();?>s</h2>
                <p class="blog-post-meta"><?php the_time('F j, Y g:i a');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a></p>
                
                <?php the_content(  );?>
                
            </div><!-- /.blog-post -->
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php echo __("No Page Found")?></p>
            <?php endif; ?>
            </div><!-- /.blog-main -->

        <?php get_footer();?> 
        
