<?php
session_start();
include "config.php";
$back1=$back2=$back3="success";
if ( (! isset($_POST['sens1'])) && (! isset($_POST['sens2'])) && (! isset($_POST['sens3'])) ) 
{
$deb=2;
$fingr=170;
$periodgr="demi";
$_SESSION['date']=$fingr;

}

if ($_SESSION['login_status']==0){ 
	header("location:index.php");
}


									$check='checked';
									$check1='';
									
									
									
									if (isset($_POST['sens1'])) 
										{
									$check='';
									$check1='checked';
									$deb=$_SESSION['dadeb'];
									$fingr=$_SESSION['dafin'];
									$periodgr=$_SESSION['period'];
									$back1="info";
									}
									
									if (isset($_POST['sens2'])) 
										{
									$check='';
									$check1='checked';
									$deb=$_SESSION['dadeb'];
									$fingr=$_SESSION['dafin'];
									$periodgr=$_SESSION['period'];
									$back2="info";
									}
									
									if (isset($_POST['sens3'])) 
										{
									$check='';
									$check1='checked';
									$deb=$_SESSION['dadeb'];
									$fingr=$_SESSION['dafin'];
									$periodgr=$_SESSION['period'];
									$back3="info";
									}									

$r=mysqli_query($link,"select * from trafic_details ORDER BY `Id_trafic` DESC LIMIT 1");  
$b=mysqli_query($link,"select * from trafic_details_h");
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
	<link href="css/plugins/metisMenu/metisMenu.css" rel="stylesheet">

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
	
	
	
	<!-- MAP -->
	 <script src="https://maps.googleapis.com/maps/api/js"></script>

<script>

