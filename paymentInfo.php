
<?php include("partial/header.php"); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Payment Record</h3>
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
                    <h2>Payment Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="act_paymentInfo.php" class="form-group">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="transaction_id">Transaction ID:</label>
    <input type="text" required="" class="form-control" id="transaction_id" placeholder="Transaction Id" name="transaction_id">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="code">Code:</label>
    <input type="text" required="" class="form-control" id="code" placeholder="Code" name="code">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" required="" class="form-control" name="amount" id="amount" placeholder="Amount">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="payment_status">Payment Status:</label>
    <input type="text" required="" name="payment_status" class="form-control" id="payment_status" placeholder="Payment Status">
  </div>
  </div>

  

    

    <div class="col-sm-6">
  <div class="form-group">
    <label for="final_cv_status">Final CV Status:</label>
    <input type="text" required="" class="form-control" id="final_cv_status" name="final_cv_status" placeholder="Final CV Status">
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
                          <th>Transaction ID</th>
                          <th>Code</th>
                          <th>Amount</th>
                          <th>Payment Status</th>
                          <th>Final CV Status</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        include("db/connection.php");
                       
                        $query = $con->prepare("select * from tbl_payment");
                      
                        $query->setFetchMode(PDO::FETCH_ASSOC);
                        $query->execute();
                        $fetch = $query->fetchAll();
                         
                        foreach($fetch as $row):
                       ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['transaction_id']; ?></td>
                          <td><?php echo $row['code']; ?></td>
                          <td><?php echo $row['amount']; ?></td>
                          <td><?php echo $row['payment_status']; ?></td>
                          <td><?php echo $row['cv_status']; ?></td>
                             <td><a href="payment_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
      <td> <a href="payment_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?');  " > <i class="fa fa-trash-o"></i> Delete</a> </td>
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
