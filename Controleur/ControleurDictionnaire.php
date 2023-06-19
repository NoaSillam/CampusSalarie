<?php

// require_once 'Modele/Salarie.php';
// require_once 'Modele/Dictionnaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurDictionnaire
{
    private $salarie;
    private $dictionnaire;

    public function __construct()
    {
       $this->salarie = new Salarie();
        $this->dictionnaire = new Dictionnaire();

    }
    public function accueilDictionnaire()
    {
        $dictionnaires = $this->dictionnaire->getDicAccueil();
        $vue = new Vue("Dictionnaire");
        $vue->generer(array('dictionnaires'=>$dictionnaires));
    }
    public function accueilDictionnaireLecteur()
    {
        $dictionnaires = $this->dictionnaire->getDicAccueil();
        $vue = new Vue("DictionnaireLecteur");
        $vue->generer(array('dictionnaires'=>$dictionnaires));
    }
    public function accueilDictionnaireEcriture()
    {
        $dictionnaires = $this->dictionnaire->getDicAccueil();
        $vue = new Vue("DictionnaireEcriture");
        $vue->generer(array('dictionnaires'=>$dictionnaires));
    }
    public function accueilDictionnaireAjouter()
    {
        $dictionnaires = $this->dictionnaire->getDic();
        $vue = new Vue("DictionnaireAjouter");
        $vue->generer(array('dictionnaires'=>$dictionnaires));
    }
    public function salarie($idSalarie)
    {
        $salarie = $this->salarie->getSalarie($idSalarie);
        $dictionnaires = $this->dictionnaire->getDictionnaires($idSalarie);
        //$vue = new Vue("Prestataire", "index.php");
        $vue = new Vue("Dictionnaire");
        $vue->generer(array('salarie'=>$salarie, 'dictionnaires'=>$dictionnaires));
    }
    public function dictionnaires($idDictionnaire)
    {
        $dictionnaire = $this->dictionnaire->getDictionnaire($idDictionnaire);
        $vue = new Vue("Dictionnaire");
        $vue->generer(array('dictionnaire'=>$dictionnaire));
    }
    public function dictionnaireModifier($idDictionnaire)
    {
        $dictionnaire = $this->dictionnaire->getDictionnaire($idDictionnaire);
        $vue = new Vue("DictionnaireModifier");
        $vue->generer(array('dictionnaire'=>$dictionnaire));

    }
    public function dictionnaire($libelle, $definition, $img)
    {
        $this->dictionnaire->ajouterDictionnaire($libelle, $definition, $img);
        header('location:index.php');
        // $this->salarie($idSalarie);
    }
    public function modifDictionnaire( $definition, $img, $idDictionnaire)
    {
        $this->dictionnaire->modifierDictionnaire( $definition, $img, $idDictionnaire);
        header('location:index.php');
       // $this->dictionnaires($idDictionnaire); 
    }
    public function deleteDictionnaire($idDictionnaire)
    {
        $this->dictionnaire->supprimerDictionnaire($idDictionnaire);
        // $this->dictionnaires($idDictionnaire);
        header('location:index.php');
    }

}