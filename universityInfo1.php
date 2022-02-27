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
<form action="act_universityInfo.php" method="POST">
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
<li><a href="#"><p class="main-heading22"><strong>Universities Information &nbsp;</strong><span>/&nbsp;New</span></p>
</a></li>
        <li><a href="#"><input type="submit" name="submit" class="btn btn-success my-new-btn12" value="Save"></a></li>
        <li><a href="#"><button class="btn btn-danger  my-new-btn12">Discard</button></a></li>
    </ul>


   <ul class="nav nav-tabs navbar-right mynave newnav">
    <li class="active"><a data-toggle="tab" href="#home">Create University Information</a></li>
    <li><a  data-toggle="tab" href="#menu13"><span class="fa fa-trash"></span>Show Universities Information</a></li>
    </ul>

       </div>
   
   </div>

   </div>


<div class="tab-content">
<div id="home" class="tab-pane active">
<div class="col-sm-8">
	


<div class="form-group"> 
 <input type="text" required="" name="uni_name" id="uni_name" placeholder="University Name" class="myform-control-s other">
 </div>


<div class="form-group">
 <input type="email" required="" name="email" id="email" placeholder="Email Address" class="myform-control-d">
</div>


</div>

<div class="col-sm-4">	
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
<div class="col-sm-3"><label class="newlabels">Type</label><br><label class="newlabels">Establish Year</label><br><label class="newlabels">Speciality</label></div>
<div class="col-sm-9">
 <input type="text" required="" name="type" id="type" placeholder="Type" class="myform-control-d">

  <input type="text" required="" name="establish_year" id="establish_year" placeholder="Establish Year" class="myform-control-d">

 <input type="text" required="" name="speciality" id="speciality" placeholder="Speciality" class="myform-control-d">


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-3"><label class="newlabels">Address</label><br><label class="newlabels">Url</label><br><label class="newlabels">Contact No</label></div>
<div class="col-sm-9">

<input type="text" required="" name="address" id="address" placeholder="Address" class="myform-control-d">

<input type="text" required="" name="url" id="url" placeholder="Url" class="myform-control-d">

  <input type="text" required="" name="contact_person" name="contact_person" placeholder="Contact No"  class="myform-control-d">

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
                          <th>ID</th>
                          <th>University Name</th>
                          <th>Email</th>
                          <th>Type</th>
                          <th>Establish Year</th>
                          <th>Speciality</th>
                          <th>Address</th>
                          <th>Url</th>
                          <th>Contact</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_universityinfo");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['university_name']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['type']; ?></td>
                          <td><?php echo $row['establish']; ?></td>
                          <td><?php echo $row['speciality']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                          <td><?php echo $row['url']; ?></td>
                          <td><?php echo $row['contact']; ?></td>
                             <td><a href="edit_university.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="university_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
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




</div>
<!-- row close -->
</div>
</form>
</div>
<!-- main-content-inven-add/end -->
</section>









<?php include('partials/footer.php'); ?>


