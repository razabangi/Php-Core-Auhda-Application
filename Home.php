<?php
session_start();
if($_SESSION['user_name'] == "")
{
	header("location:admin_login.php");
}
?>

<?php include('partials/header.php'); ?>


<div class="page-wrape">
	<div id="header-top">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<div class="col-sm-9">
			<div class="top-icon">
				<ul>
				<li><i class="fa fa-at"></i></li>
				<li><i class="fa fa-commenting-o"></i></li>
				<li><i class="fa fa-hand-o-right"></i></li>
				<li><a href="logout.php" class="btn btn-info">Log out </a> <i class="fa fa-cog"></i></li>
				</ul>
			</div>
</div>
	<div class="col-sm-3">
		
			<div class="dropdown">
  <button class="dropdown-toggle dropdown-toggle-e" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   <?php echo $_SESSION['name']; ?> 
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
</div>
			</div>
		</div>
	</div>
	</div>

<section id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
				<div class="trail-bases">
					<h4>Your Free trial expire in 15 days<span>&nbsp; <i class="fa fa-arrow-right"></i> Subscriber to Keep it running</span></h4>

			   </div>
			</div>
		</div>
	</div>
	


<div class="container">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
		<div class="icon-area">
			<div class="col-sm-2"><!-- icon-1 -col-sm-2 -->
			<a href="customer.php">
				<div class="icon-box icon-box-1">
				<span><i class="fa fa-commenting-o"></i></span>
				</div>

</a>
<div class="text-center"><strong>Client</strong></div>
			</div><!-- /icon-1 -col-sm-2 -->
			<div class="col-sm-2"><!-- icon-2 -col-sm-2 -->
			<a href="orderTracking1.php">
				<div class="icon-box  icon-box-2">
				<span><i class="fa fa-line-chart"></i></span>
				</div>
</a>
<div class="text-center"><strong>Order Tracking</strong></div>
			</div><!-- /icon-2 -col-sm-2 -->
				<div class="col-sm-2"><!-- icon-3 -col-sm-2 -->
			<a href="paymentInfo1.php">
				<div class="icon-box icon-box-3">
				<span><i class="fa fa-list-alt"></i></span>
				</div>
</a>
<div class="text-center"><strong>Payment Info</strong></div>
			</div><!-- /icon-3 -col-sm-2 -->

<div class="col-sm-2"><!-- icon-4 -col-sm-2 -->
			<a href="futureClientInfo1.php">
				<div class="icon-box icon-box-4">
				<span><i class="fa fa-codepen"></i></span>
				</div>
</a>
<div class="text-center"><strong>Future Client Info</strong></div>
			</div><!-- /icon-4 -col-sm-2 -->

<div class="col-sm-2"><!-- icon-5 -col-sm-2 -->
			<a href="companiesInfo1.php">
				<div class="icon-box icon-box-5">
				<span><i class="fa fa-file-text"></i></span>
				</div>
</a>
<div class="text-center"><strong>Companies Info</strong></div>
			</div><!-- /icon-5 -col-sm-2 -->

<div class="col-sm-2"><!-- icon-4 -col-sm-2 -->
			<a href="universityInfo1.php">
				<div class="icon-box icon-box-6">
				<span><i class="fa fa-cubes"></i></span>
				</div>
</a>
<div class="text-center"><strong>Universities Info</strong></div>
			</div><!-- /icon-5 -col-sm-2 -->


			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
		<div class="icon-area">
			<!-- /icon-1 -col-sm-2 -->
			<div class="col-sm-2"><!-- icon-2 -col-sm-2 -->
			<a href="PitchedUniversitiesInfo1.php">
				<div class="icon-box  icon-box-2">
				<span><i class="fa fa-line-chart"></i></span>
				</div>
</a>
<div class="text-center"><strong>Pitched Universities Info</strong></div>
			</div><!-- /icon-2 -col-sm-2 -->
				<div class="col-sm-2"><!-- icon-3 -col-sm-2 -->
			<a href="socialMediaInfo1.php">
				<div class="icon-box icon-box-3">
				<span><i class="fa fa-list-alt"></i></span>
				</div>
</a>
<div class="text-center"><strong>Social Media Info</strong></div>
			</div><!-- /icon-3 -col-sm-2 -->



			</div>
		</div>
	</div>
</div>
</section>


</div>















<?php include('partials/footer.php'); ?>