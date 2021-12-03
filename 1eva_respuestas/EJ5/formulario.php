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


    <label>Nombre</label> <input type="text" name="nombre" id="nombre"> <br>
    <label>Apellidos</label> <input type="text" name="apellidos" id="apellidos" value=""> <br>
    <label>Fecha de nacimiento</label> <input type="date" name="nacimiento" id="nacimiento" value=""> <br>
    <label>Sube un fichero</label> <input type="file" name="file1" id="file1" placeholder="file1" value=""> <br>
    <label>Sube un fichero</label> <input type="file" name="file1" id="file1" placeholder="file1" value=""> <br>
    <input type="submit" name="submit" id="enviar">


</form>

</body>
</html>