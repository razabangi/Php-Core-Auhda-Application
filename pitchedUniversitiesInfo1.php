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
<form action="act_pitchUniversitiesInfo.php" method="POST">
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
<li><a href="#"><p class="main-heading22"><strong>Pitch Universities Info &nbsp;</strong><span>/&nbsp;New</span></p>
</a></li>
        <li><a href="#"><input type="submit" name="submit" class="btn btn-success my-new-btn12" value="Save"></a></li>
        <li><a href="#"><button class="btn btn-danger  my-new-btn12">Discard</button></a></li>
    </ul>


   <ul class="nav nav-tabs navbar-right mynave newnav">
    <li class="active"><a data-toggle="tab" href="#home">Create Pitch Universities Info</a></li>
    <li><a  data-toggle="tab" href="#menu13"><span class="fa fa-trash"></span>Show Pitch Universities Info</a></li>
    </ul>

       </div>
   
   </div>

   </div>


<div class="tab-content">
<div id="home" class="tab-pane active">
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
<div class="col-sm-4"><label class="newlabels">University Name</label><br><label class="newlabels">Authorized Person</label><br><label class="newlabels">Referred Person</label></div>
<div class="col-sm-8">
 <input type="text" name="uni_name" id="uni_name" required="" placeholder="University Name" class="myform-control-d">

  <input type="text" name="authorised_person" required="" id="authorised_person" placeholder="Authorized Person" class="myform-control-d">

 <input type="text" name="referred_person" required="" id="referred_person" placeholder="Referred Name" class="myform-control-d">


		</div>
	</div>
</div>


  <div class="col-sm-6">
<div class="form-group">
<div class="col-sm-4"><label class="newlabels">Designation</label><br><label class="newlabels">Email</label><br><label class="newlabels">Status</label></div>
<div class="col-sm-8">

 <input type="text" name="designation" required="" id="designation" placeholder="Designation" class="myform-control-d">

<input type="email" name="email_id" required=""  id="email_id" placeholder="Email" class="myform-control-d">

<input type="text" required="" name="status" id="status" placeholder="Status" class="myform-control-d">



</div>
<!-- <div class="col-sm-3"><label>Postion</label><br><label>Profession</label></div> -->

  

    </div>
  </div>

</div>
</div>



<div id="menu13" class="tab-pane">
  <div class="x_content" style="background: white;padding: 10px;border-radius: 5px;">
      <div class="table-responsive">
  <table  class="table  table-striped table-bordered dt-responsive nowrap" id="datatable-responsive" cellspacing="0" style="width:100%;">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>University Name</th>
                          <th>Authorized Person</th>
                          <th>Referred Person</th>
                          <th>Designation</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_pitched_universities");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['university_name']; ?></td>
                          <td><?php echo $row['authorized_person']; ?></td>
                          <td><?php echo $row['referred_person']; ?></td>
                          <td><?php echo $row['designation']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['status']; ?></td>
                             <td><a href="edit_pitchedUniversity.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="pitchedUniversity_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
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


