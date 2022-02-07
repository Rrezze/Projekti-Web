<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
<link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
</head>
<body>
<div class="about-div">
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
		<div class="texti2-div">
			<p id="wed2" style="margin-left: 23%;">Welcome To Neolor</p>
			<p class="txtt5" style="margin-top: 7%;">Every cake made by Neolor is a fresh, stylish and yummy dessert
but the most important is that it is YOUR cake, made specially for you,
 in your favorite colors, with selected fillings and flavors.
Have yourself a tasty little holiday!
			</p>
</div>
</div>
	</div>
	<div class="member-div">
	<div class="center2">
		<div class="picture1-div">
			<img onclick="slider()" id ="imazhi1" src="foto.jpg" style="width:160px; height: 160px; margin-left:210px;">
			<p class="txt15">For more than 5 years, Neolor has been
creating sweet masterpieces with simple,
organic ingredients and absolute love for desserts.<br>
Neolor is a soulful place where you can
 always order your perfect custom dessert for any occasion.</p>
		</div>
</div>
</div>
</body>
<?php include 'footer.php' ?>
    <script src="slider.js?v=<?=$version?>"></script>
    </html>