<?php

	include('../user/lock.php');

	$pur_user=$_SERVER['QUERY_STRING'];

    $query1="SELECT * FROM cart WHERE user='$pur_user'";
    $result1=mysqli_query($db,$query1);
    while($row1=mysqli_fetch_array($result1))
    {
    $usern=$row1[0];
    $item=$row1[1];
    $itemn=$row1[2];
    $price=$row1[3];

	$query2="INSERT INTO purchase VALUES('$usern','$item','$itemn','$price')";

	mysqli_query($db,$query2);
    }


    $query3="SELECT * FROM purchase WHERE usern='$pur_user'";
    $result3=mysqli_query($db,$query3);

	if ($result3)
	{
		echo"<div id='pos'>";
		echo "Purchase successful";
		echo"</div>";

        $query4="DELETE FROM cart";
        mysqli_query($db,$query4);

        $url="../store/store.php";
		header('Location: ' . $url);
	}
	else
	{
		echo "error";
		$url="cart.php";
		header('Location: ' . $url);
	}

?>
