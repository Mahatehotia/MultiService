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