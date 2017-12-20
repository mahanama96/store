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
       <li class="active"><a href="#">Home</a></li>
       <li><a href="../about/about.php">About</a></li>
       <li><a href="../application/application.php">Application</a></li>
       <li><a href="../contact/contact.php">Contacts</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li>
         <div class = "dropdown">
           <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
           </button>

					 <ul class="dropdown-menu">
								  	<li><a href="sales.php">Sales Records</a></li>
									<li><a href="../user/logout.php">Logout</a></li>
					 </ul>


         </div>
     </ul>

   </div>
  </nav>


	<div class="container">
		<?php
			$query1="SELECT * FROM member WHERE NOT email='admin'";
			$result1=mysqli_query($db,$query1);

			if (!$result1)
			{

				die(mysqli_error($db));

			}



			echo"</br></br></br></br><h2> User Management </h2>";
			echo"<table class='table'><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Country</th><th>Action</th></tr>";


			while($row1=mysqli_fetch_array($result1))
			{
					echo "<tr>";
					echo " <td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td>$row1[4]</td><td><a href=rmvmember.php?";
					echo $row1[2];
					echo">Remove</a></td></tr>" ;

			}
			echo"</table>";

			function delete($row)
			{
				$query4="DELETE FROM member WHERE email='$row'";
				mysqli_query($db,$query4);

				if (!$result4)
					{
						die(mysqli_error());
					}
			}

			$query2="SELECT * FROM items ";
			$result2=mysqli_query($db,$query2);

			echo "</br></br></br>";
			echo"<h2> Product Management </h2>";
			echo"<table class='table'><tr><th>Item No</th><th>Catogory</th><th>Size</th><th>Colour</th><th>QTY</th><th>Name </th><th>Price $ </th><th>Action</th></tr>";


			while($row2=mysqli_fetch_array($result2))
			{

				echo "<tr>";
				echo " <td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td><td><a href=rmvitem.php?";
				echo $row2[0];
				echo">Remove</a></td></tr>" ;

			}
			echo"</table>";

			echo "</br></br></br>";
			echo "<h2> Add Products </h2>";

			echo "<form method='post'>
					<div class='col-sm-5'>
						<input name='sid' class='form-control' id='focusedInput' type='text' placeholder='Category'>
					</div>
					<div class='col-sm-5'>
						<input name='sname' class='form-control' id='focusedInput' type='text' placeholder='Size'>
					</div>
					</br>
					<div class='col-sm-5'>
						<input name='aname' class='form-control' id='focusedInput' type='text' placeholder='Colour'>
					</div>
					<div class='col-sm-5'>
						<input name='alname' class='form-control' id='focusedInput' type='text' placeholder='Quantity'>
					</div>
					</br>
					<div class='col-sm-5'>
						<input name='genre' class='form-control' id='focusedInput' type='text' placeholder='Name'>
					</div>
					<div class='col-sm-5'>
						<input name='price' class='form-control' id='focusedInput' type='text' placeholder='price'>
					</div>

						<input type='submit' class='btn btn-success' value='submit'></section>
					";

					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
					$sid=$_POST['sid'];
					$sname=$_POST['sname'];
					$aname=$_POST['aname'];
					$alname=(int)$_POST['alname'];
					$genre=$_POST['genre'];

					$price = (int) $_POST['price'];

					$sql="INSERT INTO items (category,size,colour,quantity,gmnt_Name,Price) VALUES ('$sid','$sname','$aname','$alname','$genre',$price)";
					mysqli_query($db,$sql);

					$url="admin.php";
					header('Location: ' . $url);
					}
		?>



	    </div>


</body>
</html>
