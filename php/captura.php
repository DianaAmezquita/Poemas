<html>
    <head>
        <meta charset="UTF-8" /><!-- esta linea de codigo funciona poder escribir caracteres 
        especiales en el php  -->

        <link rel = "stylesheet" href = "../css/sytle1.css"><!-- esta linea de codigo 
        funciona para poder hacer una conexion con la hoja de estilos de css -->

        <link rel = "shortcut icon" type = "image/x-icon" href = "../image/favicon.jpg"><!-- 
            esta linea de codigo funciona colocar el logo de la pagina en lña esquina superior 
            izquierda -->

        <title>Resultado</title><!-- esta linea de codigo funciona el titulo que va al lado 
        del logo -->

    </head>
    <body>
        <br/>
        <h1> Bienvenidos(as) y Gracias por Registrarse. </h1><!-- esta linea de codigo 
        funciona para colocar el titulo proncipasl del php cuando hace la consulta -->

        <br/><br/>
        <h2> Datos Suministrados Por el Usuario: </h2><!-- estas lineas de codigos funcionan 
        para dar el resultado de la sugerencia y datos de la persona q incrego y luego la lleva
         a la pagina principal -->

        <br/>
        <!--este archivo me sirve para obtener el recibo de los datos del formulario por medio
         del POST -->
        <?php

        // aqui hice la declaracion de las variables para poder agarrar los datos 
        //introducidos por el usuario y generar un capture que vera el usuario, pero los datos 
        // no los estoy guardando en una base de datos

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $genero= $_POST['genero'];
        $mail=$_POST['mail'];
        $edad=$_POST['edad'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];
       ?>

        <h3> Nombres: 
        <?php 

        // lo que se ve a contunuacion es el como esta formado los resultados 
        //del capture que ve el usuario

        echo $nombre;
            ?></h3>
        <h3> Apellidos:
        <?php
        echo $apellido;
            ?></h3>
        <h3> Genero:
        <?php
        echo $genero;
        ?></h3>
        <h3> Correo: 
        <?php
        echo $mail;
            ?></h3>
        <h3>Edad:
        <?php
        echo $edad;
            ?> años </h3>
        <h3> Numero de Telefono: 
        <?php
        echo $telefono;
            ?></h3>
        <h3> Opinion Personal: 
        <?php
        echo $mensaje;
            ?></h3>

        <!-- el div es para hacer un boton para volver a la pagina principal, este boton
        nos manda a la pagina principal y asi se obtiene el dinamismo de la pagina -->

        <br/><br/><br/>
        
        <div class="Diana">
            <a class="Diana" href="../html/index.php">Volver al Inicio</a>
        
        </div>
    </body>
        
</html>