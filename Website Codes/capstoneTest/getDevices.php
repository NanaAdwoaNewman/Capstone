<?php
    require "connection.php";

    $connection = conectar();
    $UserID=$_GET["UserID"];
    $FirstName=$_GET["FirstName"];
    $LastName=$_GET["LastName"];
    $EmailAddress=$_GET["EmailAddress"];

    $data=array();
    $q=mysqli_query($connection,"SELECT device.DeviceID, device.DeviceName, device.DeviceCode from device where device.UserID= '{$UserID}' ORDER BY DeviceID DESC");

    //echo "table"
    $patList = "<ul class=\"list-style-none feed-body m-0 p-b-20\">";

    $row=mysqli_fetch_object($q);

    while ($row){
        $patList .= "<a href=\"SymPrescribPat.html?DeviceID={$row->DeviceID}&EmailAddress={$EmailAddress}&FirstName={$FirstName}&LastName={$LastName}&UserID={$UserID}\"><li class=\"feed-item\">
                        <div class=\"feed-icon bg-danger\"><i class=\"ti-user\"></i></div> 
                        {$row->DeviceName} <span class=\"ms-auto font-12 text-muted\">{$row->DeviceCode}</span>
                    </li></a>";
        $row=mysqli_fetch_object($q);
        }
    $patList .= "</ul>";     
    echo $patList; 
?>