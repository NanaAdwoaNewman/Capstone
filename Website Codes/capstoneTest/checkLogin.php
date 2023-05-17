<?php

require "connection.php";

$connection = conectar();

$EmailAddress=$_GET["EmailAddress"];
$Pass=$_GET["Pass"];

$sql = "SELECT UserID, FirstName, LastName, Pat_Doc from users where EmailAddress='{$EmailAddress}' and Pass='{$Pass}'";

$data=array();
$q=mysqli_query($connection, $sql);

$val=mysqli_fetch_object($q);
// echo "{$val->Pat_Doc}";

if($val->Pat_Doc==1){
    header("Location: https://atlantean-wares-385618.uc.r.appspot.com/PatientDashboard.html?EmailAddress=" . urlencode($EmailAddress) . "&UserID=" . urlencode($val->UserID). "&FirstName=" . urlencode($val->FirstName). "&LastName=" . urlencode($val->LastName));
    exit;
}
elseif ($val->Pat_Doc==2){
    header("Location: https://atlantean-wares-385618.uc.r.appspot.com/ListPatients.html?EmailAddress=" . urlencode($EmailAddress) . "&UserID=" . urlencode($val->UserID). "&FirstName=" . urlencode($val->FirstName). "&LastName=" . urlencode($val->LastName));
    exit;
}
else{
    echo "Error";
}

?>