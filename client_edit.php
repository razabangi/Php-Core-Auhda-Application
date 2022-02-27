<?php

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_client_info where id = '$edit'");
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
                <h3>Add Record Client</h3>
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
                    <h2>Client Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="update_client.php" class="form-group">
    <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="Client_Name">Client Name:</label>
    <input type="text" required="" value="<?php echo $fetch['client_name']; ?>" class="form-control" id="Client_Name" placeholder="Client Name" name="client_name">
  </div>
  </div>
     <div class="col-sm-6">
  <div class="form-group">
    <label for="contact_no">Contact No:</label>
    <input type="text" required="" value="<?php echo $fetch['contact_no']; ?>" class="form-control"  name="contact_no" id="contact_no" placeholder="Contact Number">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="entry_date">Entry Date:</label>
    <input type="Date" required="" value="<?php echo $fetch['entry_date']; ?>" class="form-control" value="2017-06-01" id="entry_date" name="entry_date" placeholder="Entry Date">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" required="" value="<?php echo $fetch['email']; ?>" name="email" class="form-control" id="email" placeholder="Email Address">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="education">Education Institute:</label>
    <input type="text" required="" value="<?php echo $fetch['education_institute']; ?>" class="form-control" id="education" name="education"  placeholder="Education">
  </div>
  </div>
  

  <div class="col-sm-6">
  <div class="form-group">
    <label for="city">City:</label>
    <input type="text" required="" value="<?php echo $fetch['city']; ?>" class="form-control" id="city" name="city" placeholder="City">
  </div>
  </div>
  

  <div class="col-sm-6">
  <div class="form-group">
    <label for="organization">Organization:</label>
    <input type="text" required="" value="<?php echo $fetch['organization']; ?>" class="form-control" id="organization" name="organization" placeholder="Organization">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="qualification">Last Degree/Qualification:</label>
    <input type="text" required="" value="<?php echo $fetch['qualification']; ?>" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="position">Position:</label>
    <input type="text" required="" value="<?php echo $fetch['position']; ?>" class="form-control" id="position" name="position" placeholder="Position">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="profession">Profession:</label>
    <input type="text" required="" value="<?php echo $fetch['profession']; ?>" class="form-control" id="profession" name="profession" placeholder="Profession">
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="code">CV Design Code:</label>
  <input type="text" required="" value="<?php echo $fetch['cv_design_code']; ?>" class="form-control" id="code" name="code" placeholder="CV Code">   </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="status">CV Status:</label>
    <input type="text" required="" value="<?php echo $fetch['cv_status']; ?>" class="form-control" id="status" name="status" placeholder="CV Status">
  </div>
  </div>


  

  <div class="col-sm-6">
  <input type="submit"  class="btn btn-default" value="Update" name="update">
  </div>
</form>



                </div>
              </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      <?php include("partial/footer-java/dashboard_java.php"); ?>
      <?php include("partial/footer.php"); ?>
