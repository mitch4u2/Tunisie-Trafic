<?php
session_start();
include "config.php";



if ($_SESSION['login_status']==0){ 
	header("location:index.php");
}

$log=$_SESSION['login'];
	$pwd=$_SESSION['password'];

$r=mysqli_query($link,"select * from user where login='".$log."'and password='".$pwd."'");
$row = mysqli_fetch_array($r);

$alert="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$nom = test_input($_POST["field1"]);
											$prenom = test_input($_POST["field2"]);
											$email = test_input($_POST["field3"]);
											$tel = test_input($_POST["field4"]);
											$amdp = test_input($_POST["field5"]);
											$mdp = test_input($_POST["field6"]);
											$cmdp = test_input($_POST["field7"]);
											
											
										    if($mdp!=$cmdp){	
											
											$alert="<div class='alert alert-danger alert-dismissable' >
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                Confirmation Nouveau Mot de Passe Incorrecte.
                            </div>";
											}
											
											 if($amdp!=$row[2]){	
											
											$alert="<div class='alert alert-danger alert-dismissable' >
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                Mot de Passe Incorrecte.
                            </div>";
											}
											
											if(($mdp == $cmdp) && ($amdp == $row[2]) ){
											
											$alert="<div class='alert alert-success alert-dismissable' >
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                Enregistrement effectué avec succes.
                            </div>";
											
											$query=mysqli_query($link,"UPDATE user 
											SET nom = '$nom',
												prenom = '$prenom',
												email = '$email',
												password = '$mdp'
												WHERE login = '$log'");
											
											
											}
											
											
											}
											
											
											
											function test_input($data) {
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;}


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Export</title>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
		
		<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
    width:650px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"],
