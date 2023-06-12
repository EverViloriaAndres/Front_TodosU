<?php
session_start();
if(!$_SESSION['cursoIndividual']){
  $_SESSION['cursoIndividual']=array();

}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregarIndividual'])){ 

  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $img= $_POST['img'];
  $id= $_POST['id'];
  
  $_SESSION['cursoIndividual'][]= array('nombre' => $nombre, 'precio' => $precio, 'img' => $img, 'id' => $id);

  
  

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrito</title>
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/comun.css" />
    <link rel="stylesheet" href="../css/carrito.css" />
  </head>
  <body>
    <!--BARRA DE NAVEGACION-->
    <nav class="navegacion">
      <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../quienessomos.html">Nosotros</a></li>
        <li><a href="cusrsos.php">Cursos</a></li>
        <li><a href="../index.html#contacto">Contactos</a></li>
      </ul>
    </nav>
  
    <div id="container">
      <div id="left-column">
        <h1 class="titulo">Carrito de Compras</h1>
        <br />
        <h2 class="cantidad">Numero de Productos: <?php echo count($_SESSION['cursos'] )+count($_SESSION['cursoIndividual'] ); ?></h2>
        <?php
          $Total=0;
            if(isset($_SESSION['cursos']) && count($_SESSION['cursos'])>0){
              foreach($_SESSION['cursos'] as $curso){
                $nombreCurso = $curso['nombre'];
                $precioCurso = $curso['precio'];
                $imgCurso = $curso['img'];
                $Total=$Total+$curso['precio'];

                echo "
                <div class='item'>
                  <figure>
                    <img src='$imgCurso' />
                    <figcaption>
                      <p>Curso</p>
                      <p>$nombreCurso</p>
                    </figcaption>
                  </figure>
                  <div id='precio'>Preio: $$precioCurso</div>
              </div>     
                ";
                
              }
                          
            
              
            }

            if(isset($_SESSION['cursoIndividual']) && count($_SESSION['cursoIndividual'])>0){
             
              /*Doy al usuario la posibilidad de agregar al carrito*/
              /*Seleccionando varios a la ves (post)*/
              /*O, uno solo desde individual.php*/
              /*Por eso este  if que agrega cursos seleccionados individualmente, por get*/
              
              
            

            foreach($_SESSION['cursoIndividual'] as $ultimoCursoURL){
              $ruta = $ultimoCursoURL['img'];
              $nombre = $ultimoCursoURL['nombre'];
              $valor = $ultimoCursoURL['precio'];
              $id = $ultimoCursoURL['id'];
              $Total = $Total + $valor;

                         
              
              echo "
                <div class='item'>
                  <figure>
                    <img src='$ruta' />
                    <figcaption>
                      <p>Curso</p>
                      <p>$nombre</p>
                    </figcaption>
                  </figure>
                  <div id='precio'>Preio: $$valor</div>
              </div>     
                ";
            }   
                   
               
          
          }
           
           if(isset($_SESSION['username'])){
            echo '<div id="userName"><a href="CursoAlumno.php">Tus Cursos</a></div>';

           }
        ?>
           
           <h1 class="titulo"><a href="cusrsos.php">Seguir Comprando</a></h1>
       
      </div>
      
      <div id="right-column">
        <div class="logo"></div>
        <div class="resumen_precios">
          <h2 class="mi_carrito">Mi Carrito</h2>
          <dl class="totales">
            <dt>Sub Total: $<?php echo $Total;?></dt>
            <dd><hr class="lineas" /></dd>
            <dt>Decuento: $0.0</dt>
            <dd><hr class="lineas" /></dd>
            <dt>Total: $<?php echo $Total;?></dt>
          </dl>
          <button class="pagar"><a href="pagar.php">Ir a pagar</a></button>
        </div>
      </div>
    </div>

    <footer>
      <div class="redes">
        <ul>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/facebook.png" alt=""
            /></a>
          </li>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/instagram2.png" alt=""
            /></a>
          </li>
          <li class="li-foter">
            <a href="#"><img class="icon" src="../img/tik-tok.png" alt="" /></a>
          </li>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/whatsapp222.png" alt=""
            /></a>
          </li>
        </ul>
      </div>
      <div class="legal">
        <p class="footer-p">Politicas de cookies</p>
        <p class="footer-p">Informacion legal</p>
        <p class="footer-p">Copyright &copy; 2023 Music Studio AS.</p>
        <p class="footer-p">Politicas de privacidad.</p>
        <p class="footer-p">Registrate</p>
      </div>
    </footer>
  </body>
  
  <?php
  //session_unset();
  //session_destroy();
   
  ?>
</html>

