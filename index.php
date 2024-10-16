<?php
include('include/config.inc');
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

$peticionEmpresa = "SELECT * FROM empresa";
$resultadoEmpresa = mysqli_query($conexion, $peticionEmpresa);

$peticionProducto = "SELECT * FROM productos";
$resultadoProducto = mysqli_query($conexion, $peticionProducto);

$peticionProductos = "SELECT * FROM productos";
$resultadoProductos = mysqli_query($conexion, $peticionProductos);

$peticionSucursal = "SELECT * FROM sucursales";
$resultadoSucursal = mysqli_query($conexion, $peticionSucursal);

$peticionSucursales = "SELECT * FROM sucursales";
$resultadoSucursales = mysqli_query($conexion, $peticionSucursales);


//Inicio de llamado de datos desde la base para página Acerca/Empresa
$sql = "SELECT descripcion FROM empresa WHERE id=1"; // toma los datos del registro con id 1
$result = $conexion->query($sql); //llama la conexion

if ($result->num_rows > 0) {
	// salida de los datos de cada fila
	while ($row = $result->fetch_assoc()) {
		$mision = $row["descripcion"]; // guarda el dato en una variable
	}
} else {
	echo "0 resultados";
}


$sql = "SELECT descripcion FROM empresa WHERE id=2"; // ejemplo de consulta
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
	// salida de los datos de cada fila
	while ($row = $result->fetch_assoc()) {
		$vision = $row["descripcion"]; // guarda el dato en una variable
	}
} else {
	echo "0 resultados";
}


$sql = "SELECT descripcion FROM empresa WHERE id=3"; // ejemplo de consulta
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
	// salida de los datos de cada fila
	while ($row = $result->fetch_assoc()) {
		$historia = $row["descripcion"]; // guarda el dato en una variable
	}
} else {
	echo "0 resultados";
}
//Fin de llamado de datos desde la base para página Acerca/Empresa
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>App Café</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/jquery.mobile-1.3.0.min.css" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.3.0.min.js"></script>

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>


