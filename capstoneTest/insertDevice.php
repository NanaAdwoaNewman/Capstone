<?php

require "db.php";

$con = mysqli_connect($servername,$username,$password,$dbname);

$DeviceCode=$_GET['DeviceCode'];
$DeviceName=$_GET['DeviceName'];
$UserID=$_GET['UserID'];


$sql = "INSERT INTO device (UserID,DeviceCode,DeviceName) VALUES ('{$UserID}','{$DeviceCode}','{$DeviceName}')";

if (mysqli_query($con, $sql)){
    echo "Device Added";
}
else{
    echo "Record not created";
}
?>