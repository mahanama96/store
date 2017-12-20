<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		D-GARMENTS
	</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
<style>
h1,h2,label,p{
    color:e6e6e6;
}
input[type=text], select {
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

input[type=submit]:hover {
    background-color: #45a049;
}
body{
    background-image: url("images/image4.jpg");
}
div form{
    border-radius: 5px;

    padding: 20px;
}
header{
    border-radius: 5px;
    padding-top: 10px;
    padding-left: 10px;
    margin-left: 15px;
    margin-right: 15px;
}
#homelink{
    float: right;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    input[type=submit],input[type=text] {
       width: 100%;
    }
}
#foot{
    background-color:antiquewhite;
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
      <li class="active"><a href="../application/application.php">Application</a></li>
      <li><a href="../contact/contact.php">Contacts</a></li>
      <li><a href="../user/login.php">Store</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
</nav>
     <header>
        <h1>Apply Online</h1>
        <p style="font-size: 20px">send your application to us online and we will send you a an email regarding your applied position.</p>
        <!--home button-->
        <a href="../home/home.php" class="btn btn-info btn-lg" id="homelink">
          <span class="glyphicon glyphicon-home" id="homebtn"></span> Home
        </a>
    </header>
<div class="container-fluid">
<form action="process.php" method="POST">
	<fieldset>
    <legend><h2>Online Application:</h2></legend>
    <p style="color:red;">* required field</p><br/>
    <label><font style="color:red;">* </font>First name:</label><br/>
    <input type="text" name="firstname" placeholder="Your first name" required><br/>
    <label><font style="color:red;">* </font>Last name:</label><br/>
    <input type="text" name="lastname" placeholder="Your last name" required><br/>
    <label><font style="color:red;">* </font>Email:</label><br/>
    <input type="text" name="email" placeholder="Your email" required><br/>
    <label>Gender:</label><br/>
    <input type="radio" name="gender" value="male" checked><font style="color:white;">Male</font><br/>
    <input type="radio" name="gender" value="female"><font style="color:white;">Female</font><br/><br/>
    <label>Position:</label><br/>
    <select name="Position">
	         <option value="mo">Machine operator</option>
	         <option value="am">Assistant Manager</option>
	         <option value="c">Collar</option>
	         <option value="b">Buttons</option>
	</select><br/><br/>
    <input type="submit" value="Submit">
    </fieldset>
</form>
</div>
</div>
  <!-- footer -->
  <div class="footer" id="foot">
    <div class="container">
      <div class="agileinfo_footer_grids">
        <div class="col-md-3 agileinfo_footer_grid">
          <h3>Connect with us</h3>
          <p1>You can connect with us via below social medias</p1>
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
</body>
</html>
