<!DOCTYPE html>
<html lang="en">

<head>
<script>
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
} </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stats</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
	 <link href="css/plugins/social-buttons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<script type="text/javascript" src="js/jquery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="js/jspdf.js"></script>
    <script type="text/javascript" src="libs/Deflate/adler32cs.js"></script>
    <script type="text/javascript" src="libs/FileSaver.js/FileSaver.js"></script>
    <script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
    <script type="text/javascript" src="js/jspdf.plugin.addimage.js"></script>
    <script type="text/javascript" src="js/jspdf.plugin.standard_fonts_metrics.js"></script>
    <script type="text/javascript" src="js/jspdf.plugin.split_text_to_size.js"></script>
    <script type="text/javascript" src="js/jspdf.plugin.from_html.js"></script>
    <script type="text/javascript" src="js/basic.js"></script>
	
	
	
	
	
	<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>

function initialize() {
  var mapOptions = {
    zoom: 14,
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

<body style="background-color:white;">

					
					
					
					
					<?php
										$debut = $fin = "";
										
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$debut = test_input($_POST["debut"]);
											$period = test_input($_POST["gender"]);
											$sens = test_input($_POST["sensawi"]);
											
											
											 

												
												
											
											
										if($period=="demi"){
										$date = new DateTime($debut);
												$date->add(new DateInterval('P15D'));
												$datefin=$date->format('Y-m-d');
										}
										
										else if($period=="mois"){
										$date = new DateTime($debut);
												$date->add(new DateInterval('P1M'));
												$datefin=$date->format('Y-m-d');
										}
										
										else if($period=="jour"){$datefin=$debut;}
										
										}
										
										
										
										function test_input($data) {
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;
										}
										?>
										
										
										<?php
										
										
										include "config.php";
										$a=mysqli_query($link,"select * from trafic_details_j WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										$b=mysqli_query($link,"select * from trafic_details_j WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										$c=mysqli_query($link,"select * from trafic_details_h WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										?>
										
										<div id="toppart">
					<ul>
						
						<li><a><img src="img/logo.jpg" width=250px height=110px /></a></li>
						<li style="margin-left:-120px;"><img style="margin-top:0px;margin-right:10px;"src="img/minr.jpg" width=390px height=110px>
						<img  src="img/flag.png" width=130px height=80px>
						</li>
						<li style="margin-left:156px;"><img src="img/logo2.jpg" width=230px height=110px /></li>
						
					</ul>
				</div>
							
					
					
					
					<hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -12px rgba(0,0,0,0.5);">
					
					


<input type="image" onclick="printDiv('printableArea')"  src="img/pdf.png" width="120" height="120" style="position:absolute;left:500px;top:160px;"/>
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
					</script>
					
					
									
										<?php $pow = mysqli_fetch_array($b)?>
										
										
									
								<br><br><br><br><br><br>
								
								

<div class="row">
                <div class="col-lg-4"style="width:1230px;margin-left:80px;">
                    <div class="panel panel-primary">
                        <div align="center"class="panel-heading">
                          <b>Route N°: <?php echo $pow[1]; ?></b> /
                               <b> Période:<b>de <?php echo $debut; ?> à <?php echo $datefin; ?> /
                                <b><?php
										if($sens=="sens1"){echo "Sens 1:vers Tunis";}
										if($sens=="sens2"){echo "Sens 2:vers Bizerte";}
										if($sens=="sens3"){echo "Sens 3";}
										?> 
                        </div>
                        <div class="panel-body">
                        <table>
						<td>
						 <div id="map-canvas" style="margin-left:15px;width:550px;height:275px;"></div>
						 </td>
						 <td ><img style="margin-left:30px;width:550px;height:275px;" src="img/ariana.jpg"></td>
						 </table>
						</div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				</div>

<div class="col-lg-4"style="margin-top:50px;width:1230px;margin-left:65px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Résultats Journaliers
                        </div>
                        <div class="panel-body">								
										<!-- /.row -->
           <div  class="col-lg-6" style="width:800px;margin-left:190px;">
                    
                        
                        <!-- /.panel-heading -->
                        <div  class="panel-body">
                            <div  class="table-responsive">
										
                                <table class="table table-striped table-bordered table-hover">
                                   
                                    <tbody>
										<tr style='background-color:#8C8C8C;color:white;'>
										<th><center>Date</center></th>
                                        <th><center>Jour</center></th>
										<th><center>VL</center></th>
										<th><center>PL</center></th>
										<th><center>D&Eacute;BIT</center></th>
                                        </tr>
										
										
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											$m=0;
											$m1=0;
											$m2=0;
											$jo=0;
											$jol=0;
											$di=0;
											$dil=0;
											$sa=0;
											$sal=0;
											$totvl=0;
											$totpl=0;
											$lu=0;
											$ma=0;
											$me=0;
											$je=0;
											$ve=0;
											
											$debit=0;
											$tot=0;
											$tot1=0;
											$tot2=0;
											$totmoy=0;
											$totmoy1=0;
											$totmoy2=0;
											$totmoymoy=0;
											$tab = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab2 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab3 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab4 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab5 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab6 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab7 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											$tabh = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh3 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh4 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh5 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											
											while($now = mysqli_fetch_array($a)){
											?>
										
										
										<?php 
											
										$tab3[$i]=$now[9];
										if($now[10]==NULL){
										$tab4[$i]=0;}
										if($now[10]!=NULL){
										$tab4[$i]=$now[10];}
											
										 $cut1=substr("$now[2]",0,10);
										 $piriw = date("d-m-Y", strtotime($cut1));
										 $tab2[$i]=$piriw;
										 $day = date('w', strtotime($piriw));
										 
										 
										 if($day==0){
										 $jour="dim";
										 $color="style='background-color:#991821;color:white;'";
										 $m1++;
										 }
										  if($day==1){
										 $jour="lun";
										 $color="style='background-color:#F0FFFF;color:blue;'";
										 $m++;
										 }
										 if($day==2){
										 $jour="mar";
										 $color="style='background-color:#F0FFFF;color:blue;'";
										 $m++;
										 }
										 if($day==3){
										 $jour="mer";
										 $color="style='background-color:#F0FFFF;color:blue;'";
										 $m++;
										 }
										 if($day==4){
										 $jour="jeu";
										 $color="style='background-color:#F0FFFF;color:blue;'";
										 $m++;
										 }
										 if($day==5){
										 $jour="ven";
										 $color="style='background-color:#F0FFFF;color:blue;'";
										 $m++;
										 }
										 if($day==6){
										 $jour="sam";
										 $color="style='background-color:#36752D;color:white;'";
										 $m2++;
										 }
										
											$tab6[$i]=$jour;
											?>	
										
										
											 <tr align="center" <?php echo $color ?>>
										<td><?php
										$cut=substr("$now[2]",0,10);
										echo $cut; ?></td>
										<td><?php
										 echo $jour; ?></td>
										 
										 
										
										
										<td>
										<?php 
										if($sens=="sens1"){
										$car=$now[3]-$now[5];echo $car;$tab[$i]=$car;$tab5[$i]=$now[4];
										}
										
										if($sens=="sens2"){
										$car=$now[6]-$now[8];echo $car;$tab[$i]=$car;$tab5[$i]=$now[7];
										}
										if($sens=="sens3"){
										$car=($now[6]-$now[8])+($now[3]-$now[5]);echo $car;$tab[$i]=$car;$tab5[$i]=($now[4]+$now[7])/2;
										}
										$debit+=$car;
										?>
										</td>
										
										<td>
										<?php 
										if($sens=="sens1"){
										$pl=$now[5];echo $pl;$tab1[$i]=$pl;
										}
										
										if($sens=="sens2"){
										$pl=$now[8];echo $pl;$tab1[$i]=$pl;
										}
										if($sens=="sens3"){
										$pl=$now[8]+$now[5];echo $pl;$tab1[$i]=$pl;
										} 
										$debit+=$pl;
										?>
										</td>
										
										<td>
										<?php
										echo $debit;$tab7[$i]=$debit;
										$debit=0;
										?>
										</td>
										
										<?php
										if( $day==1 || $day==2 || $day==3 || $day==4 || $day==5 ){$jo+=$car;$jol+=$pl;}
										if( $day==6 ){$sa+=$car;$sal+=$pl;}
										if( $day==0 ){$di+=$car;$dil+=$pl;}
										if( $day==1 ){$lu+=$car+$pl;}
										if( $day==2 ){$ma+=$car+$pl;}
										if( $day==3 ){$me+=$car+$pl;}
										if( $day==4 ){$je+=$car+$pl;}
										if( $day==5 ){$ve+=$car+$pl;}
										$i++;
										?>
										
										
										<?php }  ?>
										
										<?php
										$i=0;
										while($mow = mysqli_fetch_array($c)){
											
										
										$tabh3[$i]=$mow[9];
										if($mow[10]==NULL){
										$tabh4[$i]=0;}
										if($mow[10]!=NULL){
										$tabh4[$i]=$mow[10];}
											
										$cut=substr("$now[2]",8,2);
										
										
										if($sens=="sens1"){
										$car=$mow[3]-$mow[5];$tabh[$i]=$car;$tabh5[$i]=$mow[4];
										}
										
										if($sens=="sens2"){
										$car=$mow[6]-$mow[8];$tabh[$i]=$car;$tabh5[$i]=$mow[7];
										}
										if($sens=="sens3"){
										$car=($mow[6]-$mow[8])+($mow[3]-$mow[5]);$tabh[$i]=$car;$tabh5[$i]=($mow[4]+$mow[7])/2;
										}
										
										if($sens=="sens1"){
										$pl=$mow[5];$tabh1[$i]=$pl;
										}
										
										if($sens=="sens2"){
										$pl=$mow[8];$tabh1[$i]=$pl;
										}
										if($sens=="sens3"){
										$pl=$mow[8]+$mow[5];$tabh1[$i]=$pl;
										} 
										
										$i++;
										}  ?>
										
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'><center>Totaux</center></th>
										</tr>
										<tr align="center" style='background-color:white;color:black;'><th>J.O</th>
											<td> <?php echo $jo;$totvl+=$jo; ?> </td>
											<td> <?php echo $jol;$totpl+=$jol; ?> </td>
											<td><?php $tot=$jo+$jol; echo $tot ?></td>
										</tr>
										
										<tr align="center" style='background-color:#36752D;color:white;'><th>SA et F</th>
											<td> <?php echo $sa;$totvl+=$sa; ?> </td>
											<td> <?php echo $sal;$totpl+=$sal; ?> </td>
											<td><?php $tot1=$sa+$sal; echo $tot1 ?></td>
										</tr>
										<tr align="center" style='background-color:#991821;color:white;'><th>DI et F</th>
											<td> <?php echo $di;$totvl+=$di; ?> </td>
											<td> <?php echo $dil;$totpl+=$dil; ?> </td>
											<td><?php $tot2=$di+$dil; echo $tot2 ?></td>
										</tr>
										<tr align="center" style='background-color:#652299;color:white;'><th>Tte Cat</th>
										
											<td>
												<?php 
												echo $totvl;
												?>
											</td>
											<td>
												<?php 
												echo $totpl;
												?>
											</td>
										
										<td><?php $totvlpl=$totvl+$totpl;echo $totvlpl; ?></td>
										
										</tr>
										
										
										
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'><center>Moyenne</center></th>
										</tr>
										<tr align="center" style='background-color:white;color:black;'><th>J.O</th>
											<td>
												<?php 
												if($m==0){$m=1;};
												$moy=$jo/$m;
												echo round($moy);
												$csv= round($moy);
												$totmoy+=$moy;
												$moy=0;
												?>
											</td>
											<td>
												<?php 
												if($m==0){$m=1;};
												$moy=$jol/$m;
												echo round($moy);
												$csv1=round($moy);
												$totmoy+=$moy;
												$moy=0;
												?>
											</td>
										
										<td><?php echo round($totmoy) ?></td>
										
										
										
										</tr>
										
										<tr align="center" style='background-color:#36752D;color:white;'><th>SA et F</th>
										
										<td>
												<?php 
												if($m1==0){$m1=1;};
												$moy1=$sa/$m1;
												echo round($moy1);
												$csv2=round($moy1);
												$totmoy1+=$moy1;
												$moy1=0;
												?>
											</td>
											<td>
												<?php 
												if($m1==0){$m1=1;};
												$moy1=$sal/$m1;
												echo round($moy1);
												$csv3=round($moy1);
												$totmoy1+=$moy1;
												$moy1=0;
												?>
											</td>
										
										<td><?php echo round($totmoy1) ?></td>
										
										</tr>
										<tr align="center" style='background-color:#991821;color:white;'><th>DI et F</th>
										
										<td>
												<?php 
												if($m2==0){$m2=1;};
												$moy2=$di/$m2;
												echo round($moy2);
												$csv4=round($moy2);
												$totmoy2+=$moy2;
												$moy2=0;
												?>
											</td>
											<td>
												<?php 
												if($m2==0){$m2=1;};
												$moy2=$dil/$m2;
												echo round($moy2);
												$csv5=round($moy2);
												$totmoy2+=$moy2;
												$moy2=0;
												?>
											</td>
										
										<td><?php echo round($totmoy2) ?></td>
										</tr>
										<tr align="center"  style='background-color:#652299;color:white;'><th>Tte Cat</th>
										
										
										
											<td>
												<?php 
												
												$totmoyenne=($totvl)/($m+$m1+$m2);
												if($m==1 && $m1==1 && $m2==1){$totmoyenne=$totvl;}
												echo round($totmoyenne);
												$csv6=round($totmoyenne);
												$totmoymoy+=$totmoyenne;
												$totmoyenne=0;
												?>
											</td>
										
										<td>
												<?php 
												
												$totmoyenne=($totpl)/($m+$m1+$m2);
												if($m==1 && $m1==1 && $m2==1){$totmoyenne=$totpl;}
												echo round($totmoyenne);
												$csv7=round($totmoyenne);
												$totmoymoy+=$totmoyenne;
												
												?>
											</td>
										
										<td><?php echo round($totmoymoy) ?></td>
										
										</tr>
										
                                        
                                    </tbody>
									
                                </table>
								
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    
                </div>
                <!-- /.col-lg-6 -->
						
                        
						</div>
                        <div class="panel-footer">
                           *VL:Voiture Légére / *PL:Poids Lourd / *JO:Jours Ouvrables / *SA:Samedi / *DI:Dimanche
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>				
								<form name="getcvs" action="report_csvA.php" method="POST"> 
        
                            
							<style>
							input:hover{
							
							opacity:0.8;
							}
							
							</style>
							<input style="position:absolute; left:630px;top:159px;margin : 0;padding: 0;border: none;background: url(img/csv.png) no-repeat left top;width:120px;height:120px;cursor: pointer;" 
	class="btn btn-success" type="submit" name="submit" value=""/>
	
							
                                
                            
     
      <p>
   
      
	     <input type="hidden" name="time0" value=" <?php echo $tab2[0];?>  ">
         <input type="hidden" name="time1" value=" <?php echo $tab2[1];?>  ">
         <input type="hidden" name="time2" value=" <?php echo $tab2[2];?>  ">
		 <input type="hidden" name="time3" value=" <?php echo $tab2[3];?>  ">
         <input type="hidden" name="time4" value=" <?php echo $tab2[4];?>  ">
         <input type="hidden" name="time5" value=" <?php echo $tab2[5];?>  ">
		 <input type="hidden" name="time6" value=" <?php echo $tab2[6];?>  ">
         <input type="hidden" name="time7" value=" <?php echo $tab2[7];?>  ">
		 <input type="hidden" name="time8" value=" <?php echo $tab2[8];?>  ">
         <input type="hidden" name="time9" value=" <?php echo $tab2[9];?>  ">
         <input type="hidden" name="time10" value=" <?php echo $tab2[10];?> ">
		 <input type="hidden" name="time11" value=" <?php echo $tab2[11];?> ">
         <input type="hidden" name="time12" value=" <?php echo $tab2[12];?> ">
		 <input type="hidden" name="time13" value=" <?php echo $tab2[13];?> ">
         <input type="hidden" name="time14" value=" <?php echo $tab2[14];?> ">
         <input type="hidden" name="time15" value=" <?php echo $tab2[15];?> ">
		 <input type="hidden" name="time16" value=" <?php echo $tab2[16];?> ">
         <input type="hidden" name="time17" value=" <?php echo $tab2[17];?> ">
		 <input type="hidden" name="time18" value=" <?php echo $tab2[18];?> ">
         <input type="hidden" name="time19" value=" <?php echo $tab2[19];?> ">
		 <input type="hidden" name="time20" value=" <?php echo $tab2[20];?> ">
         <input type="hidden" name="time21" value=" <?php echo $tab2[21];?> ">
         <input type="hidden" name="time22" value=" <?php echo $tab2[22];?> ">
		 <input type="hidden" name="time23" value=" <?php echo $tab2[23];?> ">
         <input type="hidden" name="time24" value=" <?php echo $tab2[24];?> ">
         <input type="hidden" name="time25" value=" <?php echo $tab2[25];?> ">
		 <input type="hidden" name="time26" value=" <?php echo $tab2[26];?> ">
         <input type="hidden" name="time27" value=" <?php echo $tab2[27];?> ">
		 <input type="hidden" name="time28" value=" <?php echo $tab2[28];?> ">
         <input type="hidden" name="time29" value=" <?php echo $tab2[29];?> ">
        
		 <input type="hidden" name="vl0" value=" <?php echo $tab[0];?>  ">
         <input type="hidden" name="vl1" value=" <?php echo $tab[1];?>  ">
         <input type="hidden" name="vl2" value=" <?php echo $tab[2];?>  ">
		 <input type="hidden" name="vl3" value=" <?php echo $tab[3];?>  ">
         <input type="hidden" name="vl4" value=" <?php echo $tab[4];?>  ">
         <input type="hidden" name="vl5" value=" <?php echo $tab[5];?>  ">
		 <input type="hidden" name="vl6" value=" <?php echo $tab[6];?>  ">
         <input type="hidden" name="vl7" value=" <?php echo $tab[7];?>  ">
		 <input type="hidden" name="vl8" value=" <?php echo $tab[8];?>  ">
         <input type="hidden" name="vl9" value=" <?php echo $tab[9];?>  ">
         <input type="hidden" name="vl10" value=" <?php echo $tab[10];?> ">
		 <input type="hidden" name="vl11" value=" <?php echo $tab[11];?> ">
         <input type="hidden" name="vl12" value=" <?php echo $tab[12];?> ">
		 <input type="hidden" name="vl13" value=" <?php echo $tab[13];?> ">
         <input type="hidden" name="vl14" value=" <?php echo $tab[14];?> ">
         <input type="hidden" name="vl15" value=" <?php echo $tab[15];?> ">
		 <input type="hidden" name="vl16" value=" <?php echo $tab[16];?> ">
         <input type="hidden" name="vl17" value=" <?php echo $tab[17];?> ">
		 <input type="hidden" name="vl18" value=" <?php echo $tab[18];?> ">
         <input type="hidden" name="vl19" value=" <?php echo $tab[19];?> ">
		 <input type="hidden" name="vl20" value=" <?php echo $tab[20];?> ">
         <input type="hidden" name="vl21" value=" <?php echo $tab[21];?> ">
         <input type="hidden" name="vl22" value=" <?php echo $tab[22];?> ">
		 <input type="hidden" name="vl23" value=" <?php echo $tab[23];?> ">
         <input type="hidden" name="vl24" value=" <?php echo $tab[24];?> ">
         <input type="hidden" name="vl25" value=" <?php echo $tab[25];?> ">
		 <input type="hidden" name="vl26" value=" <?php echo $tab[26];?> ">
         <input type="hidden" name="vl27" value=" <?php echo $tab[27];?> ">
		 <input type="hidden" name="vl28" value=" <?php echo $tab[28];?> ">
         <input type="hidden" name="vl29" value=" <?php echo $tab[29];?> ">
		
		 <input type="hidden" name="pl0" value=" <?php echo $tab1[0];?>  ">
         <input type="hidden" name="pl1" value=" <?php echo $tab1[1];?>  ">
         <input type="hidden" name="pl2" value=" <?php echo $tab1[2];?>  ">
		 <input type="hidden" name="pl3" value=" <?php echo $tab1[3];?>  ">
         <input type="hidden" name="pl4" value=" <?php echo $tab1[4];?>  ">
         <input type="hidden" name="pl5" value=" <?php echo $tab1[5];?>  ">
		 <input type="hidden" name="pl6" value=" <?php echo $tab1[6];?>  ">
         <input type="hidden" name="pl7" value=" <?php echo $tab1[7];?>  ">
		 <input type="hidden" name="pl8" value=" <?php echo $tab1[8];?>  ">
         <input type="hidden" name="pl9" value=" <?php echo $tab1[9];?>  ">
         <input type="hidden" name="pl10" value=" <?php echo $tab1[10];?> ">
		 <input type="hidden" name="pl11" value=" <?php echo $tab1[11];?> ">
         <input type="hidden" name="pl12" value=" <?php echo $tab1[12];?> ">
		 <input type="hidden" name="pl13" value=" <?php echo $tab1[13];?> ">
         <input type="hidden" name="pl14" value=" <?php echo $tab1[14];?> ">
         <input type="hidden" name="pl15" value=" <?php echo $tab1[15];?> ">
		 <input type="hidden" name="pl16" value=" <?php echo $tab1[16];?> ">
         <input type="hidden" name="pl17" value=" <?php echo $tab1[17];?> ">
		 <input type="hidden" name="pl18" value=" <?php echo $tab1[18];?> ">
         <input type="hidden" name="pl19" value=" <?php echo $tab1[19];?> ">
		 <input type="hidden" name="pl20" value=" <?php echo $tab1[20];?> ">
         <input type="hidden" name="pl21" value=" <?php echo $tab1[21];?> ">
         <input type="hidden" name="pl22" value=" <?php echo $tab1[22];?> ">
		 <input type="hidden" name="pl23" value=" <?php echo $tab1[23];?> ">
         <input type="hidden" name="pl24" value=" <?php echo $tab1[24];?> ">
         <input type="hidden" name="pl25" value=" <?php echo $tab1[25];?> ">
		 <input type="hidden" name="pl26" value=" <?php echo $tab1[26];?> ">
         <input type="hidden" name="pl27" value=" <?php echo $tab1[27];?> ">
		 <input type="hidden" name="pl28" value=" <?php echo $tab1[28];?> ">
         <input type="hidden" name="pl29" value=" <?php echo $tab1[29];?> ">
		 
		 <input type="hidden" name="j0" value=" <?php echo  $tab6[0];?>  ">
         <input type="hidden" name="j1" value=" <?php echo  $tab6[1];?>  ">
         <input type="hidden" name="j2" value=" <?php echo  $tab6[2];?>  ">
		 <input type="hidden" name="j3" value=" <?php echo  $tab6[3];?>  ">
         <input type="hidden" name="j4" value=" <?php echo  $tab6[4];?>  ">
         <input type="hidden" name="j5" value=" <?php echo  $tab6[5];?>  ">
		 <input type="hidden" name="j6" value=" <?php echo  $tab6[6];?>  ">
         <input type="hidden" name="j7" value=" <?php echo  $tab6[7];?>  ">
		 <input type="hidden" name="j8" value=" <?php echo  $tab6[8];?>  ">
         <input type="hidden" name="j9" value=" <?php echo  $tab6[9];?>  ">
         <input type="hidden" name="j10" value=" <?php echo $tab6[10];?> ">
		 <input type="hidden" name="j11" value=" <?php echo $tab6[11];?> ">
         <input type="hidden" name="j12" value=" <?php echo $tab6[12];?> ">
		 <input type="hidden" name="j13" value=" <?php echo $tab6[13];?> ">
         <input type="hidden" name="j14" value=" <?php echo $tab6[14];?> ">
         <input type="hidden" name="j15" value=" <?php echo $tab6[15];?> ">
		 <input type="hidden" name="j16" value=" <?php echo $tab6[16];?> ">
         <input type="hidden" name="j17" value=" <?php echo $tab6[17];?> ">
		 <input type="hidden" name="j18" value=" <?php echo $tab6[18];?> ">
         <input type="hidden" name="j19" value=" <?php echo $tab6[19];?> ">
		 <input type="hidden" name="j20" value=" <?php echo $tab6[20];?> ">
         <input type="hidden" name="j21" value=" <?php echo $tab6[21];?> ">
         <input type="hidden" name="j22" value=" <?php echo $tab6[22];?> ">
		 <input type="hidden" name="j23" value=" <?php echo $tab6[23];?> ">
         <input type="hidden" name="j24" value=" <?php echo $tab6[24];?> ">
         <input type="hidden" name="j25" value=" <?php echo $tab6[25];?> ">
		 <input type="hidden" name="j26" value=" <?php echo $tab6[26];?> ">
         <input type="hidden" name="j27" value=" <?php echo $tab6[27];?> ">
		 <input type="hidden" name="j28" value=" <?php echo $tab6[28];?> ">
         <input type="hidden" name="j29" value=" <?php echo $tab6[29];?> ">
		 
		 <input type="hidden" name="d0" value=" <?php echo  $tab7[0];?>  ">
         <input type="hidden" name="d1" value=" <?php echo  $tab7[1];?>  ">
         <input type="hidden" name="d2" value=" <?php echo  $tab7[2];?>  ">
		 <input type="hidden" name="d3" value=" <?php echo  $tab7[3];?>  ">
         <input type="hidden" name="d4" value=" <?php echo  $tab7[4];?>  ">
         <input type="hidden" name="d5" value=" <?php echo  $tab7[5];?>  ">
		 <input type="hidden" name="d6" value=" <?php echo  $tab7[6];?>  ">
         <input type="hidden" name="d7" value=" <?php echo  $tab7[7];?>  ">
		 <input type="hidden" name="d8" value=" <?php echo  $tab7[8];?>  ">
         <input type="hidden" name="d9" value=" <?php echo  $tab7[9];?>  ">
         <input type="hidden" name="d10" value=" <?php echo $tab7[10];?> ">
		 <input type="hidden" name="d11" value=" <?php echo $tab7[11];?> ">
         <input type="hidden" name="d12" value=" <?php echo $tab7[12];?> ">
		 <input type="hidden" name="d13" value=" <?php echo $tab7[13];?> ">
         <input type="hidden" name="d14" value=" <?php echo $tab7[14];?> ">
         <input type="hidden" name="d15" value=" <?php echo $tab7[15];?> ">
		 <input type="hidden" name="d16" value=" <?php echo $tab7[16];?> ">
         <input type="hidden" name="d17" value=" <?php echo $tab7[17];?> ">
		 <input type="hidden" name="d18" value=" <?php echo $tab7[18];?> ">
         <input type="hidden" name="d19" value=" <?php echo $tab7[19];?> ">
		 <input type="hidden" name="d20" value=" <?php echo $tab7[20];?> ">
         <input type="hidden" name="d21" value=" <?php echo $tab7[21];?> ">
         <input type="hidden" name="d22" value=" <?php echo $tab7[22];?> ">
		 <input type="hidden" name="d23" value=" <?php echo $tab7[23];?> ">
         <input type="hidden" name="d24" value=" <?php echo $tab7[24];?> ">
         <input type="hidden" name="d25" value=" <?php echo $tab7[25];?> ">
		 <input type="hidden" name="d26" value=" <?php echo $tab7[26];?> ">
         <input type="hidden" name="d27" value=" <?php echo $tab7[27];?> ">
		 <input type="hidden" name="d28" value=" <?php echo $tab7[28];?> ">
         <input type="hidden" name="d29" value=" <?php echo $tab7[29];?> ">
		 
		 
		 <input type="hidden" name="csv1" value=" <?php echo $jo;?> ">
		 <input type="hidden" name="csv2" value=" <?php echo $jol;?> ">
		 <input type="hidden" name="csv3" value=" <?php echo $tot;?> ">
		 
		 <input type="hidden" name="csv4" value=" <?php echo $sa;?> ">
		 <input type="hidden" name="csv5" value=" <?php echo $sal;?> ">
		 <input type="hidden" name="csv6" value=" <?php echo $tot1;?> ">
		 
		 <input type="hidden" name="csv7" value=" <?php echo $di;?> ">
		 <input type="hidden" name="csv8" value=" <?php echo $dil;?> ">
		 <input type="hidden" name="csv9" value=" <?php echo $tot2;?> ">
		 
		 <input type="hidden" name="csv10" value=" <?php echo $totvl;?> ">
		 <input type="hidden" name="csv11" value=" <?php echo $totpl;?> ">
		 <input type="hidden" name="csv12" value=" <?php echo $totvlpl;?> ">
		 
		 
		 <input type="hidden" name="csv13" value=" <?php echo $csv;?> ">
		 <input type="hidden" name="csv14" value=" <?php echo $csv1;?> ">
		 <input type="hidden" name="csv15" value=" <?php echo round($totmoy);?> ">
		 
		 <input type="hidden" name="csv16" value=" <?php echo $csv2;?> ">
		 <input type="hidden" name="csv17" value=" <?php echo $csv3;?> ">
		 <input type="hidden" name="csv18" value=" <?php echo round($totmoy1);?> ">
		 
		 <input type="hidden" name="csv19" value=" <?php echo $csv4;?> ">
		 <input type="hidden" name="csv20" value=" <?php echo $csv5;?> ">
		 <input type="hidden" name="csv21" value=" <?php echo round($totmoy2);?> ">
		 
		 <input type="hidden" name="csv22" value=" <?php echo $csv6;?> ">
		 <input type="hidden" name="csv23" value=" <?php echo $csv7;?> ">
		 <input type="hidden" name="csv24" value=" <?php echo round($totmoymoy);?> ">
		 
		 
		 <?php if($period=="mois") { ?> <input type="hidden" name="perio" value="mois"><?php }?>
		 <?php if($period=="demi") { ?> <input type="hidden" name="perio" value="demi"><?php }?>
		 <?php if($period=="jour") { ?> <input type="hidden" name="perio" value="jour"><?php }?>
					
		 

</form>				
					</div>
					
					
					
					<div style="margin-bottom:-10px;height:150px;">
					
										
										
										
										
										
										<div style="margin-top:50px;">	
				
		<div class="row">
                <!-- /.col-lg-4 -->
                <div  class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Nombre des voitures Lourdes et Légères
                        </div>
                        <div class="panel-body">
                        
						<div id="dual_yyy_div" style="width: 1000px; height: 500px;"></div>
						
						</div>
                        <div class="panel-footer">
                            *PL:Poids Lourd / *VL:Voiture Légère /*K:milles
                        </div>
                    </div>
                </div>
                </div>
				
				
				</br></br>
		
		
		
		<div class="row">
            <div class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Débit
                        </div>
                        <div class="panel-body">
                       
							
							<div id="curve_chart" style="width: 700px; height: 500px;margin-left:-15px;"></div>
							
					   </div>
                        <div class="panel-footer">
                            *PL:Poids Lourd / *VL:Voiture Légère
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
		
		</div>
		
		
		
		</br></br>
			<div class="row">	
                <div class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Vitesse Moyenne
                        </div>
                        <div class="panel-body">
                        <div id="curve_chart1" style="width: 900px; height: 500px;margin-left:-10px;"></div>
						</div>
                        <div class="panel-footer">
                           Unité:KM/H
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
		</div>
		</br></br>
				<div class="row">
                <div class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Tension Batterie et Niveau de Récéption
                        </div>
                        <div class="panel-body">
                        <div id="chart_div" style="width: 680px; height: 500px;margin-left:-10px;"></div>
						</div>
                        <div class="panel-footer">
                           *B:Batterie / *NR:Niveau de Réception
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				</div>
                </br></br>
				<?php if($period!="jour") { ?>
				<div class="row">
				<div  class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Débit Journalier
                        </div>
                        <div class="panel-body">
                        
						 <div id="piechart" style="width: 1170px; height: 500px;margin"></div>
						
						</div>
                        <div class="panel-footer">
                            *Débit:PL+VL
                        </div>
                    </div>
                </div>
				
				</div>
				<?php }?>
				</div>
			
										
										
						</div>
					
					
                    <!-- /.col-lg-12 -->
                

				
				
				
				
				
				<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	 
	
	<?php if($period=="mois") { ?>
	 <script type="text/javascript">
	 
      
		
		 
	 
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',   <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',   <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',   <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',   <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',   <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',   <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',   <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',   <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',   <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',   <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
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
          width: 1170,
		  
		
		  chart: {
            title: 'du <?php echo $tab2[0]; ?> a <?php echo $tab2[29];?>' ,
			
			
			
          },
          series: {
            0: { axis: 'VL' }, // Bind series 0 to an axis named 'distance'.
			
			
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_div'));
      chart.draw(data, options);
	  
	  
	  
	  
    };</script>
	
	
	
	 <script type="text/javascript">
	 
      
		
		 
	 google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',   <?php echo $tab[0];?>,     <?php echo $tab1[0];?>],
          ['<?php echo $tab2[1];?>',   <?php echo $tab[1];?>,     <?php echo $tab1[1];?>],
          ['<?php echo $tab2[2];?>',   <?php echo $tab[2];?>,     <?php echo $tab1[2];?>],
		  ['<?php echo $tab2[3];?>',   <?php echo $tab[3];?>,     <?php echo $tab1[3];?>],
          ['<?php echo $tab2[4];?>',   <?php echo $tab[4];?>,     <?php echo $tab1[4];?>],
          ['<?php echo $tab2[5];?>',   <?php echo $tab[5];?>,     <?php echo $tab1[5];?>],
		  ['<?php echo $tab2[6];?>',   <?php echo $tab[6];?>,     <?php echo $tab1[6];?>],
          ['<?php echo $tab2[7];?>',   <?php echo $tab[7];?>,     <?php echo $tab1[7];?>],
		  ['<?php echo $tab2[8];?>',   <?php echo $tab[8];?>,     <?php echo $tab1[8];?>],
          ['<?php echo $tab2[9];?>',   <?php echo $tab[9];?>,     <?php echo $tab1[9];?>],
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
          width: 890,
		  
		
		  chart: {
            title: 'du <?php echo $tab2[0]; ?> a <?php echo $tab2[29];?>' ,
			
			
			
          },
          series: {
            0: { axis: 'VL' }, // Bind series 0 to an axis named 'distance'.
			
			
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_divprint'));
      chart.draw(data, options);
	  
	  
	  
	  
    };</script>
	
	
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'Vitesse Moyenne'],
          ['<?php echo $tab2[0];?>' ,  <?php echo $tab5[0];?>],
          ['<?php echo $tab2[1];?>' ,  <?php echo $tab5[1];?>],
          ['<?php echo $tab2[2];?>' ,  <?php echo $tab5[2];?>],
		  ['<?php echo $tab2[3];?>' ,  <?php echo $tab5[3];?>],
          ['<?php echo $tab2[4];?>' ,  <?php echo $tab5[4];?>],
          ['<?php echo $tab2[5];?>' ,  <?php echo $tab5[5];?>],
          ['<?php echo $tab2[6];?>' ,  <?php echo $tab5[6];?>],
		  ['<?php echo $tab2[7];?>' ,  <?php echo $tab5[7];?>],
          ['<?php echo $tab2[8];?>' ,  <?php echo $tab5[8];?>],
          ['<?php echo $tab2[9];?>' ,  <?php echo $tab5[9];?>],
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
		  width:1170,
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
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jours', 'Vitesse Moyenne'],
          ['<?php echo $tab2[0];?>' ,  <?php echo $tab5[0];?>],
          ['<?php echo $tab2[1];?>' ,  <?php echo $tab5[1];?>],
          ['<?php echo $tab2[2];?>' ,  <?php echo $tab5[2];?>],
		  ['<?php echo $tab2[3];?>' ,  <?php echo $tab5[3];?>],
          ['<?php echo $tab2[4];?>' ,  <?php echo $tab5[4];?>],
          ['<?php echo $tab2[5];?>' ,  <?php echo $tab5[5];?>],
          ['<?php echo $tab2[6];?>' ,  <?php echo $tab5[6];?>],
		  ['<?php echo $tab2[7];?>' ,  <?php echo $tab5[7];?>],
          ['<?php echo $tab2[8];?>' ,  <?php echo $tab5[8];?>],
          ['<?php echo $tab2[9];?>' ,  <?php echo $tab5[9];?>],
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
		  width:890,
		  height:500,
		  colors:['#00CD00'],
		  hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
		  
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1print'));

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
          title: 'Tension Batterie et Niveau de récéption \ndu  \t <?php echo $tab2[0];?> au <?php echo $tab2[29];?>',
          hAxis: {slantedText:true,
        slantedTextAngle:60},
          vAxis: {minValue: 0},
		  width: 1170,
		  height:500
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
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
          title: 'Tension Batterie et Niveau de récéption \ndu  \t <?php echo $tab2[0];?> au <?php echo $tab2[29];?>',
          hAxis: {slantedText:true,
        slantedTextAngle:60},
          vAxis: {minValue: 0},
		  width: 890,
		  height:500
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_divprint'));
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
          title: 'Débit du <?php echo $tab2[0];?> à <?php echo $tab2[29];?>',
		  width:1170,
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
          title: 'Débit du <?php echo $tab2[0];?> à <?php echo $tab2[29];?>',
		  width:890,
		  height:500,
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chartprint'));

        chart.draw(data, options);
      }
    </script>
	
	
	 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Samedi',     <?php echo $tot1; ?>],
          ['Dimanche',   <?php echo $tot2; ?>],
          ['Lundi',      <?php echo $lu; ?>],
          ['Mardi',      <?php echo $ma; ?>],
		  ['Mercredi',   <?php echo $me; ?>],
		  ['Jeudi',      <?php echo $je; ?>],
          ['Vendredi',   <?php echo $ve; ?>]
        ]);

        var options = {
          title: 'Analyse par type de jour'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Samedi',     <?php echo $tot1; ?>],
          ['Dimanche',   <?php echo $tot2; ?>],
          ['Lundi',      <?php echo $lu; ?>],
          ['Mardi',      <?php echo $ma; ?>],
		  ['Mercredi',   <?php echo $me; ?>],
		  ['Jeudi',      <?php echo $je; ?>],
          ['Vendredi',   <?php echo $ve; ?>]
        ]);

        var options = {
          title: 'Analyse par type de jour'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartprint'));

        chart.draw(data, options);
      }
    </script>
	
	
	<?php }?>
	
	
	<?php if($period=="demi") { ?>
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
          width: 1170,
		  
		
		  chart: {
            title: 'Nombre des voiture Lourdes et Légères',
			subtitle: 'du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>'
			
          },
          series: {
            0: { axis: 'VL' } // Bind series 0 to an axis named 'distance'.
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_div'));
      chart.draw(data, options);
	  
	  
	  
	  
    };</script>
	
	 <script type="text/javascript">
	
	 
	  
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
          width: 860,
		  
		
		  chart: {
            title: 'Nombre des voiture Lourdes et Légères',
			subtitle: 'du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>'
			
          },
          series: {
            0: { axis: 'VL' } // Bind series 0 to an axis named 'distance'.
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_divprint'));
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
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>',
		  width:1170,
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
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>',
		  width:890,
		  height:500,
		  colors:['#00CD00'],
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1print'));

        chart.draw(data, options);
      }
    </script>
	
	
	
	
	
	<script type="text/javascript">
	  
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
          title: 'Tension Batterie et Niveau de récéption du \n \t <?php echo $tab2[0];?> au <?php echo $tab2[14];?>',
		  hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
		  width: 1170,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
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
          title: 'Tension Batterie et Niveau de récéption du \n \t <?php echo $tab2[0];?> au <?php echo $tab2[14];?>',
		  hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
		  width: 890,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_divprint'));
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
          title: 'Débit du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>',
		  width:1170,
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
          title: 'Débit du <?php echo $tab2[0];?> à <?php echo $tab2[14];?>',
		  width:890,
		  height:500,
		   hAxis: {
		slantedText:true,
        slantedTextAngle:60 
    },
          curveType: 'function',
          legend: { position: 'top' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chartprint'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Samedi',     <?php echo $tot1; ?>],
          ['Dimanche',   <?php echo $tot2; ?>],
          ['Lundi',      <?php echo $lu; ?>],
          ['Mardi',      <?php echo $ma; ?>],
		  ['Mercredi',   <?php echo $me; ?>],
		  ['Jeudi',      <?php echo $je; ?>],
          ['Vendredi',   <?php echo $ve; ?>]
        ]);

        var options = {
          title: 'Analyse par type de jour'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
      
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Samedi',     <?php echo $tot1; ?>],
          ['Dimanche',   <?php echo $tot2; ?>],
          ['Lundi',      <?php echo $lu; ?>],
          ['Mardi',      <?php echo $ma; ?>],
		  ['Mercredi',   <?php echo $me; ?>],
		  ['Jeudi',      <?php echo $je; ?>],
          ['Vendredi',   <?php echo $ve; ?>]
        ]);

        var options = {
          title: 'Analyse par type de jour'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechartprint'));

        chart.draw(data, options);
      }
    </script>
	
	
	
	<?php }?>
	
	<?php if($period=="jour") { ?>
	 <script type="text/javascript">
	
	
	
	google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>]
          
          
		  
		  
        ]);
		
		
		
		
		

        var options = {
          width: 1170,
		
		  
		
		  chart: {
            title: 'Nombre des voitures Lourdes et légères',
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
	
	
	
	
      google.setOnLoadCallback(drawStuff);
		function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Jours', 'VL', 'PL'],
		  ['<?php echo $tab2[0];?>',  <?php echo $tab[0];?>,     <?php echo $tab1[0];?>]
          
          
		  
		  
        ]);
		
		
		
		
		

        var options = {
          width: 890,
		
		  
		
		  chart: {
            title: 'Nombre des voitures Lourdes et légères',
			subtitle: 'du <?php echo $tab2[0];?>'
			
          },
          series: {
            0: { axis: 'VL' }, // Bind series 0 to an axis named 'distance'.
		 },
          
        };

      var chart = new google.charts.Bar(document.getElementById('dual_yyy_divprint'));
      chart.draw(data, options);
	  
	  
	  
	  
    }
	;
	
    
      </script>
	  
	  
	  
	  
	  <script type="text/javascript">
		
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'Vitesse Moyenne'],
          ['00',  <?php echo $tabh5[0];?>],
          ['01',  <?php echo $tabh5[1];?>],
          ['02',  <?php echo $tabh5[2];?>],
		  ['03',  <?php echo $tabh5[3];?>],
          ['04',  <?php echo $tabh5[4];?>],
          ['05',  <?php echo $tabh5[5];?>],
		  ['06',  <?php echo $tabh5[6];?>],
          ['07',  <?php echo $tabh5[7];?>],
		  ['08',  <?php echo $tabh5[8];?>],
          ['09',  <?php echo $tabh5[9];?>],
          ['10',  <?php echo $tabh5[10];?>],
		  ['11',  <?php echo $tabh5[11];?>],
          ['12',  <?php echo $tabh5[12];?>],
		  ['13',  <?php echo $tabh5[13];?>],
          ['14',  <?php echo $tabh5[14];?>],
          ['15',  <?php echo $tabh5[15];?>],
		  ['16',  <?php echo $tabh5[16];?>],
		  ['17',  <?php echo $tabh5[17];?>],
          ['18',  <?php echo $tabh5[18];?>],
		  ['19',  <?php echo $tabh5[19];?>],
          ['20',  <?php echo $tabh5[20];?>],
          ['21',  <?php echo $tabh5[21];?>],
		  ['22',  <?php echo $tabh5[22];?>],
		  ['23',  <?php echo $tabh5[23];?>]
          
          
		  
        ]);

        var options = {
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?>',
		  width:1170,
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
		
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'Vitesse Moyenne'],
          ['00',  <?php echo $tabh5[0];?>],
          ['01',  <?php echo $tabh5[1];?>],
          ['02',  <?php echo $tabh5[2];?>],
		  ['03',  <?php echo $tabh5[3];?>],
          ['04',  <?php echo $tabh5[4];?>],
          ['05',  <?php echo $tabh5[5];?>],
		  ['06',  <?php echo $tabh5[6];?>],
          ['07',  <?php echo $tabh5[7];?>],
		  ['08',  <?php echo $tabh5[8];?>],
          ['09',  <?php echo $tabh5[9];?>],
          ['10',  <?php echo $tabh5[10];?>],
		  ['11',  <?php echo $tabh5[11];?>],
          ['12',  <?php echo $tabh5[12];?>],
		  ['13',  <?php echo $tabh5[13];?>],
          ['14',  <?php echo $tabh5[14];?>],
          ['15',  <?php echo $tabh5[15];?>],
		  ['16',  <?php echo $tabh5[16];?>],
		  ['17',  <?php echo $tabh5[17];?>],
          ['18',  <?php echo $tabh5[18];?>],
		  ['19',  <?php echo $tabh5[19];?>],
          ['20',  <?php echo $tabh5[20];?>],
          ['21',  <?php echo $tabh5[21];?>],
		  ['22',  <?php echo $tabh5[22];?>],
		  ['23',  <?php echo $tabh5[23];?>]
          
          
		  
        ]);

        var options = {
          title: 'Vitesse Moyenne du <?php echo $tab2[0];?>',
		  width:890,
		  height:400,
		  colors:['#00CD00'],
		  
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1print'));

        chart.draw(data, options);
      }
    </script>
	
	
	<script type="text/javascript">
	  google.load("visualization", "1.1", {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'B','NR'],
          ['00',  <?php echo $tabh3[0];?>,<?php echo $tabh4[0];?>],
          ['01',  <?php echo $tabh3[1];?>,<?php echo $tabh4[1];?>],
          ['02',  <?php echo $tabh3[2];?>,<?php echo $tabh4[2];?>],
		  ['03',  <?php echo $tabh3[3];?>,<?php echo $tabh4[3];?>],
          ['04',  <?php echo $tabh3[4];?>,<?php echo $tabh4[4];?>],
          ['05',  <?php echo $tabh3[5];?>,<?php echo $tabh4[5];?>],
		  ['06',  <?php echo $tabh3[6];?>,<?php echo $tabh4[6];?>],
          ['07',  <?php echo $tabh3[7];?>,<?php echo $tabh4[7];?>],
		  ['08',  <?php echo $tabh3[8];?>,<?php echo $tabh4[8];?>],
          ['09',  <?php echo $tabh3[9];?>,<?php echo $tabh4[9];?>],
          ['10',  <?php echo $tabh3[10];?>,<?php echo $tabh4[10];?>],
		  ['11',  <?php echo $tabh3[11];?>,<?php echo $tabh4[11];?>],
          ['12',  <?php echo $tabh3[12];?>,<?php echo $tabh4[12];?>],
		  ['13',  <?php echo $tabh3[13];?>,<?php echo $tabh4[13];?>],
          ['14',  <?php echo $tabh3[14];?>,<?php echo $tabh4[14];?>],
          ['15',  <?php echo $tabh3[15];?>,<?php echo $tabh4[15];?>],
		  ['16',  <?php echo $tabh3[16];?>,<?php echo $tabh4[16];?>],
		  ['17',  <?php echo $tabh3[17];?>,<?php echo $tabh4[17];?>],
          ['18',  <?php echo $tabh3[18];?>,<?php echo $tabh4[18];?>],
		  ['19',  <?php echo $tabh3[19];?>,<?php echo $tabh4[19];?>],
          ['20',  <?php echo $tabh3[20];?>,<?php echo $tabh4[20];?>],
          ['21',  <?php echo $tabh3[21];?>,<?php echo $tabh4[21];?>],
		  ['22',  <?php echo $tabh3[22];?>,<?php echo $tabh4[22];?>],
		  ['23',  <?php echo $tabh3[23];?>,<?php echo $tabh4[23];?>]
		  
          
         
        ]);

        var options = {
          title: 'Tension Batterie et Niveau de récéption du  \t <?php echo $tab2[0];?>',
		  hAxis: {
		slantedText:true
        
    },
		  width: 1170,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		}
		</script>
		
		
		<script type="text/javascript">
	  google.load("visualization", "1.1", {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'B','NR'],
          ['00',  <?php echo $tabh3[0];?>,<?php echo $tabh4[0];?>],
          ['01',  <?php echo $tabh3[1];?>,<?php echo $tabh4[1];?>],
          ['02',  <?php echo $tabh3[2];?>,<?php echo $tabh4[2];?>],
		  ['03',  <?php echo $tabh3[3];?>,<?php echo $tabh4[3];?>],
          ['04',  <?php echo $tabh3[4];?>,<?php echo $tabh4[4];?>],
          ['05',  <?php echo $tabh3[5];?>,<?php echo $tabh4[5];?>],
		  ['06',  <?php echo $tabh3[6];?>,<?php echo $tabh4[6];?>],
          ['07',  <?php echo $tabh3[7];?>,<?php echo $tabh4[7];?>],
		  ['08',  <?php echo $tabh3[8];?>,<?php echo $tabh4[8];?>],
          ['09',  <?php echo $tabh3[9];?>,<?php echo $tabh4[9];?>],
          ['10',  <?php echo $tabh3[10];?>,<?php echo $tabh4[10];?>],
		  ['11',  <?php echo $tabh3[11];?>,<?php echo $tabh4[11];?>],
          ['12',  <?php echo $tabh3[12];?>,<?php echo $tabh4[12];?>],
		  ['13',  <?php echo $tabh3[13];?>,<?php echo $tabh4[13];?>],
          ['14',  <?php echo $tabh3[14];?>,<?php echo $tabh4[14];?>],
          ['15',  <?php echo $tabh3[15];?>,<?php echo $tabh4[15];?>],
		  ['16',  <?php echo $tabh3[16];?>,<?php echo $tabh4[16];?>],
		  ['17',  <?php echo $tabh3[17];?>,<?php echo $tabh4[17];?>],
          ['18',  <?php echo $tabh3[18];?>,<?php echo $tabh4[18];?>],
		  ['19',  <?php echo $tabh3[19];?>,<?php echo $tabh4[19];?>],
          ['20',  <?php echo $tabh3[20];?>,<?php echo $tabh4[20];?>],
          ['21',  <?php echo $tabh3[21];?>,<?php echo $tabh4[21];?>],
		  ['22',  <?php echo $tabh3[22];?>,<?php echo $tabh4[22];?>],
		  ['23',  <?php echo $tabh3[23];?>,<?php echo $tabh4[23];?>]
		  
          
         
        ]);

        var options = {
          title: 'Tension Batterie et Niveau de récéption du  \t <?php echo $tab2[0];?>',
		  hAxis: {
		slantedText:true
        
    },
		  width: 890,
		  height:500,
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_divprint'));
        chart.draw(data, options);
		}
		</script>
	  
	  

	  
	  <script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'VL', 'PL'],
		  ['00',   <?php echo $tabh[0];?>,<?php echo $tabh1[0];?>],
          ['01',   <?php echo $tabh[1];?>,<?php echo $tabh1[1];?>],
          ['02',   <?php echo $tabh[2];?>,<?php echo $tabh1[2];?>],
		  ['03',   <?php echo $tabh[3];?>,<?php echo $tabh1[3];?>],
          ['04',   <?php echo $tabh[4];?>,<?php echo $tabh1[4];?>],
          ['05',   <?php echo $tabh[5];?>,<?php echo $tabh1[5];?>],
		  ['06',   <?php echo $tabh[6];?>,<?php echo $tabh1[6];?>],
          ['07',   <?php echo $tabh[7];?>,<?php echo $tabh1[7];?>],
		  ['08',   <?php echo $tabh[8];?>,<?php echo $tabh1[8];?>],
          ['09',   <?php echo $tabh[9];?>,<?php echo $tabh1[9];?>],
          ['10',   <?php echo $tabh[10];?>,<?php echo $tabh1[10];?>],
		  ['11',   <?php echo $tabh[11];?>,<?php echo $tabh1[11];?>],
          ['12',   <?php echo $tabh[12];?>,<?php echo $tabh1[12];?>],
		  ['13',   <?php echo $tabh[13];?>,<?php echo $tabh1[13];?>],
          ['14',   <?php echo $tabh[14];?>,<?php echo $tabh1[14];?>],
          ['15',   <?php echo $tabh[15];?>,<?php echo $tabh1[15];?>],
		  ['16',   <?php echo $tabh[16];?>,<?php echo $tabh1[16];?>],
		  ['17',   <?php echo $tabh[17];?>,<?php echo $tabh1[17];?>],
          ['18',   <?php echo $tabh[18];?>,<?php echo $tabh1[18];?>],
		  ['19',   <?php echo $tabh[19];?>,<?php echo $tabh1[19];?>],
          ['20',   <?php echo $tabh[20];?>,<?php echo $tabh1[20];?>],
          ['21',   <?php echo $tabh[21];?>,<?php echo $tabh1[21];?>],
		  ['22',   <?php echo $tabh[22];?>,<?php echo $tabh1[22];?>],
		  ['23',   <?php echo $tabh[23];?>,<?php echo $tabh1[23];?>]
          
        
        ]);

        var options = {
          title: 'Débit du <?php echo $tab2[0];?>',
		  width:1170,
		  height:500,
		  
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">
		 google.setOnLoadCallback(drawChart);
		function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Heures', 'VL', 'PL'],
		  ['00',   <?php echo $tabh[0];?>,<?php echo $tabh1[0];?>],
          ['01',   <?php echo $tabh[1];?>,<?php echo $tabh1[1];?>],
          ['02',   <?php echo $tabh[2];?>,<?php echo $tabh1[2];?>],
		  ['03',   <?php echo $tabh[3];?>,<?php echo $tabh1[3];?>],
          ['04',   <?php echo $tabh[4];?>,<?php echo $tabh1[4];?>],
          ['05',   <?php echo $tabh[5];?>,<?php echo $tabh1[5];?>],
		  ['06',   <?php echo $tabh[6];?>,<?php echo $tabh1[6];?>],
          ['07',   <?php echo $tabh[7];?>,<?php echo $tabh1[7];?>],
		  ['08',   <?php echo $tabh[8];?>,<?php echo $tabh1[8];?>],
          ['09',   <?php echo $tabh[9];?>,<?php echo $tabh1[9];?>],
          ['10',   <?php echo $tabh[10];?>,<?php echo $tabh1[10];?>],
		  ['11',   <?php echo $tabh[11];?>,<?php echo $tabh1[11];?>],
          ['12',   <?php echo $tabh[12];?>,<?php echo $tabh1[12];?>],
		  ['13',   <?php echo $tabh[13];?>,<?php echo $tabh1[13];?>],
          ['14',   <?php echo $tabh[14];?>,<?php echo $tabh1[14];?>],
          ['15',   <?php echo $tabh[15];?>,<?php echo $tabh1[15];?>],
		  ['16',   <?php echo $tabh[16];?>,<?php echo $tabh1[16];?>],
		  ['17',   <?php echo $tabh[17];?>,<?php echo $tabh1[17];?>],
          ['18',   <?php echo $tabh[18];?>,<?php echo $tabh1[18];?>],
		  ['19',   <?php echo $tabh[19];?>,<?php echo $tabh1[19];?>],
          ['20',   <?php echo $tabh[20];?>,<?php echo $tabh1[20];?>],
          ['21',   <?php echo $tabh[21];?>,<?php echo $tabh1[21];?>],
		  ['22',   <?php echo $tabh[22];?>,<?php echo $tabh1[22];?>],
		  ['23',   <?php echo $tabh[23];?>,<?php echo $tabh1[23];?>]
          
        
        ]);

        var options = {
          title: 'Débit du <?php echo $tab2[0];?>',
		  width:930,
		  height:500,
		  
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chartprint'));

        chart.draw(data, options);
      }
    </script>
	
	  
	  
	  
	  <?php }?>
	
	
				
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div id="printableArea" style="visibility:hidden;">
	
	<?php
										
										
										include "config.php";
										$a=mysqli_query($link,"select * from trafic_details_j WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										$b=mysqli_query($link,"select * from trafic_details_j WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										$c=mysqli_query($link,"select * from trafic_details_h WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										?>
										
										<div id="toppart">
					<ul>
						
						<li><a><img src="img/logo.jpg" width=190px height=110px /></a></li>
						<li style="margin-left:-120px;"><img style="margin-top:0px;margin-right:10px;"src="img/minr.jpg" width=330px height=110px>
						<img  src="img/flag.png" width=70px height=80px>
						</li>
						<li style="margin-left:156px;"><img src="img/logo2.jpg" width=170px height=110px /></li>
						
					</ul>
				</div>
							
					
					
					
					
									
										<?php $pow = mysqli_fetch_array($b)?>
										
										
									
								<br><br><br><br><br><br>
								
								

<div class="row">
                <div class="col-lg-4"style="width:980px;margin-left:70px;">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                          <b>Route N°: <?php echo $pow[1]; ?></b> /
                               <b> Période:<b>de <?php echo $debut; ?> à <?php echo $datefin; ?> /
                                <b><?php
										if($sens=="sens1"){echo "Sens 1:vers Tunis";}
										if($sens=="sens2"){echo "Sens 2:vers Bizerte";}
										if($sens=="sens3"){echo "Sens 3";}
										?> 
                        </div>
                        <div class="panel-body">
                        <table>
						
						 <td ><img style="margin-left:30px;width:845px;height:300px;" src="img/ariana.jpg"></td>
						 </table>
						</div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				</div>

<div class="col-lg-4"style="width:980px;margin-left:55px;margin-top:50px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Résultats Journaliers
                        </div>
                        <div class="panel-body">								
										<!-- /.row -->
           <div class="col-lg-6" style="margin-left:70px;width:800px;">
                    
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
										
                                <table class="table table-striped table-bordered table-hover">
                                   
                                    <tbody>
										<tr style='background-color:#8C8C8C;color:white;'>
										<th><center>Date</center></th>
                                        <th><center>Jour</center></th>
										<th><center>VL</center></th>
										<th><center>PL</center></th>
										<th><center>D&Eacute;BIT</center></th>
                                        </tr>
										
										
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											$m=0;
											$m1=0;
											$m2=0;
											$jo=0;
											$jol=0;
											$di=0;
											$dil=0;
											$sa=0;
											$sal=0;
											$totvl=0;
											$totpl=0;
											$lu=0;
											$ma=0;
											$me=0;
											$je=0;
											$ve=0;
											
											$debit=0;
											$tot=0;
											$tot1=0;
											$tot2=0;
											$totmoy=0;
											$totmoy1=0;
											$totmoy2=0;
											$totmoymoy=0;
											$tab = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab2 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab3 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab4 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab5 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab6 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab7 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											$tabh = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh3 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh4 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tabh5 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											
											while($now = mysqli_fetch_array($a)){
											?>
										
										
										<?php 
											
										$tab3[$i]=$now[9];
										if($now[10]==NULL){
										$tab4[$i]=0;}
										if($now[10]!=NULL){
										$tab4[$i]=$now[10];}
											
										 $cut1=substr("$now[2]",0,10);
										 $piriw = date("d-m-Y", strtotime($cut1));
										 $tab2[$i]=$piriw;
										 $day = date('w', strtotime($piriw));
										 
										 
										 if($day==0){
										 $jour="dim";
										 $color="style='background-color:#991821;color:white;'";
										 $m1++;
										 }
										  if($day==1){
										 $jour="lun";
										 $color="style='background-color:#006699;color:white;'";
										 $m++;
										 }
										 if($day==2){
										 $jour="mar";
										 $color="style='background-color:#006699;color:white;'";
										 $m++;
										 }
										 if($day==3){
										 $jour="mer";
										 $color="style='background-color:#006699;color:white;'";
										 $m++;
										 }
										 if($day==4){
										 $jour="jeu";
										 $color="style='background-color:#006699;color:white;'";
										 $m++;
										 }
										 if($day==5){
										 $jour="ven";
										 $color="style='background-color:#006699;color:white;'";
										 $m++;
										 }
										 if($day==6){
										 $jour="sam";
										 $color="style='background-color:#36752D;color:white;'";
										 $m2++;
										 }
										
											$tab6[$i]=$jour;
											?>	
										
										
											 <tr align="center" <?php echo $color ?>>
										<td><?php
										$cut=substr("$now[2]",0,10);
										echo $cut; ?></td>
										<td><?php
										 echo $jour; ?></td>
										 
										 
										
										
										<td>
										<?php 
										if($sens=="sens1"){
										$car=$now[3]-$now[5];echo $car;$tab[$i]=$car;$tab5[$i]=$now[4];
										}
										
										if($sens=="sens2"){
										$car=$now[6]-$now[8];echo $car;$tab[$i]=$car;$tab5[$i]=$now[7];
										}
										if($sens=="sens3"){
										$car=($now[6]-$now[8])+($now[3]-$now[5]);echo $car;$tab[$i]=$car;$tab5[$i]=($now[4]+$now[7])/2;
										}
										$debit+=$car;
										?>
										</td>
										
										<td>
										<?php 
										if($sens=="sens1"){
										$pl=$now[5];echo $pl;$tab1[$i]=$pl;
										}
										
										if($sens=="sens2"){
										$pl=$now[8];echo $pl;$tab1[$i]=$pl;
										}
										if($sens=="sens3"){
										$pl=$now[8]+$now[5];echo $pl;$tab1[$i]=$pl;
										} 
										$debit+=$pl;
										?>
										</td>
										
										<td>
										<?php
										echo $debit;$tab7[$i]=$debit;
										$debit=0;
										?>
										</td>
										
										<?php
										if( $day==1 || $day==2 || $day==3 || $day==4 || $day==5 ){$jo+=$car;$jol+=$pl;}
										if( $day==6 ){$sa+=$car;$sal+=$pl;}
										if( $day==0 ){$di+=$car;$dil+=$pl;}
										if( $day==1 ){$lu+=$car+$pl;}
										if( $day==2 ){$ma+=$car+$pl;}
										if( $day==3 ){$me+=$car+$pl;}
										if( $day==4 ){$je+=$car+$pl;}
										if( $day==5 ){$ve+=$car+$pl;}
										$i++;
										?>
										
										
										<?php }  ?>
										
										<?php
										$i=0;
										while($mow = mysqli_fetch_array($c)){
											
										
										$tabh3[$i]=$mow[9];
										if($mow[10]==NULL){
										$tabh4[$i]=0;}
										if($mow[10]!=NULL){
										$tabh4[$i]=$mow[10];}
											
										$cut=substr("$now[2]",8,2);
										
										
										if($sens=="sens1"){
										$car=$mow[3]-$mow[5];$tabh[$i]=$car;$tabh5[$i]=$mow[4];
										}
										
										if($sens=="sens2"){
										$car=$mow[6]-$mow[8];$tabh[$i]=$car;$tabh5[$i]=$mow[7];
										}
										if($sens=="sens3"){
										$car=($mow[6]-$mow[8])+($mow[3]-$mow[5]);$tabh[$i]=$car;$tabh5[$i]=($mow[4]+$mow[7])/2;
										}
										
										if($sens=="sens1"){
										$pl=$mow[5];$tabh1[$i]=$pl;
										}
										
										if($sens=="sens2"){
										$pl=$mow[8];$tabh1[$i]=$pl;
										}
										if($sens=="sens3"){
										$pl=$mow[8]+$mow[5];$tabh1[$i]=$pl;
										} 
										
										$i++;
										}  ?>
										
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'><center>Totaux</center></th>
										</tr>
										<tr align="center" style='background-color:#006699;color:white;'><th>J.O</th>
											<td> <?php echo $jo;$totvl+=$jo; ?> </td>
											<td> <?php echo $jol;$totpl+=$jol; ?> </td>
											<td><?php $tot=$jo+$jol; echo $tot ?></td>
										</tr>
										
										<tr align="center" style='background-color:#36752D;color:white;'><th>SA et F</th>
											<td> <?php echo $sa;$totvl+=$sa; ?> </td>
											<td> <?php echo $sal;$totpl+=$sal; ?> </td>
											<td><?php $tot1=$sa+$sal; echo $tot1 ?></td>
										</tr>
										<tr align="center" style='background-color:#991821;color:white;'><th>DI et F</th>
											<td> <?php echo $di;$totvl+=$di; ?> </td>
											<td> <?php echo $dil;$totpl+=$dil; ?> </td>
											<td><?php $tot2=$di+$dil; echo $tot2 ?></td>
										</tr>
										<tr align="center" style='background-color:#652299;color:white;'><th>Tte Cat</th>
										
											<td>
												<?php 
												echo $totvl;
												?>
											</td>
											<td>
												<?php 
												echo $totpl;
												?>
											</td>
										
										<td><?php $totvlpl=$totvl+$totpl;echo $totvlpl; ?></td>
										
										</tr>
										
										
										
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'><center>Moyenne</center></th>
										</tr>
										<tr align="center" style='background-color:#006699;color:white;'><th>J.O</th>
											<td>
												<?php 
												if($m==0){$m=1;};
												$moy=$jo/$m;
												echo round($moy);
												$totmoy+=$moy;
												$moy=0;
												?>
											</td>
											<td>
												<?php 
												if($m==0){$m=1;};
												$moy=$jol/$m;
												echo round($moy);
												$totmoy+=$moy;
												$moy=0;
												?>
											</td>
										
										<td><?php echo round($totmoy) ?></td>
										
										
										
										</tr>
										
										<tr align="center" style='background-color:#36752D;color:white;'><th>SA et F</th>
										
										<td>
												<?php 
												if($m1==0){$m1=1;};
												$moy1=$sa/$m1;
												echo round($moy1);
												$totmoy1+=$moy1;
												$moy1=0;
												?>
											</td>
											<td>
												<?php 
												if($m1==0){$m1=1;};
												$moy1=$sal/$m1;
												echo round($moy1);
												$totmoy1+=$moy1;
												$moy1=0;
												?>
											</td>
										
										<td><?php echo round($totmoy1) ?></td>
										
										</tr>
										<tr align="center" style='background-color:#991821;color:white;'><th>DI et F</th>
										
										<td>
												<?php 
												if($m2==0){$m2=1;};
												$moy2=$di/$m2;
												echo round($moy2);
												$totmoy2+=$moy2;
												$moy2=0;
												?>
											</td>
											<td>
												<?php 
												if($m2==0){$m2=1;};
												$moy2=$dil/$m2;
												echo round($moy2);
												$totmoy2+=$moy2;
												$moy2=0;
												?>
											</td>
										
										<td><?php echo round($totmoy2) ?></td>
										</tr>
										<tr align="center" style='background-color:#652299;color:white;'><th>Tte Cat</th>
										
										
										
											<td>
												<?php 
												
												$totmoyenne=($totvl)/($m+$m1+$m2);
												if($m==1 && $m1==1 && $m2==1){$totmoyenne=$totvl;}
												echo round($totmoyenne);
												$totmoymoy+=$totmoyenne;
												$totmoyenne=0;
												?>
											</td>
										
										<td>
												<?php 
												
												$totmoyenne=($totpl)/($m+$m1+$m2);
												if($m==1 && $m1==1 && $m2==1){$totmoyenne=$totpl;}
												echo round($totmoyenne);
												$totmoymoy+=$totmoyenne;
												
												?>
											</td>
										
										<td><?php echo round($totmoymoy) ?></td>
										
										</tr>
										
                                        
                                    </tbody>
									
                                </table>
								
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    
                </div>
                <!-- /.col-lg-6 -->
						
                        
						</div>
                        <div class="panel-footer">
                           *VL:Voiture Légére / *PL:Poids Lourd / *JO:Jours Ouvrables / *SA:Samedi / *DI:Dimanche
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>	






<?php if($period =="jour") { ?></br></br></br></br></br></br></br></br> </br></br></br> </br></br></br> </br></br></br></br></br></br> <?php }?>
<?php if($period =="mois") { ?></br></br></br></br></br></br></br></br> </br></br></br> </br></br></br> </br></br></br></br></br></br> <?php }?>

				
				<div class="row">
                <!-- /.col-lg-4 -->
                <div  class="col-lg-4" style="width:980px;margin-left:70px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Nombre des voitures Lourdes et Légères
                        </div>
                        <div class="panel-body">
                        
						<div id="dual_yyy_divprint" style="width: 1000px; height: 500px;"></div>
						
						</div>
                        <div class="panel-footer">
                            *PL:Poids Lourd / *VL:Voiture Légère /*K:milles
                        </div>
                    </div>
                </div>
                </div>
				
				
				</br></br>
		
		
		
		<div class="row">
            <div class="col-lg-4" style="width:980px;margin-left:70px;">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Débit
                        </div>
                        <div class="panel-body">
                       
							
							<div id="curve_chartprint" style="width: 700px; height: 500px;margin-left:-15px;"></div>
							
					   </div>
                        <div class="panel-footer">
                            *PL:Poids Lourd / *VL:Voiture Légère
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
		
		</div>
		
		<?php if($period ="demi") { ?></br></br></br></br></br></br></br></br> <?php }?>
		
		</br></br>
			<div class="row">	
                <div class="col-lg-4" style="width:980px;margin-left:70px;">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Vitesse Moyenne
                        </div>
                        <div class="panel-body">
                        <div id="curve_chart1print" style="width: 900px; height: 500px;margin-left:-10px;"></div>
						</div>
                        <div class="panel-footer">
                           Unité:KM/H
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
		</div>
		</br></br><?php if($period ="jour") { ?></br></br></br> <?php }?>
				<div class="row">
                <div class="col-lg-4"style="width:980px;margin-left:70px;">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Tension Batterie et Niveau de Récéption
                        </div>
                        <div class="panel-body">
                        <div id="chart_divprint" style="width: 680px; height: 500px;margin-left:-10px;"></div>
						</div>
                        <div class="panel-footer">
                           *B:Batterie / *NR:Niveau de Réception
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
				</div>
                </br></br>
				
				
				
				<?php if($period!="jour") { ?>
				<div class="row">
				<div  class="col-lg-4" style="width:1230px;margin-left:80px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Débit Journalier
                        </div>
                        <div class="panel-body">
                        
						 <div id="piechartprint" style="width: 1170px; height: 500px;margin"></div>
						
						</div>
                        <div class="panel-footer">
                            *Débit:PL+VL
                        </div>
                    </div>
                </div>
				
				</div>
				<?php }?>
				
				
				
				
				
				</div>
			
										
										
						</div>
				
				






				</div>		
	
	
	
	
	
	
	
	
	
	
	
	

</body>

</html>