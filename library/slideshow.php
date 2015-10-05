<?php function portada($categoria){?>
    <?php if( $categoria != null){?>
        <?php $pagename = query_posts(array('post_type'=>'portada','sesion'=>$categoria,'posts_per_page'=>3)); ?>
    <?php if(!empty($pagename)) {?>
        <div class="container sli sin-padding">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 alto-slider">
                <ul id="slider1">
                     <?php while(have_posts()){ the_post();?>
                                <li>
                                   <div class="container">
                                       <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                <div class="imagen-info">
                                                    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						                            <img src="<?php echo $feat_image;?>" class="img-responsive" alt="">
                                                </div>
                                                <div class="">
                                                    <?php if(get_field('rif')){?>
                                                    <h3><?php the_field('rif');?></h3>
                                                     <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                                <div class="info">
                                                    <h2><?php the_title();?></h2>
                                                        <p>
                                                            <?php echo max_charlength(get_the_content(),800,"");?>
                                                        </p>
                                                </div>
                                                <div class="direccion">
                                                <?php if(get_field('direccion')){?>
                                                    <h3><?php the_field('direccion');?></h3>
                                                     <?php } ?>
                                                </div>
                                            </div>
                                       </div>
                                   </div>
                                </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
<!--/SLIDER -->
        <?php } ?>
<?php } ?>