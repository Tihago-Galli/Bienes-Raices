<?php 
include '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

$vendedor = new Vendedor();


$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] ==='POST'){

  //creamos una nueva instancia
  $vendedor = new Vendedor($_POST['vendedor']);

 
  $errores = $vendedor->validar();

  if(empty($errores)){
    $vendedor->guardar();
  }

}

incluirTemplates('header');

?>

<main class="contenedor seccion">   
        
        <h2>Registrar vendedor</h2>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
          <div class="alerta error">
            <?php echo $error; ?>
          </div>
          <?php endforeach; ?>  

        <form class="formulario" method="POST" action="/admin/vendedores/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_vendedores.php' ?>

            <input type="submit" value="Registrar Vendedor" class="boton boton-verde">
        </form>
    </main>
    <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>