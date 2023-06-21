<?php

// header("Acces-Control-Allow-Origine: *");
// header("Content-type: application/json;charset=UTF-8");

// require_once 'Modele/Prestataire.php';
// require_once 'Modele/AnimationPartenaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';



class ControleurAccueil
{

  
    public function telechargement()
    {
        $telechargement = "";
        $vue = new Vue("Telechargement");
        $vue->generer(array('telechargement'=>$telechargement));
    }
    
}