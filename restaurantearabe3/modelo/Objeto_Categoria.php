<?php 


	class Objeto_Categoria{


			private $id_categoria;
			private $nombre_categoria;

			/*=============================================
			=           DECLARACION DE GETTERS            =
			=============================================*/
			
			public function getId_categoria(){

				return $this->id_categoria;
			}

			public function getNombre_categoria(){

				return $this->nombre_categoria;
			}
			
			/*=====  End of DECLARACION DE GETTERS  ======*/
			

			/*==============================================
			=            DECLARACION DE SETTERS            =
			==============================================*/

			public function setId_categoria($id_categoria){

				$this->id_categoria=$id_categoria;
			}

			public function setNombre_categoria($nombre_categoria){

				$this->nombre_categoria=$nombre_categoria;
			}
			
			/*=====  End of DECLARACION DE SETTERS  ======*/
			







	}



?>
