<?php
require_once 'autoload.php';

class ControleurPrestataire
{
    private $prestataire;
    private $referent;
    private $animationPartenaire;

    public function __construct()
    {
        $this->prestataire = new Prestataire();
        $this->referent = new Referent();
        $this->animationPartenaire = new AnimationPartenaire();
    }
    public function accueil()
    { 
        $prestataires = $this->prestataire->getPrestataires();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("Prestataire");
         $vue->generer(array('prestataires'=> $prestataires));
    }
    public function accueilLecteur()
    { 
        $prestataires = $this->prestataire->getPrestataires();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("PrestataireLecteur");
         $vue->generer(array('prestataires'=> $prestataires));
    }
    public function accueilEcriture()
    { 
        $prestataires = $this->prestataire->getPrestataires();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("PrestataireEcriture");
         $vue->generer(array('prestataires'=> $prestataires));
    }
    public function accueilAjouter()
    { 
        $prestataires = $this->prestataire->getPrestataires();
        $vue = new Vue("PrestataireAjouter");
        $vue->generer(array('prestataires'=> $prestataires));
    }

    public function prestataireModifier($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataireId($idPrestataire);
        $vue = new Vue("PrestataireModifier");
        $vue->generer(array('prestataire'=>$prestataire));

    }

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
    public function prestataire($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $referents = $this->referent->getReferents($idPrestataire);
        //$vue = new Vue("Prestataire", "index.php");
        $vue = new Vue("Referent");
        $vue->generer(array('prestataire'=>$prestataire, 'referents'=>$referents));
    }
    public function prest($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaire");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }
    public function prestLecteur($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaireLecteur");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }
    public function prestEcriture($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaireEcriture");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }

    public function ajoutPrestataire($nomPrestataire, $logo, $description, $codePostal)
    {
        $this->prestataire->ajouterPrestataire($nomPrestataire, $logo, $description, $codePostal);
        header("location:index.php");
    }
    public function modifPrestataire($nomPrestataire, $logo, $description, $codePostal, $idPrestataire)
    {
        $this->prestataire->modifierPrestataire($nomPrestataire, $logo, $description, $codePostal, $idPrestataire);
        header("location:index.php");
    }
    public function deletePrestataire($idPrestataire)
    {
        $this->prestataire->supprimerPrestataire($idPrestataire);
        header("location:index.php");
    }
}
