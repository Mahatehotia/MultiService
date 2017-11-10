<?php 

/**
* 
*/
class CUtilisateur
{
	private $id = 0;
	private $nom;
	private $prenom;
	private $login;
	private $mdp;
	private $adresse;
	private $email;
	private $role;
	private $trouve;


	public function __construct()
	{
		$this->trouve = false;
		
	}


	public function connexion($sid,$snom,$sprenom,$slogin,$smdp,$sadresse,$smail,$srole)
	{
		$this->id = $sid;
		$this->nom = $snom;
		$this->prenom = $sprenom;
		$this->login = $slogin;
		$this->mdp = $smdp;
		$this->adresse = $sadresse;
		$this->email = $semail;
		$this->role = $srole;
		$this->trouve = true;
	}

	public function objetSetId($sid,$snom,$sprenom,$slogin,$smdp,$sadresse,$smail,$srole)
	{
		$this->id = $sid;
		$this->nom = $snom;
		$this->prenom = $sprenom;
		$this->login = $slogin;
		$this->mdp = $smdp;
		$this->adresse = $sadresse;
		$this->email = $semail;
		$this->role = $srole;
	}

	public function getId()
	{
		return $this->id;
	}
	
	public function getNom()
	{
		return $this->nom;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function getMdp()
	{
		return $this->mdp;
	}

	public function getAdresse()
	{
		return $this->adresse;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getRole()
	{
		return $this->role;
	}

}


public function inscrireUtilisateur($bdd,$oUtilisateur)
{
	$num = $oUtilisateur->getNum();
	$nom = $oUtilisateur->getNom();
	$laboratoire = $oUtilisateur->getLaboratoire();
	$medecin1 = intval($oUtilisateur->getMedecin1());
	$datedebut = $oUtilisateur->getDatedebut();
	$datefin = $oUtilisateur->getDatefin();
	$description = $oUtilisateur->getDescription();

try
{
	$req = $bdd->prepare("INSERT INTO projet(numProjet,nomProjet,laboratoireProjet,medecin1,debutProjet,finProjet,descriptionProjet) VALUES ('" . $num . "','" . $nom . "','" . $laboratoire . "','" . $medecin1 . "','" . $datedebut . "','" . $datefin . "','" . $description . "');" );
	$req->execute();
	echo "<div class=\"form-group\"><center><div class=\"col-md-4\"><div class=\"alert alert-success\">
        Projet ajouté ! Il commencera bien le " . $datedebut . " et finira normalement le " . $datefin . ", vous pouvez le repousser à tout moment en cliquant ci-dessous.
    </div></div></center></div>" ;
}

catch (Exception $e) 
	{
		die('Erreur : ' . $e->getMessage());
	}
}


class CUtilisateurs
{
	private static $_instance = null;
public $oCollUtilisateur;

private function __construct($bdd)
	{
		$this->oCollUtilisateur = array();
		$requete = "SELECT * FROM utilisateurs";
		$sql = $bdd->query($requete);
		
		while($res=$sql->fetch(PDO::FETCH_ASSOC))
		{

			$oUtilisateur = new CUtilisateur();
			$oUtilisateur->objetSetId($res['idUtilisateur'],$res['nomUtilisateur'],$res['prenomUtilisateur'],$res['loginUtilisateur'],$res['mdpUtilisateur'],$res['adresseUtilisateur'],$res['emailUtilisateur'],$res['roleUtilisateur']);
			$this->oCollUtilisateur[] = $oUtilisateur;
		}

		
	}
	
	
	public static function getInstance($bdd) 
	 {
 
		if(is_null(self::$_instance)) 
		{
			self::$_instance = new CUtilisateurs($bdd);  
		}
 
		return self::$_instance;
	}
	 
	public function getCollection()
		{
			return $this->oCollUtilisateur;
		}
	

}







 ?>