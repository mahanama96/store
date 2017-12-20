<?php

	include('../config/config.php');

	$item_delete=$_SERVER['QUERY_STRING'];
	$query2="DELETE FROM cart WHERE id=$item_delete";

	$result2=mysqli_query($db,$query2);

	if ($result2)
	{
		echo"<div id='pos'>";
		echo "item removed";
		echo"</div>";
		$url="cart.php";
		header('Location: ' . $url);

	}
	else
	{
		echo "error";
	}

?>
