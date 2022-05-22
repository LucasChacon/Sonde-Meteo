<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Refresh" content="120; url=Index.php">
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="LogoSoleil.png" />
        <link rel="stylesheet" href="Style.css" />
        <title>Sonde Météo</title>
    </head>

    <body>
		
		<?php include("Entete.php");?>

        <div id="corps">

			<?php include("Menu.php");?>

            <section>
                
                <div id="temphum">
                    <div id="Température", class="btn", onclick="document.location='OngletTemp.php'">
						<div id="txt">
							<?php 			
								$bdd = new PDO("mysql:host=mysql-lulu.alwaysdata.net;dbname=Sonde","Id","Mdp");
								$reponse = $bdd -> query('SELECT * FROM Stats ORDER BY id DESC LIMIT 1 ');
								while ($donnees = $reponse -> fetch()){
								echo 'Température: '.$donnees['Temperature'].' °C' ;
								};
							?>
						</div>
                    </div>
					
					<div id="Humidité", class="btn", onclick="document.location='OngletHum.php'"> 
						<div id="txt">
							<?php 			
								$reponse = $bdd -> query('SELECT * FROM Stats ORDER BY id DESC LIMIT 1 ');
								while ($donnees = $reponse -> fetch()){
								echo 'Humidité: '.$donnees['Humidite'].' %' ;
								};
							?>
						</div>
					</div>
                </div>

                <div id="IClum">
                    <div id="IndiceDeChaleur", class="btn", onclick="document.location='OngletIdxChaleur.php'">
						<div id="txt">
							<?php 			
								$reponse = $bdd -> query('SELECT * FROM Stats ORDER BY id DESC LIMIT 1 ');
								while ($donnees = $reponse -> fetch()){
								echo 'Indice de Chaleur: '.$donnees['IndexDeChaleur'].' °C' ;
								};
							?>
						</div>
                    </div>

                    <div id="Luminosité", class="btn", onclick="document.location='OngletLum.php'">
						<div id="txt">
							<?php 			
								$reponse = $bdd -> query('SELECT * FROM Stats ORDER BY id DESC LIMIT 1 ');
								while ($donnees = $reponse -> fetch()){
								echo 'Luminosité: '.$donnees['Luminosite'].' lum' ;
								};
							?>
						</div> 
                    </div>
                </div>
                
            </section>
        </div>
		<?php include("PiedDePage.php"); ?>
    </body>
</html>