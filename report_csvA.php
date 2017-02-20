<?php


if($_POST['perio']=="mois"){


header('Content-Type: application/x-excel');
header('Content-Disposition: attachment; filename="cesei_activity_log.csv"');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
$headers=array('DATE','JOUR','VL','PL','DEBIT JOURNALIERE');
   $row_1=array($_POST['time0'], $_POST['j0'], $_POST['vl0'] ,$_POST['pl0'],$_POST['d0']);
   $row_2=array($_POST['time1'], $_POST['j1'], $_POST['vl1'] ,$_POST['pl1'],$_POST['d1']);
   $row_3=array($_POST['time2'], $_POST['j2'], $_POST['vl2'] ,$_POST['pl2'],$_POST['d2']);
   $row_4=array($_POST['time3'], $_POST['j3'], $_POST['vl3'] ,$_POST['pl3'],$_POST['d3']);
   $row_5=array($_POST['time4'], $_POST['j4'], $_POST['vl4'] ,$_POST['pl4'],$_POST['d4']);
   $row_6=array($_POST['time5'], $_POST['j5'], $_POST['vl5'] ,$_POST['pl5'],$_POST['d5']);
   $row_7=array($_POST['time6'], $_POST['j6'], $_POST['vl6'] ,$_POST['pl6'],$_POST['d6']);
   $row_8=array($_POST['time7'], $_POST['j7'], $_POST['vl7'] ,$_POST['pl7'],$_POST['d7']);
   $row_9=array($_POST['time8'], $_POST['j8'], $_POST['vl8'] ,$_POST['pl8'],$_POST['d8']);
   $row_10=array($_POST['time9'],$_POST['j9'],$_POST['vl9'] ,$_POST['pl9'],$_POST['d9']);
 $row_11=array($_POST['time10'], $_POST['j10'], $_POST['vl10'],$_POST['pl10'],$_POST['d10']);
 $row_12=array($_POST['time11'], $_POST['j11'], $_POST['vl11'],$_POST['pl11'],$_POST['d11']);
 $row_13=array($_POST['time12'], $_POST['j12'], $_POST['vl12'],$_POST['pl12'],$_POST['d12']);
 $row_14=array($_POST['time13'], $_POST['j13'], $_POST['vl13'],$_POST['pl13'],$_POST['d13']);
 $row_15=array($_POST['time14'], $_POST['j14'], $_POST['vl14'],$_POST['pl14'],$_POST['d14']);
 $row_16=array($_POST['time15'], $_POST['j15'], $_POST['vl15'],$_POST['pl15'],$_POST['d15']);
 $row_17=array($_POST['time16'], $_POST['j16'], $_POST['vl16'],$_POST['pl16'],$_POST['d16']);
 $row_18=array($_POST['time17'], $_POST['j17'], $_POST['vl17'],$_POST['pl17'],$_POST['d17']);
 $row_19=array($_POST['time18'], $_POST['j18'], $_POST['vl18'],$_POST['pl18'],$_POST['d18']);
 $row_20=array($_POST['time19'], $_POST['j19'], $_POST['vl19'],$_POST['pl19'],$_POST['d19']);
 $row_21=array($_POST['time20'], $_POST['j20'], $_POST['vl20'],$_POST['pl20'],$_POST['d20']);
 $row_22=array($_POST['time21'], $_POST['j21'], $_POST['vl21'],$_POST['pl21'],$_POST['d21']);
 $row_23=array($_POST['time22'], $_POST['j22'], $_POST['vl22'],$_POST['pl22'],$_POST['d22']);
 $row_24=array($_POST['time23'], $_POST['j23'], $_POST['vl23'],$_POST['pl23'],$_POST['d23']);
 $row_25=array($_POST['time24'], $_POST['j24'], $_POST['vl24'],$_POST['pl24'],$_POST['d24']);
 $row_26=array($_POST['time25'], $_POST['j25'], $_POST['vl25'],$_POST['pl25'],$_POST['d25']);
 $row_27=array($_POST['time26'], $_POST['j26'], $_POST['vl26'],$_POST['pl26'],$_POST['d26']);
 $row_28=array($_POST['time27'], $_POST['j27'], $_POST['vl27'],$_POST['pl27'],$_POST['d27']);
 $row_29=array($_POST['time28'], $_POST['j28'], $_POST['vl28'],$_POST['pl28'],$_POST['d28']);
 $row_30=array($_POST['time29'], $_POST['j29'], $_POST['vl29'],$_POST['pl29'],$_POST['d29']);
 
 $row_31=array("TOTAUX", "JO", $_POST['csv1'],$_POST['csv2'],$_POST['csv3']);
 $row_32=array("TOTAUX", "SA", $_POST['csv4'],$_POST['csv5'],$_POST['csv6']);
 $row_33=array("TOTAUX", "DI", $_POST['csv7'],$_POST['csv8'],$_POST['csv9']);
 $row_34=array("TOTAUX", "Tte Cat", $_POST['csv10'],$_POST['csv11'],$_POST['csv12']);
 
 $row_35=array("MOYENNE", "JO", $_POST['csv13'],$_POST['csv14'],$_POST['csv15']);
 $row_36=array("MOYENNE", "SA", $_POST['csv16'],$_POST['csv17'],$_POST['csv18']);
 $row_37=array("MOYENNE", "DI", $_POST['csv19'],$_POST['csv20'],$_POST['csv21']);
 $row_38=array("MOYENNE", "Tte Cat", $_POST['csv22'],$_POST['csv23'],$_POST['csv24']);
                          
echo(implode(';',$headers));
echo("\n");
echo(implode(';',$row_1));
echo("\n");
echo(implode(';',$row_2));
echo("\n");
echo(implode(';',$row_3));
echo("\n");
echo(implode(';',$row_4));
echo("\n");
echo(implode(';',$row_5));
echo("\n");
echo(implode(';',$row_6));
echo("\n");
echo(implode(';',$row_7));
echo("\n");
echo(implode(';',$row_8));
echo("\n");
echo(implode(';',$row_9));
echo("\n");
echo(implode(';',$row_10));
echo("\n");
echo(implode(';',$row_11));
echo("\n");
echo(implode(';',$row_12));
echo("\n");
echo(implode(';',$row_13));
echo("\n");
echo(implode(';',$row_14));
echo("\n");
echo(implode(';',$row_15));
echo("\n");
echo(implode(';',$row_16));
echo("\n");
echo(implode(';',$row_17));
echo("\n");
echo(implode(';',$row_18));
echo("\n");
echo(implode(';',$row_19));
echo("\n");
echo(implode(';',$row_20));
echo("\n");
echo(implode(';',$row_21));
echo("\n");
echo(implode(';',$row_22));
echo("\n");
echo(implode(';',$row_23));
echo("\n");
echo(implode(';',$row_24));
echo("\n");
echo(implode(';',$row_25));
echo("\n");
echo(implode(';',$row_26));
echo("\n");
echo(implode(';',$row_27));
echo("\n");
echo(implode(';',$row_28));
echo("\n");
echo(implode(';',$row_29));
echo("\n");
echo(implode(';',$row_30));
echo("\n");

echo(implode(';',$row_31));
echo("\n");
echo(implode(';',$row_32));
echo("\n");
echo(implode(';',$row_33));
echo("\n");
echo(implode(';',$row_34));
echo("\n");
echo(implode(';',$row_35));
echo("\n");
echo(implode(';',$row_36));
echo("\n");
echo(implode(';',$row_37));
echo("\n");
echo(implode(';',$row_38));
echo("\n");



}


