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
	<li><a href="#"><p class="main-heading22"><strong>Payment Info &nbsp;</strong><span>/&nbsp;New</span></p>
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



<!-- <div class="col-sm-8">
	
<div class="form-group"> 
 <input type="text" name="transaction_id" id="transaction_id" placeholder="Transaction ID" class="myform-control-s other">
 </div>


<div class="form-group">
 <input type="text" name="code" id="code" placeholder="Code" class="myform-control-d">
</div>


</div> -->

<div class="col-sm-12">	
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
<div class="col-sm-3"><label class="newlabels">University Name</label><br><label class="newlabels">Authorized Person</label><br><label class="newlabels">Referred Person</label></div>
<div class="col-sm-9">
 <input type="text" required="" name="uni_name" id="uni_name" placeholder="University Name" class="myform-control-d">

  <input type="text" required="" name="authorised_person" id="authorised_person" placeholder="Authorized Person" class="myform-control-d">

 <input type="text" required="" name="referred_person" id="referred_person" placeholder="Referred Name" class="myform-control-d">


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Designation</label><br><label class="newlabels">Email</label><br><label class="newlabels">Status</label></div>
<div class="col-sm-9">

 <input type="text" required="" name="designation" id="designation" placeholder="Designation" class="myform-control-d">

<input type="email" required="" name="email_id" id="email_id" placeholder="Email" class="myform-control-d">

<input type="text" required="" name="status" id="status" placeholder="Status" class="myform-control-d">



</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->

  

    </div>
  </div>

</div>

<!-- <div class="col-sm-6">
	<div class="form-group-e">
<div class="col-sm-2"><label>Job</label><br><label>Phone</label><br><label>Mobile</label><br><label>email</label><label>Fax</label><br><label>Language</label></div>
<div class="col-sm-10">
	      <select name="code" id="code" required="" class="myform-control-d">
      <option value="SELECT YOUR CV CODE">SELECT YOUR CV CODE</option>
      <?php
      include("db/connection.php");
      $cv = $con->prepare("select * from tbl_cv_code");
      $cv->setFetchMode(PDO::FETCH_ASSOC);
      $cv->execute();
      $cvCode = $cv->fetchAll();
      foreach($cvCode as $code):

      ?>
      <option value="<?php echo $code['cv_code']; ?>"><?php echo $code['cv_code']; ?></option>
    <?php endforeach; ?>
    </select>

	<input type="text" name="status" id="status" placeholder="Status" class="myform-control-d">


 	<input type="text" name="education" id="education" placeholder="Education/Insitute" class="myform-control-d">
		<input type="text" name="city" id="city" placeholder="City" class="myform-control-d">
	<input type="text" name="organization" id="organization" placeholder="Organization" class="myform-control-d">
</div>
	</div>
</div> -->
<!-- </div> -->
<!-- </div> -->


<br><br>

<button class="btn btn-success button-em">Create</button>







</div>
<!-- row close -->
</div>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>


