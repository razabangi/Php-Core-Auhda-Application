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

$query = $con->prepare("INSERT INTO tbl_pitched_universities (university_name,authorized_person,referred_person,designation,email,status) VALUES (:uni_name,:authorised_person,:referred_person,:designation,:email_id,:status)");

$query->bindParam(':uni_name', $_POST['uni_name']);
$query->bindParam(':authorised_person', $_POST['authorised_person']);
$query->bindParam(':referred_person', $_POST['referred_person']);
$query->bindParam(':designation', $_POST['designation']);
$query->bindParam(':email_id', $_POST['email_id']);
$query->bindParam(':status', $_POST['status']);



$query->execute();
header("location:pitchedUniversitiesInfo1.php");
}


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>