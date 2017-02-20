<?php
session_start();
include "config.php";



if ($_SESSION['login_status']==0){ 
	header("location:index.php");
}


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
	
</head>

<body>

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
                            <a href="export.php" class="active"><i class="fa fa-table fa-fw"></i> Export</a>
                        </li>
                        <li>
                            <a href="maintenance.php"><i class="fa fa-edit fa-fw"></i> Maintenance</a>
                        </li>
                        <li>
                            <a href="administration.php"><i class="fa fa-edit fa-fw"></i> Administration</a>
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
		
		
		
		

        <div id="page-wrapper">
            <div class="row">
                </br>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div style="width:790px;margin-top:-1463px;" class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Export
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="background-image:url(img/map.gif);">
                
					
											
								<div class="form-group">
									<form method="post"  action="exportpdf.php"target="\"_blank\"">  
												

									        			
                                       
											
										<div class="formula" style="margin-left:40px;">
											<br>
												
                                            <select class="form-control" name="sensawi" style="width:311px;">
                                                <option value="sens1">Sens 1, vers TUNIS</option>
                                                <option value="sens2">Sens 2, vers BIZERTE</option>
												<option value="sens3">Sens 3</option>
                                            </select></br>
												
												<label>Période&nbsp;&nbsp;</label>
												<input class="kilwa" id="jours" type="radio" name="gender" value="jour" checked onchange="myFunction()">
												<label class="kilwa" for="jours">Jour</label>
												<input class="kilwa" id="mois" type="radio" name="gender" value="demi" onchange="myFunction()">
												<label class="kilwa" for="mois">15 Jours</label>
												<input class="kilwa" id="année" type="radio" name="gender" value="mois" onchange="myFunction()">
												<label class="kilwa" for="année">Mois</label>
												
												</br></br>
												
												<label>Date de début
												<input  style="width:200px;margin-left:110px;margin-top:-25px;" type="date" id="field1" name="debut" class="form-control" placeholder="MM/JJ/AAAA" required="required"  max="<?php echo date('Y-m-d'); ?>" onchange="myFunction()">
												</label></br></br><label>Date de fin
												<input style="width:200px;margin-left:110px;margin-top:-25px;" id="field2" type="text" name="fin" class="form-control" placeholder="MM/JJ/AAAA" >
												</label>
												</br>
												
												
												
												
												
												
												<script>
												function myFunction() {
												 
												var d = document.getElementById("field1").value;
												var d = new Date(d);
												var today = new Date();
												if(document.getElementById("jours").checked==true){
												d.setDate(d.getDate());
												today.setDate(today.getDate() - 1);}//document.getElementById("field1").max=
												if(document.getElementById("mois").checked==true){
												d.setDate(d.getDate() + 14);
												today.setDate(today.getDate() - 15);}
												if(document.getElementById("année").checked==true){
												d.setDate(d.getDate() + 29);
												today.setDate(today.getDate() - 30);}
												
												
												var dd = d.getDate();
												var mm = d.getMonth()+1;
												var yyyy = d.getFullYear();
												if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm}
												
												
												var dm = today.getDate();
												var mmm = today.getMonth()+1;
												var ym = today.getFullYear();
												if(dm<10){dm='0'+dm} if(mmm<10){mmm='0'+mmm}
												
												
													document.getElementById("field2").value = dd+'/'+mm+'/'+yyyy ;
													document.getElementById("field1").max = ym+'-'+mmm+'-'+dm ;
													
													
													
													

													
												}
												</script>
											
												</br></br>
											
												
												
											
												
											
										</div>
											
											
                            
											
											
									
                                        
									
										</br>
                                        <Button style="position:absolute;margin-top:-147px;width:200px;margin-left:430px;" type="submit" class="btn btn-primary btn-lg">Exporter</button>
                                    </form>	
									</div>
                                   
					
					
			</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->		
					
					
					
				
				<div style="width:300px;margin-top:-1463px;position:absolute;right:0px;" class="col-lg-4">
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
