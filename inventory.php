<?php include('partials/header.php'); ?>

<?php include('header/Inven-navbar.php'); ?>


<section class="main-inventory-search"><!-- main-inventory search -->
	<div class="container-fluid">
		<!-- container-start-here -->
<div class="row">	<!-- start/row -->
<div class="col-sm-6">	<!-- col/sm-6-start -->

	<h3 class="main-heading-inven"><strong>INVENTORY</strong></h3>


<!-- end/col-sm-6 -->
</div>
<div class="col-sm-6">
	<!-- col/sm-6-start -->
	
	<div class="search-area"> 
	
 <input type="search" name="search" id="search" placeholder="Search" class="myform-control fa fa-search">
<button type="submit" value="Search" name="Search" id="Serach" class="btn btn-default mt10 fa fa-search"></button>
            </div>        
            
<!-- end/col-sm-6 -->
</div>
	<!-- end/row -->
</div>
<!-- /end-container-here -->
	</div>
</section><!-- /main-inventory-search sec close -->



<section class="main-content-inven-add">
	<!-- /main-content-inven-add-start -->
<div class="container-fluid">
	<!-- container-start -->
<div class="row">
	<!-- row-start -->
<div class="col-sm-12">
	<!-- col-sm-12 -->
<h3 class="heading-add-record"><strong>Add Recorad</strong></h3>


	<!-- form-group -->
<form name="addform" id="addform" class="form-group" action="add-record.php" >
	<div class="row mb-50"><!-- first row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="ProductName" name="ProductName" placeholder="ProductName">


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label  class="label-1" for="exampleInputEmail1">Quanity</label>
    <input type="text" class="form-control" id="Quanity" name="Quanity" placeholder="Quanity">

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Brand</label>
    <input type="text" class="form-control" id="Brand" name="Brand" placeholder="Brand">

</div>	<!-- /3rd col of -form -->	

</div><!-- /form group of -form -->
	</div><!-- first row of -form/ -->

<div class="row mb-50"><!-- 2nd row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1"for="exampleInputEmail1">Color</label>
    <input type="text" class="form-control" id="Color" name="Color" placeholder="Color">


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label class="label-1" for="exampleInputEmail1">Weight</label>
    <input type="text" class="form-control" id="Weight" name="Weight" placeholder="Weight">

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1"for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="Price" name="Price" placeholder="Price">

</div>	<!-- /3rd col of -form -->	

</div><!-- /form group of -form -->
	</div><!-- / 2nd row-form -->

<div class="row mb-50"><!-- first row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Discount-Price</label>
    <input type="text" class="form-control" id="Discount-Price" name="Discount-Price" placeholder="Discount-Price">


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label class="label-1" for="exampleInputEmail1">Cost-Price</label>
    <input type="text" class="form-control" id="Cost-Price" name="Cost-Price" placeholder="CostPrice">

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Status</label>
    <input type="text" class="form-control" id="Status" name="Status" placeholder="Status">

</div>	<!-- /3rd col of -form -->	

</div><!-- /form group of -form -->
	</div><!-- /3rd row-form -->

<div class="row">
<div class="col-sm-offset-5 col-sm-2 col-sm-offset-5">
<div class="myaddbutton">
	<button type="submit" class="btn btn-default bk-color">Submit</button>
</div>
</div>
</div>



</form>
<!-- / -->
	<!-- / -->
</div>
<!-- / -->
</div>
	<!-- / -->
</div>





<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>