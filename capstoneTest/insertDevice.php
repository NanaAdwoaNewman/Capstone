<?php

require "connection.php";

$connection = conectar();

$DeviceCode=$_GET['DeviceCode'];
$DeviceName=$_GET['DeviceName'];
$UserID=$_GET['UserID'];


$sql = "INSERT INTO device (UserID,DeviceCode,DeviceName) VALUES ('{$UserID}','{$DeviceCode}','{$DeviceName}')";

if (mysqli_query($connection, $sql)){
    echo "Device Added";
}
else{
    echo "Record not created";
}
?>