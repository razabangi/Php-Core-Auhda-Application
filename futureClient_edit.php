<?php

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_futureclient where id = '$edit'");
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
  <form name="add_client" id="add_client" method="POST" action="update_futureClientInfo.php" class="form-group">

<input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">

     <div class="col-sm-6">
  <div class="form-group">
    <label for="client_name">Client Name:</label>
    <input type="text" required="" value="<?php echo $fetch['client_name']; ?>" class="form-control" id="client_name" placeholder="Client Name" name="client_name">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email Id:</label>
    <input type="email" required="" value="<?php echo $fetch['email']; ?>" class="form-control" id="email" placeholder="Email Id" name="email">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" required="" value="<?php echo $fetch['phone']; ?>" class="form-control" name="phone" id="phone" placeholder="Contact Number">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="entry_date">Entry Date:</label>
    <input type="Date" required="" value="<?php echo $fetch['entry_date']; ?>" class="form-control" id="entry_date" name="entry_date" placeholder="Entry Date">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="meet_up_date">Meet Up Date:</label>
    <input type="Date" required="" value="<?php echo $fetch['meetUp_date']; ?>" class="form-control" id="meet_up_date" name="meet_up_date" placeholder="Meet Up Date">
  </div>
  </div>

  

  <div class="col-sm-6">
  <div class="form-group">
    <label for="education">Education:</label>
    <input type="text" required="" value="<?php echo $fetch['education']; ?>" name="education" class="form-control" id="education" placeholder="Education">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="job">Fresh/Job:</label>
    <input type="text" required="" value="<?php echo $fetch['job']; ?>" name="job" class="form-control" id="job" placeholder="Fresh/Job">
  </div>
  </div>


    <div class="col-sm-6">
  <div class="form-group">
    <label for="intrest_field">Intrest/Field:</label>
    <input type="text" required="" value="<?php echo $fetch['intrest']; ?>" class="form-control" id="intrest_field" name="intrest_field" placeholder="Intrest/Field">
  </div>
  </div>

   <div class="col-sm-6">
  <div class="form-group">
    <label for="resume_code">Resume Code:</label>
    <input type="text" required="" value="<?php echo $fetch['resume_code']; ?>" class="form-control" id="resume_code" name="resume_code" placeholder="Resume Code">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="expected_amount">Expected Amount:</label>
    <input type="text" required="" value="<?php echo $fetch['expected_amount']; ?>" class="form-control" id="expected_amount" name="expected_amount" placeholder="Expected Amount">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="country">Country:</label>
    <input type="text" required="" value="<?php echo $fetch['country']; ?>" class="form-control" id="country" name="country" placeholder="Country">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="discount_code">Discount Code:</label>
    <input type="text" required="" value="<?php echo $fetch['discount_code']; ?>" class="form-control" id="discount_code" name="discount_code" placeholder="Discount Code">
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
    <input type="text" required="" value="<?php echo $fetch['lead_status']; ?>" class="form-control" id="lead_status" name="lead_status" placeholder="Lead Status">
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
          </div>
        </div> -->
        <!-- /page content -->
      <?php include("partial/footer-java/dashboard_java.php"); ?>
      <?php include("partial/footer.php"); ?>
