<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida ficheros Form</title>
</head>
<body>
    
<form action="Files.php" method="post" enctype="multipart/form-data">


    <label>nombre</label> <input type="text" name="nombre" id="nombre"> <br>
    <label>apellidos</label> <input type="text" name="apellidos" id="apellidos"> <br>
    <label>Sube un fichero</label> <input type="file" name="file" id="file" placeholder="file"> <br>
    <label>Sube un fichero</label> <input type="file" name="file" id="file" placeholder="file"> <br>
    <input type="submit" name="submit" id="enviar">


</form>
<?php

?>
</body>
</html>