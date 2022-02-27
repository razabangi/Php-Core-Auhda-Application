<?php
// Connection
include("db/connection.php");

if(isset($_GET['id']))
{

$del = $_GET['id'];

$query = $con->prepare("DELETE FROM tbl_order where id ='$del'");

// $query->bindParam(':id', $del);

$query->execute();
header("location:orderTracking1.php");
}

?>