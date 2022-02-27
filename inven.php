<?php include('partials/header.php'); ?>

<?php include('header/Inven-navbar.php'); ?>


<section class="main-inventory-search"><!-- main-inventory search -->
	<div class="container-fluid">
<div class="row">	<!-- start/row -->
<div class="col-sm-12">	<!-- col/sm-6-start -->

	<h3 class="main-heading22"><strong>Inventory &nbsp;</strong><span>/&nbsp;New</span></h3>

		<div class="col-sm-2">
	<button class="btn btn-success button-ex">Save</button>
	 <p class="btn btn-success button-ei">Discard</p>
</div>
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
<div class="container">
	<!-- container-start -->
<div class="row">
	<!-- row-start -->
<div class="col-sm-12">
<div id="Page_wrap">

      <div class="head-top">
      
      <ul class="nav navbar-nav navbar-right mynave">
        <li><a href="#"><span class="fa fa-trash"></span>Active</a></li>
        <li><a href="#"><span class="fa fa-pencil-square-o"></span>0.00 Invoiced</a></li>
        <li><a href="#"><span class="fa fa fa-usd"></span>0.00 Sales</a></li>
        <li><a href="#"><span class="fa fa-shopping-cart"></span>0.00 Purchase</a></li>
        <li><a href="#"><span class="fa fa-calculator"></span>0.00 hand</a></li>
        <li><a href="#"><span class="fa fa fa fa-arrows-v"></span>0.00 Tracibty</a></li>

       </ul>
   </div>



<div class="col-sm-8">
	<div class="check-area">
<input type="radio" name="gender" value="male" checked> 
<label for="individual">Can be Sould</label>
<input type="radio" name="gender" value="male" checked>
<label for="individual">Can be Purchase</label>
 
	</div>

<div class="form-group"> 
 <input type="text" name="ProductName" id="ProductName" placeholder="ProductName" class="myform-control-s">
 </div>
<div class="form-group">
 <input type="text" name="Product-sku" id="product-sku" placeholder="Product-sku" class="myform-control-d">
</div>


</div>

<div class="col-sm-4">	
<div class="pull-right" data-original-title="" title="">
<a href="#">
<img border="1" name="image" src="assets/images/placeholder.png" style="width: 90px; height: 90px; border:1px solid #ccc">
   </a>     
            
        
    </div>




</div>

<div class="container mb-50">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label>Quaninty</label><br><label>color</label><br><label>brand</label></div>
<div class="col-sm-9">
 <input type="text" name="quaintity" id="quaintity" placeholder="quaintity" class="myform-control-d">
 <select name="color" id="color" class="myform-control-d" placeholder="color">
	<option value="country">Color</option>
</select>
<select name="brand" id="brand" class="myform-control-d" placeholder="color">
	<option value="brand">brand</option>
</select>

</div>

		</div>
	</div>

<div class="col-sm-6">
	<div class="form-group-e">
<div class="col-sm-2"><label>Weight</label><br><label>CostPrice</label><br><label>Discount</label></div>
<div class="col-sm-10">
	<input type="text" name="weight" id="weight" placeholder="weight" class="myform-control-d">
	<input type="text" name="CostPrice" id="CostPrice" placeholder="CostPrice" class="myform-control-d">
	<input type="text" name="Discount" id="Discount" placeholder="Discount" class="myform-control-d">
	
</div>
	</div>
</div>
</div>
</div>




<button class="btn btn-success button-em">Create</button>







</div>
<!-- row close -->
</div>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>