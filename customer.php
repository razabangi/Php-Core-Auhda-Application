<?php
session_start();
if($_SESSION['user_name'] == "")
{
	header("location:admin_login.php");
}
?>
<?php include('partials/header.php'); ?>

<?php include('header/customer.nav.php'); ?>





<section class="main-content-inven-add">
	<!-- /main-content-inven-add-start -->
<div class="container">
	<!-- container-start -->
<div class="row">
	<!-- row-start -->
<div class="col-sm-12">
<div id="Page_wrap">
<form action="act_client.php" method="POST" enctype="multipart/form-data">
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
<li><a href="#"><p class="main-heading22"><strong>Clients &nbsp;</strong><span>/&nbsp;New</span></p>
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
    <li class="active"><a data-toggle="tab" href="#home">Create Client</a></li>
    <li><a  data-toggle="tab" href="#menu13"><span class="fa fa-trash"></span>Show Clients</a></li>
    </ul>

       </div>
   </div>
   </div>


<div class="tab-content">
<div id="home" class="tab-pane active">
<div class="col-sm-6">
	<div class="col-sm-3"><label class="newlabels">Client Name</label></div>
	<div class="col-sm-9">
<div class="form-group"> 
 <input type="text" name="client_name" required="" id="client_name" placeholder="Client Name" class="myform-control-s other">
 </div>
</div>

<div class="col-sm-3"><label class="newlabels">Contact No</label></div>
<div class="col-sm-9">
<div class="form-group">
 <input type="text" name="contact_no" required="" id="contact_no" placeholder="Contact No" class="myform-control-d">
</div>
</div>

</div>
<!-- col-sm-4 -->
<div class="col-sm-6">	
<div class="pull-right" data-original-title="" title="" style="margin-bottom: 23px;">
	<div class="col-sm-8"><input type="file" name="user_image" accept="image/*"  required="" ></div>
<div class="col-sm-4">
<img border="1"  id="upload_image" style="width: 90px; height: 90px; border:1px solid #ccc; ">
    </div>
   </div>
</div><!-- col-sm-4 -->

<div class="container mb-50">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><!-- <label class="newlabels">Choose Image</label><br> --><label class="newlabels">Entry Date</label><br><label class="newlabels" >Email</label><br><label class="newlabels">Qualification</label><br><label class="newlabels">Position</label><br><label class="newlabels">Profession</label></div>
<div class="col-sm-9">

	<!--  <input type="file" name="user_image" accept="image/*"  required=""  placeholder="Choose Your Image" class="myform-control-d"> -->

 <input type="date" name="entry_date"  required="" id="entry_date" placeholder="Entry Date" class="myform-control-d">

 <input type="text" name="email" id="email" required="" placeholder="Email" class="myform-control-d">
<input type="text" name="qualification" required="" id="qualification" placeholder="Qualification" class="myform-control-d">


</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->
<div class="col-sm-9">
	<input type="text" name="position" required="" id="position" placeholder="Position" class="myform-control-d">
	<input type="text" name="profession" required="" name="profession" placeholder="Profession" id="profession" name="profession" placeholder="Profession" placeholder="profession" name="profession" placeholder="Profession" class="myform-control-d">
</div>
		</div>
	</div>

<div class="col-sm-6">
	<div class="form-group-e">
<div class="col-sm-2"><label class="newlabels">Code</label><br><label class="newlabels">Status</label><br><label class="newlabels">Education</label><br><label class="newlabels">City</label><label class="newlabels">Organization</label></div>
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

	<input type="text" name="status" required="" id="status" placeholder="Status" class="myform-control-d">


 	<input type="text" name="education" required="" id="education" placeholder="Education/Insitute" class="myform-control-d">
		<input type="text" name="city" required="" id="city" placeholder="City" class="myform-control-d">
	<input type="text" name="organization" required="" id="organization" placeholder="Organization" class="myform-control-d">
</div>
	</div>
</div>
</div>
</div>

</div>  <!-- end first tab -->

<div id="menu13" class="tab-pane">
  <div class="x_content" style="background: white;padding: 10px;border-radius: 5px;">
      <div class="table-responsive">
  <table  class="table  table-striped table-bordered dt-responsive nowrap" id="datatable-responsive" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Client Id</th>
                          <th>Client Name</th>
                          <th>Contact No</th>
                          <th>Entry Date</th>
                          <th>Email</th>
                          <th>Education</th>
                          <th>City</th>
                          <th>Organization</th>
                          <th>Qualification</th>
                          <th>Position</th>
                          <th>Profession</th>
                          <th>CV Design Code</th>
                          <th>CV Status</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_client_info");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr data-toggle="collapse" data-target="#accordion" class="clickable">
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['client_name']; ?></td>
                          <td><?php echo $row['contact_no']; ?></td>
                          <td><?php echo $row['entry_date']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['education_institute']; ?></td>
                          <td><?php echo $row['city']; ?></td>
                          <td><?php echo $row['organization']; ?></td>
                          <td><?php echo $row['qualification']; ?></td>
                          <td><?php echo $row['position']; ?></td>
                          <td><?php echo $row['profession']; ?></td>
                          <td><?php echo $row['cv_design_code']; ?></td>
                          <td><?php echo $row['cv_status']; ?></td>
                             <td><a href="edit_client.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="client_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
                          <?php endforeach; ?>
                        </tr>
                        
                      </tbody>

           
                    </table>
                   </div>
                  </div>

            <div class="container" style="margin-top:20px;">
                      <a href="export_excel.php" class="btn btn-success" >Export To Excel</a>
                      <a href="export_pdf.php?generate_pdf" class="btn btn-danger" style="margin-left: 5px;">Export To PDF</a>
                      <!-- <button id="pdf" class="btn btn-danger">Export to PDF</button> -->
                  </div>
				  </div>
                  </div>




</div>
</div>
<!-- row close -->
</div>

</form>

</div>
<!-- main-content-inven-add/end -->
</section>







<script src="assets/js/datatable.min.js"></script>
<?php include('partials/footer.php'); ?>




























     
