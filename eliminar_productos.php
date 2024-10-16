<?php
include('include/config.inc');
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $eliminar = "DELETE FROM productos WHERE id = $id";

    if (mysqli_query($conexion, $eliminar)) {
        header('Location: index.php');
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "ID no válido.";
}

mysqli_close($conexion);

if (mysqli_query($conexion, $eliminar)) {
    header("Location:index.php");
} else {
    die(mysqli_error($conexion)); // Mostrará el error específico si la eliminación falla
}

?>
