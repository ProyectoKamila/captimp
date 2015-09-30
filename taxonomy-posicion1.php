<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<div class="container">
    <div class="row">
         <div class="marco1 col-xs-12"></div>
        <?php query_posts(array('post_type'=>'configuration','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
        <?php if(get_field('titulo-descargas')){?>

        <div class="linea1 col-lg-12 text-center">
            <h1> <?php the_field('titulo-descargas');?> </h1>
        </div>
        <?php } ?>
        <?php } wp_reset_query(); ?>
        <div class="clearfix"></div>
        <div class="marco01 col-xs-12"></div>
         <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div class="row">
                     
                     <?php while(have_posts()){ the_post();?>
                     <?php 
                     $r = get_field('planilla1');
                     $s = $r['url'];
                     $rr = explode('/',$s);
                     //debug($rr)
                     ?>
                     <?php
                        $f = count($rr);
                        $f = $f-1;
                        $nombre_archivo = $rr[$f];
                      ?>
                      
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 colxs-12 borde-pla text-center sin-padding">
                            <div class=" col-lg-12 sin-padding">
                                <?php $terms = get_the_terms( $post_id, 'posicion1' ); ?> 
                                <h3 > 
                                    <?php foreach($terms as $term){?>
                                    <span class="pla1"><?php echo  $term->name;?></span>
                                    <?php } ?>
                                </h3>
                            </div>
                            
                            <div class="col-lg-2 sin-padding">
                                <span class="mes entry-date"><?php echo get_the_date("M"); ?></span>
                                <span class="mes1 entry-date"><?php echo get_the_date("d"); ?></span>
                                <div><span class="year entry-date"><?php echo get_the_date("y"); ?></span></div>
                            </div>
                            <div class="col-lg-2 sin-padding">
                                 <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <div class="col-xs-12 sin-padding">
						            <img src="<?php echo $feat_image;?>" class="imagen-desca img-responsive" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 sin-padding">
                                <?php $terms = get_the_terms( $post_id, 'posicion1' ); ?> 
                                <h3 class="cate "> Descargas/
                                    <?php foreach($terms as $term){?>
                                    <span class="pla1"><?php echo  $term->name;?></span>
                                    <?php } ?>
                                </h3>
                            </div>
                            <div class="clearfix"></div>
                             <?php if(get_field('peso-archivo')){?>
                            <div class="col-lg-2">
                                <h3><i class="gra fa fa-cog"></i> <?php the_field('peso-archivo');?></h3>
                            </div>
                            <?php } ?>
                            <div class="col-lg-10 sin-padding">
                                <div class="col-xs-12 sin-padding">
                                     <a href="<?php echo $r['url'];?>" target="_blank"><h3><?php echo $nombre_archivo; ?></h3></a> 
                                </div>
                            </div>
                        </div>
                        
                    <?php } ?>
                    <div class="marco6 col-xs-12"></div>

    </div>
</div>

<?php get_footer(""); ?>