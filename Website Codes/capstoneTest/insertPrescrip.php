<?php

require "connection.php";

$connection = conectar();

$Prescription=$_GET['Prescription'];
$UserID=$_GET['UserID'];


$sql = "UPDATE device set Prescription='{$Prescription}' where UserID = '{$UserID}'";

if (mysqli_query($connection, $sql)){
    echo "Prescription Sent";
}
else{
    echo "Record not created";
}
?>