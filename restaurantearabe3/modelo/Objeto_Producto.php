<?php 


	class Objeto_Producto{


			private $id_producto;
			private $id_categoria;
			private $nombre_producto;
			private $precio_producto;
			private $id_usuario;

			/*=============================================
			=           DECLARACION DE GETTERS            =
			=============================================*/
			
			public function getId_producto(){

				return $this->id_producto;
			}

			public function getId_categoria(){

				return $this->id_categoria;
			}

			public function getNombre_producto(){

				return $this->nombre_producto;
			}

			public function getPrecio_producto(){

				return $this->precio_producto;
			}

			public function getId_usuario(){

				return $this->id_usuario;
			}

			
			/*=====  End of DECLARACION DE GETTERS  ======*/
			

			/*==============================================
			=            DECLARACION DE SETTERS            =
			==============================================*/
			
			public function setId_producto($id_producto){

				$this->id_producto=$id_producto;
			}

			public function setId_categoria($id_categoria){

				$this->id_categoria=$id_categoria;
			}

			public function setNombre_producto($nombre_producto){

				$this->nombre_producto=$nombre_producto;
			}

			public function setPrecio_producto($precio_producto){

				$this->precio_producto=$precio_producto;
			}

			public function setId_usuario($id_usuario){

				$this->id_usuario=$id_usuario;
			}

			
			/*=====  End of DECLARACION DE SETTERS  ======*/
			







	}



?>