function initialize() {
  var mapOptions = {
    zoom: 10,
	mapTypeId:google.maps.MapTypeId.HYBRID,
    center: new google.maps.LatLng(36.8688581,10.1703599)
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
  ['Ariana', 36.9815039,10.1109383, 5]
  
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
    url: 'img/sport.png',
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

    <div style="background-color:white;" id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:white;">
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
                            <a href="acceuil.php"><i class="fa fa-home fa-fw"></i> Acceuil</a>
                        </li>
                        <li>
                            <a href="#" class="active"><i class="fa fa-bar-chart-o fa-fw"></i> Visualisation<span class="fa arrow"></span></a>
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
                                    <a href="#" class="active">ARIANA<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">RR 25 PK 3.4</a>
                                        </li>
                                        <li>
										<a href="ariana.php" class="active">RN 8 PK 10.5</a>
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
                <div style="width:790px;margin-top:-1463px;" class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Visualisation
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                
					
				
				
							<section class="ac-container">
				<div>
					<input class="gon" id="ac-1" name="accordion-1" type="radio" <?php echo $check;?> />
					<label class="mario" for="ac-1">VISUALISATION EN TEMPS REEL</label>
					
						<article class="ac-small">
							<table style="width:100%">
									<tr>
										<td><div id="map-canvas" style="margin-left:10px;margin-top:-19px;width:345px;height:475px;"></div></td>
										<td>
										
										<div class="col-lg-6"style="width:415px; margin-top:0px;">
                    
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
										<?php 
										if($row=mysqli_fetch_array($r)){
										  ?>
                                <table class="table table-striped table-bordered table-hover">
                                   
                                    <tbody>
									 
                                        <tr style="background-color:#006699;">
										<th style="color:white;">DEER</th>
                                       <td style="color:white;"> <b><?php echo $row[1]; ?></td>
                                        </tr>
										<tr style="background-color:#991821;">
										<th style="color:white;">Date</th>
                                        <td style="color:white;"><b><?php echo $row[2]; ?></td>
                                        </tr>
										<tr style="background-color:#36752D;">
										<th style="color:white;">Voie1</th>
                                       <td></td>
                                        </tr>
										<tr>
										<th>Tous Véhicules</th>
                                       <td><b><?php echo $row[3]; ?></td>
                                        </tr>
										<tr>
										<th>Vitesse moyenne(km/h)</th>
                                       <td><b><?php echo $row[4]; ?></td>
                                        </tr>
										<tr>
										<th>Poids Lourds</th>
                                       <td><b><?php echo $row[5]; ?></td>
                                        </tr>
										<tr style="background-color:#36752D;">
										<th style="color:white;">Voie2</th>
                                       <td></td>
                                        </tr>
										<tr>
										<th>Tous Véhicules</th>
                                      <td><b><?php echo $row[6]; ?></td>
                                        </tr>
										<tr>
										<th>Vitesse moyenne (km/h)</th>
                                       <td><b><?php echo $row[7]; ?></td>
                                        </tr>
										<tr>
										<th>Poids Lourds</th>
                                       <td><b><?php echo $row[8]; ?></td>
                                        </tr>
										<tr style="background-color:#652299;">
										<th style="color:white;">Supervision</th>
                                        <td></td>
                                        </tr>
										<tr>
										<th>Batterie (v)</th>
                                       <td><b><?php echo $row[9]; ?></b></td>
                                        </tr>
										<tr>
										<th>Niveau de récéption</th>
                                       <td><b><?php echo $row[10]; ?> &nbsp;
									   <?php if ($row[10]>=75) {
									   ?>
									   <img style="margin-top:-5px;"src="img/b1.jpg" width="25" height="25">
									   <?php }?>
									   
									   <?php if (($row[10]<75) && ($row[10]>50)) {
									   ?>
									   <img style="margin-top:-5px;" src="img/b2.jpg" width="25" height="25">
									   <?php }?>
									   
									   
									   <?php if (($row[10]<=50) && ($row[10]>25)) {
									   ?>
									   <img style="margin-top:-5px;" src="img/b3.jpg" width="25" height="25">
									   <?php }?>
									   
									   
									   <?php if ($row[10]<=25) {
									   ?>
									   <img style="margin-top:-5px;" src="img/b4.jpg" width="25" height="25">
									   <?php }?>
									   
									   
									   </td>
									   
                                        </tr>
                                        
                                    </tbody>
									
                                </table>
								<?php } ?>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    
                </div>
                <!-- /.col-lg-6 -->
										
										</td>		
										
									</tr>
									
									</table>
							
							
						</article>
						
					
				</div> 
				<div>
					<input class="gon" id="ac-2" name="accordion-1" type="radio" />
					<label class="mario"for="ac-2">SELECTIONNER LES PARAMETRES DES DONNÉES</label>
					<article class="ac-medium">
					
					
					
												
								<div class="form-group">
									<form method="post"  action="details.php"target="\"_blank\"">        
                                            <select multiple class="form-control" style="width:200px;height:180px;margin-top:30px;margin-left:20px;" required="required" name="sensawi">
                                                <option value="sens1">Sens 1, vers TUNIS</option>
                                                <option value="sens2">Sens 2, vers BIZERTE</option>
												<option value="sens3">Sens 3</option>
                                            </select>
											
										<div class="formula" style="margin-left:240px;margin-top:-176px;">
											
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
												d.setDate(d.getDate() + 30);
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
											
												<label>Vehicules&nbsp;&nbsp;</label>
												<input class="kilwa" id="Lourds" type="radio" name="der" value="lourds" checked>
												<label class="kilwa" for="Lourds">Lourdes </label>
												<input class="kilwa" id="Normal" type="radio" name="der" value="normal">
												<label class="kilwa" for="Normal">Légères</label>
												
											
												
											
										</div>
											
											
                            
											
											
									
                                        
									
										</br>
                                        <Button style="position:absolute;margin-top:-147px;width:150px;margin-left:580px;" type="submit" class="btn btn-primary btn-lg">AFFICHER</button>
                                    </form>	
									</div>
                                   
					
					
					
					
					
					</article>
				</div>
				
				<div>
					<input class="gon" id="ac-4" name="accordion-1" type="radio" <?php echo $check1;?> />
					<label class="mario" for="ac-4">AFFICHAGE DES GRAPHIQUES</label>
					<article class="ac-large">
					        <table style="width:700px;">
							<tr>
							<td><h4><small>SITE: </small> RN8 PK10, ARIANA</h4></td>
							<td><h4><small>SENS 1: </small>vers TUNIS</h4></td>
							<td></td>
							</tr>
							
							<tr>
							<td></td>
							<td><h4><small>SENS 2: </small>vers BIZERTE</h4></td>
							<td>
							<td><form method="post" action=""><input type="submit" name="sens1" value="Sens1" class="btn btn-<?php echo $back1;?>"></form></td>
							<td><form method="post" action=""><input type="submit" name="sens2" value="Sens2" class="btn btn-<?php echo $back2;?>"></form></td>
							<td><form method="post" action=""><input type="submit" name="sens3" value="Sens3" class="btn btn-<?php echo $back3;?>"></form></td>
							</td>
							</tr>
						
						
							
							</table>
						
						
						
						
						 <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a  href="#home"  data-toggle="tab">Statistique</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Supervision</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Temp Réel</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade  in active" id="home">
								</br>
                                    <?php
										include "config.php";
										$a=mysqli_query($link,"select * from trafic_details_h WHERE SUBSTR(date,1,10) BETWEEN '$deb' and '$fingr' ");
										?>
								
								
								<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											$k=0;
											
											$debit=0;
											$debit1=0;
											$debit2=0;
											$debit3=0;
											$debit4=0;
											
											
											$tab = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab2 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab3 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab4 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab5 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabHpl = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabHlg = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabHb = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabHv = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabHn = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											
											
											
											
											
											while($now = mysqli_fetch_array($a)){
											
										
										 
										 if (isset($_POST['sens1'])) 
										{
									$s1=($now[3]-$now[5]);
									$s2=$now[5];
									$s3=$now[4];
									}
									
									if (isset($_POST['sens2'])) 
										{
									$s1=($now[6]-$now[8]);
									$s2=$now[8];
									$s3=$now[7];
									}
									
									if (isset($_POST['sens3'])) 
										{
									$s1=(($now[3]-$now[5])+($now[6]-$now[8]));
									$s2=$now[5]+$now[8];
									$s3=($now[4]+$now[7])/2;
									}		
										 
										 
										 
										 if($i==0) {   
										
											
										 $cut1=substr("$now[2]",0,10);
										 $piriw = date("d-m-Y", strtotime($cut1));
										 $tab2[$k]=$piriw;
										
										 } 
										 
										
										 
										if ($i<24) {  
										
										$car=$s1;//s1
										$pld=$s2;//s2
										$batterie=$now[9];
										
										
										if($now[10]==NULL){
										$niveau=0;}
										if($now[10]!=NULL){
										$niveau=$now[10];}
										
										
										$s4=$now[9];
										$s5=$now[10];
										$vitesse=$s3;//s3
										$tabHlg[$i]=$batterie;
										$tabHpl[$i]=$niveau;
										$tabHv[$i]=$s3;
										$tabHb[$i]=$s1;
										$tabHn[$i]=$s2;
										$debit+=$car;
										$debit1+=$pld;
										$debit2+=$batterie;
										$debit3+=$niveau;
										$debit4+=$vitesse;
										$i++;
										}
										if($i==24) {
										$i=0; $tab[$k]=$debit/24;$tab1[$k]=$debit1/24;$tab3[$k]=$debit2/24;$tab4[$k]=$debit3/24;$tab5[$k]=$debit4/24;$debit=0;$debit1=0;$debit2=0;$debit3=0;$debit4=0;$k++;  
										
										} }
										?>
									
									
									<div id="dual_yyy_div" style="width: 950px; height: 500px;"></div>
	
								
								
								</div>
                                <div class="tab-pane fade" id="profile">
                                <div id="chart_div" style="width: 600px; height: 500px;margin-left:-125px;"></div>
								 		
								
							   </div>
                                <div class="tab-pane fade" id="messages">
                                 <div id="curve_chart" style="width: 900px; height: 500px;margin-left:-100px;"></div>
								  <div id="curve_chart1" style="width: 900px; height: 500px;margin-left:-100px;"></div>
								 </div>
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
						
						
						
						
						
                                
	  
						
						
						
					
					</article>
				</div>
			</section>
				
				
				
						</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
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

	
	
	
	
	  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	 
	
	<?php if($periodgr=="mois") { ?>
	 <script type="text/javascript">
	 
      
		
		 
	 google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',  <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',  <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',  <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',  <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',  <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',  <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',  <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',  <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',  <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab[10];?>,     <?php echo $tab1[10];?>],
		  ['<?php echo $tab2[11];?>',  <?php echo $tab[11];?>,     <?php echo $tab1[11];?>],
          ['<?php echo $tab2[12];?>',  <?php echo $tab[12];?>,     <?php echo $tab1[12];?>],
		  ['<?php echo $tab2[13];?>',  <?php echo $tab[13];?>,     <?php echo $tab1[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab[14];?>,     <?php echo $tab1[14];?>],
          ['<?php echo $tab2[15];?>',  <?php echo $tab[15];?>,     <?php echo $tab1[15];?>],
		  ['<?php echo $tab2[16];?>',  <?php echo $tab[16];?>,     <?php echo $tab1[16];?>],
          ['<?php echo $tab2[17];?>',  <?php echo $tab[17];?>,     <?php echo $tab1[17];?>],
		  ['<?php echo $tab2[18];?>',  <?php echo $tab[18];?>,     <?php echo $tab1[18];?>],
          ['<?php echo $tab2[19];?>',  <?php echo $tab[19];?>,     <?php echo $tab1[19];?>],
		  ['<?php echo $tab2[20];?>',  <?php echo $tab[20];?>,     <?php echo $tab1[20];?>],
          ['<?php echo $tab2[21];?>',  <?php echo $tab[21];?>,     <?php echo $tab1[21];?>],
          ['<?php echo $tab2[22];?>',  <?php echo $tab[22];?>,     <?php echo $tab1[22];?>],
		  ['<?php echo $tab2[23];?>',  <?php echo $tab[23];?>,     <?php echo $tab1[23];?>],
          ['<?php echo $tab2[24];?>',  <?php echo $tab[24];?>,     <?php echo $tab1[24];?>],
          ['<?php echo $tab2[25];?>',  <?php echo $tab[25];?>,     <?php echo $tab1[25];?>],
		  ['<?php echo $tab2[26];?>',  <?php echo $tab[26];?>,     <?php echo $tab1[26];?>],
          ['<?php echo $tab2[27];?>',  <?php echo $tab[27];?>,     <?php echo $tab1[27];?>],
		  ['<?php echo $tab2[28];?>',  <?php echo $tab[28];?>,     <?php echo $tab1[28];?>],
          ['<?php echo $tab2[29];?>',  <?php echo $tab[29];?>,     <?php echo $tab1[29];?>]
        ]);
		
		
		
		
		

        var options = {
          width: 730,
		 vAxis: {displayExactValues:true},
		
		  chart: {
            title: 'Nombre des voiture Lourd et legére',
			subtitle: 'du <?php echo $tab2[0]; ?> a <?php echo $tab2[29];?>'
			 
          },
          series: {
            0: { axis: 'VL' }, // Bind series 0 to an axis named 'distance'.
			
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_div'));
      chart.draw(data, options);
	  
	  
	  
	  
    };</script>
	
	
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'Vitesse Moyenne'],
          ['<?php echo $tab2[0];?>', <?php echo $tab5[0];?>],
          ['<?php echo $tab2[1];?>', <?php echo $tab5[1];?>],
          ['<?php echo $tab2[2];?>', <?php echo $tab5[2];?>],
		  ['<?php echo $tab2[3];?>', <?php echo $tab5[3];?>],
          ['<?php echo $tab2[4];?>', <?php echo $tab5[4];?>],
          ['<?php echo $tab2[5];?>', <?php echo $tab5[5];?>],
          ['<?php echo $tab2[6];?>', <?php echo $tab5[6];?>],
		  ['<?php echo $tab2[7];?>', <?php echo $tab5[7];?>],
          ['<?php echo $tab2[8];?>', <?php echo $tab5[8];?>],
          ['<?php echo $tab2[9];?>', <?php echo $tab5[9];?>],
		  ['<?php echo $tab2[10];?>', <?php echo $tab5[10];?>],
          ['<?php echo $tab2[11];?>', <?php echo $tab5[11];?>],
          ['<?php echo $tab2[12];?>', <?php echo $tab5[12];?>],
          ['<?php echo $tab2[13];?>', <?php echo $tab5[13];?>],
		  ['<?php echo $tab2[14];?>', <?php echo $tab5[14];?>],
          ['<?php echo $tab2[15];?>', <?php echo $tab5[15];?>],
          ['<?php echo $tab2[16];?>', <?php echo $tab5[16];?>],
		  ['<?php echo $tab2[17];?>', <?php echo $tab5[17];?>],
          ['<?php echo $tab2[18];?>', <?php echo $tab5[18];?>],
          ['<?php echo $tab2[19];?>', <?php echo $tab5[19];?>],
          ['<?php echo $tab2[20];?>', <?php echo $tab5[20];?>],
		  ['<?php echo $tab2[21];?>', <?php echo $tab5[21];?>],
          ['<?php echo $tab2[22];?>', <?php echo $tab5[22];?>],
          ['<?php echo $tab2[23];?>', <?php echo $tab5[23];?>],
		  ['<?php echo $tab2[24];?>', <?php echo $tab5[24];?>],
          ['<?php echo $tab2[25];?>', <?php echo $tab5[25];?>],
          ['<?php echo $tab2[26];?>', <?php echo $tab5[26];?>],
          ['<?php echo $tab2[27];?>', <?php echo $tab5[27];?>],
		  ['<?php echo $tab2[28];?>', <?php echo $tab5[28];?>],
          ['<?php echo $tab2[29];?>', <?php echo $tab5[29];?>]
          
		  
        ]);

        var options = {
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?> a <?php echo $tab2[29];?>',
		  width:950,
		  height:500,
		  colors:['#00CD00'],
		  hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
		  
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
	  google.load("visualization", "1.1", {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['jours', 'B','NR'],
          ['<?php echo $tab2[0];?>',    <?php echo $tab3[0];?>,      <?php echo $tab4[0];?>],
          ['<?php echo $tab2[1];?>',    <?php echo $tab3[1];?>,      <?php echo $tab4[1];?>],
          ['<?php echo $tab2[2];?>',    <?php echo $tab3[2];?>,      <?php echo $tab4[2];?>],
		  ['<?php echo $tab2[3];?>',    <?php echo $tab3[3];?>,      <?php echo $tab4[3];?>],
          ['<?php echo $tab2[4];?>',    <?php echo $tab3[4];?>,      <?php echo $tab4[4];?>],
          ['<?php echo $tab2[5];?>',    <?php echo $tab3[5];?>,      <?php echo $tab4[5];?>],
		  ['<?php echo $tab2[6];?>',    <?php echo $tab3[6];?>,      <?php echo $tab4[6];?>],
          ['<?php echo $tab2[7];?>',    <?php echo $tab3[7];?>,      <?php echo $tab4[7];?>],
          ['<?php echo $tab2[8];?>',    <?php echo $tab3[8];?>,      <?php echo $tab4[8];?>],
		  ['<?php echo $tab2[9];?>',    <?php echo $tab3[9];?>,      <?php echo $tab4[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab3[10];?>,     <?php echo $tab4[10];?>],
          ['<?php echo $tab2[11];?>',  <?php echo $tab3[11];?>,     <?php echo $tab4[11];?>],
		  ['<?php echo $tab2[12];?>',  <?php echo $tab3[12];?>,     <?php echo $tab4[12];?>],
          ['<?php echo $tab2[13];?>',  <?php echo $tab3[13];?>,     <?php echo $tab4[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab3[14];?>,     <?php echo $tab4[14];?>],
		  ['<?php echo $tab2[15];?>',  <?php echo $tab3[15];?>,     <?php echo $tab4[15];?>],
          ['<?php echo $tab2[16];?>',  <?php echo $tab3[16];?>,     <?php echo $tab4[16];?>],
          ['<?php echo $tab2[17];?>',  <?php echo $tab3[17];?>,     <?php echo $tab4[17];?>],
		  ['<?php echo $tab2[18];?>',  <?php echo $tab3[18];?>,     <?php echo $tab4[18];?>],
          ['<?php echo $tab2[19];?>',  <?php echo $tab3[19];?>,     <?php echo $tab4[19];?>],
          ['<?php echo $tab2[20];?>',  <?php echo $tab3[20];?>,     <?php echo $tab4[20];?>],
		  ['<?php echo $tab2[21];?>',  <?php echo $tab3[21];?>,     <?php echo $tab4[21];?>],
          ['<?php echo $tab2[22];?>',  <?php echo $tab3[22];?>,     <?php echo $tab4[22];?>],
          ['<?php echo $tab2[23];?>',  <?php echo $tab3[23];?>,     <?php echo $tab4[23];?>],
		  ['<?php echo $tab2[24];?>',  <?php echo $tab3[24];?>,     <?php echo $tab4[24];?>],
          ['<?php echo $tab2[25];?>',  <?php echo $tab3[25];?>,     <?php echo $tab4[25];?>],
          ['<?php echo $tab2[26];?>',  <?php echo $tab3[26];?>,     <?php echo $tab4[26];?>],
		  ['<?php echo $tab2[27];?>',  <?php echo $tab3[27];?>,     <?php echo $tab4[27];?>],
          ['<?php echo $tab2[28];?>',  <?php echo $tab3[28];?>,     <?php echo $tab4[28];?>],
          ['<?php echo $tab2[29];?>',  <?php echo $tab3[29];?>,     <?php echo $tab4[29];?>]
         
        ]);

         var options = {
          title: 'Tension Batterie et Niveau de reception du \n \t <?php echo $tab2[0];?> au <?php echo $tab2[29];?>',
          hAxis: {slantedText:true,
        slantedTextAngle:60},
          vAxis: {minValue: 0},
		  width: 940,
		  height:500
        };
		
		
		
		 

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		}
		</script>
	
	
	
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',  <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',  <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',  <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',  <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',  <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',  <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',  <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',  <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',  <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab[10];?>,     <?php echo $tab1[10];?>],
		  ['<?php echo $tab2[11];?>',  <?php echo $tab[11];?>,     <?php echo $tab1[11];?>],
          ['<?php echo $tab2[12];?>',  <?php echo $tab[12];?>,     <?php echo $tab1[12];?>],
		  ['<?php echo $tab2[13];?>',  <?php echo $tab[13];?>,     <?php echo $tab1[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab[14];?>,     <?php echo $tab1[14];?>],
          ['<?php echo $tab2[15];?>',  <?php echo $tab[15];?>,     <?php echo $tab1[15];?>],
		  ['<?php echo $tab2[16];?>',  <?php echo $tab[16];?>,     <?php echo $tab1[16];?>],
          ['<?php echo $tab2[17];?>',  <?php echo $tab[17];?>,     <?php echo $tab1[17];?>],
		  ['<?php echo $tab2[18];?>',  <?php echo $tab[18];?>,     <?php echo $tab1[18];?>],
          ['<?php echo $tab2[19];?>',  <?php echo $tab[19];?>,     <?php echo $tab1[19];?>],
		  ['<?php echo $tab2[20];?>',  <?php echo $tab[20];?>,     <?php echo $tab1[20];?>],
          ['<?php echo $tab2[21];?>',  <?php echo $tab[21];?>,     <?php echo $tab1[21];?>],
          ['<?php echo $tab2[22];?>',  <?php echo $tab[22];?>,     <?php echo $tab1[22];?>],
		  ['<?php echo $tab2[23];?>',  <?php echo $tab[23];?>,     <?php echo $tab1[23];?>],
          ['<?php echo $tab2[24];?>',  <?php echo $tab[24];?>,     <?php echo $tab1[24];?>],
          ['<?php echo $tab2[25];?>',  <?php echo $tab[25];?>,     <?php echo $tab1[25];?>],
		  ['<?php echo $tab2[26];?>',  <?php echo $tab[26];?>,     <?php echo $tab1[26];?>],
          ['<?php echo $tab2[27];?>',  <?php echo $tab[27];?>,     <?php echo $tab1[27];?>],
		  ['<?php echo $tab2[28];?>',  <?php echo $tab[28];?>,     <?php echo $tab1[28];?>],
          ['<?php echo $tab2[29];?>',  <?php echo $tab[29];?>,     <?php echo $tab1[29];?>]
        
        ]);

        var options = {
          title: 'Débit du <?php echo $tab2[0];?> a <?php echo $tab2[29];?>',
		  width:950,
		  height:500,
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	
	
	
	
	<?php }?>
	
	
	<?php if($periodgr=="demi") { ?>
	 <script type="text/javascript">
	
	 
	  google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',  <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',  <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',  <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',  <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',  <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',  <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',  <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',  <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',  <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab[10];?>,     <?php echo $tab1[10];?>],
		  ['<?php echo $tab2[11];?>',  <?php echo $tab[11];?>,     <?php echo $tab1[11];?>],
          ['<?php echo $tab2[12];?>',  <?php echo $tab[12];?>,     <?php echo $tab1[12];?>],
		  ['<?php echo $tab2[13];?>',  <?php echo $tab[13];?>,     <?php echo $tab1[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab[14];?>,     <?php echo $tab1[14];?>]
          
		  
        ]);
		
		
		
		
		

        var options = {
          width: 730,
		  
		 
		 
		
		  chart: {
            title: 'Nombre des voiture Lourd et legére',
			subtitle: 'du <?php echo $tab2[0];?> a <?php echo $tab2[14];?>',
	      },
          series: {
            0: { axis: 'VL'},
			
			
			// Bind series 0 to an axis named 'distance'.
		 },
		 
          
        };
		

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_div'));
      chart.draw(data, options);
	  
	  
	  
	  
    };</script>
	
	
	
	
	
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'Vitesse Moyenne'],
          ['<?php echo $tab2[0];?>', <?php echo $tab5[0];?>],
          ['<?php echo $tab2[1];?>', <?php echo $tab5[1];?>],
          ['<?php echo $tab2[2];?>', <?php echo $tab5[2];?>],
		  ['<?php echo $tab2[3];?>', <?php echo $tab5[3];?>],
          ['<?php echo $tab2[4];?>', <?php echo $tab5[4];?>],
          ['<?php echo $tab2[5];?>', <?php echo $tab5[5];?>],
          ['<?php echo $tab2[6];?>', <?php echo $tab5[6];?>],
		  ['<?php echo $tab2[7];?>', <?php echo $tab5[7];?>],
          ['<?php echo $tab2[8];?>', <?php echo $tab5[8];?>],
          ['<?php echo $tab2[9];?>', <?php echo $tab5[9];?>],
		  ['<?php echo $tab2[10];?>', <?php echo $tab5[10];?>],
          ['<?php echo $tab2[11];?>', <?php echo $tab5[11];?>],
          ['<?php echo $tab2[12];?>', <?php echo $tab5[12];?>],
          ['<?php echo $tab2[13];?>', <?php echo $tab5[13];?>],
		  ['<?php echo $tab2[14];?>', <?php echo $tab5[14];?>]
          
          
          
		  
        ]);

        var options = {
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?> a <?php echo $tab2[14];?>',
		  width:950,
		  height:500,
		  colors:['#00CD00'],
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
	  google.load("visualization", "1.1", {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['jours', 'B', 'NR'],
          ['<?php echo $tab2[0];?>',  <?php echo $tab3[0];?>,     <?php echo $tab4[0];?>],
          ['<?php echo $tab2[1];?>',  <?php echo $tab3[1];?>,     <?php echo $tab4[1];?>],
          ['<?php echo $tab2[2];?>',  <?php echo $tab3[2];?>,     <?php echo $tab4[2];?>],
		  ['<?php echo $tab2[3];?>',  <?php echo $tab3[3];?>,     <?php echo $tab4[3];?>],
          ['<?php echo $tab2[4];?>',  <?php echo $tab3[4];?>,     <?php echo $tab4[4];?>],
          ['<?php echo $tab2[5];?>',  <?php echo $tab3[5];?>,     <?php echo $tab4[5];?>],
		  ['<?php echo $tab2[6];?>',  <?php echo $tab3[6];?>,     <?php echo $tab4[6];?>],
          ['<?php echo $tab2[7];?>',  <?php echo $tab3[7];?>,     <?php echo $tab4[7];?>],
          ['<?php echo $tab2[8];?>',  <?php echo $tab3[8];?>,     <?php echo $tab4[8];?>],
		  ['<?php echo $tab2[9];?>',  <?php echo $tab3[9];?>,     <?php echo $tab4[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab3[10];?>,     <?php echo $tab4[10];?>],
          ['<?php echo $tab2[11];?>',  <?php echo $tab3[11];?>,     <?php echo $tab4[11];?>],
		  ['<?php echo $tab2[12];?>',  <?php echo $tab3[12];?>,     <?php echo $tab4[12];?>],
          ['<?php echo $tab2[13];?>',  <?php echo $tab3[13];?>,     <?php echo $tab4[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab3[14];?>,     <?php echo $tab4[14];?>]
		  
          
         
        ]);

        var options = {
          title: 'Tension Batterie et Niveau de reception du \n \t <?php echo $tab2[0];?> au <?php echo $tab2[14];?>',
		  hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
		  width: 940,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		}
		</script>
	
	
	
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',  <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',  <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',  <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',  <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',  <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',  <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',  <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',  <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',  <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
          ['<?php echo $tab2[10];?>',  <?php echo $tab[10];?>,     <?php echo $tab1[10];?>],
		  ['<?php echo $tab2[11];?>',  <?php echo $tab[11];?>,     <?php echo $tab1[11];?>],
          ['<?php echo $tab2[12];?>',  <?php echo $tab[12];?>,     <?php echo $tab1[12];?>],
		  ['<?php echo $tab2[13];?>',  <?php echo $tab[13];?>,     <?php echo $tab1[13];?>],
          ['<?php echo $tab2[14];?>',  <?php echo $tab[14];?>,     <?php echo $tab1[14];?>]
          
        
        ]);

        var options = {
          title: 'Débit du <?php echo $tab2[0];?> a <?php echo $tab2[14];?>',
		  width:950,
		  height:500,
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	
	
	
	
	<?php }?>
	
	<?php if($periodgr=="jour") { ?>
	 <script type="text/javascript">
	
	
	
	google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>]
          
          
		  
		  
        ]);
		
		
		
		
		

        var options = {
          width: 700,
		
		  
		
		  chart: {
            title: 'Nombre des voiture Lourd et legére',
			subtitle: 'du <?php echo $tab2[0];?>'
			
          },
          series: {
            0: { axis: 'VL' }, // Bind series 0 to an axis named 'distance'.
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_div'));
      chart.draw(data, options);
	  
	  
	  
	  
    }
	;
	
    
      </script>
	  
	  
	  
	  
	  <script type="text/javascript">
		
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'Vitesse Moyenne'],
          ['00',  <?php echo $tabHv[0];?>],
          ['01',  <?php echo $tabHv[1];?>],
          ['02',  <?php echo $tabHv[2];?>],
		  ['03',  <?php echo $tabHv[3];?>],
          ['04',  <?php echo $tabHv[4];?>],
          ['05',  <?php echo $tabHv[5];?>],
		  ['06',  <?php echo $tabHv[6];?>],
          ['07',  <?php echo $tabHv[7];?>],
		  ['08',  <?php echo $tabHv[8];?>],
          ['09',  <?php echo $tabHv[9];?>],
          ['10',  <?php echo $tabHv[10];?>],
		  ['11',  <?php echo $tabHv[11];?>],
          ['12',  <?php echo $tabHv[12];?>],
		  ['13',  <?php echo $tabHv[13];?>],
          ['14',  <?php echo $tabHv[14];?>],
          ['15',  <?php echo $tabHv[15];?>],
		  ['16',  <?php echo $tabHv[16];?>],
		  ['17',  <?php echo $tabHv[17];?>],
          ['18',  <?php echo $tabHv[18];?>],
		  ['19',  <?php echo $tabHv[19];?>],
          ['20',  <?php echo $tabHv[20];?>],
          ['21',  <?php echo $tabHv[21];?>],
		  ['22',  <?php echo $tabHv[22];?>],
		  ['23',  <?php echo $tabHv[23];?>]
          
          
		  
        ]);

        var options = {
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?>',
		  width:950,
		  height:400,
		  colors:['#00CD00'],
		  
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
	  google.load("visualization", "1.1", {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'B', 'NR'],
          ['00',   <?php echo $tabHlg[0];?>,  <?php echo $tabHpl[0];?>],
          ['01',   <?php echo $tabHlg[1];?>,  <?php echo $tabHpl[1];?>],
          ['02',   <?php echo $tabHlg[2];?>,  <?php echo $tabHpl[2];?>],
		  ['03',   <?php echo $tabHlg[3];?>,  <?php echo $tabHpl[3];?>],
          ['04',   <?php echo $tabHlg[4];?>,  <?php echo $tabHpl[4];?>],
          ['05',   <?php echo $tabHlg[5];?>,  <?php echo $tabHpl[5];?>],
		  ['06',   <?php echo $tabHlg[6];?>,  <?php echo $tabHpl[6];?>],
          ['07',   <?php echo $tabHlg[7];?>,  <?php echo $tabHpl[7];?>],
		  ['08',   <?php echo $tabHlg[8];?>,  <?php echo $tabHpl[8];?>],
          ['09',   <?php echo $tabHlg[9];?>,  <?php echo $tabHpl[9];?>],
          ['10',  <?php echo $tabHlg[10];?>,  <?php echo $tabHpl[10];?>],
		  ['11',  <?php echo $tabHlg[11];?>,  <?php echo $tabHpl[11];?>],
          ['12',  <?php echo $tabHlg[12];?>,  <?php echo $tabHpl[12];?>],
		  ['13',  <?php echo $tabHlg[13];?>,  <?php echo $tabHpl[13];?>],
          ['14',  <?php echo $tabHlg[14];?>,  <?php echo $tabHpl[14];?>],
          ['15',  <?php echo $tabHlg[15];?>,  <?php echo $tabHpl[15];?>],
		  ['16',  <?php echo $tabHlg[16];?>,  <?php echo $tabHpl[16];?>],
		  ['17',  <?php echo $tabHlg[17];?>,  <?php echo $tabHpl[17];?>],
          ['18',  <?php echo $tabHlg[18];?>,  <?php echo $tabHpl[18];?>],
		  ['19',  <?php echo $tabHlg[19];?>,  <?php echo $tabHpl[19];?>],
          ['20',  <?php echo $tabHlg[20];?>,  <?php echo $tabHpl[20];?>],
          ['21',  <?php echo $tabHlg[21];?>,  <?php echo $tabHpl[21];?>],
		  ['22',  <?php echo $tabHlg[22];?>,  <?php echo $tabHpl[22];?>],
		  ['23',  <?php echo $tabHlg[23];?>,  <?php echo $tabHpl[23];?>]
		  
          
         
        ]);

        var options = {
          title: 'Tension Batterie et Niveau de reception du \n \t <?php echo $tab2[0];?>',
		 
		  width: 940,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		}
		</script>
	  
	  

	  
	  <script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'VL', 'PL'],
		  ['00',    <?php echo $tabHb[0];?>,<?php echo $tabHn[0];?>],
          ['01',    <?php echo $tabHb[1];?>,<?php echo $tabHn[1];?>],
          ['02',    <?php echo $tabHb[2];?>,<?php echo $tabHn[2];?>],
		  ['03',    <?php echo $tabHb[3];?>,<?php echo $tabHn[3];?>],
          ['04',    <?php echo $tabHb[4];?>,<?php echo $tabHn[4];?>],
          ['05',    <?php echo $tabHb[5];?>,<?php echo $tabHn[5];?>],
		  ['06',    <?php echo $tabHb[6];?>,<?php echo $tabHn[6];?>],
          ['07',    <?php echo $tabHb[7];?>,<?php echo $tabHn[7];?>],
		  ['08',    <?php echo $tabHb[8];?>,<?php echo $tabHn[8];?>],
          ['09',    <?php echo $tabHb[9];?>,<?php echo $tabHn[9];?>],
          ['10',   <?php echo $tabHb[10];?>,<?php echo $tabHn[10];?>],
		  ['11',   <?php echo $tabHb[11];?>,<?php echo $tabHn[11];?>],
          ['12',   <?php echo $tabHb[12];?>,<?php echo $tabHn[12];?>],
		  ['13',   <?php echo $tabHb[13];?>,<?php echo $tabHn[13];?>],
          ['14',   <?php echo $tabHb[14];?>,<?php echo $tabHn[14];?>],
          ['15',   <?php echo $tabHb[15];?>,<?php echo $tabHn[15];?>],
		  ['16',   <?php echo $tabHb[16];?>,<?php echo $tabHn[16];?>],
		  ['17',   <?php echo $tabHb[17];?>,<?php echo $tabHn[17];?>],
          ['18',   <?php echo $tabHb[18];?>,<?php echo $tabHn[18];?>],
		  ['19',   <?php echo $tabHb[19];?>,<?php echo $tabHn[19];?>],
          ['20',   <?php echo $tabHb[20];?>,<?php echo $tabHn[20];?>],
          ['21',   <?php echo $tabHb[21];?>,<?php echo $tabHn[21];?>],
		  ['22',   <?php echo $tabHb[22];?>,<?php echo $tabHn[22];?>],
		  ['23',   <?php echo $tabHb[23];?>,<?php echo $tabHn[23];?>]
          
        
        ]);

        var options = {
          title: 'Débit du <?php echo $tab2[0];?>',
		  width:950,
		  height:500,
		  
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	  
	  
	  
	  <?php }?>
	
	
	
	
	
									
	  
		 
	
	
	 
	
	
	
	
	
	 
	
    
	  
	
	
	
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
  <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	
</body>

</html>
