<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 02/12/17
 * Time: 18:49
 */
try {
    $connexion = new PDO ('mysql:host=localhost;dbname=ams','tafacesi','tafacesi');
}
catch (PDOException $e) {
    echo 'Base de donnee hors service';
}
class CService{
    private $idService;
    private $nomService;
    private $detailService;
    private $coutService;

    public function getId(){
        return $this->idService;
    }
    public function getNom(){
        return $this->nomService;
    }
    public function getDetailService(){
        return $this->detailService;
    }
    public function getCoutService(){
        return $this->coutService;
    }

    public function objetSetId($sid,$nomS,$detailS,$coutS)
    {
        $this->idService = $sid;
        $this->nomService = $nomS;
        $this->detailService = $detailS;
        $this->coutService = $coutS;
    }

    public function ajoutService($bdd,$nouveauService){
        $nomService = $nouveauService->getNom();
        $detailService = $nouveauService->getDetailService();
        $coutService = $nouveauService->getCoutService();
        try {
            $req = $bdd->prepare("INSERT INTO catalogue(nomService,detailService,coutService) VALUES ('" . $nomService . "','" . $detailService . "','" . $coutService . "');");
            $req->execute();
            echo "<div class=\"form-group\"><div class=\"col-md-4\"><div class=\"alert alert-success\">
        Service ajouté!
    </div></div></div>" ;
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function supprimeService($bdd,$suppService){
        try{
            $req = $bdd->prepare("DELETE FROM catalogue WHERE idService = $suppService");
            $req -> execute();
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
}
class CServices
{
    private static $_instance = null;
    public $collService;

    private function __construct($bdd)
    {
        $this->collService = array();
        $requete = "SELECT * FROM services";
        $sql = $bdd->query($requete);

        while($res=$sql->fetch(PDO::FETCH_ASSOC))
        {

            $cService = new CService();
            $cService->objetSetId($res['idService'],$res['nomService'],$res['detailService'],$res['coutService']);
            $this->collService[] = $cService;
        }


    }


    public static function getInstance($bdd)
    {

        if(is_null(self::$_instance))
        {
            self::$_instance = new CServices($bdd);
        }

        return self::$_instance;
    }

    public function getCollection()
    {
        return $this->collService;
    }


}