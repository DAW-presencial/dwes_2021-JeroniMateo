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

//declaramos las variables por las cuales obtendremos e imprimiremos los datos introducidos en el formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['nacimiento'];
$file1s = $_FILES['file1']['size'];
$file2s = $_FILES['file2']['size'];
$file2n = $_FILES['file1']['name'];
$file2n = $_FILES['file2']['name'];



//si han pulsado el boton y se han subido ambos archivos entonces empezara a imrpmir todo
if(isset($_POST["submit"]) && isset($_FILES['file1']) && isset($_FILES['file2'])) ?>
    <h1>Datos Enviados</h1>

    //En el caso de que alguno de los campos este vacio lo impimirá en blanco, en caso contario, imprimira el dato introducido en input
    Nombre : <?php isset($nombre) ? print $nombre : ""; ?> <br>
    Apellidos : <?php isset($apellidos) ? print $apellidos : ""; ?> <br>
    Fecha Nacimiento : <?php isset($fecha) ? print $fecha : ""; ?> <br>
    File1:<?php isset($file1n) ? print $file1n : "";   ?> " " <?php isset($file1s) ? print $file1s : ""; ?> <br>
    File2:<?php isset($file2n) ? print $file2n : ""; ?> " " <?php isset($file2s) ? print $file2s : ""; ?> <br>
  

   







</body>
</html>