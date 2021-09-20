<?php include_once 'conn.php';
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
		echo '<script> alert("Successfully Registered")</script>';
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
