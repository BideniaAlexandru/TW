<?php

include_once 'dbh.php';
$nume=$_POST['first'];
$cnp=$_POST['cnp'];
$domiciliu=$_POST['domiciliu'];
$str=$_POST['str'];
$bl=$_POST['bl'];
$sc=$_POST['sc'];
$ap=$_POST['ap'];
$jud=$_POST['jud'];
$ci=$_POST['ci'];
$nr=$_POST['nr'];
$serie=$_POST['serie'];
$avocat=$_POST['avocat'];
$insp=$_POST['insp'];
$plangere=$_POST['plangere'];
$nr_con=$_POST['nr_con'];
$serie_con=$_POST['serie_con'];
$data=$_POST['data'];
$data_com=$_POST['data_com'];
$suma=$_POST['suma'];
$motiv=$_POST['motiv'];
$serie_san=$_POST['serie_san'];
$san=$_POST['san'];
$acord=$_POST['acord'];
$amenda=$_POST['amenda'];
$art=$_POST['art'];
$martori=$_POST['martori'];


$sql= "INSERT INTO `users`(`nume`, `cnp`, `domiciliu`, `Str`, `Bl`, `Sc`, `Ap`, `Jud`, `CI`, `Seria`, `Nr`, `Avocat`, `Inspectorat`, `Plangere_Contraventionala`, `Nr_Contraventie`, `Serie_Contraventie`, `Data_Contraventie`, `Data_Comunicare`, `Suma_RON`, `Motive_Rez`, `Serie_Sanctiune`, `Sanctiune`, `Acord_Semnatura`, `Cuantum_Amenda`, `Art`, `Martori`) 
VALUES ('$nume','$cnp','$domiciliu','$str','$bl','$sc','$ap','$jud','$ci','$serie','$nr','$avocat','$insp','$plangere','$nr_con',
'$serie_con','$data','$data_com','$suma','$motiv','$serie_san','$san','$acord','$amenda','$art','$martori');";

mysqli_query($conn,$sql);

header("Location: redirect.php");