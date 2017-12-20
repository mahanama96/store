<?php

	include('../config/config.php');

	$member_delete=$_SERVER['QUERY_STRING'];
	$query3="DELETE FROM member WHERE email='$member_delete'";
	$query4="DELETE FROM login WHERE username='$member_delete'";

	$result3=mysqli_query($db,$query3);
	$result4=mysqli_query($db,$query4);

	if ($result3)
	{
		if($result4){
			echo"<div id='pos'>";
			echo "member removed";
			echo"</div>";
			$url="admin.php";
			header('Location: ' . $url);
		}
		else{
			echo "error";
		}
	}
	else
	{
		echo "error";
	}

?>
