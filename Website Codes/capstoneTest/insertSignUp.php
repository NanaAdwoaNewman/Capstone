<?php

require "connection.php";

$connection = conectar();

$Pat_Doc=$_GET["Pat_Doc"];
$FirstName=$_GET["FirstName"];
$LastName=$_GET["LastName"];
$EmailAddress=$_GET["EmailAddress"];
$Pass=$_GET["Pass"];
$Mobile=$_GET["Mobile"];

$sql = "INSERT INTO users (Pat_Doc,FirstName,LastName,EmailAddress,Pass,Mobile) VALUES ('{$Pat_Doc}','{$FirstName}','{$LastName}','{$EmailAddress}','{$Pass}','{$Mobile}')";

if (mysqli_query($connection, $sql)){
    header("Location: http://atlantean-wares-385618.uc.r.appspot.com/index.html");
    exit;
}
else
    echo "Record not created";

?>