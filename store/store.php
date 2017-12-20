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

  <title>D-GARMENT | Shop</title>

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
           <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "&nbsp;".$_SESSION['login_user']; ?>
           </button>

           <ul class="dropdown-menu">
           <li><a href="../user/profile.php">Profile</a></li>
           <li><a href="../cart/cart.php">Shopping Cart</a></li>

           </br>
           <li class="divider"></li>
           <li><a href="../user/logout.php">Logout</a></li>
           </ul>


         </div>
     </ul>

   </div>
 </nav>


</br></br></br>
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <a onclick="window.location='../index.php';" class="lead">Tunes.lk</p></a>
            <div class="list-group">
                <form method="POST">
        <input type="text" class="form-control" name="searchs" placeholder="Search by item" >
        </br>

        <input type="text" class="form-control" name="searcha" placeholder="Search by size" >
        </br>
        <input type="submit" value="Search" class="btn btn-success btn-sm">
      <form>
            </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="img/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="img/3.jpg" alt="">
                            </div>
            <div class="item">
                                <img class="slide-image" src="img/4.jpg" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

<!-- Search  and Display items_______________________________________________________________________________ -->

        <div class="row">
            <?php

      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
      $skey1=$_POST['searchs'];
      $skey2=$_POST['searcha'];

      $querys="SELECT * FROM items WHERE sname LIKE '%$skey1%' OR aname LIKE'%skey2%'";
      $results=mysqli_query($db,$querys);

      while($row1=mysqli_fetch_array($results))
      {
      echo "
                <div class='col-sm-4 col-lg-4 col-md-4'>
                    <div class='thumbnail'>
                        <img src='img/music.png'>
                        <div class='caption'>

                            <h4 class='pull-right'>$ " . $row1[5] . " </h4>
                            <h4>" . $row1[1] . " </a>
                            </h4>
            <h6> By " . $row1[2] . "
                            </h6>
            <h6> Genre :  " . $row1[4] . "
                            </h6>
                            <p>it was record live at the mandalay Bay Events center.</p>
            <input type='submit' class='btn btn-success' value='Add to cart'>
          </div>
                        </br>
                    </div>
                </div>";
      }

      }
      else
      {
      $query1="Select * from items";
      $result1=mysqli_query($db,$query1);

      while($row1=mysqli_fetch_array($result1))
      {
      echo "
                <div class='col-sm-4 col-lg-4 col-md-4'>
                    <div class='thumbnail'>
                        <img src='img/music.png'>
                        <div class='caption'>

                            <h4 class='pull-right'>$ " . $row1[5] . " </h4>
                            <h4>" . $row1[1] . " </a>
                            </h4>
            <h6> By " . $row1[2] . "
                            </h6>
            <h6> Genre :  " . $row1[4] . "
                            </h6>
                            <p>it was record live at the mandalay Bay Events center.</p>
            <a class='btn btn-success'  role='button' href='../cart/add.php?" . $row1[0] . "'>Add to Cart </a>
          </div>
                        </br>
                    </div>
                </div>";
      }
      }
             ?>



            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<div class="container">



</body>
