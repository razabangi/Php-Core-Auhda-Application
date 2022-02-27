<?php 
// Connection
include("db/connection.php");


//Get Form Fields
if(isset($_POST['submit']))
{
$imgFile = $_FILES['user_image']['name'];
$tmp_dir = $_FILES['user_image']['tmp_name'];
$imgSize = $_FILES['user_image']['size'];

$upload_dir = 'upload/'; // upload directory
	
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

// valid image extensions
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

// rename uploading image
$userpic = rand(1000,1000000).".".$imgExt;
	
// allow valid image file formats
if(in_array($imgExt, $valid_extensions)){			
	// Check file size '5MB'
	if($imgSize < 5000000)				{
		move_uploaded_file($tmp_dir,$upload_dir.$userpic);
	}
	else{
		$errMSG = "Sorry, your file is too large.";
	}
}

$query = $con->prepare("INSERT INTO tbl_client_info (client_name,contact_no,images,entry_date,email,education_institute,city,organization,qualification,position,profession,cv_design_code,cv_status) VALUES (:client_name,:contact_no,:upic,:entry_date,:email,:education,:city,:organization,:qualification,:position,:profession,:code,:status)");

$query->bindParam(':client_name', $_POST['client_name']);
$query->bindParam(':contact_no', $_POST['contact_no']);
$query->bindParam(':upic', $userpic);
$query->bindParam(':entry_date', $_POST['entry_date']);
$query->bindParam(':email', $_POST['email']);
$query->bindParam(':education', $_POST['education']);
$query->bindParam(':city', $_POST['city']);
$query->bindParam(':organization', $_POST['organization']);
$query->bindParam(':qualification', $_POST['qualification']);
$query->bindParam(':position', $_POST['position']);
$query->bindParam(':profession', $_POST['profession']);
$query->bindParam(':code', $_POST['code']);
$query->bindParam(':status', $_POST['status']);




$query->execute();
header("location:customer.php");
}


//RECORD INSERT IN TO TABLE
// mysql_query("INSERT INTO clientinfo(Client_Name, Client_Desciption, Entry_Date, Mobile_no,email_id)
// VALUES('$client_name', '$client_description', '$entery_date', '$mobile_no','$email')");


// header("location:client.php");






?>