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

    <title>User</title>
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

     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li>
         <div class = "dropdown">
           <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
           </button>

					 <ul class="dropdown-menu">
								  	<li><a href="../store/store.php">Shop</a></li>
                    <li><a href="../cart/cart.php">Shopping Cart</a></li>
									  <li><a href="../user/logout.php">Logout</a></li>
					 </ul>


         </div>
     </ul>

   </div>
  </nav>

  <div class="container">

	<img src="img/1.png">

	<?php

		$user=$_SESSION['login_user'];
		$query1="SELECT * FROM member WHERE email='$user'";
		$result1=mysqli_query($db,$query1);

		if (!$result1)
		{

			die(mysqli_error($db));

		}

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$pass=$_POST['pass'];
			$rpass=$_POST['rpass'];
			$user=$_SESSION['login_user'];

			if($pass===$rpass && !empty($_POST['pass']) && !empty($_POST['rpass']))
			{
					$sql="UPDATE member SET password='$pass' WHERE email='$user'";
					if(mysqli_query($db,$sql))
					{
						$url="user.php";
						header('Location: ' . $url);
					}

			}
		}

		echo "<table class='table'><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Country</th></tr>";

		while($row1=mysqli_fetch_array($result1))
		{
			echo "</br></br></br></br></br>";
			echo "<tr>";
			echo " <td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td>$row1[4]</td>";
			echo "</tr>" ;

		}
		echo "</table>";



	?>

	<form method='POST' action="user.php">
				<div class='col-sm-5'>
					<input name='pass' class='form-control' id='focusedInput' type='text' placeholder='New Password'>
				</div>
				<div class='col-sm-5'>
					<input name='rpass' class='form-control' id='focusedInput' type='text' placeholder='Confirm New Password'>
				</div>

				<input type='submit' class='btn btn-success' value='Reset Password'>
	</form>


	</br>
	<?php
		$query2="SELECT * FROM purchase WHERE usern='$user'";
		$result2=mysqli_query($db,$query2);

		echo "</br></br></br>";
		echo"<h2> Purchase History</h2>";
		echo"<table class='table'><tr><th>Song ID</th><th>Song Name</th><th>Price $ </th></tr>";

		$count=0;
		while($row2=mysqli_fetch_array($result2))
		{

			echo "<tr>";
			echo " <td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td>";

			echo "</td></tr>" ;

			$count=$count+1;
		}
		echo "</table>";
		echo "<a class='btn btn-danger'  role='button' href=clearhistory.php?" . $user . "'>Clear Purchase History</a>";

		if($count>30)
		{
			$query3="DELETE FROM purchase WHERE usern='$user'";
			mysqli_query($db,$query3);

			echo "Purchase History cleared";
		}

	?>

</body>
</html>
