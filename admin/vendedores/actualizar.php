<?php 
include '../../includes/app.php';

use App\Vendedor;

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

  //asignar los valores
  $array = $_POST['vendedor'];

  //sincronizar objeto en memoria con lo que el usuario este escribiendo
  $vendedor->sincronizar($array);

$errores = $vendedor->validar();

  if(empty($errores)){

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