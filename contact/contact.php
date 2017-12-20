<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>
    D-GARMENTS
  </title>

  <!-- Latest compiled and minified CSS-->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <style>

  #foot{
  	background-color:antiquewhite;
  }
  #head{
  	padding-bottom: 15px;
  }
  #contact_form{
    margin-top: 20px;
  }
  input[type=text], select, textarea {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    /*background-color: e6e6e6;*/
}

input[type=submit] {
    width: 70%;
    background-color: teal;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[name=message]{
  padding-bottom: 50px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 20%;
  margin-left: 100px;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 12px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 20%;
}

.button:hover {
  background-color: #555;
}

#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 100px;
    background-color: #4CAF50;
}

#blog {
    top: 160px;
    background-color: #2196F3;
}

#projects {
    top: 220px;
    background-color: #f44336;
}

#contact {
    top: 280px;
    background-color: #555
}

</style>
</head>
<body>
<!--navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">D-GARMENT</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../about/about.php">About</a></li>
      <li><a href="../application/application.php">Application</a></li>
      <li class="active"><a href="../contact/contact.php">Contacts</a></li>
      <li><a href="../user/login.php">Store</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<h2>Meet our team</h2>
<br>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/avatar3.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mr.Bandara</h2>
        <p class="title">CEO & Founder</p>
        <p>Leader with a great vision</p>
        <p>bandara@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/avatar2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mrs.Sepalika</h2>
        <p class="title">Main Designer</p>
        <p>Very talented designer with great eye</p>
        <p>sepalika1@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/avatar1.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Ms.Mary</h2>
        <p class="title">Assistant Manager</p>
        <p>Young and very talented</p>
        <p>maryh@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="container" id="contact_form">
<form action="contact_process.php" method="POST">
  <fieldset>
    <legend><h2>Contact Us:</h2></legend>
    <p style="color:red;">* required field</p><br/>
    <label><font style="color:red;">* </font>First name:</label><br/>
    <input type="text" name="firstname" placeholder="Your first name" required><br/>
    <label><font style="color:red;">* </font>Last name:</label><br/>
    <input type="text" name="lastname" placeholder="Your last name" required><br/>
    <label><font style="color:red;">* </font>Email:</label><br/>
    <input type="text" name="email" placeholder="Your email" required><br/>
    <label>Message:</label><br/>
    <input type="text" name="message" placeholder="Your message here...">
    <br/><br/>
    <input type="submit" value="Submit">
    </fieldset>
</form>
</div>
</div>
<div class="container" id="map">
<div id="googleMap" style="width:50%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(7.255394,80.6410025),
    zoom:12,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZPraLqVgUnGilkQ1nrbkWBeNIC6-JJeo&callback=myMap"></script>
</div>
</body>
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
</html>
