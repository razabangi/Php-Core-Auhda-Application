<?php

include("db/connection.php");


if(isset($_POST['update']))
{

$query = $con->prepare("UPDATE tbl_payment SET transaction_id=:transaction_id, 
	code=:code,
	amount=:amount,
	payment_status=:payment_status,
	cv_status=:final_cv_status
	 WHERE id=:id");

$query->bindParam(':id', $_POST['id']);
$query->bindParam(':transaction_id', $_POST['transaction_id']);
$query->bindParam(':code', $_POST['code']);
$query->bindParam(':amount', $_POST['amount']);
$query->bindParam(':payment_status', $_POST['payment_status']);
$query->bindParam(':final_cv_status', $_POST['final_cv_status']);



$query->execute();
header("location:paymentInfo1.php");
}




?>