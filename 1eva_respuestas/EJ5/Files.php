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
echo $nombre . '    ';

$apellidos = $_POST['apellidos'];
echo $apellidos . '<br>';

$fecha = $_POST['nacimiento'];
echo $fecha . '<br>';

$file1 = $_POST['file1'];
echo $file1 . '<br>';

$file2 = $_POST['file2'];
echo $file2 . '<br>';

var_dump($_FILES);

move_uploaded_file($_FILES['file']["tmp_name"],"archivos/".$_FILES['file']["name"]);






?>
</body>
</html>