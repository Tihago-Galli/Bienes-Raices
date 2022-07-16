<?php 

require '../includes/app.php';
estaAutenticado();

use App\Propiedad;
use App\Vendedor;

//sentencia para traer todos los registros

//cuando se abre la pagina, manda a llamar a la funcion all
$propiedades = Propiedad::all();
$vendedores = Vendedor::all();




//mensaje condicional
$resultado = $_GET['resultado'] ?? null;


if($_SERVER['REQUEST_METHOD']=== 'POST'){


    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    

    if($id){

        $tipo = $_POST['tipo'];
   
        //validamos de que el tipo ingresado sea correcto y no uno modificado
        if(validarTipo($tipo)){
            //comparamos los que vamos a eliminar
            if($tipo === 'propiedad'){

                $propiedad = Propiedad::find($id);
                $propiedad ->eliminar();

            } elseif($tipo === 'vendedor') {

                $vendedor = Vendedor::find($id);
                $vendedor ->eliminar();
            }
        }
        

}

}


//incluye un template

incluirTemplates('header');
?>
    <main class="contenedor seccion"> 
        <h1>Administrador</h1>

        <?php $mensaje = mostrarMensaje(intval($resultado)); 
        //intval convierte el valor en entero
            if($mensaje):?>
            <p class="alerta exito"> <?php echo s($mensaje) ?></p>
        <?php endif; ?>    
        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Crear Propiedad</a>
        <a href="/admin/vendedores/crear.php" class="boton boton-amarillo">Crear Vendedor</a>
 
    <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($propiedades as $propiedad): ?>
            <tr>
                <td> <?php echo $propiedad->id ?> </td>
                <td> <?php echo $propiedad->titulo ?> </td>
                <td><img src="/imagenes/<?php echo $propiedad->imagen; ?> " alt="" class="imagen"></td>
                <td> <?php echo $propiedad->precio ?> </td>
                <td>
                    <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad->id ?>" class="boton-amarillo-block">Actualizar</a>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                        <input type="hidden" name="tipo" value="propiedad">
                        <input type="submit" value="ELIMINAR" class="boton-rojo-block">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      
    </table>

    <h2>Vendedores</h2>
    <table class="propiedades">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE y APELLIDO</th>
            <th>TELEFONO</th>
            <th>EMAIL</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($vendedores as $vendedor): ?>
            <tr>
                <td> <?php echo $vendedor->id ?> </td>
                <td> <?php echo $vendedor->nombre ." ". $vendedor->apellido?> </td>
                <td> <?php echo $vendedor->telefono ?> </td>
                <td> <?php echo $vendedor->email ?> </td>
                <td>
                    <a href="admin/vendedores/actualizar.php?id=<?php echo $vendedor->id ?>" class="boton-amarillo-block">Actualizar</a>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                        <input type="hidden" name="tipo" value="vendedor">
                        <input type="submit" value="ELIMINAR" class="boton-rojo-block">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      
    </table>

    </main>
    <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>