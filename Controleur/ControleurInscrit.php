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
    // public function listeDonateur()
    // {
    //     $donateursData = $this->inscrit->getInscritDonateurs();
    //     $donateurs = $donateursData['donateurs'];
    //     $emailsMultiples = $donateursData['emailsMultiples'];
    //     $vue = new Vue("InscritDonateur");
    //     $vue->generer(array('donateurs' => $donateurs, 'emailsMultiples' => $emailsMultiples));
    // }

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
    public function donateurAjouter()
    {
        $inscrit = $this->inscrit->getInscritDonateursAjout();
        $vue = new Vue("InscritDonateurAjouter");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    public function benevoleAjouter()
    {
        $inscrit = $this->inscrit->getInscritBenevoles();
        $vue = new Vue("InscritBenevoleAjouter");
        $vue->generer(array('inscrit'=>$inscrit));
    }
    public function NewsletterAjouter()
    {
        $inscrit = $this->inscrit->getInscritNewsletters();
        $vue = new Vue("InscritNewsletterAjouter");
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
    public function ajoutDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite);
       header("location:index.php");
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite);
       header("location:index.php");
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    // public function ajoutBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
    // {
    //    $this->inscrit->ajouterInscritBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite);
    //     // $vue = new Vue("InscritDonateurAjouter");
    //     // $vue->generer(array('ajout'=>$ajout));
    // }
    public function ajoutBenevoleMission( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission)
    {
       $this->inscrit->ajouterInscritBenevoleMission( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission);
       header("location:index.php");
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function ajoutNewsletters( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
       $this->inscrit->ajouterInscritNewsletter( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite);
       header("location:index.php");
        // $vue = new Vue("InscritDonateurAjouter");
        // $vue->generer(array('ajout'=>$ajout));
    }
    public function modifInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $idInscrit)
    {
        $this->inscrit->modifierInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $idInscrit);
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
