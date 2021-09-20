<?php
session_start();

if(isset($_REQUEST['login']))
{
 include_once 'conn.php'; 
 $error='';
 $user=mysqli_real_escape_string($conn,$_REQUEST['username']);
 $pass=mysqli_real_escape_string($conn,$_REQUEST['password']);

 if(!empty($user)&& !empty($pass))
 {


    
   $result=mysqli_query($conn,"select * from admin_login where admin_name='$user' and password='$pass'");
//$row=mysqli_fetch_assoc($result);
// $count=mysqli_num_rows($result);
//echo "Fileds are mandatory";
  
//print_r($count);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
   // echo "user_role" . $row['role'];
    $_SESSION['admin_email']=$row['admin_name'];
    //$_SESSION['role']=$row['role'];
    //print_r($_SESSION);
    //die();
    //$user_role=$row['role'];

    
    header('location:admin1.php');
   
  
  }
}
else{echo "<script> alert('Enter your correct username and password')</script>";}


/*$user_role[]=$row['role'];




   //$_SESSION['user_role']= $row['role'];
 //$_SESSION['user_name']= $row['user_name';];*/
 }
 else{echo "<script> alert('Enter your Email and Password')</script>";}

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
    <title>Login</title>
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
        <form class="login-form" action="adminlogin.php" method="post">


          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="username" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
          </div>
        </form>
        <form class="forget-form" action="">
        
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