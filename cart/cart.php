<?php
	include ('../user/lock.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tunes.lk | Cart</title>

    <!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	  <script src="../js/jquery.min.js"></script>
	  <script src="../js/bootstrap.min.js"></script>

	<!--<style>
	a:link, a:visited{
		background-color: #33cc33;
		color: white;
		padding: 6px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}



	a:hover, a:active{
		background-color: red;
	}
	</style>-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--<a href="../shop/store.php"> back to shop </a>  -->
                   <li>
						<div class="dropdown">
							<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
								  </button>
								  <ul class="dropdown-menu">
									<li><a href="../user/profile.php">Profile</a></li>
									<li><a href="../store/store.php">Shop</a></li>
									</br>
									<li class="divider"></li>
									<li><a href="../user/logout.php">Logout</a></li>
								  </ul>
						</div>
				   </li>


			</div>

                </ul>
            </div>



    </nav>

    <!-- Page Content -->
    <div class="container">




	<?php



		$user=$_SESSION['login_user'];
		$query1="SELECT * FROM cart WHERE user='$user'";
		$result1=mysqli_query($db,$query1);

		if (!$result1)
		{

			die(mysqli_error($db));

		}


		echo "</br></br></br></br>";
		echo "<table class='table'><tr><th>Item ID</th><th>Name</th><th>Price $ </th><th>Action</th></tr>";

		$tot=0;

		while($row1=mysqli_fetch_array($result1))
		{

			echo "<tr>";
			echo " <td>$row1[1]</td><td>$row1[2]</td><td>$row1[3]</td><td><a class='btn btn-danger'  role='button' href=remove.php?" . $row1[1] . ">Remove</a></td>";
			echo "</tr>" ;

			$tot = $tot+$row1[3];

		}

		echo "</table>";

		echo "<hr><h6> Total Price : $ " . $tot;

		echo "<hr>&nbsp;<a class='btn btn-success'  role='button' href='purchase.php?" . $_SESSION['login_user'] ."'>Purchase</a>"
	?>





    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
									<div class="col-md-3 agileinfo_footer_grid">
										<img src="../images/logo.png">
									</div>
                </div>
            </div>
        </footer>

    </div>

	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
