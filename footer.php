<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <?php if(is_active_sidebar( 'sidebar')) : ?>
    <?php dynamic_sidebar('sidebar');?>
  <?php endif;?>
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

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