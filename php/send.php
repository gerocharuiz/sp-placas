<?php
	class send {
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

        public function registrarVehiculo($data) {
            $tipo_id = mysqli_query($this->cnx, 'SELECT id FROM sp_cat_tipo_vehiculo WHERE descripcion ='.$data['tipo']);
            $sql = "INSERT INTO sp_vehiculos (niv, numMotor, numChasis, tipo_id ,tipo, clase, color, modelo, marca, numPuertas,
                                            combustible, cilindros, ejes) 
                    VALUES ('".$data['niv']."','".$data['numMotor']."','".$data['numChasis']."','".$tipo_id. "','".$data['tipo']."', 
                            '".$data['clase']."','".$data['color']."','".$data['modelo']."','".$data['marca']."', 
                            '".$data['numPuertas']."','".$data['combustible']."','".$data['cilindros']."','".$data['ejes']."'
                    )";
            
            if (mysqli_query($this->cnx, $sql)) {
                return "Vehículo registrado con éxito";
            } else {
                return "Error al registrar el vehículo: " . mysqli_error($this->cnx);
            }
        }

        public function registrarPersona($data) {
            $sql = "INSERT INTO sp_vehiculos (curp, nombre, primerApellido, segundoApellido, fechaNacimiento, sexo, direccion, numCelular) 
                    VALUES ('".$data['curp']."','".$data['nombre']."','".$data['primerApellido']."','".$data['segundoApellido']."','"
                            .$data['fechaNacimiento']."','".$data['sexo']."','".$data['direccion']."','".$data['numCelular']."'
                    )";
            
            if (mysqli_query($this->cnx, $sql)) {
                return "Persona registrada con éxito";
            } else {
                return "Error al registrar a la persona: " . mysqli_error($this->cnx);
            }
        }
	}

?>