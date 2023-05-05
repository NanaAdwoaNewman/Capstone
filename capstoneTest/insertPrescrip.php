<?php

require "db.php";

$con = mysqli_connect($servername,$username,$password,$dbname);

$Prescription=$_GET['Prescription'];
$UserID=$_GET['UserID'];


$sql = "UPDATE device set Prescription='{$Prescription}' where UserID = '{$UserID}'";

if (mysqli_query($con, $sql)){
    echo "Prescription Sent";
}
else{
    echo "Record not created";
}
?>