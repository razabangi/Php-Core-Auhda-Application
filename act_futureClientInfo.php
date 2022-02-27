<?php 
// Connection
include("db/connection.php");


//Get Form Fields
if(isset($_POST['submit']))
{
// $client_name=$_POST['client_name'];
// $order_no=$_POST['order_no'];
// $date_of_order=$_POST['date_of_order'];
// $final_delivery_date=$_POST['final_delivery_date'];
// $resume_id=$_POST['resume_id'];
// $code=$_POST['code'];
// $sample_status=$_POST['sample_status'];
// $full_resume_status=$_POST['full_resume_status'];


// $query = $con->prepare("insert into tbl_client_info (client_name,contact_no,date,email,education_institute,city,organization,qualification,position,profession,cv_design_code,cv_status) values (:client_name,:contact_no,:entry_date,:email,:education_institute,:city,:organization,:qualification,:position,:profession,:cv_design_code,:cv_status)");

$query = $con->prepare("INSERT INTO tbl_futureclient (client_name,email,phone,entry_date,meetUp_date,education,job,intrest,resume_code,expected_amount,country,discount_code,lead_status) VALUES (:client_name,:email,:phone,:entry_date,:meet_up_date,:education,:job,:intrest_field,:resume_code,:expected_amount,:country,:discount_code,:lead_status)");

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


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>