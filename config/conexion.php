<?php
// Conectarse a la base de datos.
$host = "localhost";
$user = "root"; 
$password = "123456";
$dbname = "portafoliodb";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
//      $host = "localhost";
//      $user = "root";
//      $clave = "123456";
//      $bd = "portafoliodb";

//  $conexion = mysqli_connect($host,$user,$clave,$bd);
//    if (mysqli_connect_errno()){
//      echo "No se pudo conectar a la base de datos";
//      exit();
//    }
//   mysqli_select_db($conexion,$bd) or die("No se encontro la base de datos");
//   mysqli_set_charset($conexion,"utf8");

?>