<?php include('partials/header.php'); ?>

<?php include('header/sales-nav.php'); ?>
<section class="main-inventory-search"><!-- main-inventory search -->
	<div class="container-fluid">
		<!-- container-start-here -->
<div class="row">
	<!-- start/row -->
<div class="col-sm-6">
	<!-- col/sm-6-start -->

	<h3 class="main-heading-inven"><strong>SALES</strong></h3>


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
</section><!-- main-inventory search -->

<section class="main-content-inven-add">
	<!-- /main-content-inven-add-start -->
<div class="container-fluid">
	<!-- container-start -->
<div class="row">
	<!-- row-start -->
<div class="col-sm-12">
	<!-- col-sm-12 -->
<h3 class="heading-add-record"><strong>Sales Recorad</strong></h3>


	<!-- form-group -->
<form name="addsalesform" id="addsalesform" class="form-group" action="add-record.php" >
	<div class="row mb-50"><!-- first row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Product Name</label>
   <select class="form-control">
  <option>Product Name</option>
  <option>2</option>
  <option>3</option>
  
</select>


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label  class="label-1" for="exampleInputEmail1">Quanity</label>
    <select class="form-control"name="Quanity" id="Quanity">
  <option>Quanity</option>
  <option>2</option>
  <option>3</option>
  
</select>

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Brand</label>
   <select class="form-control"name="Brand" id="Brand">
  <option>Brand</option>
  <option>2</option>
  <option>3</option>
  
</select> 

</div>	<!-- /3rd col of -form -->	

</div><!-- /form group of -form -->
	</div><!-- first row of -form/ -->

<div class="row mb-50"><!-- 2nd row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1"for="exampleInputEmail1">Color</label>
    <select class="form-control"name="Color" id=""name="Color">
  <option>Color</option>
  <option>2</option>
  <option>3</option>
  
</select>


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label class="label-1" for="exampleInputEmail1">Weight</label>
    <select class="form-control"name="Weight" id="Weight">
  <option>Weight</option>
  <option>2</option>
  <option>3</option>
  
</select>

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1"for="exampleInputEmail1">Price</label>
   <select class="form-control"name="Price" id="Price">
  <option>Price</option>
  <option>2</option>
  <option>3</option>
  
</select>

</div>	<!-- /3rd col of -form -->	

</div><!-- /form group of -form -->
	</div><!-- / 2nd row-form -->

<div class="row mb-50"><!-- first row of -form -->
	<div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Discount-Price</label>
  <select class="form-control"name="Discount-Price" id="Discount-Price">
  <option>Discount-Price</option>
  <option>2</option>
  <option>3</option>
  
</select>  


</div>		<!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
	<label class="label-1" for="exampleInputEmail1">Cost-Price</label>
   <select class="form-control"name="Cost-Price" id="Cost-Price">
  <option>Cost-Price</option>
  <option>2</option>
  <option>3</option>
  
</select>

</div>		<!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
	
	<label class="label-1" for="exampleInputEmail1">Status</label>
   <select class="form-control" name="Status" id="Status">
  <option>Status</option>
  <option>2</option>
  <option>3</option>
  
</select>

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