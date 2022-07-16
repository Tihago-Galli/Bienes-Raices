<?php


define('TEMPLATE_URL',__DIR__. '/templates');
define('FUNCIONES_URL',__DIR__.'funciones.php');
define('CARPETA_IMAGENES',__DIR__.'/../imagenes/');

function incluirTemplates( string $nombre, bool $inicio = false){

    include TEMPLATE_URL . "/${nombre}.php";
}


//esta funcion corta el texto para que no se vea todo en la descripcion y no se vean deformadas las cartas
function truncate(string $texto, int $cantidad) : string
{
    if(strlen($texto) >= $cantidad) {
        return substr($texto, 0, $cantidad) . "...";
    } else {
        return $texto;
    }
}

function estaAutenticado(){
    session_start();

if(!$_SESSION['login']){

    header('location: /');
} 


}


function debuguear($variable){

echo '<pre>';
var_dump($variable);
echo '</pre>';

exit;
}

//escapar /sanitizar html

function s($html){
    $s = htmlspecialchars($html);
    return $s;
}

function validarTipo($tipo){
    $tipos = ["vendedor", "propiedad"];

    return in_array($tipo, $tipos);
}

//funcion para mostrar mensaje

function mostrarMensaje($codigo){
    $mensaje = '';

    switch($codigo){
        case 1:
            $mensaje = "Creado Exitosamente";
            break;

        case 2:
             $mensaje = "Actualizado Exitosamente";
             break;

        case 3:
            $mensaje = "Eliminado Exitosamente";
             break;  
             
        default:
            $mensaje =  false;
            break;     
        }       
        return $mensaje;

}