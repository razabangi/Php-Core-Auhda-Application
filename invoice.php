<?php include('partials/header.php'); ?>
<?php include('header/invoise-nav.php'); ?>


<section class="main-inventory-search"><!-- main-inventory search -->
	<div class="container-fluid">
		<!-- container-start-here -->
<div class="row">
	<!-- start/row -->
<div class="col-sm-6">
	<!-- col/sm-6-start -->

	<h3 class="main-heading-inven"><strong>INVOISE</strong></h3>


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






<!-- invoise main area section -->
<section class="invoise-main-area">
	<div class="container-fluid">
<!-- container-fluid -->
<div class="row">
<!-- main row start here -->
<div class="col-sm-12">
<!-- Start Here col-sm-12 -->
<h3 class="main-heading-inven">NEW</h3>	
<div class="col-sm-6">
	<!-- left-col-sm-6 -->
	<div class="main-date-sec">
<div class="col-sm-2"><strong>Customer</strong></div>
<div class="col-sm-9">
<div class="customer-sec">
	<li>
<select name="customer" id="customer" class="myform-control-e">
<option value="none">Customer</option>
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
</select>
</li>
</div>
</div>
</div>

<div class="some-information">
<ul>
	<li>orderlines <span>other Information</span></li>
	
	</ul>
</div>

<!-- /end-left-col-sm-6 -->
</div>
<div class="col-sm-6">
	<!-- left-col-sm-6 -->
	<div class="main-date-sec">
<div class="col-sm-3"><strong>Date</strong></div>
<div class="col-sm-9">
<div class="customer-sec">
	<li>
<select name="customer" id="customer" class="myform-control-e">
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
</select>
</li>
</div>
</div>
</div>


<div class="main-date-sec">
<div class="col-sm-3"><strong>Expiration Date</strong></div>
<div class="col-sm-9">
<div class="customer-sec">
	<li>
<select name="customer" id="customer" class="myform-control-e">
<option value="none">Expiration Date</option>
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
</select>
</li>
</div>
</div>
</div>


<div class="main-date-sec">
<div class="col-sm-3"><strong>Payment Term</strong></div>
<div class="col-sm-9">
<div class="customer-sec">
	<li>
<select name="customer" id="customer" class="myform-control-e">
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
<option value="none">12/5/2016</option>
</select>
</li>
</div>
</div>
</div>


<!-- /end-left-col-sm-6 -->
</div>
<!-- /END Here col-sm-12 -->
</div>
<!-- /End main row -->
</div>
<!-- /container-fluid -->
</div>
</section>
<!-- /invoise main area section -->


<!-- tabel-area-here-section -->
<section class="table-area">
	<div class="container">
		<!-- container-fuiled-start -->
<div class="row">
	<!-- main row -->
<div class="col-sm-12">
	<!--col-sm-12  -->
<table>


<table class="table table-condensed mb-50">
  <tr>
<td class="mycolor"><strong>Product</strong></td>
<td class="mycolor"><strong>Description</strong></td>
<td class="mycolor"><strong>Order Qty</strong></td>
<td class="mycolor"><strong>Deliverd</strong></td>
<td class="mycolor"><strong>Invoiced</strong></td>
<td class="mycolor"><strong>Unit Price</strong></td>
<td class="mycolor"><strong>Taxses</strong></td>
<td class="mycolor"><strong>Sub Totals</strong></td>
  </tr>


<tr class="active">
<td class="active my-color2">Add an item</td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
</tr>
<tr class="active">
<td class="active my-color2">next</td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
<td class="active"></td>
</tr>

</table>
<!-- col-sm-12 -->
<div class="row">
<div class="col-sm-7">
	<textarea name="text" id="text" cols="50" rows="4" class="mytext-area">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, sit, quos hic commodi inventore impedit!</textarea>
</div>
<div class="col-sm-5">
	<div class="price-total pull-right ">
		<li><strong>Untaxed Amount: </strong>&nbsp;00</li>
		<li><strong>Taxes: </strong>&nbsp;00</li>
		<li><strong>Total: </strong>&nbsp;Update &nbsp;0.00</li>
	</div>
</div>
</div>
</div>
<!-- /end row -->
</div>
	<!-- /end -->
	</div>
</section>
<!-- /tabel-area-here-section-->













<?php include('partials/footer.php'); ?>