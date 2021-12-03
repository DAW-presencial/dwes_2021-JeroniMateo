<?php

spl_autoload_register(function ($persona) {
    include  'clases/' . "$persona" . ".php";
});

spl_autoload_register(function ($animal){
    include 'clases/' . "$animal" . ".php";
});

$obj  = new Persona();
$obj2 = new Animal();
$obj ->cargarClase();




?>