<?php
//conectar base de datos
require 'includes/app.php';
$db = conectarDB();

//crear usuario
$email = "correo@correo.com";
$password = "123456";

$passwordHasheada = password_hash($password, PASSWORD_DEFAULT);

//mandar query

$query = "INSERT INTO usuario (email, password) VALUES ('${email}', '${passwordHasheada}')";

echo $query;

exit;
mysqli_query($db, $query);
?>