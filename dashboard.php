<?php
require_once 'inserto.php';
?>
<?php
require_once 'ProduktetDatabase.php';
?>
<?php
session_start()
?>
<html>
    <head>
        <title>Dashboard</title>
        <link href="http://fonts.cdnfonts.com/css/lemon-tuesday" rel="stylesheet">
    </head>
    <style> 
*{
    font-family: 'Lemon Tuesday', sans-serif;
}
html,body{
    padding:0;
    margin:0;
}
    .container{
        width:100%;
        min-height:100vh;
        box-sizing:border-box;
        overflow:hidden;
        background-image:url("pancakes.jpg");
        background-size:cover;
        background-position: center center;
    }
    .navbar{
        width:100%;
        display:flex;
        align-items:center;
    }
    .logo{
        width:150px;
        cursor:pointer;
        margin:30px 0;
    }
    nav{
        flex:1;
        text-align:right;
    }
    nav ul li{
        list-style:none;
        display:inline-block;
        margin-right:30px;
    }
    nav ul li a{
        text-decoration:none;
        color:black;
        font-size:14px;
    }
    li a:hover {
  background-color:rgb(205, 179, 146);
}
a:link{
	text-decoration: none;
	color: black;
}
a:visited {
    color: black;
  background-color: transparent;
  text-decoration: none;
}

.content-table {
border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
width: 100%;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
background-color: rgb(205, 179, 146);
color: black;
opacity: 0.7;
text-align: left;
font-weight: bold;
}

.content-table th,
.content-table td {
padding: 12px 15px;
}
@media only screen and (max-width:700px){
    nav ul{
        width:100%;
        position: absolute;
        top:5px;
        right:0;
    }
    nav ul li{
        display:block;
        margin-top:10px;
        margin-bottom:10px;
    }

}
</style>
<body>
<div>
    <div class="container">
    <div class="navbar">
    <img src="logo1.png" class="logo">
    <nav>
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
    </nav>
        </div>
        <table class="content-table">
<thead>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>Address</th>
</tr>
</thead>
<tbody>
    <?php 
    $n = new Inserto;
    $allUsers =  $n->readData();
    foreach($allUsers as $u): ?>
    <tr>
        <td><?php echo $u['firstname'];?></td>
        <td><?php echo $u['lastname'];?></td>
        <td><?php echo $u['addres'];?></td>
        <td><?php echo $u['email'];?></td>
        <td><a href="edit-user.php?id=<?php echo $u['email']; ?>">Edit</a></td>
        <td><a href="delete-user.php?id=<?php echo $u['email']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
<table class="content-table">
<thead>
<tr>
<th>Foto</th>
<th>Emri</th>
<th>Qmimi</th>
</tr>
</thead>
<tbody>
    <?php 
    $p = new ProduktetDatabase;
    $allProducts =  $p->readData();
    foreach($allProducts as $produkt): ?>
    <tr>
        <td><?php echo $produkt['fotoProduktit'];?></td>
        <td><?php echo $produkt['emriProduktit'];?></td>
        <td><?php echo $produkt['qmimiProduktit'];?></td>
        <td><a href="delete-user.php?id=<?php echo $produkt['produktetId']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
    </div>

</body>
</html>