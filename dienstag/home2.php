<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME</title>
	<link rel="stylesheet" type="text/css" href="styleszehn.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<marquee>GRIT MULTILEVEL NETWORKING SYSTEM.</marquee>
	<div class="navbar">
		<a href="includes/home.php">Joinings <i class="fa fa-sign-in" aria-hidden="true"></i></a>
		<a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
		<a href="services.php">Services</a>
		<a href="wallet.php">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
		<div class="dropdown">
		    <button class="dropbtn">Settings 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="#">Change Password</a>
		      <a href="index.php">Profile</a>
		    </div>
		</div>	 
	</div>

	<div id="outerdiv">
		<p id="demo" align="right" font="serif"></p>
		<script>
			const d = new Date();
			document.getElementById("demo").innerHTML = d;
		</script>
	</div>

	<form action=".php">
		<div class="nachbar">
			<a href="#" style="background-color: lightseagreen;" class="fund">FUND</a>
			<a href="#" style="background-color: mediumvioletred;" class="deposit">DEPOSIT</a>
			<a href="#" style="background-color: rosybrown;" class="inv">INVITATION</a>
			<a href="assignment.php" style="background-color: #c970ff;" class="faq">FAQ</a>
		</div>	
	</form>

	<div class="navbar">
		<a href="assignment.php">About us <i class="fa fa-globe"></i></a>
		<a href="">Business Plan</a>
		<a href="site.php">Site Map <i class="fa fa-globe"></i></a>
		<a href="joinings.php">Contact Us <i class="fa fa-fw fa-envelope"></i></a>
		<a href="joinings.php">Developer <i class="fa fa-connectdevelop" aria-hidden="true"></i></a>
	</div>	
</body>
</html>
