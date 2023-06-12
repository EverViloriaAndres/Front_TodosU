<?php
session_start();

include_once("conexion.php");

if(isset($_POST['delete'])){
    $idCursoDelete = $_POST['nombre_curso'];

    $sqlDeletCurso = "DELETE FROM Curso_Alumno WHERE id_curso = :id_Curso;";

    $statementPDODelete = $ObjetConection->prepare($sqlDeletCurso);

    $deleteOK = $statementPDODelete->execute(array(':id_Curso' => $idCursoDelete));

    if($deleteOK){

        header("location:CursoAlumno.php");

    }
    


}


?>