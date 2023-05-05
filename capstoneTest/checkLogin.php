<?php

require "db.php";

$con = mysqli_connect($servername,$username,$password,$dbname);

$EmailAddress=$_GET["EmailAddress"];
$Pass=$_GET["Pass"];

$sql = "SELECT UserID, FirstName, LastName, Pat_Doc from users where EmailAddress='{$EmailAddress}' and Pass='{$Pass}'";

$data=array();
$q=mysqli_query($con, $sql);

$val=mysqli_fetch_object($q);
echo "{$val->Pat_Doc}";

if($val->Pat_Doc==1){
    header("Location: http://192.168.137.1/capstoneTest/PatientDashboard.html?EmailAddress=" . urlencode($EmailAddress) . "&UserID=" . urlencode($val->UserID). "&FirstName=" . urlencode($val->FirstName). "&LastName=" . urlencode($val->LastName));
    exit;
}
elseif ($val->Pat_Doc==2){
    header("Location: http://172.16.4.56/capstoneTest/ListPatients.html?EmailAddress=" . urlencode($EmailAddress) . "&UserID=" . urlencode($val->UserID). "&FirstName=" . urlencode($val->FirstName). "&LastName=" . urlencode($val->LastName));
    exit;
}
else{
    echo "Error";
}

?>