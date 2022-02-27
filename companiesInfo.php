
<?php include("partial/header.php"); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Company Record</h3>
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
                    <h2>Company Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="act_companiesInfo.php" class="form-group">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" required="" class="form-control" id="designation" placeholder="Designation" name="designation">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="ext_no">Ext No:</label>
    <input type="text" required="" class="form-control" id="ext_no" placeholder="Ext No" name="ext_no">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="direct_no">Direct No:</label>
    <input type="text" required="" class="form-control" name="direct_no" id="direct_no" placeholder="Direct No">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="fax_no">Fax No:</label>
    <input type="text" required="" name="fax_no" class="form-control" id="fax_no" placeholder="Fax No">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" required="" name="email" class="form-control" id="email" placeholder="Email Address">
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
                          <th>ID</th>
                          <th>Designation</th>
                          <th>Ext No</th>
                          <th>Direct No</th>
                          <th>Fax No</th>
                          <th>Email</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_company");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['designation']; ?></td>
                          <td><?php echo $row['ext_no']; ?></td>
                          <td><?php echo $row['direct_no']; ?></td>
                          <td><?php echo $row['fax_no']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                             <td><a href="company_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="company_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
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
