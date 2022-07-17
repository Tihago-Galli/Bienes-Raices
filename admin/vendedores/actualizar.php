<?php 


use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Imagen;

require '../../includes/app.php';
estaAutenticado();


//validamos de que el id sea un id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

//si el id es no es valido lo redirecciona
if(!$id){
    header('location: /admin');
}


//obtener el array del vendedor
$vendedor = Vendedor::find($id);


//arrary con mensajes de error
$errores = Vendedor::getErrores();


if($_SERVER['REQUEST_METHOD'] ==='POST'){

  //asignar valores
$array = $_POST['vendedor'];

$vendedor->sincronizar($array);

  //validacion
 $errores = $vendedor->validar();


  //SUBIDA DE ARCHIVO
   //generar nombre unico a la imagen
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


 if($_FILES['vendedor']['tmp_name']['imagen']){
  $imagen = Imagen::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
  $vendedor->setImagen($nombreImagen);
  }

  //validar de que errores este vacio para enviar datos al servidor
  if(empty($errores)){

      if($_FILES['vendedor']['tmp_name']['imagen']){
      //almacenar imagen
      $imagen->save(CARPETA_VENDEDORES . $nombreImagen);
      }
      $vendedor->guardar();
  

  }
 

}

incluirTemplates('header');

?>

<main class="contenedor seccion">   
        
        <h1>Actualizar vendedor</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
          <div class="alerta error">
            <?php echo $error; ?>
          </div>
          <?php endforeach; ?>  

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_vendedores.php' ?>

            <input type="submit" value="Guardar Cambios" class="boton boton-verde">
        </form>
    </main>
    <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>