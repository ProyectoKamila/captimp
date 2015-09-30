<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_url');?>/scripts/carousel/jquery.carouFredSel-6.2.1.js"></script>

<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'nosotros-home','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
<div class="container">
    <div class="row">
        <div class="marco4 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="linea1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php if(get_field('titulo-detalle')){?>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                <h2><?php the_field('titulo-detalle');?> </h2>
            </div>
            <?php } ?>
            <?php if(get_field('parrafo-detalle')){?>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 sin-padding">
                <p>
                   <?php the_field('parrafo-detalle');?>
                </p>
            </div>
             <?php } ?>
              <?php if(get_field('nombre-boton')){?>
            <div class="colu3 col-lg-2 col-md-2 col-sm-4  col-xs-12 text-center sin-paddin">
                 <a  href="<?php echo home_url("nosotros"); ?>" class="boto btn btn-default btn-lg"  ><?php the_field('nombre-boton');?></a>
            </div>
             <?php } else { ?>
              <div class="colu3 col-lg-2 col-md-2 col-sm-4  col-xs-12 text-center">
                 <a  href="<?php echo home_url("nosotros"); ?> " class="boto btn btn-default btn-lg"  >Detalles</a>
            </div>
             <?php } ?>
        </div>
        <div class="clearfix"></div>
        <div class="marco4 col-xs-12"></div>
    </div>
</div>
<?php } ?>
<?php } ?>
<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'beneficios-home','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
<!--Bloque BENEFICIOS -->
<div class="container-fluid">
    <div class="row">
        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="fondo-b2" style="background:url('<?php echo $feat_image;?>') top center no-repeat; background-size:cover;     background-attachment: fixed; ">
            <div class="fondo-b3">
                <div class="marco6 col-xs-12"></div>
                 <div class="clearfix"></div>
                <div class="marco5 col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3   sin-padding"></div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center sin-padding">
                    <h2 class="beneficios">Beneficios</h2>
                </div>
                <div class="marco5 col-lg-4 col-md-4 col-sm-3 col-xs-3  sin-padding"></div>
                <div class="clearfix"></div>
                <div class="marco6 col-xs-12"></div>
                 <div class="clearfix"></div>
                
                <div class=" col-lg-3 col-lg-offset-1  col-md-3 col-md-offset-1  col-sm-3 col-sm-offset-1 col-xs-12">
                     <?php if(get_field('imagen1-beneficio')){?>
                    <div class="borde col-lg-12 ">
                        <img src=" <?php the_field('imagen1-beneficio');?>" class="img1 img-responsive  " alt="">
                    </div>
                    <?php } ?>
                     <?php if(get_field('titulo-beneficio')){?>
                    <div class="col-xs-12 text-center">
                        <h2><?php the_field('titulo-beneficio');?></h2>
                    </div>
                    <?php } ?>
                     <?php if(get_field('parrafo-beneficio1')){?>
                    <div class="parrafo-b col-xs-12 sin-padding">
                        <p> 
                            <?php the_field('parrafo-beneficio1');?>                  
                        </p>
                    </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                     <?php if(get_field('nombre-boton-beneficio1')){?>
                        <div class="col-xs-12 text-center">
                             <a  href="<?php echo home_url("beneficios"); ?> " class="boto btn btn-default"  ><?php the_field('nombre-boton-beneficio1');?>   </a>
                        </div>
                     <?php } ?>
                </div>
                <div class="marco10 col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    
                </div>
                <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                     <?php if(get_field('imagen2-beneficio')){?>
                    <div class="borde col-lg-12 ">
                        <img src=" <?php the_field('imagen2-beneficio');?>" class="img1 img-responsive  " alt="">
                    </div>
                    <?php } ?>
                      <?php if(get_field('titulo-beneficio2')){?>
                    <div class="col-xs-12 text-center">
                        <h2><?php the_field('titulo-beneficio2');?></h2>
                    </div>
                     <?php } ?>
                     <?php if(get_field('parrafo-beneficio2')){?>
                    <div class="parrafo-b col-xs-12 sin-padding">
                        <p> 
                              <?php the_field('parrafo-beneficio2');?>                        
                        </p>
                    </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <?php if(get_field('nombre-boton-beneficio2')){?>
                    <div class="col-xs-12 text-center">
                         <a  href="<?php echo home_url("beneficios"); ?>" class="boto btn btn-default"  ><?php the_field('nombre-boton-beneficio2');?></a>
                    </div>
                     <?php } ?>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<?php } ?>
<?php } ?>
<!--Bloque GALERIA -->
<div class="container">
    <div class="row">
         <div class="marco6 col-xs-12"></div>
        <div class="marco7 col-lg-5 col-md-5 col-sm-4 col-xs-2"></div>
        <div class="var1 col-lg-2 col-md-2 col-sm-4 col-xs-8 text-center">
            <h2>GALERIA</h2>
        </div>
        <div class="marco7 col-lg-5 col-md-5 col-sm-4 col-xs-2"></div>
    </div>
