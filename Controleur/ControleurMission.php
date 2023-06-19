<?php

// require_once 'Modele/Mission.php';
// require_once 'Modele/Inscrit.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurMission
{
    private $mission;
    private $inscrit;
    
    public function __construct()
    {
        $this->mission = new Mission();
        $this->inscrit = new Inscrit();
    }
    public function BenevoleMssion()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("Mission");
        $vue->generer(array('missions'=>$missions));
    }
    public function MssionLecteur()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("MissionLecteur");
        $vue->generer(array('missions'=>$missions));
    }
    public function MssionEcriture()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("MissionEcriture");
        $vue->generer(array('missions'=>$missions));
    }
    public function mission($idMission)
    {
        $mission = $this->mission->getMission($idMission);
        $vue = new Vue("MissionModifier");
        $vue->generer(array('mission'=>$mission));

    }
    // public function prestataire($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $referents = $this->referent->getReferents($idPrestataire);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("Referent");
    //     $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    // }
    public function BenevoleMissionInscrit($idMission)
    {
        $mission = $this->mission->getMission($idMission);
        $inscrits = $this->inscrit->getMissionsInscrit($idMission);
        $vue = new Vue("InscritBenevoleMission");
        $vue->generer(array('mission'=>$mission, 'inscrits'=>$inscrits));
    }
    public function BenevoleMssionAjouter()
    {
        $missions =$this->mission->getMissions();
        $vue = new Vue("MissionAjouter");
        $vue->generer(array('missions'=>$missions));
    }
    // public function ajouterBenevoleMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville)
    // {
    //     $this->mission->ajoutMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville);
    //     header("location:index.php?action=BenevoleMssion");
    // }
    public function ajouterBenevoleMission($titre, $annonce, $adresse, $codePostal, $ville )
    {
        $this->mission->ajoutMission($titre, $annonce, $adresse, $codePostal, $ville );
        header("location:index.php?action=BenevoleMssion");
    }
    public function modifierBenevoleMission( $titre, $annonce, $idMission)
    {
        $this->mission->modifMission( $titre, $annonce, $idMission);
        header("location:index.php?action=BenevoleMssion");
    }
    // public function supprimerMission($idMission)
    // {
    //     $this->mission->deleteMission($idMission);
    //    // header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApi/index.php?action=BenevoleMssion");
    // }
    // public function deletePrestataire($idPrestataire)
    // {
    //     $this->prestataire->supprimerPrestataire($idPrestataire);
    //  //   header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMission/index.php");
    //    // $this->prestataire($idPrestataire);
    // }
    public function deleteMission($idMission)
    {
        $this->mission->supprimerMission($idMission);
        header("location:index.php?action=BenevoleMssion");
     //  header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMission/index.php");
       // $this->prestataire($idPrestataire);
    }
}