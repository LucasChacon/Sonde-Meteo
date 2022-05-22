<?php
	//Se connecter
	$bdd = new PDO("mysql:host=mysql-lulu.alwaysdata.net;dbname=Sonde","Id","Mdp");
	
	//Insérer les données dans la base de données
	if (isset($_GET['Temp']) && isset($_GET['IdxChal']) && isset($_GET['Hum']) && isset($_GET['Lum'])){
		$requete = $bdd -> prepare('INSERT INTO Stats(Temperature, IndexDeChaleur, Humidite, Luminosite) VALUES (?,?,?,?)');
		$requete -> execute(array($_GET['Temp'],$_GET['IdxChal'],$_GET['Hum'],$_GET['Lum']));
	}
?>
