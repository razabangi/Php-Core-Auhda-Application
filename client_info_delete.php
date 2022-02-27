<?php session_start();   ?>
<?php 
require("db/dbc.php");
$id=$_GET['id'];

mysql_query("DELETE FROM  locationinfo WHERE Location_Id='$id'");
 header("location:location_info.php");
 ?>