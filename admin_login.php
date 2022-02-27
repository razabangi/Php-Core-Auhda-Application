<?php 
session_start();
if(@$_SESSION['user_name'] != "")
{
  header("location:Home.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup / Registration form using Material Design - Demo by W3lessons</title>
  <!-- CORE CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css"> -->


  
</head>

<body style="background:#9f8690;">


<div class="container">

<div class="company-logo"><img src="assets/images/hhlogo my.png" height="54" width="300" class="img-responsive my-logo1" style="margin:auto;" alt=""></div>

<div id="box" style="margin-top: 30px;">
    <h1 class="well" style="color:#262626;font-family: serif;text-align: center;opacity: 0.5;"><span style="font-weight: bolder;text-shadow: 0px 6px 12px black;">Login Now</span></h1>
  <div class="col-lg-12 well" id="login_box" style="padding: 70px;">
  
  <div class="row">
        <form method="post" action="action_login.php">
          <div class="col-sm-12">
            <div class="row">
      <!--         <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text" placeholder="Enter First Name Here.."  required autofocus name="fname" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" placeholder="Enter Last Name Here.."  required name="lname" class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Enter Address Here.." name="address" required rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>City</label>
                <input type="text" placeholder="Enter City Name Here.." required name="city" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>State</label>
                <input type="text" placeholder="Enter State Name Here.." required name="state" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Country</label>
                <input type="text" placeholder="Enter Counttry Name Here.." required name="country" class="form-control">
              </div>    
            </div>
              
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter Phone Number Here.." required name="phone" class="form-control">
          </div>   -->  
          <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter Email Address Here.." required autocomplete="off" name="email" autofocus="" class="form-control">
          </div>  
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter Your Password Here.." required name="password" class="form-control">
          </div>
          <input type="submit" name="submit" class="btn btn-lg btn-block btn-success" style="box-shadow: 0px 6px 24px grey;font-family:serif;font-weight: bold;" value="Login now"> <br>
          
          
          <!-- <a  href="register.php" style="">Sign up Now</a>  -->
          
          </div>
        </form> 

      


        </div>
  </div>

  </div>
  </div>

</body>

</html>