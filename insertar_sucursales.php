<?php
    include('include/config.inc');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
    $directorio = "images/";
    

    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$base_datos);


    $idRegistro = $conexion->insert_id; //toma el id del último registro en la tabla

    $ruta = $directorio.$idRegistro.".".$tipoImagen;

    $peticionSucursal = "INSERT INTO sucursales VALUES (Null, '".$nombre."', '".$descripcion."', '".$ruta."')";

    $img="SELECT imagen FROM sucursales WHERE id='".$idRegistro."'";

    if(move_uploaded_file($imagen,$img)) {
        
    }

    $resultadoSucursal = mysqli_query($conexion,$peticionSucursal);
    header("Location:index.php");
?>