<?php

require "connection.php";

$connection = conectar();

$Temperature=$_GET['Temperature'];
$PatientID=$_GET['PatientID'];

$sql = "INSERT INTO fever_readings (Temperature,PatientID) VALUES ('{$Temperature}','{$PatientID}')";

if (mysqli_query($connection, $sql)) 
echo "New record created successfully";
else
echo "Record not created";

?>