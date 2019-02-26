<?php 

	include_once("../modelo/Objeto_Producto.php");
	include_once("../modelo/Manejo_Objetos.php");

	if (isset($_POST["borrar_producto"])) {
		
		try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$producto= new Objeto_Producto();
		
		$producto->setId_producto($_POST["id_producto"]); 
		 


		$Manejo_Objetos->deleteProductos($producto);

		header('Location: ../vista/productos.php?ok=2');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}
	

	}//FIN DEL ISSET BORRAR


	if (isset($_POST["borrar_categoria"])) {
		
		try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$categoria= new Objeto_Categoria();
		
		$categoria->setId_categoria($_POST["id_categoria"]); 
		 


		$Manejo_Objetos->deleteCategoria($categoria);

		header('Location: ../vista/categorias.php?ok=2');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}
	

	}//FIN DEL ISSET BORRAR

	if (isset($_POST["borrar_reserva"])) {
		
		try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$reserva= new Objeto_Reserva();
		
		$reserva->setId_reserva($_POST["id_reserva"]); 
		 


		$Manejo_Objetos->deleteReservas($reserva);

		header('Location: ../vista/reservas.php?ok=2');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}
	

	}//FIN DEL ISSET BORRAR


	if (isset($_POST["editar_producto"])) {

		
		try{

			$miconexion=new PDO('mysql:host=localhost; dbname=petshop2', 'root', '');
			$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
			$Manejo_Objetos= new Manejo_Objetos($miconexion);

			$producto= new Objeto_Producto();
			
			$producto->setCodigo($_POST["codigo"]); 

			header('Location: ../vista/productos.php?ok=3&codigo=' .$producto->getCodigo(). '');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}
	

	}//FIN DEL ISSET BORRAR
	

?>