<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Imagen;

require '../../includes/app.php';

estaAutenticado();

//validar id

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('location: /admin');
}


//consulta propiedad
$propiedad = Propiedad::find($id);


//arrary con mensajes de error
$errores = Propiedad::getErrores();



//consulta de vendedores

$vendedores = Vendedor::all();


//ejecutar codigo luego de que el usuario envie el formulario
if($_SERVER['REQUEST_METHOD'] ==='POST'){

    //asignar valores
$array = $_POST['propiedad'];

$propiedad->sincronizar($array);

    //validacion
   $errores = $propiedad->validar();


    //SUBIDA DE ARCHIVO
     //generar nombre unico a la imagen
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

  
   if($_FILES['propiedad']['tmp_name']['imagen']){
    $imagen = Imagen::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
    $propiedad->setImagen($nombreImagen);
    }

    //validar de que errores este vacio para enviar datos al servidor
    if(empty($errores)){

        if($_FILES['propiedad']['tmp_name']['imagen']){
        //almacenar imagen
        $imagen->save(CARPETA_IMAGENES . $nombreImagen);
        }
        $propiedad->guardar();
    

    }

}


incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h1>Actualizar Propiedad</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
          <div class="alerta error">
            <?php echo $error; ?>
          </div>
          <?php endforeach; ?>  

        <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include '../../includes/templates/formulario_propiedades.php' ?>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-amarillo">
        </form>
    </main>
    <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>