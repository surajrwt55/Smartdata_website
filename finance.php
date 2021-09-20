<?php 


include_once 'conn.php';
session_start();
if(! empty($_SESSION['user_email']))
{
if(isset($_REQUEST['finance']))
{
	
	$org=$_REQUEST['Organization'];
	$pname=$_REQUEST['product_name'];
	$pserial=$_REQUEST['product_serial'];
	$pcat=$_REQUEST['cat'];
  $location=$_REQUEST['location'];
  $Contact=$_REQUEST['contact'];
  $contact_number=$_REQUEST['contact_number'];




	$sign=$_REQUEST['signatory'];
	$price=$_REQUEST['price'];
	$bill_number=$_REQUEST['bill_number'];

  $filename = $_FILES["slp"]["name"];
    $tempname = $_FILES["slp"]["tmp_name"];    
        $folder = "pay/".$filename;

        move_uploaded_file($tempname,$folder);
	//echo '$role';

$remark=$_REQUEST['remark'];
	
	
	
	if(!empty($sign)&& !empty($price))
 {
	
	$sql="insert into finance_details(organization,product_name,product_serial,cat,signatory,price,bill_number,pay_slip,remark,location,contact_name,contact_number) values('$org','$pname','$pserial','$pcat','$sign','$price', '$bill_number','$filename','$remark','$location','$Contact','$contact_number')";

	

	if(mysqli_query($conn,$sql)){
    
		echo '<script> alert("new record created")</script>';
		
		header('location:finance.php');
		}
		else
		{
			echo"error:" .$sql. "".mysqli_error($conn);
		} 
	}
	else
	{
		echo '<script> alert("All fields are mandatory")</script>';
	    die();
		header('location:finance.php');
	}
	
}
}
else
{
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Finance</title>

    <style>
    .box{
        
        display: none;
        
    }
   
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Smart</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-designation">Welcome</p>
          <p class="app-sidebar__user-name">John Doe</p>
          
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="finance.php"><span class="app-menu__label">General Ledger</span></a></li>

        <li><a class="app-menu__item" href="payable.php"><span class="app-menu__label">Accounts Payable/Receivable</span></a></li>

        <li><a class="app-menu__item" href=""><span class="app-menu__label">Purchase/Sale Order</span></a></li>

        </ul>
        
       
        
        
    </aside>
    <main class="app-content">
      
    <div>
    <h1><i class="fa fa-dashboard"></i> Finance Management</h1>
    <p>Start a beautiful journey here</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <a href="logout.php">logout</a>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">Create a beautiful dashboard</div>

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Finance Details</h3>
            <div class="tile-body">
              <form  action="finance.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label">Organization</label>
                  <input class="form-control" type="text" name="Organization" placeholder="Enter Organization Name">
                </div>
                <div class="form-group">
                  <label class="control-label">Product Name</label>
                  <input class="form-control" type="text" name="product_name" placeholder="Enter Product Name">
                </div>
                  
                <div class="form-group">
                  <label class="control-label">Product serial Number</label>
                  <input class="form-control" type="number" name="product_serial" placeholder="Product serial number">
                </div>


                <div class="form-group">
            <label class="control-label">Product category</label>

            <select class="form-control" name="cat">
              <option value="" disabled selected> Select Organization</option>
              <option value="Consumable">Consumable </option>
              <option value="NonConsumable"> Non Consumable</option>
             
              
            </select>
          
          </div>
          
<div  class="red box">
              
                <div class="form-group >
                  <label class="control-label">Location of item</label>
                  <input class="form-control" type="text" name="location"placeholder="Location">
                </div>
                <div class="form-group>
                  <label class="control-label">Contact Person Name</label>
                  <input class="form-control" type="text" name="contact" placeholder="Contact Person Name">
                </div>
<br>
                 <div class="form-group">
                  <label class="control-label">Contact Person Number</label>
                  <input class="form-control" type="text" name="contact_number" placeholder="Number ">
                </div>

                 
                
            
            </div>

















                <div class="form-group">
                  <label class="control-label">Signatory</label>
                  <input class="form-control" type="text" name="signatory" placeholder="">
                </div>

                <div class="form-group">
                  <label class="control-label">Amount</label>
                  <input class="form-control" type="number" name="price" placeholder="Enter Amount">
                </div>
               
                <div class="form-group">
                  <label class="control-label">Bill Number</label>
                  <input class="form-control" type="number" name="bill_number" placeholder="Enter Bill Number">
                </div>

               <div class="form-group">
                  <label class="control-label">Upload file</label>
                  <input class="form-control" type="file" name="slp">
                </div>

                <div class="form-group">
                  <label class="control-label">Remark</label>
                  <input class="form-control" name="remark" placeholder="Enter Remark">
                </div>
                               
              
            </div>
            <div class="tile-footer">
                          <input type="submit"  class="btn btn-primary btn-block" name="finance" lass="form-control" >
                      </div>
                      
              </form>
            </div>
          </div>
        </div>



        
    </div>
  </div>
</div>




<?php include('footer.php'); ?>

<script type="text/javascript">
  $(document).ready(function(){
        $("select").change(function(){
            $( "select option:selected").each(function(){
                if($(this).attr("value")=="NonConsumable"){
                    $(".box").hide();
                    $(".red").show();
                }



                 if($(this).attr("value")=="Consumable"){
                    $(".box").hide();
                    $(".green").show();
                }


              
            });
        })
        .change();
    });


  $("input[type='number'][name='price']").change(function() {
    if ($(this).val() >= 5000) {
        alert("Raise Request");
        $(this).val('');
        $(this).focus();
    }        
});  

</script>