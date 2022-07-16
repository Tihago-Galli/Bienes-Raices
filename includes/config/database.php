<?php

function conectarDB() :mysqli{

    $db = new mysqli('localhost', 'root', 'tihagogalli45', 'bienesraices');

    if(!$db){
        echo"No se puedo conectar a la base de datos";
        exit;
    }else{
        return $db;
    }
}

?>