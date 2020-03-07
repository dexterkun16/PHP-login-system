<?php
    
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="author" content="Your Name">
	<meta name="description" content="Example description">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="">
	<link rel="icon" type="image/x-icon" href=""/>
</head>

<body>
	<header></header>
   
   <a href="logout.php">Log out</a>
   
    <main><h1>nice! you are loged in <?php echo $_SESSION['username']; ?></h1></main>
	<footer></footer>
	<script type="text/javascript" src=""></script>
</body>

</html>