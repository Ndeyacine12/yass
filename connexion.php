<?php 
 $servername="sql308.epizy.com";
 $username="epiz_30800973";
	 $password="InLSbvzdTluAGjp";
 $dbname="epiz_30800973_ranch";
 $conn=new mysqli($servername,$username,$password,$dbname);
 
 if($conn->connect_error){
	 die("Connexion failed:".$conn->connect_error);
	 echo("non connecté" );}
	 
	 ?>