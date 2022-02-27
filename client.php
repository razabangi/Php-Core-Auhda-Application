<?php include('partials/header.php'); ?>

<?php include('header/Inven-navbar.php'); ?>
        <!-- page content -->

<?php include('partials/footer.php'); ?><section class="main-inventory-search"><!-- main-inventory search -->
  <div class="container-fluid">
    <!-- container-start-here -->
<div class="row"> <!-- start/row -->
<div class="col-sm-6">  <!-- col/sm-6-start -->

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
<h3 class="heading-add-record"><strong>Add Record</strong></h3>


  <!-- form-group -->
<form name="addform" id="addform" class="form-group" action="add-record.php" >
  <div class="row mb-50"><!-- first row of -form -->
  <div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
  
 <label for="Client_Name">Client Name:</label>
    <input type="text" required="" class="form-control" id="Client_Name" placeholder="Client Name" name="client_name">


</div>    <!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
   <label for="contact_no">Contact No:</label>
    <input type="text" required="" class="form-control" name="contact_no" id="contact_no" placeholder="Contact Number">

</div>    <!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
  
   <label for="entry_date">Entry Date:</label>
    <input type="Date" required="" class="form-control" id="entry_date" name="entry_date" placeholder="Entry Date">

</div>  <!-- /3rd col of -form -->  

</div><!-- /form group of -form -->
  </div><!-- first row of -form/ -->

<div class="row mb-50"><!-- 2nd row of -form -->
  <div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
  
  <label for="email">Email:</label>
    <input type="email" required="" name="email" class="form-control" id="email" placeholder="Email Address">


</div>    <!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
   <label for="education">Education Institute:</label>
    <input type="text" required="" class="form-control" id="education" name="education"  placeholder="Education">

</div>    <!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
  
  <label for="city">City:</label>
    <input type="text" required="" class="form-control" id="city" name="city" placeholder="City">

</div>  <!-- /3rd col of -form -->  

</div><!-- /form group of -form -->
  </div><!-- / 2nd row-form -->

<div class="row mb-50"><!-- first row of -form -->
  <div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
  
  <label for="organization">Organization:</label>
    <input type="text" required="" class="form-control" id="organization" name="organization" placeholder="Organization">


</div>    <!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
    <label for="qualification">Last Degree/Qualification:</label>
    <input type="text" required="" class="form-control" id="qualification" name="qualification" placeholder="Qualification">

</div>    <!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
  
    <label for="position">Position:</label>
    <input type="text" required="" class="form-control" id="position" name="position" placeholder="Position">

</div>  <!-- /3rd col of -form -->  

</div><!-- /form group of -form -->
  </div><!-- /3rd row-form -->


  </div><!-- /form group of -form -->
  </div><!-- / 2nd row-form -->

<div class="row mb-50"><!-- first row of -form -->
  <div class="form-group"><!-- form group of -form -->
<div class="col-sm-4"><!-- first col of -form -->
  
  <label for="profession">Profession:</label>
    <input type="text" required="" class="form-control" id="profession" name="profession" placeholder="Profession">


</div>    <!-- /first col of -form -->

<div class="col-sm-4"><!-- 2nd col of -form -->
    <label for="code">CV Design Code:</label>
      <select name="code" id="code" required="" class="form-control">
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

</div>    <!-- /2nd col of -form -->

<div class="col-sm-4"><!-- 3rd col of -form -->
  
     <label for="status">CV Status:</label>
    <input type="text" required="" class="form-control" id="status" name="status" placeholder="CV Status">

</div>  <!-- /3rd col of -form -->  

</div><!-- /form group of -form -->
  </div>

<div class="row">
<div class="col-sm-offset-5 col-sm-2 col-sm-offset-5">
<div class="myaddbutton">
  <button type="submit" class="btn btn-default bk-color btn-block">Submit</button>
</div>
</div>
</div>



</form>
<br><br>
  <div class="x_content" style="background: white;padding: 10px;border-radius: 5px;">
      <div class="table-responsive" id="myTable"  style="display:block;">
              <table  class="table  table-condensed table-bordered">
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
                        <tr>
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
                             <td><a href="client_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="client_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
                          <?php endforeach; ?>
                        </tr>
                        
                      </tbody>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group" >
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search By Client Name">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
                      <a href="export_excel.php" class="btn btn-success">Export To Excel</a>
                      <a href="export_pdf.php?generate_pdf" class="btn btn-danger">Export To PDF</a>
                      <!-- <button id="pdf" class="btn btn-danger">Export to PDF</button> -->
                    </table>
                    <div id="result"></div>
                  </div>

                  </div>
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

















     
