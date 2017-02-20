<?php
session_start();
include "config.php";


if ($_SESSION['login_status']==0){ 
	header("location:index.php");
}

$r=mysqli_query($link,"select * from trafic_details");
		
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tunisie Trafic</title>

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
	
	
	<!-- MAP -->
	 <script src="https://maps.googleapis.com/maps/api/js"></script>

<script>

function initialize() {
  var mapOptions = {
    zoom: 8,
	mapTypeId:google.maps.MapTypeId.HYBRID,
    center: new google.maps.LatLng(36.0605094,9.6376697)
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
								
								

  setMarkers(map, beaches);
}

/**
 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.
 */
var beaches = [
  ['Kairouan', 35.6729716,10.0954277, 4],
  ['Ariana', 36.9815039,10.1109383, 5],
  ['Beja', 36.7297099,9.1876022, 3],
  ['Ben Arous', 36.7368455,10.2447127, 2],
  ['Bizerte',37.2751314,9.8627465, 1],
  ['Gabes',33.889279,10.1026582, 1],
  ['Gafsa',34.4285913,8.7736605, 1],
  ['Jendouba',36.503287,8.7788915, 1],
  ['Kasserine',35.1702629,8.824768, 1],
  ['Kebili',33.362645,8.8682321, 1],
  ['Kef',36.1668612,8.7023212, 1],
  ['Mahdia',35.5047323,11.052057, 1],
  ['Manouba',36.8098845,10.0776601, 1],
  ['Medenine',33.346623,10.4912567, 1],
  ['Monastir',35.7542469,10.8103912, 1],
  ['Nabeul',36.4508418,10.7122493, 1],
  ['Sfax',34.7571402,10.7406378, 1],
  ['Sidi Bouzid',35.0363896,9.4770377, 1],
  ['Siliana',36.0868053,9.3652439, 1],
  ['Sousse',35.8293446,10.6204533, 1],
  ['Tataouine',32.9245831,10.442505, 1],
  ['Tozeur',33.9186805,8.1198406, 1],
  ['Tunis',36.794883,10.1432776, 1],
  ['Zaghouan',36.4088762,10.1362521, 1],
  
];

function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  var image = {
    url: 'img/car.png',
	// This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(50, 52),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(0, 32)
  };
  // Shapes define the clickable region of the icon.
  // The type defines an HTML &lt;area&gt; element 'poly' which
  // traces out a polygon as a series of X,Y points. The final
  // coordinate closes the poly by connecting to the first
  // coordinate.
  var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
    });
  }
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
	<!-- END MAP -->

</head>

<body>

    <div style="background-color:white;"id="wrapper">

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
                            <a href="acceuil.php" class="active"><i class="fa fa-home fa-fw"></i> Acceuil</a>
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
                <div style="width:790px;margin-top:-1463px;"  class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-home fa-fw"></i> Acceuil
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div id="map-canvas" style="width:730px;height:820px;"></div>
				
						</div>
                        <!-- /.panel-body -->
                    </div>
                    
                   
                </div>
                <!-- /.col-lg-8 -->
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
