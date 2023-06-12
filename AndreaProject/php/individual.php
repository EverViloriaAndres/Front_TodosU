<?php
session_start();
include_once "consultar.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Katibeh&family=Roboto+Mono:ital,wght@0,100;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/comun.css" />
    <link rel="stylesheet" href="../css/individual.css" />
    <script src="../js/agregarIndividual.js" defer></script>
  </head>
  <body>
    <?php    ?>

    <!--BARRA DE NAVEGACION-->
    <nav class="navegacion">
      <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../quienessomos.html">Nosotros</a></li>
        <li><a href="cusrsos.php">Cursos</a></li>
        <li><a href="../index.html#contacto">Contactos</a></li>
      </ul>
    </nav>

    <div class="periodico">
      <div class="columna1">
        <div class="arriba">
          <div class="imgPading">
            <div
              class="img"
              style="background-image: url('<?php echo $img; ?>')"
            ></div>
            <h3 class="nomCurso"><?php echo $nombre; ?></h3>
          </div>
        </div>
        <div class="abajo">
          <div class="principal">
            <h3 class="tituloAbajo">Caracteristicas</h3>
            <div class="item" id="itemCaracter">
              <ul>
                <li>Presencial</li>
                <li>Flexibilidad Horaria</li>
                <li>Evento Final</li>
                <li>Retiro 1ª Clase</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="columna2">
        <div class="arriba">
          <div class="negocio">
            <div class="precioCarro">
              <div class="precio">
                <div class="marañaPrecios">
                  <dl>
                    <dt class="descuento">$700.000</dt>

                    <dt class="precioHoy"><?php echo $precio; ?></dt>
                    <dd class="hoy">Hoy</dd>
                  </dl>
                </div>
              </div>
              <a href="carrito.php">
                <div class="Carro"></div>
              </a>
            </div>
            <div class="cupos">
              <p>Cupos disponibles</p>
              <p>5</p>
            </div>
            <div class="horasHabiles">
              <p>Su inscripcion se registrara en 24h habiles</p>
            </div>
            <form action="carrito.php" method="post" >
              <input type="hidden"  name="nombre"  value="<?php echo $nombre; ?>" />
              <input type="hidden" name="precio" value="<?php echo $precio; ?>"/>
              <input type="hidden" name="img" value="<?php echo $img; ?>" />
              <input type="hidden" name="id" value="<?php echo $idDelCurso; ?>" />
              <button type="submit" class="addCesta" id="agregarCesta" name = "agregarIndividual"> Añadir al carrito
              </button>
            </form>

            
            <div class="inscribirse"><p>Inscribirse Ahora</p></div>
          </div>
        </div>
        <div class="abajo">
          <div class="principal" id="principalAbajo">
            <h3 class="tituloAbajo">Resumen Curso</h3>
            <div class="item">
              <p>
                <?php echo $descripcion; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
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
</html>
