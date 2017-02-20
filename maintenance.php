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
                            <a href="export.php"><i class="fa fa-table fa-fw"></i> Export</a>
                        </li>
                        <li>
                            <a  class="active" href="maintenance.php"><i class="fa fa-edit fa-fw"></i> Maintenance</a>
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
		
		
		
		
		
		
		
		
		<div id="page-wrapper" style="margin-top:-500px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Maintenance</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="panel panel-default" style="margin-top:-1400px;">
                        <div class="panel-heading">
                            Liste des equipements
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Localisation</th>
                                            <th>Route</th>
                                            <th>PR</th>
                                            <th>Recueil</th>
											<th>Type dequipement</th>
											<th>Mise en service</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>POSTE1</td>
                                            <td>ARIANA</td>
                                            <td>RN8</td>
                                            <td class="center">10.5</td>
                                            <td align="center"class="center"><img src="img/gprs.png" width="60" height="20"/></td>
											<td>MAJ3220</td>
											<td>1 Janvier 2015</td>
                                        </tr>
										
										
										 <tr class="odd gradeX">
                                            <td>POSTE2</td>
                                            <td>KAIROUAN</td>
                                            <td>RN2</td>
                                            <td> 85</td>
                                            <td align="center"class="center"><img src="img/gprs.png" width="60" height="20"/></td>
											<td>MAJ3220</td>
											<td>1 Janvier 2015</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>POSTE3</td>
                                            <td>SFAX</td>
                                            <td>RN1</td>
                                            <td> 255.5</td>
                                            <td align="center"class="center"><img src="img/gprs.png" width="60" height="20"/></td>
											<td>MAJ3220</td>
											<td>1 Janvier 2015</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>POSTE4</td>
                                            <td>SOUSSE</td>
                                            <td>RN1</td>
                                            <td> 131.5</td>
                                            <td align="center"class="center"><img src="img/gprs.png" width="60" height="20"/></td>
											<td>MAJ3220</td>
											<td>1 Janvier 2015</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
										<tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
                                       <tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr><tr class="odd gradeX">
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td>vide</td>
                                            <td> vide</td>
                                            <td>vide</td>
											<td>vide</td>
											<td>vide</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
		
		
		
		
		
		
		

        
					
					
				
			
            
			
			
			

	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
	<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	 <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
	
	
</body>

</html>
