<?php 
require '../../includes/app.php';

use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Imagen;

estaAutenticado();

$vendedor = new Vendedor;


$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] ==='POST'){

  $vendedor = new Vendedor($_POST['vendedor']); //creamos una nueva instancia almacenandola en post en memoria
  
  
    //creando la carpeta para guardar imagen
    //comprobamos de que si la carpeta no existe, la creamos
    if(!is_dir(CARPETA_VENDEDORES)){
        mkdir(CARPETA_VENDEDORES);
    }
  
    //generar nombre unico a la imagen
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
  
  
              //subida de imagen
              //realiza un resize a la imagen con intervention
              if($_FILES['vendedor']['tmp_name']['imagen']){
              $imagen = Imagen::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
              $vendedor->setImagen($nombreImagen);
              }
          //validar 
          $errores = $vendedor->validar();
  
      //validar de que errores este vacio para enviar datos al servidor
      if(empty($errores)){
  
         
              //guardar imagen
              $imagen->save(CARPETA_VENDEDORES . $nombreImagen);
  
              //guardar en la base de datos
            $vendedor->guardar();
      }
  

};

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