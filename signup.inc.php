<?php
 include_once 'dbh.inc.php';

 $nume = $_POST['user_name'];
 $domiciliu = $_POST['user_domiciliu'];
 $Str = $_POST['user_str'];
 $Bl = $_POST['user_bl'];
 $Sc = $_POST['user_sc'];
 $Ap = $_POST['user_ap'];
 $Jud = $_POST['user_jud'];
 $CI = $_POST['user_CI'];
 $Seria = $_POST['user_serie'];
 $Nr = $_POST['user_nr'];
 $Avocat = $_POST['user_avocat'];
 $Inspectorat = $_POST['user_inspectorat'];
 $Plangere_Contraventionala = $_POST['user_plangere'];
 $Nr_Contraventie = $_POST['user_nr_s'];
 $Serie_Contraventie = $_POST['user_serie_s'];
 $Data_Contraventie = $_POST['trip-start'];
 $Data_Comunicare = $_POST['trip-start_2'];
 $Suma_RON = $_POST['user_RON'];
 $Motive_Rez = $_POST['user_motiv'];
 $Serie_Sanctiune = $_POST['user_serieS'];
 $Sanctiune = $_POST['user_list'];
 $Acord_Semnatura = $_POST['user_acord'];
 $Cuantum_Amenda = $_POST['user_A_RON'];
 $Art = $_POST['user_art'];
 $Martori = $_POST['user_martori'];

$sql="INSERT INTO  users ( nume, domiciliu, Str, Bl, Sc, Ap, Jud , CI, Seria, Nr, Avocat, Inspectorat, Plangere_Contraventionala, Nr_Contraventie, Serie_Contraventie, Data_Contraventie,
 Data_Comunicare, Suma_RON, Motive_Rez, Serie_Sanctiune, Sanctiune, Acord_Semnatura, Cuantum_Amenda, Art, Martori)
VALUES ('$nume', '$domiciliu', '$Str', $Bl, $Sc, $Ap, '$Jud' , '$CI', '$Seria', '$Nr', $Avocat, '$Inspectorat', '$Plangere_Contraventionala', '$Nr_Contraventie', '$Serie_Contraventie', '$Data_Contraventie',
 '$Data_Comunicare', $Suma_RON, '$Motive_Rez', '$Serie_Sanctiune', '$Sanctiune', '$Acord_Semnatura', $Cuantum_Amenda, $Art, '$Martori');";
mysqli_query($conn,$sql);

header("Location: main.php?signup=success");


?>
