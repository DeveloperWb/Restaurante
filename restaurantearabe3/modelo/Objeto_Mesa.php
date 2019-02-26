<?php 


	class Objeto_Mesa{


			private $id_mesa;
			private $productos;
			private $cantidad;
			private $precio_unitario;

			/*=============================================
			=           DECLARACION DE GETTERS            =
			=============================================*/
			
			public function getId_mesa(){

				return $this->id_mesa;
			}

			public function getProductos(){

				return $this->productos;
			}

			public function getCantidad(){

				return $this->cantidad;
			}

			public function getPrecio_unitario(){

				return $this->precio_unitario;
			}

			/*=====  End of DECLARACION DE GETTERS  ======*/
			

			/*==============================================
			=            DECLARACION DE SETTERS            =
			==============================================*/
			
			public function setId_mesa($id_mesa){

				$this->id_mesa=$id_mesa;
			}

			public function setProductos($productos){

				$this->productos=$productos;
			}

			public function setCantidad($cantidad){

				$this->cantidad=$cantidad;
			}

			public function setPrecio_unitario($precio_unitario){

				$this->precio_unitario=$precio_unitario;
			}

			
			/*=====  End of DECLARACION DE SETTERS  ======*/
			







	}



?>
