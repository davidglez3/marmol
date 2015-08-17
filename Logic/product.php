<?php
session_start();
include_once('../Data/queries.php');
include_once('../Entities/producto.php');

$producto = new Producto();
$consultas = new consultas();

if(isset($_POST['btn_añadir_producto'])){
  $producto->setNombre($_POST['txt_nombre']);
  $producto->setDescripcion($_POST['txt_descripcion']);
  $producto->setCategoria($_POST['txt_categoria']);
  $producto->setStock($_POST['txt_stock']);
  $producto->setOferta($_POST['txt_oferta']);
  //$producto->setOfertaVip($_POST['txt_ofertaVip']);
  $producto->setPrecio($_POST['txt_precio']);

  $queries->connectToDB();
  $result = $queries->insertProducto($producto);
  $queries->disconnectFromDB();

/*$max = 1500000;//(1.5MB)
$directorio = "../Images";
$filename = trim($_FILES['txt_archivo1']['name']);
$filename = substr($filename,-20);
$filename = ereg_replace(" ","",$filename);


if($filesize < $max){
  if($filesize > 0){
    if((ereg(".jpg", $filename)) || (ereg(".gif", $filename)) || (ereg(".JPG", $filename))|| (ereg(".GIF", $filename))){
    $uploadfile = $directorio . $filename;
      if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)) {
        print("Archivo subido correctamente");
      } else {
        print("Error de conexi&oacute;n con el servidor.");
      }
      } else {
        print("Sólo se permiten imágenes en formato jpg. y gif., no se ha podido adjuntar.");
      }
    }
    else {
    print("<br><br>Campo vac&iacute;o, no ha seleccionado ninguna imagen");
    }
  }
  else {
  print("<br><br>La imagen que ha intentado adjuntar es mayor de 1.5 Mb, si desea cambie el tamaño del archivo y vuelva a intentarlo.");
}*/
}

?>