.form-style-10 input[type="reset"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="reset"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>
	
	
	<script>
        document.getElementById(alert).style.visibility = 'hidden';
        
    

</script>
	<script>
function validateForm() {
    var x = document.forms["myForm"]["field6"].value;
	 var y = document.forms["myForm"]["field7"].value;
    if (x!=y) {
        document.getElementById(alert).style.visibility = 'visible';
        return false;
    }
}
</script>
	
	
</head>

<body style="background-color:white;">

    <div style="background-color:white;" id="wrapper">

        <!-- Navigation -->
        <nav style="background-color:white;" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
				
				
				<div id="toppart">
					<ul>
						
						<li><a><img src="img/logo.jpg" width=250px height=110px /></a></li>
						<li style="margin-left:-130px;"><img style="margin-top:0px;margin-right:10px;"src="img/minr.jpg" width=390px height=110px>
						<img  src="img/flag.png" width=130px height=80px>
						</li>
						<li style="margin-left:126px;"><img src="img/logo2.jpg" width=230px height=110px /></li>
						
					</ul>
				</div>
				
                
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
        </nav>
		
		
		
		
		
		<!-- /.col-lg-8 -->
                <div style="width:270px;margin-top:20px;"class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-th-list fa-fw"></i> Menu
                        </div>
                        <!-- /.panel-heading -->
                        <div style="height:1400px;background-image:url(img/backlist.jpg);" class="panel-body">
                            
                        
			
			
			
					
                        <div style="width:238px;margin-top:20px;margin-left:-15px;" class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="acceuil.php" ><i class="fa fa-home fa-fw"></i> Acceuil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Visualisation<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                            <li>
                                    <a href="#">TUNIS <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 23 PK 3.5</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
                            <!-- /.nav-second-level -->
                        
							<li>
                                    <a href="#">BEN AROUS<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 22 PK 7.3</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
                            <!-- /.nav-second-level -->
                        
							<li>
                                    <a href="#">MANNOUBA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 5 PK 13.5</a>
                                        </li>
                                        <li>
                                            <a href="#">RN 7 PK 15</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">ARIANA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 25 PK 3.4</a>
                                        </li>
                                        <li>
										<a href="ariana.php">RN 8 PK 10.5</a>
										</li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">BEJA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 5 PK 61.7</a>
                                        </li>
                                        <li>
                                            <a href="#">RN 6 PK 43.3</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
							<li>
                                    <a href="#">JENDOUBA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 6 PK 69</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">EL KEF<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 17 PK 113.3</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">SILIANA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 4 PK 62.3</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">SOUSSE<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 1 PK 131.5</a>
                                        </li>
                                        <li>
                                            <a href="#">RR 82 PK 3.5</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">MONASTIR<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 92 PK 18.2</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">MAHDIA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 82 PK 65</a>
                                        </li>
                                        <li>
                                            <a href="#">RR 191 PK 29</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
							<li>
                                    <a href="#">SFAX<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 1 PK 255.5</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">KAIROUAN<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 2 PK 85</a>
                                        </li>
                                        <li>
                                            <a href="#">RN 3 PK 139</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">KASSERINE<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 17 PK 178</a>
                                        </li>
                                        <li>
                                            <a href="#">RN 13 PK 168.2</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							 <li>
                                    <a href="#">SIDI BOUZID<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 125 PK 0.5</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
							<li>
                                    <a href="#">GABES<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">D&eacute;viation N 1 PK 17</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							
							<li>
                                    <a href="#">MEDENINE<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">D&eacute;viation N 1 pk 4.5</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">TATAOUINE<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 19 PK 45</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">GAFSA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 3 PK 345</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">TOZEUR<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 3 PK 427.5</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
							<li>
                                    <a href="#">KEBILI<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RN 16 PK 115</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                             </li>
						
                           </ul> <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="export.php" ><i class="fa fa-table fa-fw"></i> Export</a>
                        </li>
                        <li>
                            <a href="maintenance.php"><i class="fa fa-edit fa-fw"></i> Maintenance</a>
                        </li>
                        <li>
                            <a class="active" href="administration.php"><i class="fa fa-edit fa-fw"></i> Administration</a>
                        </li>
                        						
						
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        
		</div>
                        <!-- /.panel-body -->
                    </div>
                    
                    
                </div>
                <!-- /.col-lg-4 -->
		
		
		
		

        <div class="form-style-10">
<h1>Administration<span>Gérer mon Compte</span></h1>
<form name="myForm" method="POST" onsubmit="return validateForm()">

	<?php echo $alert;?>
    <div class="section"><span>1</span>NOM &amp; Prenom</div>
    <div class="inner-wrap">
        <label>Nom <input type="text" name="field1" placeholder="<?php echo $row[3];?>"/></label>
        <label>Prenom <textarea name="field2" placeholder="<?php echo $row[4];?>"></textarea></label>
    </div>

    <div class="section"><span>2</span>Email &amp; Telephone</div>
    <div class="inner-wrap">
        <label>Address Email <input type="email" name="field3" placeholder="<?php echo $row[5];?>" /></label>
        <label>Numero Telephone <input type="text" name="field4" "/></label>
    </div>

    <div class="section"><span>3</span>Mot de Passe</div>
        <div class="inner-wrap">
        <label>Ancien Mot de Passe <input type="password" name="field5" /></label>
        <label>Nouveau Mot de Passe <input type="password" name="field6" /></label>
		<label>Confirmer Mot de Passe <input type="password" name="field7" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="Sign Up" />
	 <input type="reset" name="Sign Up" />
     <span class="privacy-policy">
     <input type="checkbox" >You agree to our Terms and Policy. 
     </span>
    </div>
</form>
</div>
    <!-- /#wrapper -->		
					
					
					
				
				<div style="width:300px;margin-top:-1008px;position:absolute;right:0px;" class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-plus-square fa-fw"></i> Détails
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                            <a href="#" class="list-group-item">
                                	 <img src="img/details1.jpg" width=207px height=170px />
                                </a><a href="#" class="list-group-item">
                                	 <img src="img/details2.jpg" width=207px height=170px />
                                </a><a href="#" class="list-group-item">
                                	 <img src="img/details3.png" width=207px height=170px />
                                </a>
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    
                </div>
                <!-- /.col-lg-4 -->
            
			
			
			

	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	
</body>

</html>