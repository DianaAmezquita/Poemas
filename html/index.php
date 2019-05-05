<!DOCTYPE html>
<html lang = " en ">
    <head>

        <title> Poemas </title> <!-- para el titulo -->

        <meta charset = "UTF-8"><!-- esta linea de codigo funciona para poder escribir caracteres especiales en la pagina -->
        <link href = "../css/estilos.css" rel = "stylesheet" type = "text/css" ><!-- esta linea de codigo funciona para agregar una hoja de estilos a la pagina -->
        <link rel = "shortcut icon" type = "image/x-icon" href = "../image/favicon.jpg"><!-- este sirve para colocarle la imagen a la esquina izquierda superior (la cual es una rosa negra)-->
        <meta name = "description" content = " los poemas son obras literarias, estan sujetos a los recuerso poeticos clasicos. " />
        <!-- estas dos lineas de codigo son de facilidad para que el usuario encuente la pagina de ser lo que busca, es decir, que su funcion es dar una breve descripcion para que cuando el usuraio se meta a hacer una busqueda le salga de ser lo que el necesita -->
        <meta name = "keywords" description = "poemas, versos, diseñar, crear, aprender. " />

    </head>


    <body>
        
        <!-- esta linea de codigo funciona "script" recolecta los datos del usuaio y los concatena para una mejor vista del usuario al visitar la pagina web -->
        
        <script>    

            var nombre;
            
            
            nombre = prompt ("Ingresa tu nombre: ");
            edad = prompt ("Ingresa tu edad: ");
            
            //alert(nombre);
            
            document.write(nombre + "," + " " + edad + " " + "años"); 


            //document.write(edad);

            console.log(nombre);

            //esto manda una alerta en pantalla


        </script>  
            
        <br>
        
<!-- esta linea de codigo funcionan como titulos para la pagina-->
        
        <h1> Poemas de Diana </h1>

        <br/>
        <h2> Que es un Poema? </h2>
    
        
        <p>

            <!-- esta linea de codigo funciona para citar el autor del tema -->
            
            <cite> Diana Amezquita </cite>
    
            <br>

            <!-- este parrafo de codigo funciona como definicion de la pagina, el blockquote lo coloque para no crear una clase a la hora de trabajar en el css, los codigos con i hace que la palabra se coloque en italica, los span para dar hacer enfasis en el tema del que trata la pgina y el strong hace lo mismo y lo coloca en negrilla -->
            
            <br>
            <blockquote> Un <i> poema </i> ​es una obra de <span> poesìa </span>, tradicionalmente de cierta extensiòn.​ Lo habitual es que se componga en verso, èste o no sujeto a los recursos poèticos clàsicos de la mètrica, el ritmo y la rima; aunque tambièn hay <strong> poemas </strong> en prosa. Hay muchas clases de poemas dentro de la poesía española y todavía más si entramos a discutir la poesía universal. En esta entrada encontrarás todo lo referente a la poesía épica y lírica y cabe destacar también que las distintas tradiciones literarias han gestado un sinfín de estilos, formas, ritmos, sonidos y melodías que han llegado hasta día de hoy.</blockquote>
            
        <!-- los br funcionan para hacer un salto de pagina-->
        
            <br/>
            <br/>

        </p>

        <br /> <br />
    
    <!-- esta linea de codigo funciona para llevar al usuario a visitar otras paginas donde puedan encontrar mas poemas y informacion para su conveniencia -->
    
        <a class="osi" target = "_blank" href = "https://psicologiaymente.com/cultura/mejores-poemas-cortos"> Ir a Google... Mas poemas </a>
        <br /> 

    <!-- esta linea de codigo funciona enviarme un msj al email -->
    
        <a class="osi" href = "mailto:amezquitadiana8445@gmail.com" title = "Enviar correo a Diana Amezquita"> Enviar Mail </a>
        <br />

        <hr />
    
    <!-- estas lineas de codigos funcionan para mostrar los verson con saltos de lineas  -->

        <h2> Por Ejemplo </h2>
        <div class = "contenedor">
        <p>

            <b>

             Podrá nublarse el sol eternamente;
             <br />
             Podrà secarse en un instante el mar;
             <br />
             Podrà romperse el eje de la tierra
             <br />
             Como un dèbil cristal.
             <br />
             ¡todo sucederà! Podrà la muerte
             <br />
             Cubrirme con su fùnebre crespòn;
             <br />
             Pero jamàs en mì podrà apagarse
             <br />
             La llama de tu amor.

             </b>


        <br />
        <br />
            
            <!-- esta linea de codigo funciona para mostrarle al usuario una imagen atraves de un link -->
        
        <a class= "osi" target = "_blank" href = "../image/ositos1.jpg"> Ir a la Imagen </a>
        <br/>
        <br/>
        <br/>
        </p><aside class="Carolina">
            <a class="Carolina" href="../app/leer.php">Presiona para Agregar, Leer o Editar un Poema</a></aside>
        </div>
    <!-- esta linea de codigo funciona  para mostrar en la pagina una imagen al usuario -->
    

        <span class = "oso"> <img src = "../image/ositos.jpg" alt = "Ositos de Peluche" title ="Logotipo Hecho por Diana" height = "230" /> </span>
        <br/>
        <br/>
        <hr />
     
    
        
        
<!-- elegi el metodo post para hacer mi asignacion, ya que es el que domino -->

        <form method="POST" action="../php/captura.php" class="formulario">
            
    		<!--dentro del h2 tengo se coloca el titulo principal del formulario -->
            
    		<h2 class="formulario__titulo">Deja Tus Datos y Sugerencias en Mensajes:</h2>
            
            <!-- br es para dar un espacio o salto de linea entre los escrito (datos a suministrar por el usuario)
en los input coloque las caracteristicas que definen cada clausula (label), los type varian dependiendo del tipo de dato que se va a suministrar, los id y name nos sirven para el post, para poder hacer el archivo php y hacer el catura o recibo de los datos sumistrados por el usuario y donde dice required es porque ese campo es obligatorio a la hora de llenar el formulario -->
            
            <br/><br/>
    		<input type="text" class="formulario__input" id="nombre" name="nombre" required >
            
    		<label for="" class="formulario__label">Nombres:</label>
            <br/><br/>
            <input type="text" class="formulario__input" id="apellido" name="apellido" required>
          
            <label for="" class="formulario__label">Apellidos:</label>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <label for="" class="formulario__label">Genero:</label>
            <label for="genero">Femanino:</label>
            <input type="radio" id="genero" name="genero" value="femenino"  required>
            <br><br/>
            <label for="genero">Masculino:</label>
            <input type="radio" id="genero" name="genero" value="masculino"  required>
            <br><br/>
            <br/><br/>
    		<input type="email" class="formulario__input" id="mail" name="mail" required>
          
    		<label for="" class="formulario__label">Correo:</label>
            <br/><br/>
            <input type="number" class="formulario__input" id="edad" name="edad" required>
          
            <label for="" class="formulario__label">Edad:</label>
            <br/><br/>
    		<input type="text" class="formulario__input" id="telefono" name="telefono">
            
    		<label for="" class="formulario__label">Telefono:</label>
            <br/><br/>
    		<input type="text" class="formulario__input" id="mensaje" name="mensaje" required>
        
    		<label for="" class="formulario__label">Mensaje:</label>
            <br/><br/>
    		<input type="submit" class="formulario__submit">
            
    	</form>
            
<!-- esta linea de codigo funciona para hacer la coneccion con el js -->

    </body>

</html>