<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pos_lib {

	private $_HOST = '169.254.226.0'; //Adresse IP de la machine KinTPV.
	private $_PORT = '8080'; //PC -> Port 80 / MAC -> Port 8080
	private $_CleKinTPV = '11111111111111111111'; //Suivant la clé entrée dans KinTPV (20 caractères)

	public function __construct()
	{

	}

	public function Query()
	{

		$Requete_t = 'ARTICLE_LIRE'; // Pour lire les articles
		$Requete_t.= '?CRITERE=IdArticle';
		$Requete_t.= '&OPERATEUR=SUP';
		$Requete_t.= '&VALEUR=0';

		// Ajout de la date et de l'heure courante
		$DateHeure = getdate();
		$Requete_t.= '&DATE='.$DateHeure["mday"].'/'.$DateHeure["mon"].'/'.$DateHeure["year"];
		$Requete_t.= '&HEURE='.$DateHeure["hours"].':'.$DateHeure["minutes"].':'.$DateHeure["seconds"];

		// Donnée de la demande
		$Data_t = '';

		// Demande du code KinTPV (KIN_ID)
		$KIN_ID_t=$this->KINTPV_GenererCle($Requete_t);

		//----------------------------------
		// Envoi de la requête avec le code KinTPV (KIN_ID)
		//----------------------------------
		$Requete_t.= '&KIN_ID='.$KIN_ID_t;
		$Reponse_t = $this->KINTPV_EnvoyerRequete($Requete_t,$Data_t);	// reponse xml !	

		// Visualisation de la reponse
		return $Reponse_t;

	}

	public function KINTPV_GenererCle($ChainePourCle)
	{
		$CleKinTPV = $this->_CleKinTPV;

		// --------------------
		//0. Initialisation
		// --------------------
		$Matrice_a=$CleKinTPV; // chaine de 20 caracteres identique à celle définie dans KinTPV
		$KIN_ID_a='000000000'; // chaine de 9 caracteres
		$PositionCle_i=0;
		$ChiffreALaPosition_i=0;

		$MaxCarMatrice_i=strlen($Matrice_a);
		$MaxCarCle_i=strlen($KIN_ID_a);

		// -----------------------------------------------------------------------------
		//1. On doit boucler caractère par caractère pour la création de la clé (KIN_ID)
		// -----------------------------------------------------------------------------
		for($i=0;$i<strlen($ChainePourCle);$i++)
		{
			// Recup du code ASCII
			$Car_a=substr($ChainePourCle,$i,1);
			$CodeCar_i=ord($Car_a);

			// ---------------------------------------
			//2. Recherche dans la matrice du chiffre
			// ---------------------------------------
			// Calcul de la position
			$PositionCle_i=(($CodeCar_i+$ChiffreALaPosition_i)%$MaxCarMatrice_i)+1;

			// Recup du chiffre dans la matrice
			$ChiffreALaPosition_i=intval(substr($Matrice_a,($PositionCle_i-1),1));

			// ---------------------------------------
			//3. Création de la clé (KIN_ID) 
			// ---------------------------------------
			// On doit faire tourner la clé KIN_ID suivant le chiffre récupéré dans la matrice
			// On tourne par la gauche
			if($ChiffreALaPosition_i!=9)
			{
				$ChaineATourner_t=substr($KIN_ID_a,0,$ChiffreALaPosition_i);
				$KIN_ID_a.=$ChaineATourner_t;
				$KIN_ID_a=substr($KIN_ID_a,$ChiffreALaPosition_i,$MaxCarCle_i);
			}

			// On ajout le (code ASCII + Chiffre a la position) au KIN_ID
			$KIN_ID_i=intval($KIN_ID_a)+($CodeCar_i+$ChiffreALaPosition_i);

			// On retransforme KIN_ID en Chaine
			$KIN_ID_a=strval($KIN_ID_i);

			//Ajout des caractères manquants
			if(strlen($KIN_ID_a) < $MaxCarCle_i)
			{
				for($inc=0;$inc < $MaxCarCle_i;$inc++)
				{
					$KIN_ID_a='0'.$KIN_ID_a;
				}
			}

			// On ne récup que 9 caracteres max
			$PosDebut_i=strlen($KIN_ID_a)-$MaxCarCle_i;
			$KIN_ID_a=substr($KIN_ID_a,$PosDebut_i,$MaxCarCle_i);
		}

		return $KIN_ID_a;
	}

	public function KINTPV_EnvoyerRequete($fonctionKinTPV,$donnees)
	{
		$HOST = $this->_HOST;
		$PORT = $this->_PORT;

		$sock = fsockopen($HOST, $PORT, $errno, $errstr);
		if (!$sock)
		{
			die("[ERROR] $errstr ($errno)\n");
		}

		// ----- ENVOI DES DONNEES -----
		fputs($sock, "POST /KinTPV_Request/".$fonctionKinTPV." HTTP/1.0\r\n");
		fputs($sock, "Host:".$HOST." \r\n");
		fputs($sock, "Content-type: application/x-www-form-urlencoded\r\n");	// définition du format
		fputs($sock, "Content-length: " . strlen($donnees) . "\r\n");			// taille
		fputs($sock, "Accept: */*\r\n"); // données acceptées par le navigateur
		// On envoi les données
		fputs($sock, "\r\n");			// Ligne de séparation
		fputs($sock, "$donnees\r\n");	// Envoi des données
		fputs($sock, "\r\n");			// Ligne de séparation


		// ----- RECEPTION DE LA REPONSE -----
		$headers = "";
		while ($str = trim(fgets($sock, 4096)))
			$headers .= "$str\n";

		$body = "";
		while (!feof($sock))
			$body .= fgets($sock, 4096);

		fclose($sock);

		// On retourne le corps de la réponse.
		return $body;
	}


}
?>