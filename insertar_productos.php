<?php
    include('include/config.inc');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
    $directorio = "images/";
    

    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$base_datos);


    $idRegistro = $conexion->insert_id; //toma el id del último registro

    $ruta = $directorio.$idRegistro.".".$tipoImagen;

    $peticionProducto = "INSERT INTO productos VALUES (Null, '".$nombre."', '".$descripcion."', '".$precio."', '".$ruta."')";

    $img="SELECT imagen FROM productos WHERE id='".$idRegistro."'";

    if(move_uploaded_file($imagen,$img)) {
        
    }

    $resultadoProducto = mysqli_query($conexion,$peticionProducto);
    header("Location:index.php");
?>