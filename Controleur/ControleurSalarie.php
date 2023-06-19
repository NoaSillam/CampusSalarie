<?php 

//require_once 'Modele/Prestataire.php';
// require_once 'Modele/Salarie.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';
// require_once 'src/PHPMailer.php';


class ControleurSalarie{
   // private $prestataire;
   // private $referent;
    private $salarie;

    public function __construct()
    {
        //$this->prestataire = new Prestataire();
      //  $this->referent = new Referent();
        $this->salarie = new Salarie();
       
    }
    public function accueilSalaries()
    { 
        $salaries = $this->salarie->getSalaries();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("Salarie");
         $vue->generer(array('salaries'=> $salaries));
    }
    public function accueilSalariesAjouter()
    { 
        $salaries = $this->salarie->getSalaries();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("SalarieAjouter");
         $vue->generer(array('salaries'=> $salaries));
    }
    public function ModifierSalarie($idSalarie)
    {
        $salaries = $this->salarie->getSalarieModifier($idSalarie);
        $vue = new Vue("SalarieModifier");
        $vue->generer(array('salaries'=>$salaries));

    }
    public function ModifierMdp($idSalarie)
    {
        $salaries = $this->salarie->getSalarieModifier($idSalarie);
        $vue = new Vue("ModifierMdp");
        $vue->generer(array('salaries'=>$salaries));

    }

    
    // public function salarie($idSalarie)
    // {
    //     $salarie = $this->salarie->getSalarie($idSalarie);
    //     $dictionnaires = $this->dictionnaire->getDictionnaires($idSalarie);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("Dictionnaire");
    //     $vue->generer(array('salarie'=>$salarie, 'dictionnaires'=>$dictionnaires));

    // }

    // public function theme($idTheme)
    // {
    //     $theme = $this->theme->getTheme($idTheme);
    //   //  $referents = $this->referent->getReferents($idPrestataire);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("Theme");
    //     $vue->generer(array('theme'=>$theme));

    // }
    public function ajoutSalarie($nom, $prenom, $mail, $pole, $statut)
    {
        $this->salarie->ajouterSalarie($nom, $prenom, $mail, $pole, $statut);
        header("location:index.php?action=salaries");
    }
    public function modifMdp($idSalarie, $password)
    {
        $this->salarie->modifierMdp($idSalarie, $password);
        header("location:index.php?action=cnx1");
    }
    public function modifSalarie($idSalarie, $nom, $prenom, $mail, $pole)
    {
        $this->salarie->modifierSalarie($nom, $prenom, $mail, $pole, $idSalarie);
        header("location:index.php?action=salaries");
       //$this->referents($idReferent); 
    }
    public function deleteSalarie($idSalarie)
    {
        $this->salarie->supprimerSalarie($idSalarie);
        header("location:index.php?action=salaries");
       // $this->prestataire($idPrestataire);
    }
}