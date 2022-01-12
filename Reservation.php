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
  
  <section id="form">
  <img src="img/IMG-20210719-WA0024.jpg" width="485" height="130" />
  
  
    <form class="form1" name="form1" method="post" action="traitement_reservation.php">
	<fieldset>
	<legend><h1>Réserver au Ranch de Bango</h1></legend>
      <label for="prénom">Prenom</label><br>
      <input type="text" class="text" name="prénom" id="prénom" /><br /><br /><br />
        <label for="label">Nom</label><br>
        <input type="text" class="text" name="nom" id="nom" /><br /><br /><br />
        <label for="label2">Telephone</label><br>
        <input type="text" class="text" name="téléphone" id="téléphone" /><br /><br /><br />
        <label for="label3">Messagerie</label><br>
        <input type="text"class="text" name="messagerie" id="messagerie" /><br /><br /><br />
        <label for="label4">Ville</label><br>
        <input type="text" class="text" name="ville" id="ville" /><br /><br /><br />
        <label for="label5">Pays</label><br>
        <input type="text" class="text" name="pays" id="pays" /><br /><br /><br />
        <label for="logement">Type de logement</label><br>
        <select name="logement" size="1" class="text">
		<option value="1"></option>
          <option value="chambre simple">chambre simple</option>
          <option value="chambre double">chambre double</option>
          <option value="chambre triple">chambre triple</option>
          <option value="Suite">Suite</option>
          <option value="Suite royale">Suite royale</option>
          </select><br /><br /><br />
		<label for="debut">Date D'arrivée:</label><br>
     <input type="date" name="arrivée" id="arrivée" class="text" /><br /><br /><br />
	 <label for="debut">Date de sortie:</label><br>
     <input type="date" name="sortie" id="sortie" class="text" /><br /><br /><br />
     <input type="submit" class="text" name="Submit" value="Soumettre" onclick="reserver();"/>  <br /><br />
	 </fieldset>
    </form>
	
 </section>
  

<footer>
<div id="Pied"><br>
<center>Malick FALL et Ndeye yacine Ndiaye&copy;2021</center><br>
</div>
</footer>
<script>
function reserver() {
alert("votre demande a été pris en compte");
};
</script>
</body>
</html>
