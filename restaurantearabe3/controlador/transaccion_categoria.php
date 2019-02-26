<?php 

	include_once("../modelo/Objeto_Categoria.php");
	include_once("../modelo/Manejo_Objetos.php");

	try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$categoria= new Objeto_Categoria();

		$categoria->setNombre_categoria(htmlentities(addslashes($_POST["nombre_categoria"]), ENT_QUOTES)); 

		$Manejo_Objetos->setCategoria($categoria);

		header('Location: ../vista/categorias.php?ok=1');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}

?>