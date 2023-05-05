<?php

require "db.php";

//$connection = conectar();
$connection= mysqli_connect($servername,$username,$password,$dbname);

$Temperature=$_GET['Temperature'];
$DeviceID=$_GET['DeviceID'];

$sql = "INSERT INTO fever_readings (Temperature,DeviceID) VALUES ('{$Temperature}','{$DeviceID}')";

if (mysqli_query($connection, $sql)) 
echo "New record created successfully";
else
echo "Record not created";

?>