<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Neolor</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
<link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
                </head>
<body>
<div class="brown-div">
	<div class="header-div">
		<div class="logo-div">
			<a href="index.php"><img src="logo1.png" style="width:210px;height: 120px;"></a>
		</div>
		<div class="nav-list">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="sweets.php">Sweets</a></li>
				<li><a href="contacts.php">Register</a></li>
			</ul>
		</div>
	</div>
	<div class="content-div">
		<div class="txt-btn">
		<h1 class="txt1" style="color: rgb(205, 179, 146);">Custom Cakes</h1>
		<button class="btn1"><a href="about.php">Our Story</a></button>
	</div>
	</div>
</div>
<div class="secondsector-div">
	<p class="txt2">Choose Your Sweets</p>
	<div class="team-div">
		<div class="teams1-brand">
			<img src="choco-cake.jpg">
			<p class="p1">Cakes</p>
			<a href="sweets.php"><p style="font-size: 15pt;" class="p2">See More</p></a>
		</div>
		<div class="teams1-brand">
			<img src="cupcake.jpg">
			<p class="p1">Cupcakes</p>
			<a href="sweets.php"><p style="font-size: 15pt;" class="p2">See More</p></a>
		</div>
		<div class="teams1-brand">
			<img src="cookies.jpg">
			<p class="p1">Cookies</p>
			<a href="sweets.php"><p style="font-size: 15pt;" class="p2">See More</p></a>
		</div>
			
		</div>
	</div>
		<div class="light-brown-div">
			<div class="inner-div">
		<div class="pic-div">
			<img src="cupcakes2.png">
		</div>
		<div class="text-div">
			<p class="txt2">Order from us</p>
			<p class="txt3">Have a graduation, company event, or birthday coming up?<br>
Add that extra flair by ordering our delicious<br> custom
 image cupcakes and cookies!
			</p>
			<button class="btn1"><a href="contacts.php">Order Now</a></button>
		</div>
	</div>
	</div>
	<div class="white-div">
	<div class="center">
		<div class="picture-div">
			<img src="wedding-cake.jpg" style="width:400px; height: 573px;">
		</div>
		<div class="texti-div">
			<p class="wed">Wedding Cake</p>
			<p class="txt5" style="margin-left:40%;">Have a graduation, company event, or birthday coming up?<br>
Add that extra flair by ordering our delicious<br> custom
 image cupcakes and cookies!
			</p>
			<button class="btn1" style="margin-left: 310px;"><a href="contacts.php">Order Now</a></button>
		</div>
</div>
</div>

 <?php include 'footer.php' ?>
</body>
</html>