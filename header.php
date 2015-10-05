<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>captimpm</title>
    <script src="<?php bloginfo("template_url");?>/scripts/min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/hover/hover.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script >
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            // Do something
            console.log(scroll);
            if(scroll > 80){
                $(".menbrete").css("margin-top", "-124px");
                $(".cl-menu ul li").css("background","#6E9BCA");
                $(".cl-menu ul li a").css("color","#FFF");
            }else{
                $(".menbrete").css("margin-top", "-0px");
                $(".cl-menu ul li").css("background","#FFF");
                $(".cl-menu ul li a").css("color","#6E9BCA");
            }
        });
    </script>
</head>
<body>
  
    <header>
        <div class="container">
            <div class="row">
                <div class="fixed">
                 <div class="col-xs-12">
                      <?php  query_posts(array('post_type'=>'configuration','posts_per_page'=>1)); ?>
                     <?php while(have_posts()){ the_post();?>
                    <div class="menbrete">
                        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                		    <img src="<?php echo $feat_image;?>" style="    width: 100%; height: auto; max-height:120px" alt="">
                    </div>
                    <?php } ?>
                </div>
                <div class="clearfix"></div>
                <br/>
                          <div class="col-lg-7 col-md-8 hidden-sm ">
                    <nav class="cl-menu">
                        <ul>
                            <li><a href="<?php echo home_url(""); ?> " class="hvr-underline-from-center"><span class="hvr-underline-from-center"></span>INICIO</a></li>
                            <li><a href="<?php echo home_url("nosotros"); ?> " class="hvr-underline-from-center"><span class="hvr-underline-from-center"></span>NOSOTROS</a></li>
                            <li><a href="<?php echo home_url("beneficios"); ?> " class="hvr-underline-from-center"><span class="icon-suitcase"></span>BENEFICIOS</a></li>
                            <li><a href="<?php echo home_url("galeria"); ?> " class="hvr-underline-from-center"><span class="icon-earth"></span>GALERIA</a></li>
                            
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
                            <li  class=""><a href="<?php echo home_url("descargas"); ?> "class="hvr-underline-from-center"><span class=""></span>DESCARGAS</a>
                            <ul class="children">
                                <?php foreach ($categories as $category) {?>
                                <li>
                                    <?php $link =  home_url('posicion1/') . $category->slug;?>
                                    <a href="<?php echo $link; ?>"class="hvr-underline-from-center"><span class="icon-dot"></span><?php echo $category->name;?></a>
                                </li>
                                <?php } ?>
                            </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class=" col-lg-5 col-md-4  hidden-sm  hidden-xs ">
                    <!--<div class="col-lg-3 col-lg-offset-4 col-md-4 col-md-offset-4 sin-padding">-->
                    <!--    Entrada-->
                    <!--</div>-->
                    <!--<div class="clearfix"></div>-->
                    <div class="redes col-lg-6 col-md-6 sin-padding">
                        <?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
                        <?php if(!empty($pagename)) {?>
                         <?php while(have_posts()){ the_post();?>
                        <?php if(get_field('cuenta-facebook')){?>
                        <div class="col-lg-4 col-md-3 sin-padding">
                             <a href="<?php the_field('cuenta-facebook');?>"  target="_blank" class=""><i class="ico fa fa-facebook-square"></i></a>
                        </div>
                         <?php } ?>
                         <?php if(get_field('cuenta-twitter')){?>
                       <div class="col-lg-4 col-md-3 sin-padding">
                            <a href="<?php the_field('cuenta-twitter');?>" target="_blank" class=""><i class="ico fa fa-twitter-square"></i></a>
                       </div>
                       <?php } ?>
                       <?php } ?>
                       <?php } ?>
                         <div class="col-lg-4 col-md-6 sin-padding">
                             <div class="col-lg-12 col-md-12">
                                  <a href="" class="regi"><i class=" ico fa fa-user"></i></a>
                             </div>
                             <div class="clearfix"></div>
                             <div class="marco3 col-lg-12"></div>
                             <div class="fon3 col-lg-12 col-md-12 ">
                                 <form>
                                     USUARIO:
                                     <input type="text" class="inp" name="user"/>
                                     CLAVE:
                                     <input type="password" class="inp" name=""/>
                                     <a href="" class="olvidaste">OLVIDASTE TU CLAVE?</a>
                                     <a class="boto btn btn-default " href="<?php echo home_url("registro"); ?> " >Registro</a>
                                     <input type="submit" class="envi" value="Entrar"/>
                                 </form>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sin-padding">
                       <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(""); ?> ">
   <div>
       <!--<label class="screen-reader-text" for="s">Buscar:</label>-->
       <input type="text" value="" name="s" id="s" class="buscar" placeholder=" Busqueda">
       <!--<input type="submit" id="searchsubmit" value="Buscar">-->
       <button type="submit" id="searchsubmit"><span class="ico-l glyphicon glyphicon-search" aria-hidden="true"></span></button>
       
   </div>
</form>
                    </div>
                    
                </div>
                <!--Menu responsive -->
                    <div class="hidden-lg hidden-md col-sm-6 sin-padding">
                        <div class="menu_bar">
                            <a href="<?php echo home_url("home"); ?> " class="bt-menu"><img src="<?php bloginfo("template_url"); ?>/images/logor.png" class="img-responsive im1 " alt=""></a>
                        </div>
                    </div>
                    <div class=" hidden-lg hidden-md visible-sm visible-xs">
                        <div class=" col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-10  text-center menu_bar">
                            <span class="glyphicon glyphicon-list"></span>
                        </div>
                    </div>
                <div class="fondo-res20 hidden-lg hidden-md sin-padding">
                    <nav>
                        <ul>
                            <li><a href="<?php echo home_url("home"); ?>"><span class="icon-house"></span>INICIO</a></li>
                            <li><a href="<?php echo home_url("nosotros"); ?>"><span class="icon-house"></span>NOSOTROS</a></li>
                            <li><a href="<?php echo home_url("beneficios"); ?>"><span class="icon-suitcase"></span>BENEFICIOS</a></li>
                            <li><a href="<?php echo home_url("galeria"); ?>"><span class="icon-earth"></span>GALERIA</a></li>
                            <li><a href="<?php echo home_url("descargas"); ?>"><span class="icon-mail"></span>DESCARGAS</a></li>
                            <li> <a  href="<?php the_field('cuenta-facebook');?>"  target="_blank" class=""><i class="ico fa fa-facebook-square"></i></a></li>
                            <li><a href="<?php the_field('cuenta-twitter');?>" target="_blank" class=""><i class="ico fa fa-twitter-square"></i></a></li>
                            <li><a href="" class="regi"><i class="ico fa fa-user"></i></a></li>
                            <li>
                                 <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(""); ?> ">
   <div>
       <!--<label class="screen-reader-text" for="s">Buscar:</label>-->
       <input type="text" value="" name="s" id="s" class="buscar" placeholder=" Búsqueda">
       <!--<input type="submit" id="searchsubmit" value="Buscar">-->
       <button type="submit" id="searchsubmit"><span class="ico-l glyphicon glyphicon-search" aria-hidden="true"></span></button>
       
   </div>
</form>
                            </li>
                        </ul>
                    </nav>
                </div>
            
            </div>
            </div>
        </div>