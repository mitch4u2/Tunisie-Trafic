<?php
session_start();
include "config.php";
$error=" ";
if (isset($_POST['submit'])){
	$log=$_POST['login'];
	$pwd=$_POST['password'];

	$r=mysqli_query($link,"select * from user where login='".$log."'and password='".$pwd."'");
	if($row=mysqli_fetch_array($r)){
		header("location:acceuil.php");
		$_SESSION['login_status']=1;
		$_SESSION['login']=$log;
		$_SESSION['password']=$pwd;
		}
	else{ $error="Login ou Mot De Passe INCORRECTE";$_SESSION['login_status']=0;}
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Tunisie Trafic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/supersized.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
		<h1>Login</h1></br>
		
		
            <form id="loginform" class="" action="index.php" method="post" >
			<h2 style="color:red;"><?php echo $error;?></h2>
                <input type="text" name="login" class="username" placeholder="Username">
                <input type="password" name="password" class="password" placeholder="Password">
                <button type="submit" name="submit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

