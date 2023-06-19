<?php
// require_once 'Modele/Prestataire.php';
// require_once 'Modele/Referent.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurReferent
{
    
    private $prestataire;
    private $referent;
    private $actualite;

    public function __construct()
    {
        
        $this->prestataire = new Prestataire();
       $this->referent = new Referent();
       $this->actualite = new Actualite();
    }
    // public function referent($idReferent)
    // {
    //     $referent = $this->referent->getReferent($idReferent);
    //     $prestataires = $this->prestataire->getPrestataires($idReferent);
    //     $vue = new Vue("Referent");
    //     $vue->generer(array('referent'=>$referent, 'prestataires'=>$prestataires));

    // }
    public function actualite($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("Actualite");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));;
    }
    public function actualiteLecteur($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("ActualiteLecteur");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));;
    }
    public function actualiteEcriture($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("ActualiteEcriture");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));;
    }
    public function prestataire($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $referents = $this->referent->getReferents($idPrestataire);
        //$vue = new Vue("Prestataire", "index.php");
        $vue = new Vue("Prestataire");
        $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    }
    public function referentModifier($idReferent)
    {
        $referent = $this->referent->getReferent($idReferent);
        $vue = new Vue("ReferentModifier");
        $vue->generer(array('referent'=>$referent));

    }
    // public function referentLecteur($idPrestataire)
    // {
    //     $referent = $this->referent->getReferents($idPrestataire);
    //     $vue = new Vue("ReferentLecteur");
    //     $vue->generer(array('referent'=>$referent));

    // }
    public function referentLecteur($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $referents = $this->referent->getReferents($idPrestataire);
        //$vue = new Vue("Prestataire", "index.php");
        $vue = new Vue("ReferentLecteur");
        $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    }
    public function referentEcriture($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $referents = $this->referent->getReferents($idPrestataire);
        //$vue = new Vue("Prestataire", "index.php");
        $vue = new Vue("ReferentEcriture");
        $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    }
    // public function prestataireRefAjouter($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $referents = $this->referent->getReferents($idPrestataire);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("ReferentAjouter");
    //     $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    // }

    public function referentAjouter()
    { 
        $referents = $this->referent->getRefs();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ReferentAjouter");
         $vue->generer(array('referents'=> $referents));
    }
    public function referents($idReferent)
    {
        $referent = $this->referent->getReferent($idReferent);
        $vue = new Vue("Referent");
        $vue->generer(array('referent'=>$referent));
    }
    // public function referentsAjouter($idReferent)
    // {
    //     $referent = $this->referent->getReferent($idReferent);
    //     $vue = new Vue("ReferentAjouter");
    //     $vue->generer(array('referent'=>$referent));
    // }
    public function referent($nom, $prenom, $mail, $numTelephone, $idPrestataire)
    {
        $this->referent->ajouterReferent($nom, $prenom, $mail, $numTelephone, $idPrestataire);
        header("location:index.php");
        $this->prestataire($idPrestataire);
       // header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }
    public function modifReferent( $mail, $numTelephone, $idReferent)
    {
        $this->referent->modifierReferent( $mail, $numTelephone, $idReferent);
        header("location:index.php");
        $this->referents($idReferent); 
    }
    public function deleteReferent($idReferent)
    {
        $this->referent->supprimerReferent($idReferent);
        header("location:index.php");
        $this->referents($idReferent);
       // header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }


}