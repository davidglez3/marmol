
<?php
    session_start();
 ?>
<html>
    <head>
    </head>

    <body>
        <?php
        if (isset($_SESSION["autentificado"])){
          if($_SESSION["autentificado"] = "SI"){

        ?>
            <a href="../Logic/logoff.php"><input type="button" name="btn_logoff" value="Cerrar sesi&oacute;n"/></a>
            <a href="#"><?php echo $_SESSION['nombre']; ?></a>

        <?php
        }
      }
      else{
        ?>
        <a href="login.php"><input type="button" name="btn_inicia_sesion" value="Iniciar sesion"/></a>
        <a href="insert_usuario.php"><input type="button" name="btn_registro" value="Registrarse"/></a>
        <?php
          }

        ?>

        <input type="button" name="btn_cesta" value="Cesta"/>
        <table border="1" width="100%">
            <tr>
                <td><a href="#">Ofertas</a></td>
                <td><a href="#">Contacto</a></td>
                <td><a href="#">Localizacion</a></td>
                <td><a href="#">Showroom</a></td>
                <td><a href="#">Blog</a></td>
                <td><a href="#">Zona VIP</a></td>
                <td><a href="#">Productos</a></td>
            </tr>
        </table>


    </body>
</html>
