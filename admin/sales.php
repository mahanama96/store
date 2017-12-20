<?php
	include ('../user/lock.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="store.php">D-GARMENT</a>
     </div>
     <ul class="nav navbar-nav">

     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li>
         <div class = "dropdown">
           <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
           </button>

					 <ul class="dropdown-menu">
								  	<li><a href="admin.php">Admin Panel</a></li>
									<li><a href="../user/logout.php">Logout</a></li>
					 </ul>


         </div>
     </ul>

   </div>
  </nav>


  <div class="container">
  	<?php
  		$query1="SELECT * FROM purchase";
  		$result1=mysqli_query($db,$query1);

  		if (!$result1)
  		{

  			die(mysqli_error($db));

  		}



  		echo"</br></br></br></br><h2> Sales History </h2>";
  		echo"<table class='table'><tr><th>Username</th><th>Song Id</th><th>Song Name</th><th>Price</th></tr>";

  		$tot=0;

  		while($row1=mysqli_fetch_array($result1))
  		{
  				echo "<tr>";
  				echo " <td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td></tr>";

  				$tot=$tot+$row1[3];

  		}
  		echo "</table>";

  		echo "<hr>";

  		echo "Total Sales : $ " . $tot;

  		echo "<hr>";

  		echo "<a class='btn btn-danger'  role='button' href=clearhistory.php" . "'>Clear Sales History</a>";


  	?>



      </div>

</body>
</html>
