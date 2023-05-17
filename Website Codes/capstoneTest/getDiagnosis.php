<?php
    require "connection.php";

    $connection = conectar();
    $DeviceID=$_GET["DeviceID"];

    $data=array();
    $q=mysqli_query($connection,"SELECT Diagnosis from device where DeviceID= '{$DeviceID}'");

    $row=mysqli_fetch_object($q);

    echo "{$row->Diagnosis}"; 

?>