if($_POST['perio']=="demi"){


header('Content-Type: application/x-excel');
header('Content-Disposition: attachment; filename="cesei_activity_log.csv"');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
$headers=array('DATE','JOUR','VL','PL','DEBIT JOURNALIERE');
   $row_1=array($_POST['time0'], $_POST['j0'],$_POST['vl0'],$_POST['pl0'],$_POST['d0']);
   $row_2=array($_POST['time1'], $_POST['j1'],$_POST['vl1'],$_POST['pl1'],$_POST['d1']);
   $row_3=array($_POST['time2'], $_POST['j2'],$_POST['vl2'],$_POST['pl2'],$_POST['d2']);
   $row_4=array($_POST['time3'], $_POST['j3'],$_POST['vl3'],$_POST['pl3'],$_POST['d3']);
   $row_5=array($_POST['time4'], $_POST['j4'],$_POST['vl4'],$_POST['pl4'],$_POST['d4']);
   $row_6=array($_POST['time5'], $_POST['j5'],$_POST['vl5'],$_POST['pl5'],$_POST['d5']);
   $row_7=array($_POST['time6'], $_POST['j6'],$_POST['vl6'],$_POST['pl6'],$_POST['d6']);
   $row_8=array($_POST['time7'], $_POST['j7'],$_POST['vl7'],$_POST['pl7'],$_POST['d7']);
   $row_9=array($_POST['time8'], $_POST['j8'],$_POST['vl8'],$_POST['pl8'],$_POST['d8']);
  $row_10=array($_POST['time9'], $_POST['j9'],$_POST['vl9'],$_POST['pl9'],$_POST['d9']);
 $row_11=array($_POST['time10'], $_POST['j10'], $_POST['vl10'],$_POST['pl10'],$_POST['d10']);
 $row_12=array($_POST['time11'], $_POST['j11'], $_POST['vl11'],$_POST['pl11'],$_POST['d11']);
 $row_13=array($_POST['time12'], $_POST['j12'], $_POST['vl12'],$_POST['pl12'],$_POST['d12']);
 $row_14=array($_POST['time13'], $_POST['j13'], $_POST['vl13'],$_POST['pl13'],$_POST['d13']);
 $row_15=array($_POST['time14'], $_POST['j14'], $_POST['vl14'],$_POST['pl14'],$_POST['d14']);
 
 $row_16=array("TOTAUX", "JO", $_POST['csv1'],$_POST['csv2'],$_POST['csv3']);
 $row_17=array("TOTAUX", "SA", $_POST['csv4'],$_POST['csv5'],$_POST['csv6']);
 $row_18=array("TOTAUX", "DI", $_POST['csv7'],$_POST['csv8'],$_POST['csv9']);
 $row_19=array("TOTAUX", "Tte Cat", $_POST['csv10'],$_POST['csv11'],$_POST['csv12']);
 
 $row_20=array("MOYENNE", "JO", $_POST['csv13'],$_POST['csv14'],$_POST['csv15']);
 $row_21=array("MOYENNE", "SA", $_POST['csv16'],$_POST['csv17'],$_POST['csv18']);
 $row_22=array("MOYENNE", "DI", $_POST['csv19'],$_POST['csv20'],$_POST['csv21']);
 $row_23=array("MOYENNE", "Tte Cat", $_POST['csv22'],$_POST['csv23'],$_POST['csv24']);
 
                          
echo(implode(';',$headers));
echo("\n");
echo(implode(';',$row_1));
echo("\n");
echo(implode(';',$row_2));
echo("\n");
echo(implode(';',$row_3));
echo("\n");
echo(implode(';',$row_4));
echo("\n");
echo(implode(';',$row_5));
echo("\n");
echo(implode(';',$row_6));
echo("\n");
echo(implode(';',$row_7));
echo("\n");
echo(implode(';',$row_8));
echo("\n");
echo(implode(';',$row_9));
echo("\n");
echo(implode(';',$row_10));
echo("\n");
echo(implode(';',$row_11));
echo("\n");
echo(implode(';',$row_12));
echo("\n");
echo(implode(';',$row_13));
echo("\n");
echo(implode(';',$row_14));
echo("\n");
echo(implode(';',$row_15));
echo("\n");

echo(implode(';',$row_16));
echo("\n");
echo(implode(';',$row_17));
echo("\n");
echo(implode(';',$row_18));
echo("\n");
echo(implode(';',$row_19));
echo("\n");
echo(implode(';',$row_20));
echo("\n");
echo(implode(';',$row_21));
echo("\n");
echo(implode(';',$row_22));
echo("\n");
echo(implode(';',$row_23));
echo("\n");



}



