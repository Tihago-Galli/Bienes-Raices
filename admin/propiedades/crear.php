<?php 
//iniciar seccion antentificada

require '../../includes/app.php';

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Imagen;

estaAutenticado();

//Base de datos
$vendedores = Vendedor::all();

$propiedad = new Propiedad;
//consulta de vendedores


//arrary con mensajes de error
$errores = Propiedad::getErrores(); //mandamos a llamar a la propiedad statica para que no nos marque un undefine

//ejecutar codigo luego de que el usuario envie el formulario
if($_SERVER['REQUEST_METHOD'] ==='POST'){

$propiedad = new Propiedad($_POST['propiedad']); //creamos una nueva instancia almacenandola en post en memoria






  //creando la carpeta para guardar imagen
  //comprobamos de que si la carpeta no existe, la creamos
  if(!is_dir(CARPETA_IMAGENES)){
      mkdir(CARPETA_IMAGENES);
  }

  //generar nombre unico a la imagen
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";


            //subida de imagen
            //realiza un resize a la imagen con intervention
            if($_FILES['propiedad']['tmp_name']['imagen']){
            $imagen = Imagen::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
            }
        //validar 
        $errores = $propiedad->validar();

    //validar de que errores este vacio para enviar datos al servidor
    if(empty($errores)){

       
    
            //guardar imagen
            $imagen->save(CARPETA_IMAGENES . $nombreImagen);

            //guardar en la base de datos
          $propiedad->guardar();


    }




};



incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h2>Crear Propiedad</h2>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
          <div class="alerta error">
            <?php echo $error; ?>
          </div>
          <?php endforeach; ?>  

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php' ?>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
    <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>