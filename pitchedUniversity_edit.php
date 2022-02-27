<?php

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_pitched_universities where id = '$edit'");
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
                <h3>Add Pitched Universities Record</h3>
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
                    <h2>Pitched Universities Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="update_pitchUniversitiesInfo.php" class="form-group">
    <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="uni_name">Name Of University:</label>
    <input type="text" required="" value="<?php echo $fetch['university_name']; ?>" class="form-control" id="uni_name" placeholder="Name Of University" name="uni_name">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="authorised_person">Authorised Person:</label>
    <input type="text" required="" value="<?php echo $fetch['authorized_person']; ?>" class="form-control" id="authorised_person" placeholder="Authorised Person" name="authorised_person">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="referred_person">Referred Person:</label>
    <input type="text" required="" value="<?php echo $fetch['referred_person']; ?>" class="form-control" name="referred_person" id="referred_person" placeholder="Referred Person">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="designation">Designation:</label>
    <input type="text" required="" value="<?php echo $fetch['designation']; ?>" name="designation" class="form-control" id="designation" placeholder="Designation">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email_id">Email Id:</label>
    <input type="text" required="" value="<?php echo $fetch['email']; ?>" name="email_id" class="form-control" id="email_id" placeholder="Email Address">
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="status">Status:</label>
    <input type="text" required="" value="<?php echo $fetch['status']; ?>" name="status" class="form-control" id="status" placeholder="Status">
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