if($_POST['perio']=="jour"){


header('Content-Type: application/x-excel');
header('Content-Disposition: attachment; filename="cesei_activity_log.csv"');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
$headers=array('DATE','JOUR','VL','PL','DEBIT JOURNALIERE');
   $row_1=array($_POST['time0'], $_POST['j0'],$_POST['vl0'],$_POST['pl0'],$_POST['d0']);
    $row_2=array("TOTAUX", "JO", $_POST['csv1'],$_POST['csv2'],$_POST['csv3']);
 $row_3=array("TOTAUX", "SA", $_POST['csv4'],$_POST['csv5'],$_POST['csv6']);
 $row_4=array("TOTAUX", "DI", $_POST['csv7'],$_POST['csv8'],$_POST['csv9']);
 $row_5=array("TOTAUX", "Tte Cat", $_POST['csv10'],$_POST['csv11'],$_POST['csv12']);
 
 $row_6=array("MOYENNE", "JO", $_POST['csv13'],$_POST['csv14'],$_POST['csv15']);
 $row_7=array("MOYENNE", "SA", $_POST['csv16'],$_POST['csv17'],$_POST['csv18']);
 $row_8=array("MOYENNE", "DI", $_POST['csv19'],$_POST['csv20'],$_POST['csv21']);
 $row_9=array("MOYENNE", "Tte Cat", $_POST['csv22'],$_POST['csv23'],$_POST['csv24']);
   
                          
echo(implode(';',$headers));
echo("\n");
echo(implode(';',$row_1));
echo("\n");

echo(implode(';',$row_2));
echo("\n");
echo(implode(';',$row_3));
echo("\n");
echo(implode(';',$row_4));
echo("\n");
echo(implode(';',$row_5));
echo("\n");
echo(implode(';',$row_6));
echo("\n");
echo(implode(';',$row_7));
echo("\n");
echo(implode(';',$row_8));
echo("\n");
echo(implode(';',$row_9));
echo("\n");
}



?>