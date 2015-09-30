<?php 
    // Template name: procesar
?>

<?php //var_dump($_POST); ?>
<div class="container"  id="result">
    <div class="row">
        <?php 
        if((!empty($_POST['cat'])) && ($_POST['cat'] == "todas")){
            if(!empty($_POST['cat1'])){
                  $r = query_posts(array('post_type'=>'galeria' ,'posts_per_page'=> $_POST['cat1']));
            }else{
                $r = query_posts(array('post_type'=>'galeria','posts_per_page'=>20));
            }
                 
                }
        
        if((!empty($_POST['cat'])) && ($_POST['cat'] != "todas")){
            
            if(!empty($_POST['cat1'])){
                $r = query_posts(array('post_type'=>'galeria', 'categoria-galeria'=> $_POST['cat'] ,'posts_per_page'=> $_POST['cat1']));
            }else{
                $r = query_posts(array('post_type'=>'galeria', 'categoria-galeria'=> $_POST['cat'] ,'posts_per_page'=>20));
            }
        }else{
            if(!empty($_POST['cat1'])){
                $r = query_posts(array('post_type'=>'galeria' ,'posts_per_page'=> $_POST['cat1']));
            }else{
                $r = query_posts(array('post_type'=>'galeria','posts_per_page'=>20));
            }
            
        }
        //debug(array('post_type'=>'galeria', 'categoria-galeria'=> $_POST['cat'] ,'posts_per_page'=> $_POST['cat1']));
        ?>
        <?php while(have_posts()){ the_post();?>
        <div class="col-lg-3">
             <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="image1" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
            <div class="efec-img">
						                    <a href="" class="">
						                        <div class="fon-lupa">
						                            <span class="ico-lupa glyphicon glyphicon-search"></span>
						                        </div>
						                    </a>
						                </div>
            
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 text-center">
               <h2><?php the_title();?></h2>
            </div>
            <div class="clearfix"></div>
            <?php if(get_field('subtitulo-imagen')){?>
            <div class="col-xs-12 text-center">
               <h3><?php the_field('subtitulo-imagen');?></h3>
            </div>
             <?php } ?>
        </div>
        <?php } ?>
    </div>
</div>