<?php

	include('../user/lock.php');

	$item_add=$_SERVER['QUERY_STRING'];

    $query1="SELECT * FROM items WHERE itemNo=$item_add";
    $result1=mysqli_query($db,$query1);
    $row1=mysqli_fetch_array($result1);
    $songid=$row1[0];
    $songn=$row1[5];
    $songp=$row1[6];
    $usern=$_SESSION['login_user'];

	$query2="INSERT INTO cart VALUES('$usern','$songid','$songn',$songp)";

	$result2=mysqli_query($db,$query2);

	if ($result2)
	{
		echo"<div id='pos'>";
		echo "item added";
		echo"</div>";
		$url="../store/store.php";
		header('Location: ' . $url);

	}
	else
	{
		echo "error";
		$url="../user/profile.php";
		header('Location: ' . $url);
	}

?>
