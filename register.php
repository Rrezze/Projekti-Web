<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
       <link rel="stylesheet" type="text/css" href="style.css?v=<?=$version?>">
<link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
    </head>
    <body>
        <div class="register-div">
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
<div class="main2">
    <h1 class="registerform">Register Form</h1>
    <p class="reg">If you aren't already registered</p>
    <form>
        <input id="name" type="text" placeholder="Enter Firstname" required><br><br>
         <input id="lastname" type="text" placeholder="Enter Lastname" required><br><br>
         <input class="address" type="text" placeholder="Enter address" required><br><br>
    <input class="email2" type="email" placeholder="Enter email"><br><br>
    <input id="password2" type="password" placeholder="Enter password" required><br><br>
    <button class="btnregister" onclick="return regex()">Submit</button>
</form>
</div>
    </div>
    <div class="login-div">
    <p class="txt6">If you are already registered:</p>
<div class="main">
    <h1 class="loginform">Login Form</h1>
    <form>
    <input class="email" type="email" name="email" placeholder="Enter email" required><br><br>
    <input id="password" type="password" placeholder="Enter password" required><br><br>
    <button class="btn" onclick="return regex2()">Log In</button>
</form>
</div>
</div>
    </body>
    <?php include 'footer.php' ?>
    <script type="text/javascript">
        
function regex(){

    var nameinput = document.getElementById('name').value;
    var lnameinput = document.getElementById('lastname').value;
    var inputi = document.getElementById('password2').value;

    var passWordregexi = /^[A-Z]{1}[a-z]{2,}\d{3}$/;
    var nameregexi = /^[A-Z]{1}[a-z]{1,}$/;
    var lnameregexi = /^[A-Z]{1}[a-z]{1,}$/;

    var testo1 = passWordregexi.test(inputi);
    var testo2 = nameregexi.test(nameinput);
    var testo3 = lnameregexi.test(lnameinput);
    
    if(testo2 == false){
       alert("Emri duhet te filloje me nje shkronje te madhe dhe duhet te perdoren vetem shkronja");
       return false;
    }else if(testo3 == false){
        alert("Mbiemri duhet te filloje me nje shkronje te madhe dhe duhet te perdoren vetem shkronja");
        return false;
    }else if(testo1 == false){
        alert("Passwordi duhet te filloje me shkronje te madhe dhe te mbaroje me numer");
        return false;
    }else{
        return true;
    }
}

    function regex2(){

    var inputi2 = document.getElementById('password').value;
    var passWordregexi2 = /^[A-Z]{1}[a-z]{2,}\d{3}$/;
    var testoo = passWordregexi2.test(inputi2);
if(testoo){
    return true;
    }else{
        alert("Passwordi duhet te filloje me shkronje te madhe dhe te mbaroje me numer");
        return false;
    }
    }

    </script>
</body>
</html>
</html>