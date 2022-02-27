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

$query = $con->prepare("select * from tbl_pitched_universities where id = '$edit'");
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
	<li><a href="#"><p class="main-heading22"><strong>Pitched University Info &nbsp;</strong><span>/&nbsp;New</span></p>
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


<div class="col-sm-12">	
<div class="pull-right" data-original-title="" title="">
<a href="#">
<img border="1" name="image" src="assets/images/placeholder.png" style="width: 90px; height: 90px; border:1px solid #ccc">
   </a>     
            
        
    </div>




</div>

<!-- <div class="container mb-50"> -->
<form action="update_pitchUniversitiesInfo.php" method="POST">

<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">University Name</label><br><label class="newlabels">Authorized Person</label><br><label class="newlabels">Referred Person</label></div>
<div class="col-sm-9">

  
  <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

 <input type="text" name="uni_name" id="uni_name" value="<?php echo $fetch['university_name']; ?>" required="" placeholder="University Name" class="myform-control-d">

  <input type="text" value="<?php echo $fetch['authorized_person']; ?>" name="authorised_person" required="" id="authorised_person" placeholder="Authorized Person" class="myform-control-d">

 <input type="text" value="<?php echo $fetch['referred_person']; ?>" name="referred_person" required="" id="referred_person" placeholder="Referred Name" class="myform-control-d">


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Designation</label><br><label class="newlabels">Email</label><br><label class="newlabels">Status</label></div>
<div class="col-sm-9">

 <input type="text" name="designation" value="<?php echo $fetch['designation']; ?>" required="" id="designation" placeholder="Designation" class="myform-control-d">

<input type="email" name="email_id" value="<?php echo $fetch['email']; ?>" required=""  id="email_id" placeholder="Email" class="myform-control-d">

<input type="text" required="" value="<?php echo $fetch['status']; ?>" name="status" id="status" placeholder="Status" class="myform-control-d">



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


