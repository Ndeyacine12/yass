<?php
require_once('connexion.php'); 
$Pr�nom =$_POST['pr�nom'];
$Nom=$_POST['nom'];
$T�l�phone=$_POST['t�l�phone'];
$Messagerie=$_POST['messagerie'];
$Ville=$_POST['ville'];
$Pays=$_POST['pays'];
$Type_de_logement=$_POST['logement'];
$Date_d_arriv�e=$_POST['arriv�e'];
$Date_de_sortie=$_POST['sortie'];

 
$conn->query("INSERT  INTO reservation values('','$Pr�nom','$Nom','$T�l�phone','$Messagerie','$Ville','$Pays','$Type_de_logement','$Date_d_arriv�e','$Date_de_sortie')");
$conn->close();
header('Location:Reservation.php');
 
?> 