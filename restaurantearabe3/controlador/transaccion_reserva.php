<?php 

	include_once("../modelo/Objeto_Reserva.php");
	include_once("../modelo/Manejo_Objetos.php");

	try{

		$miconexion=new PDO('mysql:host=localhost; dbname=restaurantearabe', 'root', '');
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);

		$reserva = new Objeto_Reserva();

		$reserva->setCliente(htmlentities(addslashes($_POST["cliente"]), ENT_QUOTES));
		$reserva->setComensales(htmlentities(addslashes($_POST["comensales"]), ENT_QUOTES));
		$reserva->setTelefono(htmlentities(addslashes($_POST["telefono"]), ENT_QUOTES));
		$reserva->setFecha(htmlentities(addslashes($_POST["fecha"]), ENT_QUOTES));
		$reserva->setHora(htmlentities(addslashes($_POST["hora"]), ENT_QUOTES));
		$reserva->setObservaciones(htmlentities(addslashes($_POST["observaciones"]), ENT_QUOTES));    

		$Manejo_Objetos->setReserva($reserva);  
		header('Location: ../vista/reservas.php?ok=1');

	}catch(Exception $e){

		die("Error: " . $e->getMessage());

	}

?>