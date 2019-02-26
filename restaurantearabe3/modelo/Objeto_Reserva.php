<?php 


	class Objeto_Reserva{


			private $id_reserva;
			private $cliente;
			private $comensales;
			private $telefono;
			private $fecha;
			private $hora;
			private $observaciones;

			/*=============================================
			=           DECLARACION DE GETTERS            =
			=============================================*/
			
			public function getId_reserva(){

				return $this->id_reserva;
			}

			public function getCliente(){

				return $this->cliente;
			}

			public function getComensales(){

				return $this->comensales;
			}

			public function getTelefono(){

				return $this->telefono;
			}

			public function getFecha(){

				return $this->fecha;
			}

			public function getHora(){

				return $this->hora;
			}
			
			public function getObservaciones(){

				return $this->observaciones;
			}
			/*=====  End of DECLARACION DE GETTERS  ======*/
			

			/*==============================================
			=            DECLARACION DE SETTERS            =
			==============================================*/

			public function setId_reserva($id_reserva){

				$this->id_reserva=$id_reserva;
			}

			public function setCliente($cliente){

				$this->cliente=$cliente;
			}
			
			public function setComensales($comensales){

				$this->comensales=$comensales;
			}

			public function setTelefono($telefono){

				$this->telefono=$telefono;
			}

			public function setFecha($fecha){

				$this->fecha=$fecha;
			}

			public function setHora($hora){

				$this->hora=$hora;
			}

			public function setObservaciones($observaciones){

				$this->observaciones=$observaciones;
			}
			/*=====  End of DECLARACION DE SETTERS  ======*/
			







	}



?>
