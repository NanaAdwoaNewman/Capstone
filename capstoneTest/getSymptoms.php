<?php
require "db.php";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    $DeviceID=$_GET["DeviceID"];
    $not = "not";

    $data=array();
    $q=mysqli_query($con,"SELECT Malaise,Anorexia,Lassitude,Dizziness,Myalgias,Nausea,Vomiting,Chills from device where DeviceID= '{$DeviceID}'");

    //echo "table"
    $patList = "<ul>";

    $row=mysqli_fetch_object($q);

    if (($row->Malaise)!==$not){
        $patList .= "<li>{$row->Malaise}</li>";
    }
    if (($row->Anorexia)!==$not){
        $patList .= "<li>{$row->Anorexia}</li>";
    }
    if (($row->Lassitude)!==$not){
        $patList .= "<li>{$row->Lassitude}</li>";
    }
    if (($row->Dizziness)!==$not){
        $patList .= "<li>{$row->Dizziness}</li>";
    }
    if (($row->Myalgias)!==$not){
        $patList .= "<li>{$row->Myalgias}</li>";
    }
    if (($row->Nausea)!==$not){
        $patList .= "<li>{$row->Nausea}</li>";
    }
    if (($row->Vomiting)!==$not){
        $patList .= "<li>{$row->Vomiting}</li>";
    }
    if (($row->Chills)!==$not){
        $patList .= "<li>{$row->Chills}</li></ul>";
    }

    echo $patList; 
?>