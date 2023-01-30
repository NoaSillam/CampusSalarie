<?php
class Vue
{
    private $fichier;
  //  private $ajouter;
    private $nom;
    public function __construct($action)
    {
        $this->fichier = "Vue/".$action."/vue".$action.".php";
      //  $this->ajouter = "Vue/".$action."/vue".$action."Ajouter.php";
    }
    public function generer($donnees)
    {
        $logo = $this->genererFichier($this->fichier, $donnees);
        $vue = $this->genererFichier('Vue/template.php', 
        array('nom'=> $this->nom, 'logo'=> $logo));
        echo $vue;
    }
    // public function genererAjouter($donnees)
    // {
    //     $logo = $this->genererAjouterFichier($this->ajouter, $donnees);
    //     $vue = $this->genererAjouterFichier('Vue/template.php', 
    //     array('nom'=> $this->nom, 'logo'=> $logo));
    //     echo $vue;
    // }
    // private function genererAjouterFichier($ajouter, $donnees)
    // {
    //     if(file_exists($ajouter))
    //     {
    //         extract($donnees);
    //         ob_start();
    //         require $ajouter;
    //         return ob_get_clean();
    //     }
    //     else{
    //         throw new Exception("fichier '$ajouter' introuvable");
    //     }
    // }


    private function genererFichier($fichier, $donnees)
    {
        if(file_exists($fichier))
        {
            extract($donnees);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else{
            throw new Exception("fichier '$fichier' introuvable");
        }
    }
}


?>