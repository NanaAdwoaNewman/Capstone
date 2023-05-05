<?php
require "db.php";

    $con = mysqli_connect($servername,$username,$password,$dbname);


    $data=array();
    $q=mysqli_query($con,"SELECT patient_data.FirstName, patient_data.LastName, device.DeviceStatus from patient_data inner join device on patient_data.PatientID = device.PatientID ORDER BY DeviceID DESC");

    //echo "table"

    $row=mysqli_fetch_object($q);
    echo "<ul class="list-style-none feed-body m-0 p-b-20">";

        while ($row){
        echo    "<li class="feed-item">
                        <div class="feed-icon bg-danger"><i class="ti-user"></i></div> 
                        {$row->DB_Index} <span class="ms-auto font-12 text-muted">{$row->DB_Index}</span>
                </li>
                ";
        $row=mysqli_fetch_object($q);
        }
    echo "</ul>";      

?>