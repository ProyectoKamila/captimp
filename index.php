<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>captimpm</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo("template_url"); ?>/css/main.less"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/hover/hover.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <div class="menu_bar">
                        <a href="#" class="bt-menu"><img src="<?php bloginfo("template_url"); ?>/images/logo.jpg" class="img-responsive " alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm sin-padding">
                    <nav>
                        <ul>
                            <li><a href="#"><span class="icon-house"></span>NOSOTROS</a></li>
                            <li><a href="#"><span class="icon-suitcase"></span>BENEFICIOS</a></li>
                            <li><a href="#"><span class="icon-earth"></span>GALERIA</a></li>
                            <li><a href="#"><span class="icon-mail"></span>DESCARGAS</a></li>
                        </ul>
                    </nav>
                </div>
                
                  
                <div class="bor col-lg-4 col-md-2  hidden-sm  hidden-xs  sin-padding ">
                    <div class="col-lg-12">
                        Entrada
                    </div>
                    <div class="clearfix"></div>
                    <div class="redes col-lg-6">
                         
                        <a href="" class=""><i class="ico fa fa-facebook-square"></i></a>
    
                  
                        
                        <a href="" class=""><i class="ico fa fa-twitter-square"></i></a>
                   
                    
                       
                        <a href="" class=""><i class="ico fa fa-user"></i></a>
                </div>
                    <div class="col-lg-6">
                        <?php get_search_form(); ?>
                    </div>
                    
                </div>

                <!--Menu responsive -->
                <div class=" hidden-lg hidden-md visible-sm visible-xs  ">
                    <div class="menu_bar">
                        <span class="glyphicon glyphicon-list"></span>
                    </div>
                </div>
                <div class=" hidden-lg hidden-md hidden-sm sin-padding">
                    <nav>
                        <ul>
                            <li><a href="#"><span class="icon-house"></span>NOSOTROS</a></li>
                            <li><a href="#"><span class="icon-suitcase"></span>BENEFICIOS</a></li>
                            <li><a href="#"><span class="icon-earth"></span>GALERIA</a></li>
                            <li><a href="#"><span class="icon-mail"></span>DESCARGAS</a></li>
                            <li><a href="#"><span class="icon-mail"></span>face</a></li>
                            <li><a href="#"><span class="icon-mail"></span>twitter</a></li>
                            <li><a href="#"><span class="icon-mail"></span>Registro</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>
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
</script>
</html>