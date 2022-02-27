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

$query = $con->prepare("INSERT INTO tbl_universityinfo (university_name,email,type,establish,speciality,address,url,contact) VALUES (:uni_name,:email,:type,:establish_year,:speciality,:address,:url,:contact_person)");

$query->bindParam(':uni_name', $_POST['uni_name']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':type', $_POST['type']);
$query->bindParam(':establish_year', $_POST['establish_year']);
$query->bindParam(':speciality', $_POST['speciality']);
$query->bindParam(':address', $_POST['address']);
$query->bindParam(':url', $_POST['url']);
$query->bindParam(':contact_person', $_POST['contact_person']);


$query->execute();
header("location:universityInfo1.php");
}


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>