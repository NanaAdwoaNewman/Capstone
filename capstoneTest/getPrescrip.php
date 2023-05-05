<?php
require "db.php";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    $DeviceID=$_GET['DeviceID'];

    $q=mysqli_query($con,"SELECT Prescription from device where DeviceID= {$DeviceID}");

    $row=mysqli_fetch_object($q);  
    echo "{$row->Prescription}"; 
?>