<?php
session_start();
if($_SESSION['user_name'] == "")
{
  header("location:admin_login.php");
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
    <form action="act_orderTracking.php" method="POST">

      <div class="head-top">
        <div class="navbar navbar-inverse" style="border-radius:0px; background: #e2e2e0;!important; border:none;" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" style="background: #000; color:#fff!important;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1211" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><i class="fa fa-indent"></i>&nbsp;Acounting</a> -->
    </div>  
    
<div id="bs-example-navbar-collapse-1211" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-left mynave">
<li><a href="#"><p class="main-heading22"><strong>Order Tracking &nbsp;</strong><span>/&nbsp;New</span></p>
</a></li>
        <li><a href="#"><input type="submit" name="submit" class="btn btn-success my-new-btn12" value="Save"></a></li>
        <li><a href="#"><button class="btn btn-danger  my-new-btn12">Discard</button></a></li>
    </ul>

     <!--  <ul class="nav navbar-nav navbar-right mynave">
        <li><a href="#"><span class="fa fa-trash"></span>Active</a></li>
        <li><a href="#"><span class="fa fa-pencil-square-o"></span>0.00 Invoiced</a></li>
        <li><a href="#"><span class="fa fa fa-usd"></span>0.00 Sales</a></li>
       </ul> -->

   <ul class="nav nav-tabs navbar-right mynave newnav">
    <li class="active"><a data-toggle="tab" href="#home">Create Order</a></li>
    <li><a  data-toggle="tab" href="#menu13"><span class="fa fa-trash"></span>Show Orders</a></li>
    </ul>

       </div>
   </div>
</div>


<div class="tab-content">
<div id="home" class="tab-pane active">

<div class="col-sm-8">

<div class="form-group"> 
 <input type="text" name="client_name" required="" id="client_name" placeholder="Client Name" class="myform-control-s other">
 </div>


<div class="form-group">
 <input type="text" name="order_no" required="" id="order_no" placeholder="Order No" class="myform-control-d">
</div>


</div> 






<!-- <div class="col-sm-4">	
<div class="pull-right" data-original-title="" title="">
<a href="#">
<img border="1" name="image" src="assets/images/placeholder.png" style="width: 90px; height: 90px; border:1px solid #ccc">
   </a>     
            
        
    </div>




</div> -->

<!-- <div class="container mb-50"> -->
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Entry Date</label><br><label class="newlabels">Final Date</label><br><label class="newlabels">Resume Id</label></div>
<div class="col-sm-9">
 <input type="date" name="date_of_order" required="" id="date_of_order" placeholder="Date of Entry" class="myform-control-d">

  <input type="date" name="final_delivery_date" required="" id="final_delivery_date" placeholder="Final Delivery Date" class="myform-control-d">

 <input type="text" name="resume_id" required="" id="resume_id" placeholder="Resume Id" class="myform-control-d">


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Required</label><br><label class="newlabels">Sample Status</label><br><label class="newlabels">Resume Status</label></div>
<div class="col-sm-9">

 <select name="code" id="code" required="" class="myform-control-d">
      <!-- <option value="SELECT YOUR CV CODE">SELECT YOUR CV CODE</option>  -->
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>

<input type="text" name="sample_status" required="" id="sample_status" placeholder="Sample Status" class="myform-control-d">

  <input type="text" required="" name="full_resume_status" name="full_resume_status" placeholder="Resume Status"  class="myform-control-d">

</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->

    </div>
  </div>

</div>
</div>


<div id="menu13" class="tab-pane">
  <div class="x_content" style="background: white;padding: 10px;border-radius: 5px;">
      <div class="table-responsive">
  <table  class="table  table-striped table-bordered dt-responsive nowrap" id="datatable-responsive" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Client Name</th>
                          <th>Order No</th>
                          <th>Date of Order</th>
                          <th>Final Delivery Date</th>
                          <th>Resume Id</th>
                          <th>Sample Required</th>
                          <th>Sample Status</th>
                          <th>Full Resume Made</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_order");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['client_name']; ?></td>
                          <td><?php echo $row['order_no']; ?></td>
                          <td><?php echo $row['date_of_order']; ?></td>
                          <td><?php echo $row['finally_delivery_date']; ?></td>
                          <td><?php echo $row['resume_id']; ?></td>
                          <td><?php echo $row['sample_required']; ?></td>
                          <td><?php echo $row['sample_status']; ?></td>
                          <td><?php echo $row['full_resume_made']; ?></td>
                             <td><a href="edit_order.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="order_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
                          <?php endforeach; ?>
                        </tr>
                        
                      </tbody>

                    
                    </table>
                  </div>

                  </div>

                  <div class="container" style="margin-top:20px;">
                      <a href="export_excel.php" class="btn btn-success" >Export To Excel</a>
                      <a href="export_pdf.php?generate_pdf" class="btn btn-danger" style="margin-left: 5px;">Export To PDF</a>

</div>

</div>

<!-- row close -->
</div>
</form>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>




























     
