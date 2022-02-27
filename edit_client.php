<?php

session_start();
if($_SESSION['user_name'] == "")
{
	header("location:admin_login.php");
}

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_client_info where id = '$edit'");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$fetch = $query->fetch();
}
?>

<?php include('partials/header.php'); ?>

<?php include('header/customer.nav.php'); ?>



	<!-- end/row -->
</div>
<!-- /end-container-here -->
	</div>
</section><!-- /main-inventory-search sec close -->



<section class="main-content-inven-add">
	<!-- /main-content-inven-add-start -->
<div class="container">
	<!-- container-start -->
<div class="row">
	<!-- row-start -->
<div class="col-sm-12">
<div id="Page_wrap">

      <div class="head-top">
      
      	<div class="row">	<!-- start/row -->

<!-- end/col-sm-6 -->
</div>
<ul class="nav navbar-nav navbar-left mynave">
<li><a href="#"><p class="main-heading22"><strong>Customers &nbsp;</strong><span>/&nbsp;New</span></p>
</a></li>
        <li><a href="#"><button class="btn btn-success my-new-btn12">Save</button></a></li>
        <li><a href="#"><button class="btn btn-danger  my-new-btn12">Discard</button></a></li>
    </ul>

      <ul class="nav navbar-nav navbar-right mynave">
        <li><a href="#"><span class="fa fa-trash"></span>Active</a></li>
        <li><a href="#"><span class="fa fa-pencil-square-o"></span>0.00 Invoiced</a></li>
        <li><a href="#"><span class="fa fa fa-usd"></span>0.00 Sales</a></li>
       </ul>
   </div>



<div class="col-sm-8">
	<form action="update_client.php" method="POST">
<div class="form-group"> 
  <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
 <input type="text" name="client_name" id="client_name" value="<?php echo $fetch['client_name']; ?>" placeholder="Client Name" class="myform-control-s other">
 </div>


<div class="form-group">
 <input type="text" name="contact_no" id="contact_no" value="<?php echo $fetch['contact_no']; ?>" placeholder="Contact No" class="myform-control-d">
</div>


</div>

<div class="col-sm-4">	
<div class="pull-right" data-original-title="" title="">
<a href="#">
<img border="1" name="image" src="upload/<?php echo $fetch['images']; ?>" style="width: 90px; height: 90px; border:1px solid #ccc">
   </a>     
            
        
    </div>




</div>

<div class="container mb-50">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Entry Date</label><br><label class="newlabels" >Email</label><br><label class="newlabels">Qualification</label><br><label class="newlabels">Position</label><br><label class="newlabels">Profession</label></div>
<div class="col-sm-9">
 <input type="date" name="entry_date" id="entry_date" value="<?php echo $fetch['entry_date']; ?>" placeholder="Entry Date" class="myform-control-d">

 <input type="text" name="email"  value="<?php echo $fetch['email']; ?>" id="email" placeholder="Email" class="myform-control-d">
<input type="text" name="qualification" value="<?php echo $fetch['qualification']; ?>" id="qualification" placeholder="Qualification" class="myform-control-d">


</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->
<div class="col-sm-9">
	<input type="text" name="position" id="position" value="<?php echo $fetch['position']; ?>" placeholder="Position" class="myform-control-d">

	<input type="text" name="profession" value="<?php echo $fetch['profession']; ?>"  placeholder="Profession" class="myform-control-d">
</div>
		</div>
	</div>

<div class="col-sm-6">
	<div class="form-group-e">
<div class="col-sm-2"><label class="newlabels">Code</label><br><label class="newlabels">Status</label><br><label class="newlabels">Education</label><br><label class="newlabels">City</label><label class="newlabels">Organization</label></div>
<div class="col-sm-10">
	  
      <input type="text" name="code" id="code" value="<?php echo $fetch['cv_design_code']; ?>" class="myform-control-d" placeholder="Cv Code">   

	<input type="text" name="status" id="status" value="<?php echo $fetch['cv_status']; ?>" placeholder="CV  Status" class="myform-control-d">


 	<input type="text" name="education" value="<?php echo $fetch['education_institute']; ?>" id="education" placeholder="Education/Insitute" class="myform-control-d">
		<input type="text" name="city" id="city" value="<?php echo $fetch['city']; ?>" placeholder="City" class="myform-control-d">
	<input type="text" name="organization" id="organization" value="<?php echo $fetch['organization']; ?>" placeholder="Organization" class="myform-control-d">
</div>
	</div>
</div>
</div>
</div>

<div class="container">
<input type="submit" value="Update" name="update" class="btn btn-success">
</div>
</form>


</div>
<!-- row close -->
</div>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>