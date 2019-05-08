
<?php

// aqui es donde se hace la conexion y se toman los datos de la base
// de datos que se usara para la pagina web, donde se le asigna el nombre
// a la variable llamada usuario para guardar el usuario de la base de datos y lo mismo 
// ocurre con la contraseña

$link='mysql:host=localhost;dbname=da_cine_base_de_datos';
$usuario='root';
$pass='root';

try{

    $POD=new PDO($link,$usuario,$pass);
    //echo 'Conectado';
    //foreach($POD->query('SELECT * FROM `dca_peliculas_tabla` LIMIT 0 , 30') as $fila) {
    //    print_r($fila);
    //}

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>