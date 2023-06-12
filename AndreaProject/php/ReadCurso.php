<?php

session_start();
include_once"conexion.php";

            
          
          $Criterio_id_alumno = $_SESSION['idUsuario'];
          $sqlCursoAlumno = "SELECT img, nombre , progreso, id_curso FROM Curso INNER JOIN Curso_Alumno on Curso.id=Curso_Alumno.id_curso WHERE Curso_Alumno.id_alumno=:id_alumno;";
          
          $statementObPDO = $ObjetConection->prepare($sqlCursoAlumno);
          
          $queryOK = $statementObPDO->execute(array(':id_alumno' => $Criterio_id_alumno ));

          if($queryOK){
            
            $VirtualTable = $statementObPDO->fetchAll(PDO::FETCH_ASSOC); 
            

              foreach ($VirtualTable as $encabezado) {
              
                $Ruta = $encabezado['img'];
                $Nom_Curso = $encabezado['nombre'];
                $Progreso = $encabezado['progreso'];
                $idCURSO = $encabezado['id_curso'];
              
                
                echo '
          
                    <div class="curso">
                        <figure>
                            <img src="' . $Ruta . '" alt="Nombre del curso" />
                            <figcaption>
                                <p class="">Curso: ' . $Nom_Curso . ' --- Progreso: ' . $Progreso . '%</p>
                            </figcaption>
                        </figure>
                        <form action="DeleteCurso.php" method="post" class="formulario">
                            <input type="hidden" name="nombre_curso" value="'.$idCURSO.'" />
                            <button type="submit" class="boton-eliminar" name="delete">
                                <img src="../img/remove2.svg" alt="Delete" class="remove" />
                            </button>
                        </form>
                    </div>
                ';

                    
                  
            }    
            $statementObPDO->closeCursor();

          } 





          ?>