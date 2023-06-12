<?php
    $serverAndBBDD = "mysql:host=localhost;dbname=BBDDAndreaTodosU";
    $username = "Viloria";
    $password = "8080";


    // Crear conexión
    try{
    $ObjetConection = new PDO($serverAndBBDD, $username, $password);
    $ObjetConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    }catch(Exception $e){
    echo "Error al conetar BBDD<br>";
    echo $e->GetMessage();
    }
?>
