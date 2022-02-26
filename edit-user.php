<?php
require_once 'inserto.php';
if(isset($_GET['id'])){
    $useriId=$_GET['id'];
}

$user = new Inserto;
$currentUser = $user->edit($useriId);

if(isset($_POST['submit'])){
    $user->update($_POST,$useriId);
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
       <link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
<link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
<style>
    body,html{
        margin:0;
        padding:0;
    }
    .register-div{
	    background-image: url("fotoo.jpg");
        min-height:100vh;
        box-sizing:border-box;
        overflow:hidden;
        background-size:cover;
        background-position: center center;
}
        .main2{
			background-color: white;
			opacity: 0.9;
			border: 1px white solid;
			max-width: 530px;
			height: 380px;
			padding: 20px 20px;
			margin: 40px auto 40px auto;
			border-radius: 25px;
			text-align: center;
			margin-top:140px;
		}
		.addres{
			background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 500px;
			height:25px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;
		}
		.email2{
			background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 500px;
			height:25px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;
		}
		#password2{
			background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 500px;
			height:25px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;

		}
		.btnregister{
			background-color: rgb(155, 30, 45);
			border-radius: 25px;
			border: white solid;
			width: 268px;
			height:45px;
			font-size: 12pt;
			padding: 10px;
			color: white;
			font-family: 'Lemon Tuesday', sans-serif;
}
		#name{
			background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 500px;
			height:25px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;

		}
		#lastname{
			background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 500px;
			height:25px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;
		}
		.reg{
			font-family: 'Lemon Tuesday', sans-serif;
			margin-bottom: 10px;
		}
        #roli{
            background-color: rgb(206, 190, 170);
			border-radius: 25px;
			border: white solid;
			width: 200px;
			height:10px;
			font-size: 12pt;
			padding: 10px;
			font-family: 'Lemon Tuesday', sans-serif;
        }

</style>
    </head>
    <body>
        <div class="register-div">
<div class="main2">
    <form method = "POST">
        <input id="name" type="text" placeholder="Enter Firstname" name = "firstname" value="<?php echo $currentUser['firstname'];?>" required><br><br>
         <input id="lastname" type="text" placeholder="Enter Lastname" name = "lastname" value="<?php echo $currentUser['lastname'];?>" required><br><br>
         <input class="addres" type="text" placeholder="Enter address" name = "addres" value="<?php echo $currentUser['addres'];?>" required><br><br>
    <input class="email2" type="email" name = "email" placeholder="Enter email" value="<?php echo $currentUser['email'];?>"><br><br>
    <input id="password2" name = "passwordi" type="password" placeholder="Enter password" value="<?php echo $currentUser['upassword'];?>" required><br><br>
    <select name="roli" id="roli" name="roli">
        <option value="1">Admin</option>
        <option value="0">User</option>
    </select>
    <br>
    <button class="btnregister" name="submit" value="Update">Update</button>
</form>
    </div>
</div>
</body>
</html>
</html>