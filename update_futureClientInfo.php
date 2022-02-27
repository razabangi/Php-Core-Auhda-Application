<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_futureclient SET client_name=:client_name, 
	email=:email,
	phone=:phone,
	entry_date=:entry_date,
	meetUp_date=:meet_up_date,
	education=:education,
	job=:job,
	intrest=:intrest_field,
	resume_code=:resume_code,
	expected_amount=:expected_amount,
	country=:country,
	discount_code=:discount_code,
	lead_status=:lead_status
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':client_name', $_POST['client_name']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':phone', $_POST['phone']);
$query->bindParam(':entry_date', $_POST['entry_date']);
$query->bindParam(':meet_up_date', $_POST['meet_up_date']);
$query->bindParam(':education', $_POST['education']);
$query->bindParam(':job', $_POST['job']);
$query->bindParam(':intrest_field', $_POST['intrest_field']);
$query->bindParam(':resume_code', $_POST['resume_code']);
$query->bindParam(':expected_amount', $_POST['expected_amount']);
$query->bindParam(':country', $_POST['country']);
$query->bindParam(':discount_code', $_POST['discount_code']);
// $query->bindParam(':discount_amount', $_POST['discount_amount']);
$query->bindParam(':lead_status', $_POST['lead_status']);


$query->execute();
header("location:futureClientInfo1.php");
}




?>