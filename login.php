<?php 
require 'includes/app.php';
$db = conectarDB();

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);


    if(!$email){
        $errores[] ="Debes ingresar un email valido";
    }

    if(!$password){
        $errores[] ="Debes ingresar un password valido";
    }

    if(empty($errores)){

        $query = "SELECT * FROM usuario WHERE email = '${email}'";
        $resultado = mysqli_query($db,$query);

        if($resultado -> num_rows){

            $usuario = mysqli_fetch_assoc($resultado);

            $auth = password_verify($password, $usuario['password']);

          if($auth){
            //iniciar seccion
            session_start();

            //
            $_SESSION['usuario'] = $usuario['email'];
            $_SESSION['login'] = true;


            header('Location: /admin');

           

            
          }  else{
            $errores[] = "Contraseña incorrecta"; 
          }

        }else{
            $errores[] = "El usuario no existe";
        }

    }
}




incluirTemplates('header');





?>

    <main class="contenedor seccion">   
        
        <h1>Login</h1>  

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach;?>
        <form method="POST" class="formulario contenido-centrado">
        <fieldset>
            <legend>Email y contraseña</legend>

            <label for="email">E-Mail</label> 
            <input type="email" placeholder="Tu Email"  name="email" id="email" required>

            <label for="password">Contraseña</label> 
            <input type="password" placeholder="Tu password" name="password" id="password" required>



        </fieldset>
        <input type="submit" class="boton-verde" value="Iniciar Secion"  >
        </form>

    </main>
    <?php 
        incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>