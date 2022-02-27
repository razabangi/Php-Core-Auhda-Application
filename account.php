
<?php include('partials/header.php'); ?>

<?php include('header/acount-navbar.php'); ?>


<section class="main-accounts"><!-- main-inventory search -->
	<div class="container-fluid">
		<!-- container-start-here -->
<div class="row">	<!-- start/row -->
<div class="col-sm-6">	<!-- col/sm-6-start -->

	<h3 class="profit-heading">Profit And Lost</h3>
	<button class="btn btn-success button-ed">Pirnt Perview</button>
<button class="btn btn-success button-ed">Export (Exlsx)</button>

<!-- end/col-sm-6 -->
</div>
<div class="col-sm-6">
	<!-- col/sm-6-start -->
	
	<div class="drop-area"> 
 <ul class="nav nav-pills extra-nave">
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="fa fa-calendar">&nbsp;</span>Period:this month <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     <li><a href="#">action	</a></li>
     <li><a href="#">Random	</a></li>
    </ul>
  </li>
  
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="fa fa-bar-chart">&nbsp;</span>Comparison:None <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     <li><a href="#">action	</a></li>
     <li><a href="#">Random	</a></li>
    </ul>
  </li>

<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <span class="fa fa-bar-chart">&nbsp;</span>Option:Accrual Basis, Posted Entries  <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     <li><a href="#">action	</a></li>
     <li><a href="#">Random	</a></li>
    </ul>
  </li>


</ul>


  </div>        
            
<!-- end/col-sm-6 -->
</div>
	<!-- end/row -->
</div>
<!-- /end-container-here -->
	</div>
</section><!-- /main-inventory-search sec close -->



<section class="main-content-inven-add  clearfix">
	<!-- /main-content-inven-add-start -->
<div class="container main-profit-content">

<div class="row"><!-- start row -->
<div class="col-sm-12"><!-- Start Coloum -->


<h3 class="heading-p">Profit and loss</h3>
<p class="prag-l">oddity</p>
<textarea name="text" id="text" cols="50" rows="1" class="profittext-area"></textarea>
<button class="btn btn-success button-ed">Save</button>
<!-- col-sm-12 -->
</div>
<!-- end row -->
	</div>
<!-- income and expense section -->
<section class="income-expense">
	<div class="row">
<div class="income-date">
<p class="pull-right date-e"><strong>November 2016</strong></p>
</div>

	<p class="income"><strong>Income</strong></p>
	</div>

<div class="row">
	<ul class="list-profit list-unstyled">
		<li role="presentation" class="dropdown"><span class="pull-right">$ 11,346.00</span>
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="caret"></span>&nbsp;GrossProfit 
    </a>
    <ul class="dropdown-menu">
     <li><a href="#">action	</a></li>
     <li><a href="#">Random	</a></li>
    </ul>
  </li>
		<li>operating income <span class="pull-right"  >$ 0.00</span></li>
		<li>Cost of Revenue <span class="pull-right" >$ 0.00</span></li>
		<li>Total Gross Profit <span class="pull-right" >$ 0.00</span></li>
			<li>other income <span class="pull-right" >$ 0.00</span></li>
			<li>Total income <span class="pull-right">$ 0.00</span></li>	
	</ul>

</div>

<div class="row">
	<p class="income"><strong>Expense</strong></p>
<ul class="list-profit-m list-unstyled">
		<li role="presentation" class="dropdown"><span class="pull-right">$ 11,346.00</span>
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="caret"></span>&nbsp;Expense 
    </a>
    <ul class="dropdown-menu">
     <li><a href="#">action	</a></li>
     <li><a href="#">Random	</a></li>
    </ul>
  </li>
		<li>operating income <span class="pull-right"  >$ 0.00</span></li>
		<li>Cost of Revenue <span class="pull-right" >$ 0.00</span></li>	
	</ul>

</div>

<!-- income and expense section -->
</section>
<div class="row">
<div class="col-sm-12">
	<p class="finshed-lined"><strong>NET PROFIT</strong><span style="color:#875a7b;" class="pull-right"><strong>$ -282,654.00</strong></span> </p>
	</div>
</div>


<!-- main-content-inven-add/end -->
</div>
</section>









<?php include('partials/footer.php'); ?>