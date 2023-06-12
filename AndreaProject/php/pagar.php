<?php
session_start();
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagar</title>
  <link rel="stylesheet" href="../css/pagar.css">
</head>
<body>
<?php


$felicitazion=false;
if(!isset($_SESSION['username'])){
  $_SESSION['username']=null;

}
if(!isset($_SESSION['idUsuario'])){
  $_SESSION['idUsuario']=null;

}



if( $_SESSION['username']!=null && $_SESSION['idUsuario']!=null){
    
 
    
    if(count($_SESSION['cursos'])>0 || count($_SESSION['cursoIndividual'])>0){

      $idAlumno = $_SESSION['idUsuario'];
      /*Si hay usuario loguedao,  insertamos lista de cursos entabla Curso/Alumnos*/
    
     
  
      /*Insertar cursos de SESSION Curso*/
        if (count($_SESSION['cursos']) > 0) {
            
            $sqlIDCurso = "SELECT id FROM Curso WHERE nombre = :nombreCurso";
            $sqlInsert = "INSERT INTO `Curso_Alumno` (`id`, `id_alumno`, `id_curso`, `progreso`) VALUES (NULL, :alumno, :curso, :progreso);";
            
            foreach ($_SESSION['cursos'] as $curso) {
                    $nombreCurso = $curso['nombre'];
                
                  $statementPDO = $ObjetConection->prepare($sqlIDCurso);
                  
                  $resultado = $statementPDO->execute(array(':nombreCurso' => $nombreCurso));
                  
                  if ($resultado) {
                      
                      $resultado = $statementPDO->fetch(PDO::FETCH_ASSOC);
                      
                      
                      if ($resultado !== null) {
                        $identificador = $resultado['id'];
                          
                                  
                          
                            $statementPDO_INSERT = $ObjetConection->prepare($sqlInsert);
                            
                            $InertOk=$statementPDO_INSERT->execute(array(':alumno'=>$idAlumno, ':curso'=>$identificador, ':progreso'=>0));
                            
                            if ($InertOk) {
                              $felicitazion=true;
                                }else {
                                    echo "Error al Insertar";
                                      }
                                      $statementPDO_INSERT->closeCursor();
                            }
                      
                      $statementPDO->closeCursor();
                        }
                  }
          }

           /*Insertar cursos que se agregan individual*/
        if(count($_SESSION['cursoIndividual'])>0){

              
              $sqlInsertI = "INSERT INTO `Curso_Alumno` (`id`, `id_alumno`, `id_curso`, `progreso`) VALUES (NULL, :alumno, :curso, :progreso);";
              foreach($_SESSION['cursoIndividual'] as $individual){
                  $cursoIdInto = $individual['id'];
                  
                  $statementIndividual= $ObjetConection->prepare($sqlInsertI);

                  $inserto = $statementIndividual->execute(array(':alumno' => $idAlumno,':curso' => $cursoIdInto,':progreso' => 0));

                  
                  if ($Inerto !== false) {
                    $felicitazion=true;                    

                      }else {
                          echo "Error al Insertar";
                            }
          
                            $statementIndividual->closeCursor();
                }


          }




        }else{
          /*Si no hay logueo mandamos a pagina del login*/
         
          header("location:carrito.php");
          exit();
          
                }
      

                
  
          
  
  
    }else{
      header('Location: login.php');
                exit; 
    }

    //Muestro mensaje de aceptacion de los cursos, y redirecciono
    //De esta manera porque el header de php no espera la cuenta atras.
    if($felicitazion){

      //vaciar carrito una vez se agregen a la BBDD
      $_SESSION['cursoIndividual']=null;
      $_SESSION['cursos']=null;
      

      echo '
      
        <div class="container">
          <h1 class="title">Enhorabuena</h1>
          <p class="message">Transacción exitosa.</p>
          <p class="message"> En breve, recibirás información importante a tu email.</p>
          Seras redirigido en 10 segundos
          </div>
                          
          ';
          //Lo hago asi, porque si espero con php, y luego redirecciono,
          //El redireccionamiento con header(), no espera los 5 segundos del sleep.
          
          echo "
            <script>
              
              setTimeout(function() {  
              window.location.href = 'CursoAlumno.php';
              }, 10000);
            </script>

          ";
    }
  
  
  
?>
  
</body>
</html>