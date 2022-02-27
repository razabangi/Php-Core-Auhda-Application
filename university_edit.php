<?php

include("db/connection.php");

if(isset($_GET['id']))
{
$edit = $_GET['id'];

$query = $con->prepare("select * from tbl_universityinfo where id = '$edit'");
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
                <h3>Add University Record</h3>
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
                    <h2>University Info</h2>
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
  <form name="add_client" id="add_client" method="POST" action="update_universityInfo.php" class="form-group">
    <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
     <div class="col-sm-6">
  <div class="form-group">
    <label for="uni_name">University Name:</label>
    <input type="text" required="" value="<?php echo $fetch['university_name']; ?>" class="form-control" id="uni_name" placeholder="University Name" name="uni_name">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="email">Email Address:</label>
    <input type="text" required="" value="<?php echo $fetch['email']; ?>" class="form-control" id="email" placeholder="Email Address" name="email">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="type">Type:</label>
    <input type="text" required="" value="<?php echo $fetch['type']; ?>" class="form-control" name="type" id="type" placeholder="Type">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="establish_year">Establish Year:</label>
    <input type="text" required="" value="<?php echo $fetch['establish']; ?>" name="establish_year" class="form-control" id="establish_year" placeholder="Extablish Year">
  </div>
  </div>

  <div class="col-sm-6">
  <div class="form-group">
    <label for="speciality">Speciality:</label>
    <input type="text" required="" value="<?php echo $fetch['speciality']; ?>" name="speciality" class="form-control" id="speciality" placeholder="Speciality">
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" required="" value="<?php echo $fetch['address']; ?>" name="address" class="form-control" id="address" placeholder="Address">
  </div>
  </div>

    <div class="col-sm-6">
  <div class="form-group">
    <label for="url">Url:</label>
    <input type="text" required="" value="<?php echo $fetch['url']; ?>" name="url" class="form-control" id="url" placeholder="Url">
  </div>
  </div>

     <div class="col-sm-6">
  <div class="form-group">
    <label for="contact_person">Contact Person:</label>
    <input type="text" required="" value="<?php echo $fetch['contact']; ?>" name="contact_person" class="form-control" id="contact_person" placeholder="Contact Person">
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
