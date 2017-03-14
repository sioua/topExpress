<?php

	include_once '../includes/dbConnexion.php';

	if(isset($_POST["saveChauffeur"])){
		// Récupération des informations à partir du formulaire
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$dateEmb = date("Y-m-d");
		$telephone = $_POST['telephone'];
		$contrat = $_POST['contrat'];
		$dateSave = date('Y-m-d H:i:s');
		$dateUpdate = date('Y-m-d H:i:s');
		
		// Vérification de chargement de l'image
			$maxheight = 17000;
			$maxwidth = 14700;
		if ($_FILES['photo']['error'] > 0){
			$erreur = "Erreur lors du transfert";
			echo $erreur;
		}
		elseif ($_FILES['photo']['error'] == 0){
		// On vérifie la taille de l'image
			$image_sizes = getimagesize($_FILES['photo']['tmp_name']);
			if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight){
				$erreur = "Image trop grande";
				echo $erreur;
			}
			else{
				if(!file_exists("photos-des-chauffeurs/"))
				mkdir("photos-des-chauffeurs/");
				else{
					$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
					//1. strrchr renvoie l'extension avec le point (« . »).
					//2. substr(chaine,1) ignore le premier caractère de chaine.
					//3. strtolower met l'extension en minuscules.
					$extension_upload = strtolower(substr(  strrchr($_FILES['icone']['name'], '.') ,1) );
					if( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
					
					$photo = $nom."-".$prenom."-".$telephone;
					$nomPhoto = "photos-des-chauffeurs/".$photo.$extension_upload;
					$resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $nomPhoto);
					if ($resultat){	
						$requete = $mysqli->query("INSERT INTO chauffeur(nomChauffeur, pnomChauffeur, dateEmbauche, contactChauffeur, dateSave, dateUpdate) VALUES ('".$nom."', '".$prenom."', '".$dateEmb."', '".$telephone."', '".$dateSave."', '".$dateUpdate."')");
						header("location:add.php");
					}
				}
			}
		}
	}
		

?>
