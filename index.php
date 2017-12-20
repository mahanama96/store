<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>
    D-GARMENTS
  </title>

  <!-- Latest compiled and minified CSS-->
  <link rel="stylesheet" href="css/bootstrap.min.css" >
   <link rel="stylesheet" href="css/font-awesome.min.css">

<style>
  #about{
    margin-top: 40px;
    margin-bottom: 30px;
  }
  #foot{
    background-color:antiquewhite;
  }
  .carousel-inner{
    height: 500px;
    margin-bottom: 20px;
  }
</style>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">D-GARMENT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about/about.php">About</a></li>
      <li><a href="application/application.php">Application</a></li>
      <li><a href="contact/contact.php">Contacts</a></li>
      <li><a href="user/login.php">Store</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="user/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>

<!--carousel-->
<div class="container" id="carousel1">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/image9.jpg" alt="Sawing" style="width:100%;">
        <div class="carousel-caption">
          <h3>Glamarous</h3>
          <p>Glamarous T-shirts</p>
        </div>
      </div>

      <div class="item">
       <img src="images/image3.jpg" alt="Equips" style="width:100%;">
        <div class="carousel-caption">
          <h3>Collection</h3>
          <p>Collection of best</p>
        </div>
      </div>

      <div class="item">
        <img src="images/image.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New machines</h3>
          <p>Use of new machines</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

<!--little about us-->
<div class="container" id="about">
  <h2>D-GARMENT products are produced with quality as the first priority...</h2>
  <p style="font-size:16px">D-GARMENT's staff is dedicated to ensuring that our customers realize outstanding value in all products and services we provide. To that end, we have invested in the latest technology to maximize efficiency. Engineering and modernization initiatives are part of how we do business!</p>
</div>

  <!-- footer -->
  <div class="footer" id="foot">
    <div class="container">
      <div class="agileinfo_footer_grids">
        <div class="col-md-3 agileinfo_footer_grid">
          <h3>Connect with us</h3>
          <p>You can connect with us via below social medias</p>
          <ul class="social-icons">
            <li><a href="#" class="icon-twitter"><i class="fa fa-twitter-square fa-move" style="font-size:32px;color:#0084b4"></i></a></li>
            <li><a href="#" class="icon-fb"><i class="fa fa-facebook-square" style="font-size:32px;color:#3b5998 "></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 agileinfo_footer_grid">
          <h3>Contact Info</h3><br/>
          <ul class="agileinfo_footer_grid_list">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>D-Garment, Wathuliyadda, <span>Uduwela.</span></li><br/>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:bandaraavivandb@gmail.com">bandaraavivandb@gmail.com</a></li><br/>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+94774903506</li><br/>
          </ul>
        </div>
        <div class="col-md-3 agileinfo_footer_grid">
          <h3>Navigation</h3><br/>
          <ul class="agileinfo_footer_grid_nav" style="font-size:16px">
            <li class="glyphicon glyphicon-menu-right" aria-hidden="true"><a href="../home/home.php">Home</a></li><br/>
            <li class="glyphicon glyphicon-menu-right" aria-hidden="true"><a href="../about/about.php">About Us</a></li><br/>
            <li class="glyphicon glyphicon-menu-right" aria-hidden="true"><a href="../application/application.php">Application</a></li><br/>
            <li class="glyphicon glyphicon-menu-right" aria-hidden="true"><a href="../contact/contact.php">Contacts</a></li><br/>
            <li class="glyphicon glyphicon-menu-right" aria-hidden="true"><a href="../login/login.php">Store</a></li><br/>
          </ul>
        </div>
        <div class="col-md-3 agileinfo_footer_grid">
          <img src="images/logo.png">
        </div>

        <div class="clearfix"> </div>
      </div>

    </div>
  </div>
<!-- //footer -->

</div>

  <!-- Java files-->

</body>
</html>
