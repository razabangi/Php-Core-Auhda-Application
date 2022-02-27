
<?php include("partial/header.php"); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Order Tracking Record</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Order Tracking Info</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
  <form name="add_client" id="add_client" method="POST" action="act_orderTracking.php" class="form-group">
   

  <div class="col-sm-6">
  <div class="form-group">
    <label for="client_name">Client Name:</label>
    <input type="text" required="" class="form-control" id="client_name" placeholder="Client Name" name="client_name">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="order_no">Order No:</label>
    <input type="text" required="" class="form-control" name="order_no" id="order_no" placeholder="Order No">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="date_of_order">Date Of Order:</label>
    <input type="Date" required="" class="form-control" id="date_of_order" name="date_of_order" placeholder="Date Of Order">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="final_delivery_date">Final Delivery Date:</label>
    <input type="Date" required="" class="form-control" id="final_delivery_date" name="final_delivery_date" placeholder="Final Delivery Date">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="resume_id">Resume Id:</label>
    <input type="text" required="" name="resume_id" class="form-control" id="resume_id" placeholder="Resume Id">
  </div>
  </div>

  

    <div class="col-sm-6">
  <div class="form-group">
    <label for="code">Sample Required:</label>
      <select name="code" id="code" required="" class="form-control">
      <!-- <option value="SELECT YOUR CV CODE">SELECT YOUR CV CODE</option>  -->
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="sample_status">Sample Status:</label>
    <input type="text" required="" class="form-control" id="sample_status" name="sample_status" placeholder="Sample Status">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="full_resume_status">Full Resume Status:</label>
    <input type="text" required="" class="form-control" id="full_resume_status" name="full_resume_status" placeholder="Full Resume Status">
  </div>
  </div>


  

  <div class="col-sm-8">
  <input type="submit"  class="btn btn-default" value="Submit" name="submit">
  </div>
</form>

                 <br><br><br>


                      <div class="x_content">
                    <div class="table-responsive">
                    <table  class="table  table-condensed table-bordered" id="myTable">
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
                             <td><a href="order_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="order_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
                          <?php endforeach; ?>
                        </tr>
                        
                      </tbody>

                      <a href="export_excel.php" class="btn btn-success">Export To Excel</a>
                      <a href="export_pdf.php?generate_pdf" class="btn btn-danger">Export To PDF</a>
                      <!-- <button id="pdf" class="btn btn-danger">Export to PDF</button> -->
                    </table>
                  </div>

                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /page content -->
      <?php include("partial/footer-java/dashboard_java.php"); ?>
      <?php include("partial/footer.php"); ?>
