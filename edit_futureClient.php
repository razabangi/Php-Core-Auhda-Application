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

$query = $con->prepare("select * from tbl_futureclient where id = '$edit'");
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
	<li><a href="#"><p class="main-heading22"><strong>Future Client Info &nbsp;</strong><span>/&nbsp;New</span></p>
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
	<form action="update_futureClientInfo.php" method="POST">
<div class="form-group"> 
  <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
 <input type="text" name="client_name" value="<?php echo $fetch['client_name']; ?>" id="client_name" placeholder="Client Name" class="myform-control-s other">
 </div>


<div class="form-group">
 <input type="email" name="email" id="email" value="<?php echo $fetch['email']; ?>" placeholder="Email Address" class="myform-control-d">
</div>


</div>

<div class="col-sm-4">	
<div class="pull-right" data-original-title="" title="">
<a href="#">
<img border="1" name="image" src="assets/images/placeholder.png" style="width: 90px; height: 90px; border:1px solid #ccc">
   </a>     
            
        
    </div>




</div>

<!-- <div class="container mb-50"> -->
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Phone</label><br><label class="newlabels">Entry Date</label><br><label class="newlabels">Meetup Date</label><br><label class="newlabels">Education</label><br><label class="newlabels">Fresh/Job</label><br><label class="newlabels">Intrest/Field</label></div>
<div class="col-sm-9">
 <input type="text" name="phone" value="<?php echo $fetch['phone']; ?>" required="" id="phone" placeholder="Phone" class="myform-control-d">

  <input type="date" name="entry_date" id="entry_date" value="<?php echo $fetch['entry_date']; ?>" required="" placeholder="Entry Date" class="myform-control-d">

 <input type="date" name="meet_up_date" value="<?php echo $fetch['meetUp_date']; ?>" required="" id="meet_up_date" placeholder="Meetup Date" class="myform-control-d">

 <input type="text" name="education" value="<?php echo $fetch['education']; ?>" required="" id="education" placeholder="Education" class="myform-control-d">

  <input type="text" name="job" id="job" value="<?php echo $fetch['job']; ?>" required="" placeholder="Job/Intrest" class="myform-control-d">

  <input type="text" name="intrest_field" value="<?php echo $fetch['intrest']; ?>" required="" id="intrest_field" placeholder="Job/Intrest" class="myform-control-d">

  


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Resume Code</label><br><label class="newlabels">Expected Amount</label><br><label class="newlabels">Country</label><br><label class="newlabels">Discount Code</label><br><label class="newlabels">Lead Status</label></div>
<div class="col-sm-9">

  <input type="text" name="resume_code" value="<?php echo $fetch['resume_code']; ?>" required="" id="resume_code" placeholder="Resume Code" class="myform-control-d">

<input type="text" name="expected_amount" value="<?php echo $fetch['expected_amount']; ?>" required="" id="expected_amount" placeholder="Expected Amount" class="myform-control-d">

<input type="text" name="country" id="country" value="<?php echo $fetch['country']; ?>" required="" placeholder="Country" class="myform-control-d">

  <input type="text" name="discount_code" value="<?php echo $fetch['discount_code']; ?>" required="" name="discount_code" placeholder="Discount Code"  class="myform-control-d">

   <input type="text" name="lead_status" value="<?php echo $fetch['lead_status']; ?>" required="" name="lead_status" placeholder="Lead Status"  class="myform-control-d">

</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->

  

    </div>
  </div>

</div>




<br><br>

<div class="container">
<input type="submit" name="update" value="Update" class="btn btn-success">
</div>

</form>


</div>
<!-- row close -->
</div>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>

