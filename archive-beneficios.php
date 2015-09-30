<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>

<div class="container">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <?php query_posts(array('post_type'=>'configuration','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
        <?php if(get_field('titulo1')){?>

        <div class="linea1 col-lg-12 text-center">
            <h1> <?php the_field('titulo1');?> </h1>
        </div>
        <?php } ?>
        <?php } wp_reset_query(); ?>
        
        <?php  query_posts(array('post_type'=>'beneficios','categoria-beneficios'=>'sociales','posts_per_page'=>12)); ?>
        <div class="clearfix"></div>
         <div class="marco1 col-xs-12"></div>
         <div class="clearfix"></div>
         <?php $x=0; ?>
          <?php while(have_posts()){ the_post();?>
         <div class="alto-bene col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
             <div class="col-lg-12 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-xs-12 text-center">
                  <img src="<?php echo $feat_image;?>  " class="img-responsive" alt="">
             </div>
             <div class="alto1-bene col-xs-12">
                 <p>
                     <?php the_content(); ?>
                 </p>
             </div>
         </div>
          <?php if($x==3){ ?>
         <div class="clearfix"></div>
         <?php } ?>
         <?php } ?>
         
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <?php query_posts(array('post_type'=>'configuration','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
        <?php if(get_field('titulo2')){?>

        <div class="linea1 col-lg-12 text-center">
            <h1> <?php the_field('titulo2');?> </h1>
        </div>
        <?php } ?>
        <?php } ?>
         <?php  query_posts(array('post_type'=>'beneficios','categoria-beneficios'=>'financieros','posts_per_page'=>1)); ?>
        <div class="clearfix"></div>
         <?php while(have_posts()){ the_post();?>
         <div class="marco01 col-xs-12"></div>
         <div class="clearfix"></div>
        <div class="col-lg-6 ">
            <div class="parrafo-obje col-xs-12">
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
         <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="col-lg-6">
             <img src="<?php echo $feat_image;?>  " class="img-responsive" alt="">
        </div>
        <?php } ?>
        <div class="clearfix"></div>
        <div class="marco1 col-xs-12"></div>
    </div>
</div>

<?php get_footer(""); ?>