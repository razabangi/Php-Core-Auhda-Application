<?php include('partials/header.php'); ?>

<section id="login-area">
<div class="container">
<div class="row">
<div class="col-sm-offset-3 col-sm-6  col-sm-offset-3">  
<div class="company-logo"><img src="assets/images/hhlogo my.png" height="54" width="200" class="img-responsive my-logo1" style="margin:auto;" alt=""></div>
<form name="login-form" id="login-form" method="post" action="login.php">
  <div class="form-group" style="margin-top:15px;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default btn-block">Submit</button>
</form>



</div>
</div>
</div> 
</section>












<?php include('partials/footer.php'); ?>