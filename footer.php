<?php $pagename = query_posts(array('post_type'=>'page','pagename'=>'contacto','posts_per_page'=>1)); ?>
 <?php if(!empty($pagename)) {?>
     <?php while(have_posts()){ the_post();?>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <div class="fondo-footer" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
                    <div class="fondo-b4">
                        <div class="marco6 col-xs-12"></div>
                        <div class="clearfix"></div>
                        <div class="col-lg-4 col-lg-offset-1  col-md-4 col-md-offset-1  col-sm-5 col-xs-12 sin-padding">
                            <?php if(get_field('titulo-parrafo')){?>
                            <div class="col-xs-12">
                                 <h2><?php the_field('titulo-parrafo');?></h2>
                            </div>
                            <?php } ?>
                             <?php if(get_field('parrafo1')){?>
                            <div class="parrafo-contacto col-xs-12">
                                <p>
                                    <?php the_field('parrafo1');?>  
                                </p>
                            </div>
                             <?php } ?>
                        </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
                            <?php if(get_field('cuenta-facebook')){?>
                            <a href="<?php the_field('cuenta-facebook');?> " target="_blank" class="redes2010">
                                
                                     <i class="redes-esti fa fa-facebook"></i>
                            </a>
                            <?php } ?>
                             <?php if(get_field('cuenta-twitter')){?>
                            <a href="<?php the_field('cuenta-twitter');?> " target="_blank" class="redes2010">
                                <i class="redes-esti fa fa-twitter"></i>
                            </a>
                            <?php } ?>
                        </div>
                    
                        <!--
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 sin-padding ">
                             <?php /* if(get_field('titulo2-parrafo')){?>
                            <div class="col-xs-12">
                                <h3 class="sub"><?php the_field('titulo2-parrafo');?></h3> 
                            </div>
                            <?php } ?>
                            <?php if(get_field('parrafo2')){?>
                            <div class="col-xs-12">
                                <p>
                                   <?php the_field('parrafo2');?>
                                </p>
                            </div>
                             <?php } */ ?>
                            <div class="col-xs-12">
                                <input type="text" name=""/>
                            </div>
                        </div>
                        -->
                        <div class="clearfix"></div>
                        <div class="marco6 col-xs-12"></div>
                        <div class="clearfix"></div>
                        <div class="marco7 col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-2 hidden-xs"></div>
                        <div class="col-lg-4 col-md-4 col-sm-8 col-x-12  text-center">
                            <h1 class="capt">CAPTIMP-UPEL</h1>
                        </div>
                        <div class="marco7 col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
                        <div class="clearfix"></div>
                        <div class="texto-footer col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1  col-sm-4  col-xs-12">
                           <?php if(get_field('direccion1')){?>
                           <div class="col-lg-12">
                              <?php the_field('direccion1');?>
                           </div>
                           <?php } ?>
                           <div class="marco10 col-xs-12"></div>
                            <?php if(get_field('telefono-direccion1')){?>
                            <div class="col-lg-12">
                               <span class="estilo-footer">Teléfono:</span><?php the_field('telefono-direccion1');?>
                           </div>
                            <?php } ?>
                            <?php if(get_field('fax-direccion1')){?>
                            <div class="col-lg-12">
                               <span class="estilo-footer">Fax:</span><?php the_field('fax-direccion1');?>
                           </div>
                            <?php } ?>
                            <?php if(get_field('e-mail-direccion1')){?>
                            <div class="col-lg-12">
                              <span class="estilo-footer">E-mail:</span><?php the_field('e-mail-direccion1');?>
                           </div>
                            <?php } ?>
                        </div>
                        <div class=" marco10 col-xs-4 "></div>
                        <div class=" texto-footer col-lg-3 col-md-3 col-sm-4 col-xs-12">
                             <?php if(get_field('direccion2')){?>
                            <div class="col-lg-12">
                              <?php the_field('direccion2');?>
                           </div>
                            <?php } ?>
                           <div class="marco10 col-xs-12"></div>
                            <?php if(get_field('telefono-direccion2')){?>
                            <div class="col-lg-12">
                               <span class="estilo-footer">Teléfono:</span> <?php the_field('telefono-direccion2');?>
                           </div>
                            <?php } ?>
                            <?php if(get_field('fax-direccion2')){?>
                            <div class="col-lg-12">
                               <span class="estilo-footer">Fax:</span><?php the_field('fax-direccion2');?>
                           </div>
                            <?php } ?>
                             <?php if(get_field('e-mail-direccion2')){?>
                            <div class="col-lg-12">
                              <span class="estilo-footer">E-mail:</span><?php the_field('e-mail-direccion2');?>
                           </div>
                           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php } ?>
<?php } ?>



<link rel="stylesheet" href="<?php bloginfo('template_url');?>/slider/css/anythingslider.css">
<script src="<?php bloginfo('template_url');?>/slider/js/jquery.anythingslider.js"></script>
 <script>
    $(function () {
        $('#slider1').anythingSlider({
expand: true,
buildStartStop: false,
buildArrows: true,  
autoPlay: true ,
hashTags: false
                        
        });


    });
    </script>
    
<script>
    $(document).ready(main);
 
var contador = 1;
 
function main () {
    $('.menu_bar').click(function(){
        if (contador == 1) {
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });
        }
    });
 
    // Mostramos y ocultamos submenus
    $('.submenu').click(function(){
        $(this).children('.children').slideToggle();
    });
}

$(document).ready(function() {
    $("span.arrow.back").addClass("glyphicon glyphicon-menu-left fle ");
    $(" span.arrow.forward").addClass("glyphicon glyphicon-menu-right fle ");
    $(".regi").hover(function(){
        console.log("muestra");
        $(".fon3").slideDown();
    });
    
    $(".fon3").mouseleave(function(){
    $(".fon3").slideToggle();
    });
});


</script>
</body>
</html>