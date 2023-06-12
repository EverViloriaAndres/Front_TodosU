<?php
session_start();
include_once 'conexion.php';


/*Consulta BBDD para pagina de curso individual, dinamica*/
// Obtener el valor del atributo data-curso
  $curso = $_GET['data-curso'];

  

  $sql = "SELECT img, precio, descripcion, nombre, id FROM `Curso` WHERE id=?";
  $declaracionPDO = $ObjetConection->prepare($sql);
  $declaracionPDO->bindParam(1, $curso, PDO::PARAM_INT);
  $declaracionPDO->execute(); 

  if ($declaracionPDO) {    
    $resultado = $declaracionPDO->fetch(PDO::FETCH_ASSOC);
    if ($resultado) {
      $img = $resultado['img'];
      $precio = $resultado['precio'];
      $descripcion = $resultado['descripcion'];
      $nombre = $resultado['nombre'];
      $idDelCurso = $resultado['id'];
      //echo"Nombre: $nombre id: $idDelCurso descripcion: $descripcion <br>Preecio $precio Ruta: $img ";
      
        }else {
          // No se encontraron resultados
          echo"No se encontraron resultados333";
            }
    $declaracionPDO->closeCursor();
  
      } else {
        // Se produjo un error
        
        echo "Error en la consulta: " ;
    }



?>