<?php get_header(""); ?>
<!--SLIDER -->
<?php portada("home"); ?>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="marco1 col-xs-12"></div>
        <div class="linea1 col-lg-12 text-center">
            <h1>REGISTRO</h1>
        </div>
        <div class="clearfix"></div>
        <div class="marco1 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="col-lg-12">
            <h2 class="ing">INGRESA TUS DATOS</h2>
        </div>
    </div>
</div>
<!--FORMULARIO -->
<div class="container">
    <div class="row">
        <div class="clearfix"></div>
        <div class="marco1 col-xs-12"></div>
        <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <form action="">
                <div class="dato1">
                Nombre
                <input type="text" name="" required>
                </div>
                  <div class="dato1">
                Cedula
                <input type="text" name="" required>
                </div>
                 <div class="dato1">
                   Nombre de Usuario
                <input type="text" name=""required>
                </div>
                  <div class="dato1">
                 Correo Electronico
                <input type="email" name="" required>
                </div>
                <div class="dato1">
                  Contraseña
                <input type="password" name="" required>
                </div>
                <div class="dato1">
                 Verificar Contraseña
                <input type="password" name="" required>
                </div>
                <div class="dato2">
                    <input type="submit" class="botoregi btn btn-default" value="Registrar"/>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        <div class="marco1 col-xs-12"></div>
        <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(""); ?>