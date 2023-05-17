<?php

require "connection.php";

$connection = conectar();

$Malaise=$_GET['Malaise'];
$Anorexia=$_GET['Anorexia'];
$Lassitude=$_GET['Lassitude'];
$Dizziness=$_GET['Dizziness'];
$Myalgias=$_GET['Myalgias'];
$Nausea=$_GET['Nausea'];
$Vomiting=$_GET['Vomiting'];
$Chills=$_GET['Chills'];
$UserID=$_GET['UserID'];

$sql = "UPDATE device set Malaise='{$Malaise}',Anorexia='{$Anorexia}',Lassitude='{$Lassitude}',Dizziness='{$Dizziness}',Myalgias='{$Myalgias}',Nausea='{$Nausea}',Vomiting='{$Vomiting}',Chills='{$Chills}' where UserID='{$UserID}'";

if (mysqli_query($connection, $sql)){
    echo "Symptoms Added";
}
else{
    echo "Record not created";
}
?>