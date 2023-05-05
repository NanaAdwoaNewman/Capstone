<?php

require "db.php";

//$OwnerName=$_GET['OwnerName'];
//$OwnerLocation=$_GET['OwnerLocation'];
//$TankLevel=$_GET['TankLevel']; 
$data = array();

$sql1 = "SELECT OwnerName, OwnerLocation, TankLevel from waterlevelreadings where OwnerName = '{$_GET["OwnerName"]}' ORDER BY Time_ID DESC LIMIT 5";

$q = mysqli_query($con, $sql1); 
$row = mysqli_fetch_object($q);

while ($row)
{
 echo "<br> {$row->OwnerName} {$row->OwnerLocation} {$row->TankLevel}<br/>";
 $row = mysqli_fetch_object($q);
}

?>