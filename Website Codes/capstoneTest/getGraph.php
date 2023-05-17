<?php
    require "connection.php";

    $connection = conectar();
    $DeviceID=$_GET["DeviceID"];

    $data=array();
    $q=mysqli_query($connection,"SELECT Time1, Temperature from fever_readings where DeviceID= '{$DeviceID}' ORDER BY ID DESC LIMIT 48");

    $patList = "";

    $row=mysqli_fetch_object($q);

    while ($row){
        $patList .= "{$row->Time1},{$row->Temperature}\n";
        $row=mysqli_fetch_object($q);
        }  

    echo $patList; 

    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $patList);
    fclose($myfile);
?>