<body>
	<!--pagina de incio-->
	<div data-role="page" id="inicio">

		<div data-role="header">
			<a href="#inicio" data-icon="home">Inicio</a>
			<h1><img src="images/logo-cafe.png" style="height: 120px; width: 70%"></h1>
			<a href="#productos" data-icon="grid">Menú</a>

			<nav data-role="navbar">
				<ul>
					<li><a href="#acerca" data-icon="star" data-theme="e">Acerca</a></li>
					<li><a href="#productos" data-icon="check" data-theme="e">Menú</a></li>
					<li><a href="#sucursales" data-icon="search" data-theme="e">Locales</a></li>
					<li><a href="#contactos" data-icon="info" data-theme="e">Admin...</a></li>
				</ul>
			</nav>


		</div>

		<div data-role="content">


			<div style="display: flex; justify-content: center; ">
				<ul data-role="listview" data-inset="true" data-split-icon="gear" data-split-theme="a" style="background-color: white;">
					<li data-role="list-divider" style="color: white; font-size: 25px; font-family: Arial;">Bienvenidos, amantes del café</li>
				</ul>
			</div>

			<div>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="4000">
							<img src="images/inicio-cafe.png" class="d-block w-100" style="height: 300px" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="4000">
							<img src="images/mocca.png" class="d-block w-100" style="height: 300px" alt="...">
						</div>
						<div class="carousel-item" data-bs-interval="4000">
							<img src="images/capuchino.png" class="d-block w-100" style="height: 300px" alt="...">
						</div>
					</div>
				</div>

				<div class="card" style="width: 100%;">
					<div class="card-body">
						<h5 class="card-title">"La mejor calidad al alcance de su taza"</h5>
						<p class="card-text">En CoffeeLovers, ofrecemos una amplia variedad de café
							100% de grano y tostado por nuestro propio equipo, para que usted y sus
							seres queridos puedan disfrutar del más natural y revitalizador sorbo de
							café que su paladar pueda degustar</p>
					</div>
				</div>

				<div data-role="footer">
					<h4>Cafetería "CoffeeLovers" 2024 Todos los derechos reservados</h4>
				</div>
			</div>
		</div>

	</div>
	<!--fin de incio-->

	<!--pagina de Acerca-->
	<div data-role="page" id="acerca">

		<div data-role="header">
			<a href="#inicio" data-icon="home">Inicio</a>
			<h1><img src="images/logo-cafe.png" style="height: 90px; width: 50%"></h1>
			<a href="#productos" data-icon="grid">Menú</a>




		</div>

		<div data-role="content">
			<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collpased-icon="arrow-r"
				data-expandend-icon="arrow-d">
				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Misión Empresarial</h3>
					<?php echo $mision; //llamamos variable que contiene datos 
					?>
				</div>


				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Visión Empresarial</h3>
					<?php echo $vision; //llamamos variable que contiene datos
					?>
				</div>


				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Historia de la Empresa</h3>
					<?php echo $historia; //llamamos variable que contiene datos
					?>
				</div>

				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Recursos Multimedia</h3>
					<p>Aquí puedes echar un vistazo a un video corto hecho en uno de nuestros locales.</p>

					<video controls width="100%" poster="video/chef-cafe.jpg">
						<source src="video/video-cafe.mp4" type="video/mp4">
						<source src="video/video-cafe.ogv" type="video/ogv">
						<source src="video/video-cafe.webm" type="video/webm">
					</video>
				</div>
			</div>
		</div>

		<div data-role="footer">
			<nav data-role="navbar">
				<ul>
					<li><a href="#acerca" data-icon="star" data-theme="e">Acerca</a></li>
					<li><a href="#productos" data-icon="check" data-theme="e">Menú</a></li>
					<li><a href="#sucursales" data-icon="search" data-theme="e">Locales</a></li>
					<li><a href="#contactos" data-icon="info" data-theme="e">Admin...</a></li>
				</ul>
			</nav>
			<h4>Cafetería "CoffeeLovers" 2024 Todos los derechos reservados</h4>
		</div>

	</div>
	<!--fin de acerca-->





	<!--pagina de productos-->
	<div data-role="page" id="productos">

		<div data-role="header">
			<a href="#inicio" data-icon="home" data-theme="a">Inicio</a>
			<h1><img src="images/logo-cafe.png" style="height: 90px; width: 50%"></h1>
			<a href="#productos" data-icon="grid">Menú</a>


		</div>

		<div data-role="content">
			<?php
			echo '<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d" 
				data-count-theme="b" data-filter="true" data-filter-placeholder="Explore nuestro menú...">
				<li data-role="list-divider">Le ofrecemos</li>';
			while ($fila = mysqli_fetch_array($resultadoProducto)) {
				echo '<li data-icon="plus">'
					. $fila['nombre'] .
					'<p>' . $fila['descripcion'] . '</p>
						<p>Precio: $' . $fila['precio'] . '</p> 
						<img src="' . $fila['imagen'] . '" alt="imgproducto">
						
					</li>';
			}
			echo '</ul>';
			?>
		</div>



		<div data-role="footer">
			<nav data-role="navbar">
				<ul>
					<li><a href="#acerca" data-icon="star" data-theme="e">Acerca</a></li>
					<li><a href="#productos" data-icon="check" data-theme="e">Menú</a></li>
					<li><a href="#sucursales" data-icon="search" data-theme="e">Locales</a></li>
					<li><a href="#contactos" data-icon="info" data-theme="e">Admin...</a></li>
				</ul>
			</nav>
			<h4>Cafetería "CoffeeLovers" 2024 Todos los derechos reservados</h4>
		</div>

	</div>
	<!--fin de productos-->


	<!--pagina de sucursales-->
	<div data-role="page" id="sucursales">

		<div data-role="header">
			<a href="#inicio" data-icon="home">Inicio</a>
			<h1><img src="images/logo-cafe.png" style="height: 90px; width: 50%"></h1>
			<a href="#productos" data-icon="grid">Menú</a>




		</div>

		<div data-role="content">

			<?php
			echo '<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="d" 
					data-count-theme="b" data-filter="true" data-filter-placeholder="Busque aquí el local de su preferencia...">
					<li data-role="list-divider">Encuéntrenos en:</li>';
			while ($fila = mysqli_fetch_array($resultadoSucursal)) {
				echo '<li data-icon="plus">'
					. $fila['nombre'] .
					'<p>' . $fila['descripcion'] . '</p>
					<img src="' . $fila['imagen'] . '" alt="imglocales">
						</li>';
			}
			echo '</ul>';
			?>

		</div>

		<div data-role="footer">
			<nav data-role="navbar">
				<ul>
					<li><a href="#acerca" data-icon="star" data-theme="e">Acerca</a></li>
					<li><a href="#productos" data-icon="check" data-theme="e">Menú</a></li>
					<li><a href="#sucursales" data-icon="search" data-theme="e">Locales</a></li>
					<li><a href="#contactos" data-icon="info" data-theme="e">Admin...</a></li>
				</ul>
			</nav>
			<h4>Cafeteria "CoffeLovers" 2024 Todos los derechos reservados</h4>
		</div>

	</div>
	<!--fin de sucursales-->

	<!--pagina de contactos-->
	<div data-role="page" id="contactos">

		<div data-role="header">
			<a href="#inicio" data-icon="home">Inicio</a>
			<h1><img src="images/logo-cafe.png" style="height: 90px; width: 50%"></h1>
			<a href="#productos" data-icon="grid">Menú</a>


		</div>


		<div data-role="content">
			<div data-role="collapsible-set" data-theme="c" data-content-theme="d"
				data-collpased-icon="arrow-r" data-expandend-icon="arrow-d">

				<div style="display: flex; justify-content: center; ">
					<ul data-role="listview" data-inset="true" data-split-icon="gear" data-split-theme="a" style="background-color: white;">
						<li data-role="list-divider" style="color: white; font-size: 25px; font-family: Arial;">Agregar Registros</li>
					</ul>
				</div>


				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Agregar a Menú</h3>

					<form name="productos" action="insertar_productos.php" method="post" enctype="multipart/form-data">
						<input name="nombre" placeholder="Nombre del producto" required>
						<textarea name="descripcion" placeholder="Descripción del producto" required></textarea>
						<input type="number" step="0.25" name="precio" placeholder="Precio" required>
						<input type="file" name="imagen">
						<input type="submit" value="Guardar" name="btnGuardar">
					</form>
				</div>


				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Agregar a Locales</h3>
					<form name="sucursales" action="insertar_sucursales.php" method="post" enctype="multipart/form-data">
						<input name="nombre" placeholder="Nombre del Local" required>
						<textarea name="descripcion" placeholder="Descripción del local" required></textarea>
						<input type="file" name="imagen" placeholder="Suba una imagen">
						<input type="submit" value="Guardar" name="btnGuardar">
					</form>
				</div>

			</div>

			<div data-role="collapsible-set" data-theme="c" data-content-theme="d"
				data-collpased-icon="arrow-r" data-expandend-icon="arrow-d">

				<div style="display: flex; justify-content: center; ">
					<ul data-role="listview" data-inset="true" data-split-icon="gear" data-split-theme="a" style="background-color: white;">
						<li data-role="list-divider" style="color: white; font-size: 25px; font-family: Arial;">Administrar Registros</li>
					</ul>
				</div>

				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Consultas de Menú</h3>
					<?php
					echo '<table>';
					echo '<thead>';
					echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Imagen</th></tr>';
					echo '</thead><tbody>';
					while ($fila = mysqli_fetch_array($resultadoProductos)) {
						echo '<tr>';
						echo '<td>' . $fila['id'] . '</td>';
						echo '<td>' . $fila['nombre'] . '</td>';
						echo '<td>' . $fila['descripcion'] . '</td>';
						echo '<td>' . $fila['precio'] . '</td>';
						echo '<td><img src="' . $fila['imagen'] . '" alt="imgproducto"></td>';
						echo '<td><a href="eliminar_productos.php?id=' . $fila['id'] . '" data-role="button" data-icon="delete" data-inline="true" data-iconpos="notext" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este registro?\');"></a></td>';
						echo '</tr>';
					}
					echo '</tbody></table>';
					?>
				</div>

				<div data-role="collapsible" data-theme="b" data-content-theme="b">
					<h3>Consultas de Locales</h3>
					<?php
					echo '<table>';
					echo '<thead>';
					echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Imagen</th></tr>';
					echo '</thead><tbody>';
					while ($fila = mysqli_fetch_array($resultadoSucursales)) {
						echo '<tr>';
						echo '<td>' . $fila['id'] . '</td>';
						echo '<td>' . $fila['nombre'] . '</td>';
						echo '<td>' . $fila['descripcion'] . '</td>';
						echo '<td><img src="' . $fila['imagen'] . '" alt="imglocales"></td>';
						echo '<td><a href="eliminar_sucursales.php?id=' . $fila['id'] . '" data-role="button" data-icon="delete" data-inline="true" data-iconpos="notext" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este registro?\');"></a></td>';
						echo '</tr>';
					}
					echo '</tbody></table>';
					?>
				</div>
			</div>
		</div>


		<div data-role="footer">
			<nav data-role="navbar">
				<ul>
					<li><a href="#acerca" data-icon="star" data-theme="e">Acerca</a></li>
					<li><a href="#productos" data-icon="check" data-theme="e">Menú</a></li>
					<li><a href="#sucursales" data-icon="search" data-theme="e">Locales</a></li>
					<li><a href="#contactos" data-icon="info" data-theme="e">Admin...</a></li>
				</ul>
			</nav>
			<h4>Cafetería "CoffeeLovers" 2024 Todos los derechos reservados</h4>
		</div>

	</div>
	<!--fin de acerca-->



</body>

</html>