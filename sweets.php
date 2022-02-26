<?php require_once('produktet.php')?>
<?php include 'config.php'?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sweets</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
<link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
</head>
<body>
<div class="sweets-div">
	<div class="header-div">
		<div class="logo-div">
			<a href="index.php"><img src="logo1.png" style="width:210px;height: 120px;"></a>
		</div>
		<div class="nav-list">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="sweets.php">Sweets</a></li>
				<li><a href="register.php">Register</a></li>
				<?php 
        if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
        ?>
        <li><a href="dashboard.php">Dashboard</a></li>
        <?php
        }
        ?>
			<?php
		 if(isset($_SESSION['aktiv']) && $_SESSION['aktiv']==true){
    ?>
        <li><a href="logout.php">Log out</a></li>
    <?php
    }
    ?>
			</ul>
		</div>
		<div class="texti2-div">
			<p class="wed" style="margin-left: 40%;">Custom Cakes</p>
			<p class="txtt5" style="margin-top: 7%;">Have a graduation, company event, or birthday coming up?
Add that extra flair by ordering our delicious custom
 image cupcakes and cookies!
			</p>
			<button class="btn1" style="margin-left: 440px; margin-top: -10%;"><a href="register.php">Order Now</a></button>
</div>
</div>
	</div>
	<div class="secondsector2-div">
	<p class="txt2">Our Top Sweets</p>
	<div class="team2-div">

			<?php 
				$produkti1 = new Produktet(1,'coffe.jpg','Coffee Cupcakes','3.80');
				echo $produkti1;
				$produkti2 = new Produktet(2,'fruit.jpg','Berry Pie','2.60');
				echo $produkti2;
				$produkti3 = new Produktet(3,'cakee.jpg','Red Velvet','2.80');
				echo $produkti3;
				$produkti4 = new Produktet(4,'caramel.jpg','Caramel Cake','2.30');
				echo $produkti4;
				$produkti5 = new Produktet(5,'peanut.jpg','Peanut Cookies','5.80');
				echo $produkti5;
				$produkti6 = new Produktet(6,'choco-orange.jpg','Choco Orange Cake','1.60');
				echo $produkti6;
				$produkti7 = new Produktet(7,'vanilla.jpg','Vanilla Pie','3.10');
				echo $produkti7;
				$produkti8 = new Produktet(8,'choc.jpg','Choco Sticks','4.60');
				echo $produkti8;
				$produkti9 = new Produktet(9,'filled.jpg','Filled Cookies','1.60');
				echo $produkti9;
			
				
			?>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>