</div>
<!--Bloque GALERIA  fotos carousel-->
        
<?php  query_posts(array('post_type'=>'galeria','posts_per_page'=>12)); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="wrapper">
                        <div class="list_carousel1">
                            <a id="prev2" class="prev" href="#"><span class="glyphicon glyphicon-menu-left"></span></a>
				            <a id="next2" class="next" href="#"><span class="fle-caro1 glyphicon glyphicon-menu-right"></span></a>
                             <ul id="foo2">
                                 <?php while(have_posts()){ the_post();?>
                                <li>
                                   <div class="col-lg-12 text-center sin-padding">
                                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                      <div class="image1" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
						                <div class="efec-img">
						                    <a href="<?php the_permalink(); ?>" class="">
						                        <div class="fon-lupa">
						                            <span class="glyphicon glyphicon-search"></span>
						                        </div>
						                    </a>
						                </div>
                                      </div>
                                      <div class="col-xs-12">
                                         <h3><?php the_title(); ?></h3>
                                      </div>
                                      <?php if(get_field('subtitulo-imagen')){?>
                                       <div class="col-xs-12">
                                          <h4><?php the_field('subtitulo-imagen');?></h4>
                                      </div>
                                      <?php } ?>
                                      <?php if(get_field('nombre-boton')){?>
                                       <div class="bor10 col-xs-12">
                                        <a href="<?php the_permalink(); ?>" class="boto4 btn btn-default"  ><?php the_field('nombre-boton');?></a>
                                      </div>
                                       <?php } ?>
                                   </div>
    		                    </li>
    				            <?php } ?>
                            </ul>
                        </div>
                    </div>
            </div>
		</div>
		
<!--Bloque DESCARGAS -->
<div class="container">
    <div class="row">
        <div class="marco6 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="marco7 col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 text-center">
           <h2 class="desca">DESCARGAS</h2>
        </div>
        <div class="marco7 col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
    </div>
</div>
<!--Bloque DESCARGAS CAROUSEL-->
<?php 

$args = array(
	'type'                     => 'descargas',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'posicion1',
	'pad_counts'               => false 

); 

?>
<?php $categories = get_categories( $args ); ?> 
<?php  query_posts(array('post_type'=>'descargas','posts_per_page'=>12)); ?>

<div class="container carousel-desca">
    <div class="row">
         <div class="wrapper">
            <div class="list_carousel2">
                 <a id="prev3" class="prev" href="#"><span class="glyphicon glyphicon-menu-left"></span></a>
				<a id="next3" class="next" href="#"><span class="fle-caro1 glyphicon glyphicon-menu-right"></span></a>
                <ul id="foo3">
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
                    <li>
                        <div class="col-lg-12 text-center sin-padding">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 sin-padding">
                                <span class="mes entry-date"><?php echo get_the_date("M"); ?></span>
                                <span class="mes1 entry-date"><?php echo get_the_date("d"); ?></span>
                                <div><span class="year entry-date"><?php echo get_the_date("Y"); ?></span></div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-md-12 sin-padding">
                                 <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-4 col-xs-offset-4  sin-padding">
						            <img src="<?php echo $feat_image;?>" class="imagen-desca img-responsive" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 sin-padding">
                                <?php $terms = get_the_terms( $post_id, 'posicion1' ); ?> 
                                <h3> Descargas/
                                    <?php foreach($terms as $term){?>
                                    <span class="pla1"><?php echo  $term->name;?></span>
                                    <?php } ?>
                                </h3>
                            </div>
                            <div class="clearfix"></div>
                             <?php if(get_field('peso-archivo')){?>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <h3><i class="gra fa fa-cog"></i> <?php the_field('peso-archivo');?></h3>
                            </div>
                            <?php } ?>
                            <div class="col-lg-10 sin-padding">
                                <div class="col-xs-12 sin-padding">
                                     <a href="<?php echo $r['url'];?>" target="blank"><h3><?php echo $nombre_archivo; ?></h3></a> 
                                </div>
                                <div class="parrafo-descarga10 col-xs-12 sin-padding">
                                    <p>
                                        <?php echo max_charlength(get_the_content(),200," ");?>
                                    </p> 
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-12 col-xs-12 ">
                                <a href="<?php echo home_url("descargas"); ?>" class="boto5 btn btn-default">Descargas</a>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
             </div>
         </div>
         <div class="marco1 col-xs-12"></div>
    </div>
</div>


<script>
$('#foo3').carouFredSel({
					auto: false,
					responsive: true,
					prev: '#prev3',
					next: '#next3',
					pagination: "#pager3",
					items: {
						width: 300,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 2
						}
					}
					
				});

$('#foo2').carouFredSel({
					auto: false,
					responsive: true,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					scroll:1,
					items: {
					    scroll:1,
						width: 300,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 4,
							max: 6
						}
					}
					
				});
</script>

<?php get_footer(""); ?>
