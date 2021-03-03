
<?php

$error = "";

if($_POST){

    //Obetemos los valores del formulario
    $nombre = $_POST["Nombre"] || "";
    $apellido = $_POST["Apellido"] || "";
    $correo =  $_POST["Correo"] || "";
    $telefono = $_POST["Telefono"] || "" ;
    $descripcion = $_POST["Descripcion"]|| "";
    
    //Removemos etiqueta html
    $nombre = htmlspecialchars($nombre);
    $apellido = htmlspecialchars($apellido);
    $correo = htmlspecialchars($correo);
    $telefono = htmlspecialchars($telefono);
    $descripcion = htmlspecialchars($descripcion);
    
    
    //sanitizamos los valores del formulario
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
    $descripcion = filter_var($descripcion, FILTER_SANITIZE_STRING);
    
    //Comprobamos que los valores no esten vacios
    if( strlen($nombre) < 1) {
      $error = $error . "Ingrese su nombre <br> ";
    }

    if( strlen($apellido) < 1) {
      $error = $error . "Ingrese su apellido <br> ";
    }

    if( strlen($correo) < 1) {
      $error = $error . "Ingrese su correo <br> ";
    }

    if( strlen($telefono) < 1) {
      $error = $error . "Ingrese su telefono <br> ";
    }

    if( strlen($descripcion) < 1){
      $error = $error . "Ingrese una descripcion <br> ";
    }


}else{
$error = $error . "Uups algo salio mal";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Formulario de contacto</h1>

    <div class="container">

      <?php if ($error === "")  { ?>    

        <h1>Mensaje enviado con exito</h1>

      <?php } else { ?>    

      <div class="container error">

          <h2 > <?php echo $error; ?></h2>

      </div>

      <button onclick="{history.back()}" class=" btn back">Volver </button>
      
      <?php }  ?>    

    </div>
  </body>
</html>