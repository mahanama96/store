<?php

	include('../config/config.php');

	$song_delete=$_SERVER['QUERY_STRING'];
	$query4="DELETE FROM items WHERE itemNo = $song_delete";

	$result4=mysqli_query($db,$query4);

	if ($result4)
	{
		echo"<div id='pos'>";
		echo "item removed";
		echo"</div>";
		$url="admin.php";
		header('Location: ' . $url);

	}
	else
	{
		echo "error";
	}

?>
