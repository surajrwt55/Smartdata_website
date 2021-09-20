<?php
 include_once 'conn.php';
if(isset($_REQUEST['register']))
{
  $fname=$_REQUEST['name'];
  $lname=$_REQUEST['lname'];
  $email=$_REQUEST['email'];
  $pass=$_REQUEST['password']; 
  $role=$_REQUEST['role'];
  //echo '$role';


  
  
  
  if(!empty($email)&& !empty($role))
 {
  
  $sql="insert into user_login(fname,lname,user_name,password,role) values('$fname','$lname','$email','$pass','$role')";

  

  if(mysqli_query($conn,$sql))
  {
    echo "<script> alert('Successfully Registered')</script>";

     //'<script> alert("Successfully Registered")</script>';
    header('location:login.php');
    }
    else
    {
      echo"error:" .$sql. "".mysqli_error($conn);
    } 
  }

  else
  {
    echo "<script> alert('All fields are mandatory')</script>";
  
    header('location:index.php');
  }
  
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .login-content .login-box {
  position: relative;
  min-width: 450px;
  min-height: 630px;
  background-color: #fff;
  -webkit-box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
          box-shadow: 0px 29px 147.5px 102.5px rgba(0, 0, 0, 0.05), 0px 29px 95px 0px rgba(0, 0, 0, 0.16);
  -webkit-perspective: 800px;
          perspective: 800px;
  -webkit-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
};
  </style>
    <title>Register</title>
  </head>


  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Smart</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>

<div class="form-group">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name" autofocus>
          </div>




          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input class="form-control" type="text" name="lname" placeholder="Last name" autofocus>
          </div>





          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" name="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>

            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>

                    <div class="form-group">
            <label class="control-label">Organization</label>

            <select class="form-control" name="role">
              <option value="" disabled selected> Select Organization</option>
              <option value="1"> Finance Management </option>
              <option value="2"> Product Development</option>
              <option value="3"> Inventory Management</option>
              <option value="4"> Product Marketing</option>
              <option value="5"> MIS Representative</option>
              <option value="6"> Human Resource</option>
              
            </select>
          
          </div>
          
          <div class="form-group btn-container">
            <input type="submit" class="btn btn-primary btn-block" name="register"></input>
</div>
<br>
            <div class="form-group btn-container">
            <p class="semibold-text mb-0"><a href="login.php" ><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>

          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>