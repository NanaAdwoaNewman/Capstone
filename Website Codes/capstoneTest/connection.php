<?php 
		if (function_exists('conectar')){

		} else {

		function conectar(){

				$user = getenv('CLOUDSQL_USER');
				$pass = getenv('CLOUDSQL_PASSWORD');
				$inst = getenv('CLOUDSQL_DSN');
				$db = getenv('CLOUDSQL_DB');
				$con = mysqli_connect(null, $user, $pass, $db, null, $inst);

				if (!$con) {
						echo "Error!".mysqli_connect_error();
					}
				
				return $con;
		}
		}

		
?>