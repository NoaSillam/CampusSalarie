<?php

// require_once 'Modele/Inscrit.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurInscrit
{
    private $inscrit;

    public function __construct()
    {
        $this->inscrit = new Inscrit();
    }
    public function listeDonateur()
    {
        $donateurs = $this->inscrit->getInscritDonateurs();
        $vue = new Vue("InscritDonateur");
        $vue->generer(array('donateurs'=>$donateurs));
    }
    public function listeBenevole()
    {
        $benevoles = $this->inscrit->getInscritBenevoles();
        $vue = new Vue("InscritBenevole");
        $vue->generer(array('benevoles'=>$benevoles));
    }
    public function donateurModifier($idInscrit)
    {
        $inscrit = $this->inscrit->getInscritDonateurId($idInscrit);
        $vue = new Vue("InscritDonateurModifier");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    public function benevoleModifier($idInscrit)
    {
        $inscrit = $this->inscrit->getInscritBenevoleId($idInscrit);
        $vue = new Vue("InscritBenevoleModifier");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    public function NewsletterModifier($idInscrit)
    {
        $inscrit = $this->inscrit->getInscritNewsletterId($idInscrit);
        $vue = new Vue("InscritNewsletterModifier");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    public function PreventionModifier($idInscrit)
    {
        $inscrit = $this->inscrit->getInscritPreventionId($idInscrit);
        $vue = new Vue("InscritPreventionModifier");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    // public function prestataire($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $referents = $this->referent->getReferents($idPrestataire);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("Prestataire");
    //     $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    // }
    // public function BenevoleMissionInscrit($idMission)
    // {
    //     $mission = $this->mission->getMission($idMission);
    //     $inscrits = $this->inscrit->getMissionsInscrit($idMission);
    //     $vue = new Vue("Mission");
    //     $vue->generer(array('mission'=>$mission, 'inscrits'=>$inscrits));
    // }


    public function listeNewsletters()
    {
        $newsletters = $this->inscrit->getInscritNewsletters();
        $vue = new Vue("InscritNewsletters");
        $vue->generer(array('newsletters'=>$newsletters));
    }
    public function listePreventions()
    {
        $preventions = $this->inscrit->getInscritPreventions();
        $vue = new Vue("InscritPreventions");
        $vue->generer(array('preventions'=>$preventions));
    }
    public function ajoutDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant)
    {
       $this->inscrit->ajouterInscritDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
       $this->inscrit->ajouterInscritBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutNewsletters($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
       $this->inscrit->ajouterInscritNewsletter($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
       $this->inscrit->ajouterInscritPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);
       header("location:index.php");
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function modifInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idInscrit)
    {
        $this->inscrit->modifierInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idInscrit);
        header("location:index.php");
      
    }
    public function deleteInscritDonateur($idInscrit)
    {
        $this->inscrit->supprimerInscritDonateur($idInscrit);
        header("location:index.php");
        $this->listeDonateur();

    }
    public function deleteInscritBenevole($idInscrit)
    {
        $this->inscrit->supprimerInscritBenevole($idInscrit);
        header("location:index.php");
        $this->listeBenevole();

    }
    public function deleteInscritNewsletter($idInscrit)
    {
        $this->inscrit->supprimerInscritNewsletter($idInscrit);
        header("location:index.php");
        $this->listeNewsletters();

    }
    public function deleteInscritPrevention($idInscrit)
    {
        $this->inscrit->supprimerInscritPrevention($idInscrit);
        header("location:index.php");
        $this->listePreventions();

    }
}
