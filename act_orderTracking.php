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

$query = $con->prepare("INSERT INTO tbl_order (client_name,order_no,date_of_order,	finally_delivery_date,resume_id,sample_required,sample_status,	full_resume_made) VALUES (:client_name,:order_no,:date_of_order,:final_delivery_date,:resume_id,:code,:sample_status,:full_resume_status)");

$query->bindParam(':client_name', $_POST['client_name']);
$query->bindParam(':order_no', $_POST['order_no']);
$query->bindParam(':date_of_order', $_POST['date_of_order']);
$query->bindParam(':final_delivery_date', $_POST['final_delivery_date']);
$query->bindParam(':resume_id', $_POST['resume_id']);
$query->bindParam(':code', $_POST['code']);
$query->bindParam(':sample_status', $_POST['sample_status']);
$query->bindParam(':full_resume_status', $_POST['full_resume_status']);




$query->execute();
header("location:orderTracking1.php");
}


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>