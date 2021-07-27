
<head>
	<title>Home Page</title>
  <style>
  <?php include "css/style.css" ?>
	<?php include "css/index_style.css" ?>
 </style>
 <script type="text/javascript" src="btn-back-to-top.js"></script>
</head>

<body class="grey lighten-4">
	<html lang="en">
	<head>
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Mpaoulo</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="index.php">Home</a></li>
	      <li><a href="services.php">Services</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<?php if (isset($_SESSION["username"])): ?>
					 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				<?php endif ?>

	    </ul>

	      <form  action="#" method="post">
								<div id="search">
	        <fieldset>
	          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
	          <input type="submit" name="go" id="go" value="Search" />
	        </fieldset>
						    </div>
	      </form>

	  </div>
	</nav>
