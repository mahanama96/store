<?php

  include ('../config/config.php');

	session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$myusername=$_POST['username'];
		$mypassword=$_POST['password'];

		$sql="SELECT username FROM login WHERE username='$myusername' and password='$mypassword'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		//$active=$row['active'];

		$count=mysqli_num_rows($result);

		if($count==1)
			{
				if ($myusername=='admin')
				{
					header("location: ../admin/admin.php");
					$_SESSION['login_user']=$myusername;
				}
				else if ($myusername!=='admin')
				{                                                                   -
					header("location: ../store/store.php");
					$_SESSION['login_user']=$myusername;
				}


			}

			else
			{
			echo 	"<div class='panel panel-danger'>
							<div class='panel-heading'>Warning</div>
						<div class='panel-body'>Invalid Login</div>
						</div>";
			}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tunes.lk | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<style>

	.bg-1 {
      background-image:url(img/store_3.jpg);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;
      color: #bdbdbd;
	  -webkit-background-size:cover;-moz-background-size:cover;background-size:cover;
	}

	.font-style{

	}



    </style>

</head>

<body id="page-top" class="bg-1">


	<form action="" method="post">
	   <div class="container">
	   </br></br>
	   <div class="well">
		</br>
		<div class="jumbotron-sm">
			<h1 align="center">Log In</h1>
		</div>

		</br></br>
			<input class="form-control" id="focusedInput" type="text" placeholder="Username or Email" name="username">
					</br>
			<input class="form-control" id="focusedInput" type="password" placeholder="Password" name="password">
		</br></br>

		<div class="col-md-3">
			<input type="submit" class="btn btn-primary" value="Log In">
		</div>
	</form>

	<form>
		</br></br>

			<button type="button" class="btn btn-link" onclick="window.location='register.php';">Sign up as a new User</button>


		</div>
	</form>



   </br></br>
	<footer>
	<p align="center"> Copyright Tunes.lk</p>
	</footer>



</body>

</html>
