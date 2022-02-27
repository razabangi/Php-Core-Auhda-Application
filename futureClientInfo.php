
<?php include("partial/header.php"); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Future Client Record</h3>
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
                    <h2>Future Client Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="act_futureClientInfo.php" class="form-group">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="client_name">Client Name:</label>
    <input type="text" required="" class="form-control" id="client_name" placeholder="Client Name" name="client_name">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email Id:</label>
    <input type="email" required="" class="form-control" id="email" placeholder="Email Id" name="email">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" required="" class="form-control" name="phone" id="phone" placeholder="Contact Number">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="entry_date">Entry Date:</label>
    <input type="Date" required="" class="form-control" id="entry_date" name="entry_date" placeholder="Entry Date">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="meet_up_date">Meet Up Date:</label>
    <input type="Date" required="" class="form-control" id="meet_up_date" name="meet_up_date" placeholder="Meet Up Date">
  </div>
  </div>

  

  <div class="col-sm-6">
  <div class="form-group">
    <label for="education">Education:</label>
    <input type="text" required="" name="education" class="form-control" id="education" placeholder="Education">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="job">Fresh/Job:</label>
    <input type="text" required="" name="job" class="form-control" id="job" placeholder="Fresh/Job">
  </div>
  </div>


    <div class="col-sm-6">
  <div class="form-group">
    <label for="intrest_field">Intrest/Field:</label>
    <input type="text" required="" class="form-control" id="intrest_field" name="intrest_field" placeholder="Intrest/Field">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="resume_code">Resume Code:</label>
    <input type="text" required="" class="form-control" id="resume_code" name="resume_code" placeholder="Resume Code">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="expected_amount">Expected Amount:</label>
    <input type="text" required="" class="form-control" id="expected_amount" name="expected_amount" placeholder="Expected Amount">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="country">Country:</label>
    <input type="text" required="" class="form-control" id="country" name="country" placeholder="Country">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="discount_code">Discount Code:</label>
    <input type="text" required="" class="form-control" id="discount_code" name="discount_code" placeholder="Discount Code">
  </div>
  </div>

 <!--   <div class="col-sm-6">
  <div class="form-group">
    <label for="discount_amount">Discount Amount:</label>
    <input type="text" required="" class="form-control" id="discount_amount" name="discount_amount" placeholder="Discount Amount">
  </div>
  </div> -->

  <div class="col-sm-6">
  <div class="form-group">
    <label for="lead_status">Lead Status:</label>
    <input type="text" required="" class="form-control" id="lead_status" name="lead_status" placeholder="Lead Status">
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
                          <th>Client Id</th>
                          <th>Client Name</th>
                          <th>Email</th>
                          <th>Phone No</th>
                          <th>Entry Date</th>
                          <th>Meet up Date</th>
                          <th>Education</th>
                          <th>Fresh/Job</th>
                          <th>Intrest/Field</th>
                          <th>Resume Code</th>
                          <th>Expected Amount</th>
                          <th>Country</th>
                          <th>Discount Code</th>
                          <th>Lead Status</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_futureclient");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['client_name']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td><?php echo $row['entry_date']; ?></td>
                          <td><?php echo $row['meetUp_date']; ?></td>
                          <td><?php echo $row['education']; ?></td>
                          <td><?php echo $row['job']; ?></td>
                          <td><?php echo $row['intrest']; ?></td>
                          <td><?php echo $row['resume_code']; ?></td>
                          <td><?php echo $row['expected_amount']; ?></td>
                          <td><?php echo $row['country']; ?></td>
                          <td><?php echo $row['discount_code']; ?></td>
                          <td><?php echo $row['lead_status']; ?></td>
                             <td><a href="futureClient_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="futureClient_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
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
