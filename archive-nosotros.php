<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>
<!--NOSOTROS-->
<div class="container-fluid">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <div class="linea1 col-lg-12 text-center">
            <h1>NOSOTROS</h1>
        </div>
        <div class="clearfix"></div>
         <div class="marco1 col-xs-12"></div>
         <div class="clearfix"></div>
         <?php  query_posts(array('post_type'=>'nosotros','catego'=>'resena','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
         <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
         <div class="fondo1-nosotros" style="background:url('<?php echo $feat_image;?>') top center no-repeat; background-size:cover">
             <div class="color-fondo1">
                 <div class="marco1 col-xs-12"></div>
                 <div class="clearfix"></div>
                 <div class="marco5 col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-9 sin-padding text-center">
                     <h2 class="resena"><?php the_title(); ?></h2>
                 </div>
                 <div class="marco5 col-lg-4 col-md-4 col-sm-4 col-xs-1 sin-padding"></div>
                 <div class="clearfix"></div>
                <?php if(get_field('imagen2-nosotros')){?>
                 <div class="col-lg-4 col-md-4 col-sm-12 ">
                    <img src=" <?php the_field('imagen2-nosotros');?>  " class="img-responsive" alt=""> 
                 </div>
                 <?php } ?>
                 <div class="parrafo-nosotroscap col-lg-8 col-md-8 col-sm-12">
                    <p>
                        <?php the_content();?>
                    </p>
                 </div>
             </div>
         </div>
    </div>
</div>
<!--OBJETIVOS -->
<?php } wp_reset_query(); ?>
<?php  query_posts(array('post_type'=>'nosotros','catego'=>'objetivos','posts_per_page'=>1)); ?>
 <?php while(have_posts()){ the_post();?>
<div class="container-fluid">
    <div class="row">
         <div class="clearfix"></div>
         <div class="marco1 col-xs-12"></div>
         <div class="clearfix"></div>
         <div class="marco7 col-lg-5 col-md-5 col-sm-4 col-xs-2"></div>
         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-8 text-center">
             <h2 class="objetivos"><?php the_title(); ?></h2>
         </div>
         <div class="marco7 col-lg-5 col-md-5 col-sm-4 col-xs-2"></div>
    </div>
</div>
<div class="container">
    <div class="row borde1212">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <?php if(get_field('titulo-imagen')){?>
            <div class="col-lg-12">
                <h3 class="obje"><?php the_field('titulo-imagen');?></h3>
            </div>
             <?php } ?>
             <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="col-lg-12">
                 <img src="<?php echo $feat_image;?>  " class="imagen-noso img-responsive" alt="">
            </div>
            <div class="parrafo-obje col-lg-12">
                <p>
                   <?php the_content(); ?> 
                </p>
            </div>
        </div>
         <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12">
             <?php if(get_field('titulo-vision')){?>
             <div class="col-xs-12">
                 <h3 class="obje"><?php the_field('titulo-vision');?></h3>
             </div>
             <?php } ?>
             <?php if(get_field('parrafo-vision')){?>
             <div class="parrafo-obje col-lg-12">
                <p><?php the_field('parrafo-vision');?></p> 
             </div>
             <?php } ?>
              <?php if(get_field('titulo-mision')){?>
             <div class="col-xs-12">
                 <h3 class="obje"><?php the_field('titulo-mision');?></h3>
             </div>
             <?php } ?>
             <?php if(get_field('parrafo-mision')){?>
             <div class="parrafo-obje col-lg-12">
                 <p><?php the_field('parrafo-mision');?></p>
             </div>
             <?php } ?>
         </div>
    </div>
</div>
 <?php } ?>
 
 <!--JUNTA DIRECTIVA -->
 <?php  query_posts(array('post_type'=>'nosotros','catego'=>'directiva','posts_per_page'=>1)); ?>
 <?php while(have_posts()){ the_post();?>
 <div class="container-fluid">
     <div class="row">
         <div class="clearfix"></div>
         <div class="marco1 col-xs-12"></div>
         <div class="clearfix"></div>
         <div class="marco7 col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
         <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 sin-padding text-center">
             <h2 class="objetivos"><?php the_title(); ?></h2>
         </div>
         <div class="marco7 col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-lg-6">
              <?php if(get_field('titulo1')){?>
             <div class="col-lg-12 text-center">
                 <h3 class="obje"><?php the_field('titulo1');?></h3>
             </div>
             <div class="marco10 col-xs-12"></div>
             <?php } ?>
              <?php if(get_field('nombre-presidente')){?>
             <div class="tama col-lg-6">
                 <span class="nom">Presidente:</span><?php the_field('nombre-presidente');?>
             </div>
             <?php } ?>
              <?php if(get_field('nombre-suplente1')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente1');?>
             </div>
              <?php } ?>
              <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
              <?php if(get_field('nombre-tesorero')){?>
             <div class=" tama col-lg-6">
                  <span class="nom">Tesorera:</span><?php the_field('nombre-tesorero');?>
             </div>
             <?php } ?>
              <?php if(get_field('nombre-suplente2')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente2');?>
             </div>
              <?php } ?>
              <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
             
             <?php if(get_field('nombre-secretaria')){?>
             <div class=" tama col-lg-6">
                  <span class="nom">Secretaria/o:</span><?php the_field('nombre-secretaria');?>
             </div>
              <?php } ?>
               <?php if(get_field('nombre-suplente3')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente3');?>
             </div>
             <?php } ?>
             <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
             
             
             
             
             <?php if(get_field('titulo2')){?>
             <div class="col-lg-12 text-center">
                 <h3 class="obje"><?php the_field('titulo2');?></h3>
             </div>
             <div class="marco10 col-xs-12"></div>
             <?php } ?>
              <?php if(get_field('nombre-presidente-titulo2')){?>
             <div class="tama col-lg-6">
                 <span class="nom">Presidente:</span><?php the_field('nombre-presidente');?>
             </div>
             <?php } ?>
              <?php if(get_field('nombre-suplente4')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente4');?>
             </div>
              <?php } ?>
              <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
              <?php if(get_field('nombre-vicepresidente')){?>
             <div class=" tama col-lg-6">
                  <span class="nom">Vicepresidente:</span><?php the_field('nombre-vicepresidente');?>
             </div>
             <?php } ?>
              <?php if(get_field('nombre-suplente5')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente5');?>
             </div>
              <?php } ?>
              <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
             
             <?php if(get_field('nombre-secretaria-titulo2')){?>
             <div class=" tama col-lg-6">
                  <span class="nom">Secretaria/o:</span><?php the_field('nombre-secretaria-titulo2');?>
             </div>
              <?php } ?>
               <?php if(get_field('nombre-suplente6')){?>
             <div class="tama col-lg-6">
                  <span class="nom">Suplente:</span><?php the_field('nombre-suplente6');?>
             </div>
             <?php } ?>
             <div class="marco10 col-xs-12"></div>
             <div class="clearfix"></div>
         </div>
         
         
          <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
         <div class="col-lg-6">
             <img src="<?php echo $feat_image;?>  " class="imagen-noso img-responsive" alt="">
         </div>
     </div>
 </div>
 <?php } ?>
 
 <!--DELEGADOS -->
 <?php  query_posts(array('post_type'=>'nosotros','catego'=>'delegados','posts_per_page'=>1)); ?>
 <?php while(have_posts()){ the_post();?>
 <div class="container-fluid">
  <div class="row">
    <div class="clearfix"></div>
         <div class="marco1 col-xs-12"></div>
         <div class="clearfix"></div>
         <div class="marco7 col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
         <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 text-center sin-padding">
             <h2 class="objetivos"><?php the_title(); ?></h2>
         </div>
         <div class="marco7 col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>
  </div>
 </div>
 
 <div class="container-fluid">
   <div class="row">
    <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
     <div class="col-lg-4">
       <img src="<?php echo $feat_image;?>  " class="imagen-noso img-responsive" alt="">
     </div>
      <?php } ?>
<?php  query_posts(array('post_type'=>'delegados','orderby'=>'title','order'=> 'ASC','posts_per_page'=>24)); ?>
     <div class="col-lg-8">
      <?php $x=0; ?>
         <?php while(have_posts()){ the_post();?>
         <?php if($x==0 or $x==12){ ?>
      <div class="col-lg-6 text-center">
      <table class="tabla-no table table-bordered ">
       <tr class="tabla-no1">
         <td><h3 class=" titu">Núcleo </h3></td>
          <td><h3 class=" titu">Delegados</h3></td>
       </tr>
       <?php }  ?>
       <tr class ="<?php  echo $x; ?>">
        <td><?php the_title();?></td>
        <?php if(get_field('nombre-delegado')){?>

        <td> <?php the_field('nombre-delegado');?>  </td>
        <?php } ?>
       </tr>
       
       <?php ?>
       <?php if($x==11){ ?>
      </table>
      
     </div>
      <?php } ?>
      <?php  $x++; ?>
     <?php } ?>
     </table>
      
     </div>
     </div>
   </div>
 </div>
<?php get_footer(""); ?>