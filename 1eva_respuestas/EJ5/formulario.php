<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="ficheros.php" method="POST" enctype="multipart/form-data">

    <label>Nombre: </label><input type="text" name="nombre" id="nombre"> <br>
    <label>Apellidos: </label><input type="text" name="apellidos" id="apellidos"> <br>
    <input type="file" name="file1" id="file1"> <br>
    <input type="file" name="file2" id="file2"><br>
    <button>Enviar</button>

 
    

    </form>
</body>
</html>