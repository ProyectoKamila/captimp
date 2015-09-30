<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>

<div class="container">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <?php query_posts(array('post_type'=>'configuration','posts_per_page'=>1)); ?>
     <?php while(have_posts()){ the_post();?>
        <?php if(get_field('titulo-galeria')){?>

        <div class="linea1 col-lg-12 text-center">
            <h1> <?php the_field('titulo-galeria');?> </h1>
        </div>
        <?php } ?>
        <?php } wp_reset_query(); ?>
        <div class="clearfix"></div>
        <div class="marco01 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8  col-xs-11 col-xs-offset-1  col-sm-offset-8">
           
            <div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
                
                <?php
    					$args = array(
                        	'type'                     => 'galeria',
                        	'child_of'                 => 0,
                        	'parent'                   => '',
                        	'orderby'                  => 'name',
                        	'order'                    => 'ASC',
                        	'hide_empty'               => 1,
                        	'hierarchical'             => 1,
                        	'exclude'                  => '',
                        	'include'                  => '',
                        	'number'                   => '',
                        	'taxonomy'                 => 'categoria-galeria',
                        	'pad_counts'               => false 
                        
                        ); 
                        
                        ?>
                        <?php $categories = get_categories( $args ); ?> 
                        <?php //debug($categories); ?>
                <form action="" method="post">
                    <div><b>CATEGORIAS</b></div>
    			    <select class="sele20" id="cat">
    				    <option value="">
    					    Seleccione
    					</option>
    					
    					<?php foreach ($categories as $category) {?>
        					<option class="sele20"  value="<?php echo $category->slug; ?>">
            					<?php echo $category->name;?>
        					</option>
    					<?php } ?>
    					
    					<option value="todas">
    					    Todas
    					</option>
    		        </select>
    		      </form>
		      </div>
		      
		  <!-- SEGUNDO SELECT -->
		  <div class="col-lg-6 col-md-6 col-sm-6  col-xs-6">
                <form action="" method="post">
                   <div><b>TODOS</b></div>
			    <select class="sele20" id="cat1">
				    <option value="">
					    Seleccione
					</option>
					<?php for($i = 10; $i <= 100; $i=$i+10) { ?>
    					<option class="sele20"  value="<?php echo $i; ?>">
        					<?php echo $i;?>
    					</option>
					<?php } ?>
					<option class="sele1"  value="-1">
    					Todas
					</option>
		        </select>
		      </form>
                    
        </div>
		      
        </div>
        <div class="clearfix"></div>
        <div class="marco01 col-xs-12"></div>
        <div class="clearfix"></div>
    </div>
</div>

<!--GALERIA FOTOS -->

 
<div class="container"  id="result">
    <div class="row">
        <?php while(have_posts()){ the_post();?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
             <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="image1" style="background: url(<?php echo $feat_image;?> ) top center no-repeat; background-size:cover;">
            <div class="efec-img">
						                    <a href="<?php the_permalink(); ?>" class="">
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
<?php get_footer(""); ?>
<script>
   $(document).ready(function() {
        $('#cat1').change(function() {

//            console.log($('#cursos'));
            $.ajax({
                async: true,
                type: "POST",
                dataType: "html",
                contentType: "application/x-www-form-urlencoded",
                url: "<?php home_url(''); ?>/procesar",
//                data: "cursos=" + $('#cursos').val()+"&hfh="+,
                data: "cat=" + $('#cat').val()+"&cat1="+$('#cat1').val(),
                //data: "cat1=" + $('#cat1').val(),
                success: function(data) {
//                    cosole.log($('#cursos'));
console.log("cat=" + $('#cat').val()+"&cat1="+$('#cat1').val());
                    $('#result').html(data);
                }
            });
        });
        $('#cat').change(function() {

//            console.log($('#cursos'));
            $.ajax({
                async: true,
                type: "POST",
                dataType: "html",
                contentType: "application/x-www-form-urlencoded",
                url: "<?php home_url(''); ?>/procesar",
//                data: "cursos=" + $('#cursos').val()+"&hfh="+,
                data: "cat=" + $('#cat').val()+"&cat1="+$('#cat1').val(),
                
                //data= "cat=upel&cat1=20"
                //data: "cat1=" + $('#cat1').val(),
                success: function(data) {
//                    cosole.log($('#cursos'));
console.log("cat=" + $('#cat').val()+"&cat1="+$('#cat1').val());
                    $('#result').html(data);
                }
            });
        });
    });
</script>