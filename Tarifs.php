<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ranch Hotel</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<header> 
<div id="header">
  
 <input type="image" name="imageField" src="img/IMG-20210720-WA0005.jpg" id="logo"  /><br/>
<h1>Ranch de Bango</h1>
<p>Saint-louis Sénégal</p>
<p> Appelez-nous: (221) 33 961 19 81 Ranche de Bango<br/>
 Nous rejoindre </p>
</div>
</header>

 <nav id="Menu"> 
  <ul>
 <li><a href="accueil.php">Accueil</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Activites.php">Activités</a></li>
<li><a href="Chambres.php">Chambres</a></li>
<li><a href="Tarifs.php">Tarifs</a></li>
</ul>
</nav> 
<div id="form">
  <?php
require_once('connexion.php');
$req1="SELECT * FROM tarifs_chambre";
$result=$conn->query($req1);
$req2="SELECT * FROM tarifs_restauration";
$result1=$conn->query($req2);
?>
<img src="img/IMG-20210719-WA0016.jpg" width="600" height="120" />
<h1>Tarifs publics Ranch de Bango 2020-2021</h1>
<p>Prix du 1er Novembre 2020 au 31 Octobre 2021.
  Prix Eté, remise de 20% sur les chambres(Juillet, Aout, Septembre) </p>
  
<table width="612" border="1">
<tbody>
  <tr>
    <th scope="col">Type de Chambres</th>
    <th scope="col">Prix/Nuit</th>
  </tr>
   <?php
			while($row= $result->fetch_assoc())
			{
			?>
  <tr>
    <td><?php echo $row['Type de chambre'] ?></td>
	<td><?php echo $row['PRIX/NUIT'] ?></td>
  </tr>
  <?php
			}
			$conn->close();
			?>
</tbody>
</table>
<p>&nbsp;</p>

<h1> Maisons privées 2 chambres et trois chambres, location à la journée, à la semaine ou au mois.(demandez un devis)</h1>
<table width="612" border="1">
<tbody>
  <tr>
    <th scope="col">RESTAURATION</th>
    <th scope="col">PRIX/PERSONNE</th>
  </tr>
   <?php
			while($row= $result1->fetch_assoc())
			{
			?>
  <tr>
    <td><?php echo $row['RESTAURATION'] ?></td>
	<td><?php echo $row['PRIX/PERSONNE'] ?></td>
  </tr>
  <?php
			}
			
			?>
</tbody>
</table>
<p>&nbsp;</p>
<p>50% de remise pour les repas des enfants de - de 12 ans / Gratuité pour les enfants - de trois ans <p>
<p>Chauffeur qui accompagne logement gratuit. Le lit supplémentaire 12000 FCFA uniquement dans les chambres= ou > 32m2.<p>
<p>Les chambres sont routes climatisées(A,B,C...). Location 4x4, Bateau VIP, Chevaux..(Demander un devis)<p>
<p>Possibilité de réserver un taxi à l'aéroport 100 euro/taxi max. 4 personnes pour le transfert jusqu'au Ranch.<p>
</div>
<footer>
<div id="Pied"><br>
<center>Malick FALL et Ndeye yacine Ndiaye&copy;2021</center><br>
</div>
</footer>

</body>
</html>
