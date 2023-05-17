<?php
    require "connection.php";

    $connection = conectar();

    $DFirstName=$_GET["FirstName"];
    $DLastName=$_GET["LastName"];
    $DEmailAddress=$_GET["EmailAddress"];
    $DUserID=$_GET["UserID"];

    $data=array();
    $q=mysqli_query($connection,"SELECT users.UserID, users.FirstName, users.LastName, device.DeviceStatus, device.DeviceID from users inner join device on users.UserID = device.UserID ORDER BY DeviceID DESC");

    //echo "table"
    $patList = "<ul class=\"list-style-none feed-body m-0 p-b-20\">";

    $row=mysqli_fetch_object($q);

    while ($row){
        $patList .= "<a href=\"PatientResultSym.html?DeviceID={$row->DeviceID}&UserID={$row->UserID}&FirstName={$row->FirstName}&LastName={$row->LastName}&DUserID={$DUserID}&DFirstName={$DFirstName}&DLastName={$DLastName}&DEmailAddress={$DEmailAddress}\">
                        <li class=\"feed-item\">
                        <div class=\"feed-icon bg-danger\"><i class=\"ti-user\"></i></div> 
                        {$row->FirstName} {$row->LastName} <span class=\"ms-auto font-12 text-muted\">{$row->DeviceStatus}</span>
                </li></a>";
        $row=mysqli_fetch_object($q);
        }
    $patList .= "</ul>";     
    echo $patList; 
?>