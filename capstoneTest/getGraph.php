<?php

require "db.php";

    $mysqli = new mysqli($servername,$username,$password,$dbname);
    $DeviceID=$_GET["DeviceID"];

    if(!$mysqli){
        die("Connection failed: ".$mysqli->error);
    }

    $query=sprintf("SELECT Time1, Temperature from fever_readings where DeviceID= '{$DeviceID}' ORDER BY ID ASC LIMIT 48");

    $result=$mysqli->query($query);

    $data = array();
    foreach ($result as $row){
        $data[] = $row;
    }
    $result->close();
    $mysqli->close();
    //return json_encode($data);
    //echo $result
    echo json_encode($data);

    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    fwrite($myfile, json_encode($data));
    fclose($myfile);

?>
