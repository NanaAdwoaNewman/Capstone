<?php

require "db.php";

$con = mysqli_connect($servername,$username,$password,$dbname);

$Pat_Doc=$_GET["Pat_Doc"];
$FirstName=$_GET["FirstName"];
$LastName=$_GET["LastName"];
$EmailAddress=$_GET["EmailAddress"];
$Pass=$_GET["Pass"];
$Mobile=$_GET["Mobile"];

$sql = "INSERT INTO users (Pat_Doc,FirstName,LastName,EmailAddress,Pass,Mobile) VALUES ('{$Pat_Doc}','{$FirstName}','{$LastName}','{$EmailAddress}','{$Pass}','{$Mobile}')";

if (mysqli_query($con, $sql)){
    header("Location: http://192.168.137.1/capstoneTest/index.html");
    exit;
}
else
    echo "Record not created";

?>