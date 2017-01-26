<?php
	include_once '../includes/dbConnexion.php';
	
	//if(isset($_POST['']){
		$immatriculation = $_POST['immatriculation'];
		$immatriculation_prec = $_POST['immatriculation_prec'];
		$date_ms = $_POST['date_ms'];
		$date_achat = $_POST['date_achat'];
		$etat = $_POST['etat'];
		$marque = $_POST['marque'];
		$modele = $_POST['modele'];
		$carrosserie = $_POST['carrosserie'];
		$energie = $_POST['energie'];
		$puissance_fiscale = $_POST['puissance_fiscale'];
		$chassis = $_POST['chassis'];
		$nombre_place = $_POST['nombre_place'];
		$couleur = $_POST['couleur'];
		$categorie = $_POST['categorie'];
		$service = $_POST['service'];
		$site = $_POST['site'];
		$employe = $_POST['employe'];
		$dateSave = date('Y-m-d H:i:s');
		$dateUpdate = date('Y-m-d H:i:s');
		$ras = "RAS";
		//Les valeurs qui ne sont pas prises en compte
		
		$nbr = 1;
		$insertVehicule = $mysqli->query("INSERT INTO car(
							numeroChassisCar, 
							immatriculationCar, 
							immatriculationPrec, 
							couleur, 
							carteTransport, 
							nombrePlace, 
							dateAchat, 
							etatCar, 
							dateMiseService, 
							idModele, 
							idMarque, 
							idCarrosserie, 
							idAssurance, 
							idVisiteTechnique, 
							idCarteGrise, 
							dateSave, 
							dateUpdate) 
						VALUES ('".
							$chassis."', '".
							$immatriculation."', '".
							$immatriculation_prec."', '".
							$couleur."', '".
							$ras."', '".
							$nombre_place."', '".
							$date_achat."', '".
							$etat."', '".
							$date_ms."', '".
							$modele."', '".
							$marque."', '".
							$carrosserie."', '".
							$nbr."', '".
							$nbr."', '".
							$nbr."', '".
							$dateSave."', '".
							$dateUpdate."')"
		);
		if($insertVehicule){
			echo"<script language=javascript>";
			echo"alert('Le car à été bien enregistré')";
			echo"</script>";
			
			header("LOCATION:save.php");
		}
		else{
			echo"<script language=javascript>";
			echo"alert('Erreur d insertion')";
			echo"</script>";			
			echo"<pre>";			
			print_r($_POST);
			/*echo $ras;
			echo $nbr;
			echo"</pre>";	*/		
		}
//	}
	
	
?> 