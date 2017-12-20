<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		D-GARMENTS
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body {
   background-image: url("garment_decorating_product_img.png");
    background-repeat: no-repeat;
    background-position: right top;
    margin-right: 200px;
    background-attachment: fixed;
}
h1 {
    color: lime;
    margin-left: 50px;
    background-color: blue;
    text-align: center;
}
</style>
</head>
</html>
<?php
$con=mysqli_connect("localhost","root","tauemysql123","dbweb");
if ($con->connect_error)die("Database connection failed: ".$conn->connect_error);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$Position = $_POST['Position'];
$sql = "INSERT INTO application (fname, lname,email,gender,position )"
. "VALUES ( '$firstname', '$lastname', '$email', '$gender', '$Position' )";
if(mysqli_query($con,$sql)){
echo "<h1>Successfully submitted</h1><br/>";
echo"<a href='application.php'><h3>Go back</h3></a>";
}else {
echo "<h1>Error in inserting data</h1>". $con->error;
}
mysqli_close($con);
?>