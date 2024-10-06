<?php
	class placas {
		private $cnx;
		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "";
		private $dbname = "sp_placas";

		function __construct() {
			$this->connect_db();
		}

		public function connect_db() {
			$this->cnx = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			$this->cnx->set_charset("utf8");
			if(mysqli_connect_error()) {
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		// Nuevo método para obtener la conexión
		public function getConnection() {
			return $this->cnx;
		}

		public function getCatTiposVehiculos() {
			$sql = "SELECT descripcion FROM sp_cat_tipo_vehiculo ORDER BY descripcion asc";
			$res = mysqli_query($this->cnx, $sql);
			return $res;
		}

		public function getPersonas() {
			$sql = "SELECT curp, nombre, primerApellido, segundoApellido FROM sp_personas ORDER BY nombre asc";
			$res = mysqli_query($this->cnx, $sql);
			return $res;
		}

		public function getVehiculos() {
			$sql = "SELECT niv, numMotor, marca, modelo FROM sp_personas ORDER BY niv asc";
			$res = mysqli_query($this->cnx, $sql);
			return $res;
		}

		<table>
		    <thead>
		        <tr>
		            <th scope="col">#</th>
		            <th scope="col">curp</th>
		            <th scope="col">Nombre</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        $personas = $cnx->getPersonas();
		        $i = 0;
		        while($row = mysqli_fetch_object($personas)) {
		            $i++;
		            echo "
		            <tr>
		                <td>" . $i . "</td>
		                <td>" . $row->curp . "</td>
		                <td>" . $row->nombre . " " . $row->primerApellido . " " . $row->segundoApellido . "</td>
		            </tr>";
		        }
		        ?>
		    </tbody>
		</table>

		<table>
		    <thead>
		        <tr>
		            <th scope="col">#</th>
		            <th scope="col">niv</th>
		            <th scope="col">marca</th>
			    <th scope="col">modelo</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		        $personas = $cnx->getVehiculos();
		        $i = 0;
		        while($row = mysqli_fetch_object($vehiculos)) {
		            $i++;
		            echo "
		            <tr>
		                <td>" . $i . "</td>
		                <td>" . $row->niv . "</td>
		  		<td>" . $row->marca . "</td>
      				<td>" . $row->modelo . "</td>
		            </tr>";
		        }
		        ?>
		    </tbody>
		</table>
	}

?>
