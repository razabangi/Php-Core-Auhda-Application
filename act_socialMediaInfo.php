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

$query = $con->prepare("INSERT INTO tbl_social_media (first_name,last_name,institute,designation,email) VALUES (:first_name,:last_name,:insitute,:designation,:email_id)");

$query->bindParam(':first_name', $_POST['first_name']);
$query->bindParam(':last_name', $_POST['last_name']);
$query->bindParam(':insitute', $_POST['insitute']);
$query->bindParam(':designation', $_POST['designation']);
$query->bindParam(':email_id', $_POST['email_id']);



$query->execute();
header("location:socialMediaInfo1.php");
}


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>