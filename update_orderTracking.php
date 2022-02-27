<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_order SET client_name=:client_name, 
	order_no=:order_no,
	date_of_order=:date_of_order,
	finally_delivery_date=:final_delivery_date,
	resume_id=:resume_id,
	sample_required=:sample_required,
	sample_status=:sample_status,
	full_resume_made=:full_resume_status
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':client_name', $_POST['client_name']);
$query->bindParam(':order_no', $_POST['order_no']);
$query->bindParam(':date_of_order', $_POST['date_of_order']);
$query->bindParam(':final_delivery_date', $_POST['final_delivery_date']);
$query->bindParam(':resume_id', $_POST['resume_id']);
$query->bindParam(':sample_required', $_POST['sample_required']);
$query->bindParam(':sample_status', $_POST['sample_status']);
$query->bindParam(':full_resume_status', $_POST['full_resume_status']);

$query->execute();
header("location:orderTracking1.php");
}

?>