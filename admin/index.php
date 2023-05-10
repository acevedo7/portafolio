<?php
require_once "../config/conexion.php";

session_start();


if (isset($_SESSION['user_id'])) {
    header('Location: portafolio.php');
    exit;
}
if (isset($_POST['usuario']) && isset($_POST['clave'])) {

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT id FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        header('Location: portafolio.php');
        exit;

    } else {

       
        $mensaje = "Credenciales inválidas. Inténtalo de nuevo.";

    }
    mysqli_close($conn);

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div class="boxinicio">
    <h1>Iniciar sesión</h1>

    <?php if (isset($mensaje)) { echo '<p style="color:red;">' . $mensaje . '</p>'; } ?>

    <form action="index.php" method="POST" autocomplete="off">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br>
        <label>Clave:</label><br>
        <input type="password" name="clave" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</div>

<style>
* {
    padding: 0;
    margin: 0;
}
.boxinicio{
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start;
}
.boxinicio form {
    padding: 3%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    align-items: center;
}

</style>


</body>
</html>