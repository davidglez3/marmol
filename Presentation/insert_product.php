<?php
    session_start();
 ?>
<html>
    <head>
    <script type="text/javascript">
     function masImagen() {
         var html = "Imagen: <input type="file" name="txt_archivo"/></br>";
         return html;
     }
 </script>
    </head>

    <body>
        <?php
        if($_SESSION["autentificado"] != "SI"){
        ?>
            <a href="login.php"><input type="button" name="btn_inicia_sesion" value="Iniciar sesion"/></a>
            <a href="insert_usuario.php"><input type="button" name="btn_registro" value="Registrarse"/></a>
        <?php
        }
        else{
            echo $_SESSION['nombre'];
        ?>
            <a href="../Logic/logoff.php"><input type="button" name="btn_logoff" value="Cerrar sesi&oacute;n"/></a>
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
    </br></br>
        <form method="post" action="../Logic/product.php" />
            Nombre: <input type="text" name="txt_nombre"/></br>
            Descripci&oacute;n: <textarea cols="30" rows="6" name="txt_descripcion"></textarea></br>
            Categor&iacute;a: <input type="text" name="txt_ categoria"/></br>
            Stock: <input type="text" name="txt_stock"/></br>
            Oferta: <input type="text" name="txt_oferta"/>%</br>
            Oferta VIP: <input type="text" name="txt_ofertaVIP"/>%</br>
            Precio: <input type="text" name="txt_precio"/>&euro;</br>
            Imagen: <input type="file" name="txt_archivo1"/></br>
            Imagen: <input type="file" name="txt_archivo2"/></br>
            Imagen: <input type="file" name="txt_archivo3"/></br>
            <input type="submit" name="btn_añadir_producto" value="A&ntilde;adir producto" />
        </form>
    </body>
</html>
