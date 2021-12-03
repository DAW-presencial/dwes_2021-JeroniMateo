<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES to Upload</title>
</head>
<body>
    
<?php


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['nacimiento'];
$file1 = $_FILES['file1']['size'];
$file2 = $_FILES['file2']['size'];



if(isset($_POST["submit"]) && isset($_FILES['imagen'])) ?>
    <h1>Datos Enviados</h1>
    Nombre : <?php isset($nombre) ? print $nombre : ""; ?> <br>
    Apellidos : <?php isset($apellidos) ? print $apellidos : ""; ?> <br>
    Fecha Nacimiento : <?php isset($fecha) ? print $fecha : ""; ?> <br>
    File1: <?php isset($file1) ? print $file1 : ""; ?> <br>
    File2: <?php isset($file2) ? print $file2 : ""; ?> <br>
  

   







</body>
</html>