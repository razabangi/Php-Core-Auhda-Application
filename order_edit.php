<?php

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_order where id = '$edit'");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();
$fetch = $query->fetch();
}
?>

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
  <form name="add_client" id="add_client" method="POST" action="update_orderTracking.php" class="form-group">
  
  <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

  <div class="col-sm-6">
  <div class="form-group">
    <label for="client_name">Client Name:</label>
    <input type="text" required="" value="<?php echo $fetch['client_name']; ?>" class="form-control" id="client_name" placeholder="Client Name" name="client_name">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="order_no">Order No:</label>
    <input type="text" required="" value="<?php echo $fetch['order_no']; ?>" class="form-control" name="order_no" id="order_no" placeholder="Order No">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="date_of_order">Date Of Order:</label>
    <input type="Date" required="" value="<?php echo $fetch['date_of_order']; ?>" class="form-control" id="date_of_order" name="date_of_order" placeholder="Date Of Order">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="final_delivery_date">Final Delivery Date:</label>
    <input type="Date" required="" value="<?php echo $fetch['finally_delivery_date']; ?>" class="form-control" id="final_delivery_date" name="final_delivery_date" placeholder="Final Delivery Date">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="resume_id">Resume Id:</label>
    <input type="text" required="" value="<?php echo $fetch['resume_id']; ?>" name="resume_id" class="form-control" id="resume_id" placeholder="Resume Id">
  </div>
  </div>

  

    <div class="col-sm-6">
  <div class="form-group">
    <label for="sample_required">Sample Required:</label>
    <input type="text" required="" value="<?php echo $fetch['sample_required']; ?>" name="sample_required" class="form-control" id="sample_required" placeholder="Sample Required">
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="sample_status">Sample Status:</label>
    <input type="text" required="" value="<?php echo $fetch['sample_status']; ?>" class="form-control" id="sample_status" name="sample_status" placeholder="Sample Status">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="full_resume_status">Full Resume Status:</label>
    <input type="text" value="<?php echo $fetch['full_resume_made']; ?>" required="" class="form-control" id="full_resume_status" name="full_resume_status" placeholder="Full Resume Status">
  </div>
  </div>


  

  <div class="col-sm-8">
  <input type="submit"  class="btn btn-default" value="Update" name="update">
  </div>
</form>


                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- /page content -->
      <?php include("partial/footer-java/dashboard_java.php"); ?>
      <?php include("partial/footer.php"); ?>
