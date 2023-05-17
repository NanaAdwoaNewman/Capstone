<?php
    require "connection.php";

    $connection = conectar();
    $DeviceID=$_GET['DeviceID'];

    $q=mysqli_query($connection,"SELECT Prescription from device where DeviceID= {$DeviceID}");

    $row=mysqli_fetch_object($q);  
    echo "{$row->Prescription}"; 
?>