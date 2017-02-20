<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comptages Automatiques</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

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

</head>

<body>

					
					
					
					
					<?php
										$debut = $fin = "";
										
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											$debut = test_input($_POST["debut"]);
											$period = test_input($_POST["gender"]);
											$vehicule = test_input($_POST["der"]);
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
										
										session_start();
										$_SESSION['dadeb']=$debut;  
										$_SESSION['dafin']=$datefin;
										$_SESSION['period']=$period;
										
										function test_input($data) {
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;
										}
										?>
										
										
										<?php
										
										
										include "config.php";
										$a=mysqli_query($link,"select * from trafic_details_h WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										$b=mysqli_query($link,"select * from trafic_details_h WHERE SUBSTR(date,1,10) BETWEEN '$debut' and '$datefin' ");
										?>
										
										<div id="toppart" style="background-color:white;">
					<ul>
						
						<li><a><img src="img/logo.jpg" width=250px height=110px /></a></li>
						<li style="margin-left:-120px;"><img style="margin-top:0px;margin-right:10px;"src="img/minr.jpg" width=390px height=110px>
						<img  src="img/flag.png" width=130px height=80px>
						</li>
						<li style="margin-left:156px;"><img src="img/logo2.jpg" width=230px height=110px /></li>
						
					</ul>
					<hr style="height: 12px;border: 0;box-shadow: inset 0 12px 12px -10px rgba(0,0,0,0.5);">
				</div>
										
										<?php $pow = mysqli_fetch_array($b)?>
										
										
										
										<center>
										
								<button type="button" class="btn btn-primary"><b>Route N°: <?php echo $pow[1]; ?></b></button>
                                <button type="button" class="btn btn-success">Période:<b>de <?php echo $debut; ?> à <?php echo $datefin; ?></button>
                                <button type="button" class="btn btn-info"><b><?php
										if($sens=="sens1"){echo "Sens 1:vers Tunis";}
										if($sens=="sens2"){echo "Sens 2:vers Bizerte";}
										if($sens=="sens3"){echo "Sens 3";}
										?></button>
                                <button type="button" class="btn btn-danger">Véhicule:<b> <?php echo $vehicule; ?></button>
                                
										
										
                            								
                                
								
                                
                                
                            
							
								</center>
                                		
										
										
											
										<!-- /.row -->
           <div class="col-lg-6" style="width:1370px;margin-left:-30px;">
                    
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
										
                                <table style="margin-left:10px;width:1300px;" class="table table-striped table-bordered table-hover">
                                   
                                    <tbody>
										<tr style='background-color:#8C8C8C;color:white;'>
										<th rowspan=2>Date</th>
                                        <th rowspan=2>Jour</th>
										<th colspan=24 style="text-align:center;">HEURES DE LA JOURNÉE</th>
										<th rowspan=2 >DÉBIT  </br>JOUR-<br>NALIER</th>
                                        </tr>
										
                                        <tr style='background-color:#8C8C8C;color:white;'>
										
										<th>0</th>
										<th>1</th>
										<th>2</th>
										<th>3</th>
										<th>4</th>
										<th>5</th>
										<th>6</th>
										<th>7</th>
										<th>8</th>
										<th>9</th>
										<th>10</th>
										<th>11</th>
										<th>12</th>
										<th>13</th>
										<th>14</th>
										<th>15</th>
										<th>16</th>
										<th>17</th>
										<th>18</th>
										<th>19</th>
										<th>20</th>
										<th>21</th>
										<th>22</th>
										<th>23</th>
										
										
										</tr>
										
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											$m=0;
											$m1=0;
											$m2=0;
											
											$debit=0;
											$tot=0;
											$tot1=0;
											$tot2=0;
											$totmoy=0;
											$totmoy1=0;
											$totmoy2=0;
											$totmoymoy=0;
											$tab = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab1 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											$tab2 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
											
											
											while($now = mysqli_fetch_array($a)){
											?>
										<b>
										<?php if($i==0) { ?>  
										<?php 
											
										 $cut1=substr("$now[2]",0,10);
										 $piriw = date("d-m-Y", strtotime($cut1));
										 $day = date('w', strtotime($piriw));
										 
										 if($day==0){
										 $jour="dim";
										 $color="style='background-color:#991821;color:white;'";
										 $m1++;
										 }
										  if($day==1){
										 $jour="lun";
										 $color="style='background-color:white;color:blue;'";
										 $m++;
										 }
										 if($day==2){
										 $jour="mar";
										 $color="style='background-color:white;color:blue;'";
										 $m++;
										 }
										 if($day==3){
										 $jour="mer";
										 $color="style='background-color:white;color:blue;'";
										 $m++;
										 }
										 if($day==4){
										 $jour="jeu";
										 $color="style='background-color:white;color:blue;'";
										 $m++;
										 }
										 if($day==5){
										 $jour="ven";
										 $color="style='background-color:white;color:blue;'";
										 $m++;
										 }
										 if($day==6){
										 $jour="sam";
										 $color="style='background-color:#36752D;color:white;'";
										 $m2++;
										 }
										
											
											?>	
										
										
											 <tr <?php echo $color ?>>
										<td><b><?php
										$cut=substr("$now[2]",0,10);
										echo $cut; ?></td>
										<td><b><?php
										 echo $jour; ?></td>
										 <?php } ?>
										 
										<?php if ($i<24) {  ?>
										
										<td>
										<?php 
										if($sens=="sens1"){
										if($vehicule=="lourds"){$car=$now[5];}
										if($vehicule=="normal"){$car=$now[3]-$now[5];}
										}
										
										if($sens=="sens2"){
										if($vehicule=="lourds"){$car=$now[8];}
										if($vehicule=="normal"){$car=$now[6]-$now[8];}
										}
										if($sens=="sens3"){
										if($vehicule=="lourds"){$car=$now[8]+$now[5];}
										if($vehicule=="normal"){$car=($now[6]-$now[8])+($now[3]-$now[5]);}
										}
										
										
										
										$debit+=$car;
										if( $day==1 || $day==2 || $day==3 || $day==4 || $day==5 ){$tab[$i+1]+=$car;}
										if( $day==6 ){$tab1[$i+1]+=$car;}
										if( $day==0 ){$tab2[$i+1]+=$car;}
										?> <b><?php echo $car;
										$i++;
										?>
										</td>
										<?php } ?>
										<?php if($i==24) { $i=0; ?> <td><b><?php echo $debit;$debit=0; ?></td></tr> 
										
										<?php } } ?>
										<th></th>
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'>Totaux</th>
										</tr>
										<tr style='background-color:white;color:blue;'><th>J.O</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												echo $tab[$i];
												$tot+=$tab[$i];
												?>
											</td>
										<?php } ?>
										<td><b><?php echo $tot ?></td>
										
										
										
										</tr>
										
										<tr style='background-color:#36752D;color:white;'><th>SA et F</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												echo $tab1[$i];
												$tot1+=$tab1[$i];
												?>
											</td>
										<?php } ?>
										<td><b><?php echo $tot1 ?></td>
										
										</tr>
										<tr style='background-color:#991821;color:white;'><th>DI et F</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												echo $tab2[$i];
												$tot2+=$tab2[$i];
												?>
											</td>
										<?php } ?>
										<td><b><?php echo $tot2 ?></td>
										
										</tr>
										<tr style='background-color:#9B30FF;color:white;'><th>Tte Cat</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											$totti=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												$tottot=$tab[$i]+$tab1[$i]+$tab2[$i];
												echo $tottot;
												$totti+=$tottot;
												$tottot=0;
												?>
											</td>
										<?php } ?>
										<td><b><?php echo $totti ?></td>
										
										</tr>
										
										
										
										<tr>
										<th rowspan=5 style='background-color:#8C8C8C;color:white;'>Moyenne</th>
										</tr>
										<tr style='background-color:white;color:blue;'><th>J.O</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												if($m==0){$m=1;};
												$moy=$tab[$i]/$m;
												echo round($moy);
												$totmoy+=$moy;
												$moy=0;
												?>
											</td>
										<?php } ?>
										<td><b><?php echo round($totmoy) ?></td>
										
										
										
										</tr>
										
										<tr style='background-color:#36752D;color:white;'><th>SA et F</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												if($m1==0){$m1=1;}
												$moy1=$tab1[$i]/$m1;
												echo round($moy1);
												$totmoy1+=$moy1;
												$moy1=0;
												?>
											</td>
										<?php } ?>
										<td><b><?php echo round($totmoy1) ?></td>
										
										</tr>
										<tr style='background-color:#991821;color:white;'><th>DI et F</th>
										
										<?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
											$i=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												if($m2==0){$m2=1;}
												$moy2=$tab2[$i]/$m2;
												
												echo round($moy2);
												$totmoy2+=$moy2;
												$moy2=0;
												?>
											</td>
										<?php } ?>
										<td><b><?php echo round($totmoy2) ?></td>
										
										</tr>
										<tr style='background-color:#9B30FF;color:white;'><th>Tte Cat</th>
										
										<?php 
											$i=0;
											$totti=0;
											
											for ($i = 1; $i <= 24; $i++) { 
											?>
										
											<td>
												<b><?php 
												
												$totmoyenne=($tab[$i]+$tab1[$i]+$tab2[$i])/($m+$m1+$m2);
												if($m==1 && $m1==1 && $m2==1){$totmoyenne=($tab[$i]+$tab1[$i]+$tab2[$i]);}
												echo round($totmoyenne);
												$totmoymoy+=$totmoyenne;
												$totmoyenne=0;
												?>
											</td>
										<?php } ?>
										<td><b><?php echo round($totmoymoy) ?></td>
										
										</tr>
										
                                        
                                    </tbody>
									
                                </table>
								
                             </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    
                </div>
                <!-- /.col-lg-6 -->
										
										
					
					
					
					
					
					
					
					
					
					
                    <!-- /.col-lg-12 -->
                

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
