<?php 

	include_once("../modelo/Objeto_Reserva.php");
	include_once("../modelo/Objeto_Producto.php");
	include_once("../modelo/Manejo_Objetos.php");

	try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$producto= new Objeto_Producto();

		$producto->setId_categoria(htmlentities(addslashes($_POST["categoria"]), ENT_QUOTES)); 
		$producto->setNombre_producto(htmlentities(addslashes($_POST["nombre"]), ENT_QUOTES)); 
		$producto->setPrecio_producto(htmlentities(addslashes($_POST["precio"]), ENT_QUOTES)); 


		$Manejo_Objetos->setProductos($producto);

		header('Location: ../vista/productos.php?ok=1');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}

?>