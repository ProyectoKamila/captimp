<?php get_header(""); ?>
<!--SLIDER -->
</header>
<?php wp_reset_query(); ?>


<div class="container">
    <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="thumbnail">
            <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
          <div class="caption">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <p><a href="<?php the_permalink(); ?> " class="btn btn-primary" role="button">Ver Detalle</a> 
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
</div>

<?php get_footer(""); ?>