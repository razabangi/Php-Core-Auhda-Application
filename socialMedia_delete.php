<?php
// Connection
include("db/connection.php");

if(isset($_GET['id']))
{

$del = $_GET['id'];

$query = $con->prepare("DELETE FROM tbl_social_media where id ='$del'");

// $query->bindParam(':id', $del);

$query->execute();
header("location:socialMediaInfo1.php");
}

?>