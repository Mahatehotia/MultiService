<?php 

/**
* 
*/
class CUtilisateur
{
	private $id;
	private $nom;
	private $prenom;
	private $login;
	private $mdp;
	private $mail;
	private $adresse;
	private $cp;
	private $ville;
	private $role;
	private $trouve;


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

	public function getMail()
	{
		return $this->mail;
	}

	public function getAdresse()
	{
		return $this->adresse;
	}

	public function getCp()
	{
		return $this->cp;
	}

	public function getVille()
	{
		return $this->ville;
	}	

	public function getRole()
	{
		return $this->role;
	}

	public function isConnected(){
	    return $this->trouve;
    }



	public function __construct()
	{
		$this->trouve = false;
		
	}


	public function connexion($sid,$snom,$sprenom,$slogin,$smdp,$smail,$sadresse,$scp,$sville,$srole)
	{
		$this->id = $sid;
		$this->nom = $snom;
		$this->prenom = $sprenom;
		$this->login = $slogin;
		$this->mdp = $smdp;
		$this->mail = $smail;
		$this->adresse = $sadresse;
		$this->cp = $scp;
		$this->ville = $sville;
		$this->role = $srole;
		$this->trouve = true;
	}

	public function objetSetId($sid,$snom,$sprenom,$slogin,$smdp,$smail,$sadresse,$scp,$sville,$srole)
	{
		$this->id = $sid;
		$this->nom = $snom;
		$this->prenom = $sprenom;
		$this->login = $slogin;
		$this->mdp = $smdp;
		$this->mail = $smail;
		$this->adresse = $sadresse;
		$this->cp = $scp;
		$this->ville = $sville;
		$this->role = $srole;
	}





public function inscrireUtilisateur($bdd,$oUtilisateur)
{
	$nom = $oUtilisateur->getNom();
	$prenom = $oUtilisateur->getPrenom();
	$login = $oUtilisateur->getLogin();
	$mdp = $oUtilisateur->getMdp();
	$mail = $oUtilisateur->getMail();
	$adresse = $oUtilisateur->getAdresse();
	$cp = $oUtilisateur->getCp();
	$ville = $oUtilisateur->getVille();
	$role = $oUtilisateur->getRole();

try
{
	$req = $bdd->prepare("INSERT INTO utilisateurs(nomUtilisateur,prenomUtilisateur,loginUtilisateur,mdpUtilisateur,mailUtilisateur,adresseUtilisateur,cpUtilisateur,villeUtilisateur,roleUtilisateur) VALUES ('" . $nom . "','" . $prenom . "','" . $login . "','" . $mdp . "','" . $mail . "','" . $adresse . "','" . $cp . "','" . $ville . "','" . $role . "');" );
	$req->execute();
	echo "<div class=\"form-group\"><center><div class=\"col-md-4\"><div class=\"alert alert-success\">
        Utilisateur inscrit ! 
    </div></div></center></div>" ;
}

catch (Exception $e) 
	{
		die('Erreur : ' . $e->getMessage());
	}
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
			$oUtilisateur->objetSetId($res['idUtilisateur'],$res['nomUtilisateur'],$res['prenomUtilisateur'],$res['loginUtilisateur'],$res['mdpUtilisateur'],$res['emailUtilisateur'],$res['adresseUtilisateur'],$res['cpUtilisateur'],$res['villeUtilisateur'],$res['roleUtilisateur']);
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