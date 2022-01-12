<?php
require_once('connexion.php'); 
$Prénom =$_POST['prénom'];
$Nom=$_POST['nom'];
$Téléphone=$_POST['téléphone'];
$Messagerie=$_POST['messagerie'];
$Ville=$_POST['ville'];
$Pays=$_POST['pays'];
$Type_de_logement=$_POST['logement'];
$Date_d_arrivée=$_POST['arrivée'];
$Date_de_sortie=$_POST['sortie'];

 
$conn->query("INSERT  INTO reservation values('','$Prénom','$Nom','$Téléphone','$Messagerie','$Ville','$Pays','$Type_de_logement','$Date_d_arrivée','$Date_de_sortie')");
$conn->close();
header('Location:Reservation.php');
 
?> 