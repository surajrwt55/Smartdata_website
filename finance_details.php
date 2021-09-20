<?php include ('app.php');?>

<div>
    




      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Wecome to admin pannel</h1>
          <!--<p>Table to display analytical data effectively</p>-->
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!--<li class="breadcrumb-item"></li>-->
          <li class="breadcrumb-item active"><a href="admin_logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                  	<tr>
                      <th>Organization</th>
                      <th>Product Name</th>
                      <th>Product serial number</th>
                      <th>Prodcut Category</th>
                      <th>Signatory</th>
                      <th>Price</th>
                      <th>Bill Number </th>
                      <th>Edit </th>
                      <th>Delete </th>
                      
                    </tr>
                  	<?php include 'conn.php';
                  	$sql="select * from finance_details";
                  	if($result=mysqli_query($conn,$sql))
                  	{
                  		while($row=mysqli_fetch_assoc($result))
                           {
                    echo "<tr>
                      <td>".$row['organization']."</td>
                      <td>".$row['product_name']."</td>
                      <td>".$row['product_serial']."</td>
                      <td>".$row['cat']."</td>
                      <td>".$row['signatory']."</td>
                      <td>".$row['price']."</td>
                      <td>".$row['bill_number']."</td>"
                      ?>
                    <td><button class="btn" onclick=del ('$row[0]')> <span class="glyphicon glyphicon-ok"></span></button></td>
                    <td><a href="delete.php?id=<?php echo $row['Id']; ?>">Delete</a></td>
                      


                   <?php "</tr>";

                           }

                  	}

                      $conn=null;
                  	?>

                    
                  </thead>
                  <tbody>
                  	</tbody>
                </table>
              </div>
            </div>
        
    </div>
  </div>
</div>

 <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }


$(document).ready(function(){
  $('#sampleTable').DataTable();

});



function del(val) {
  $.post("del.php",{delete:val},function(data)
  {
    alert('data deleted');
  });
  // body...
}

    </script>


<?php include('footer.php'); ?>