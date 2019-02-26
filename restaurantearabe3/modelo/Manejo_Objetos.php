<?php 

	include_once("Objeto_Producto.php");
	include_once("Objeto_Categoria.php");
	include_once("Objeto_Reserva.php");
	include_once("Objeto_Mesa.php");

	class Manejo_Objetos{

		private $conexion;

		public function __construct($conexion){


			$this->SetConexion($conexion);

		}

		public function setConexion(PDO $conexion){


			$this->conexion=$conexion;

		}

		public function getProductos(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM productos");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Producto();

				$producto->setId_producto($registro["id_producto"]);
				$producto->setId_categoria($registro["id_categoria"]);
				$producto->setNombre_producto($registro["nombre_producto"]);
				$producto->setPrecio_producto($registro["precio_producto"]);
				$producto->setId_usuario($registro["id_usuario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}

		public function getProductos_entradas(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM productos WHERE id_categoria='1'");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$entrada= new Objeto_Producto();

				$entrada->setId_producto($registro["id_producto"]);
				$entrada->setId_categoria($registro["id_categoria"]);
				$entrada->setNombre_producto($registro["nombre_producto"]);
				$entrada->setPrecio_producto($registro["precio_producto"]);
				$entrada->setId_usuario($registro["id_usuario"]);

				$matriz[$contador]=$entrada;
				$contador++;

			}

			return $matriz;

		}

		public function getProductos_guarniciones(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM productos WHERE id_categoria='3'");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$guarniciones= new Objeto_Producto();

				$guarniciones->setId_producto($registro["id_producto"]);
				$guarniciones->setId_categoria($registro["id_categoria"]);
				$guarniciones->setNombre_producto($registro["nombre_producto"]);
				$guarniciones->setPrecio_producto($registro["precio_producto"]);
				$guarniciones->setId_usuario($registro["id_usuario"]);

				$matriz[$contador]=$guarniciones;
				$contador++;

			}

			return $matriz;

		}

		public function getProductos_postres(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM productos WHERE id_categoria='4'");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$postres= new Objeto_Producto();

				$postres->setId_producto($registro["id_producto"]);
				$postres->setId_categoria($registro["id_categoria"]);
				$postres->setNombre_producto($registro["nombre_producto"]);
				$postres->setPrecio_producto($registro["precio_producto"]);
				$postres->setId_usuario($registro["id_usuario"]);

				$matriz[$contador]=$postres;
				$contador++;

			}

			return $matriz;

		}

		public function getProductos_bebidas(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM productos WHERE id_categoria='5'");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$bebidas= new Objeto_Producto();

				$bebidas->setId_producto($registro["id_producto"]);
				$bebidas->setId_categoria($registro["id_categoria"]);
				$bebidas->setNombre_producto($registro["nombre_producto"]);
				$bebidas->setPrecio_producto($registro["precio_producto"]);
				$bebidas->setId_usuario($registro["id_usuario"]);

				$matriz[$contador]=$bebidas;
				$contador++;

			}

			return $matriz;

		}


		public function setProductos(Objeto_Producto $producto){


			$sql="INSERT INTO productos (id_producto, id_categoria, nombre_producto, precio_producto, id_usuario) VALUES ('','" . $producto->getId_categoria()."','" . $producto->getNombre_producto()."','" . $producto->getPrecio_producto()."','')";

			$this->conexion->exec($sql);
		}

		public function setCategoria(Objeto_Categoria $categoria){


			$sql="INSERT INTO categorias (id_categoria, nombre_categoria) VALUES ('','" . $categoria->getNombre_categoria()."')";

			$this->conexion->exec($sql);
		}

		public function setReserva(Objeto_Reserva $reserva){


			$sql="INSERT INTO reservas (id_reserva, cliente, comensales, telefono, fecha, hora, observaciones) VALUES ('','" . $reserva->getCliente()."','" . $reserva->getComensales()."','" . $reserva->getTelefono()."','" . $reserva->getFecha()."', '" . $reserva->getHora()."', '" . $reserva->getObservaciones()."')";

			$this->conexion->exec($sql);
		}


		public function deleteProductos(Objeto_Producto $producto){

			$sql="DELETE FROM productos WHERE id_producto='" .$producto->getId_producto(). "'";
			$this->conexion->exec($sql);
		}

		public function deleteCategoria(Objeto_Categoria $categoria){

			$sql="DELETE FROM categorias WHERE id_categoria='" .$categoria->getId_categoria(). "'";
			$this->conexion->exec($sql);
		}

		public function deleteReservas(Objeto_Reserva $reserva){

			$sql="DELETE FROM reservas WHERE id_reserva='" .$reserva->getId_reserva(). "'";
			$this->conexion->exec($sql);
		}

		public function getProductosModal(Objeto_Producto $producto){

			$resultado=$this->conexion->query("SELECT * FROM productos WHERE codigo='" .$producto->getCodigo(). "'");
			$registro=$resultado->fetch(PDO::FETCH_ASSOC);

			$producto = new Objeto_Producto();

			$producto->setCodigo($registro["codigo"]);
			$producto->setNombre($registro["nombre"]);
			$producto->setMolino($registro["molino"]);
			$producto->setEstado($registro["estado"]);
			$producto->setFecha_ingreso($registro["fecha_ingreso"]);
			$producto->setPrecio($registro["precio"]);
			$producto->setStock($registro["stock"]);


		}



		public function getCategorias(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM categorias");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$categoria= new Objeto_Categoria();

				$categoria->setId_categoria($registro["id_categoria"]);
				$categoria->setNombre_categoria($registro["nombre_categoria"]);

				$matriz[$contador]=$categoria;
				$contador++;

			}

			return $matriz;

		}


		public function getReservas(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM reservas");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Reserva();

				$producto->setId_reserva($registro["id_reserva"]);
				$producto->setCliente($registro["cliente"]);
				$producto->setComensales($registro["comensales"]);
				$producto->setTelefono($registro["telefono"]);
				$producto->setFecha($registro["fecha"]);
				$producto->setHora($registro["hora"]);
				$producto->setObservaciones($registro["observaciones"]);


				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;
			return $contador;

		}


		public function getMesa1(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa1");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}

		public function getMesa2(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa2");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}


		public function getMesa3(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa3");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}


		public function getMesa4(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa4");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}


		public function getMesa5(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa5");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}


		public function getMesa6(){

			$matriz=array();
			$contador=0;
			$resultado=$this->conexion->query("SELECT * FROM mesa6");

			while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
				
				$producto= new Objeto_Mesa();

				$producto->setId_mesa($registro["id_mesa"]);
				$producto->setProductos($registro["productos"]);
				$producto->setCantidad($registro["cantidad"]);
				$producto->setPrecio_unitario($registro["precio_unitario"]);

				$matriz[$contador]=$producto;
				$contador++;

			}

			return $matriz;

		}










	}

?>