<?php
//require_once 'Modele/Prestataire.php';
// require_once 'Modele/Salarie.php';
// require_once 'Modele/DocVideo.php';
// require_once 'Vue/Vue.php';

require_once 'autoload.php';

class ControleurDocument
{
   // private $prestataire;
    private $salarie;
    private $document;

    public function __construct()
    {
        //$this->prestataire = new Prestataire();
        $this->salarie = new Salarie();
        $this->document = new DocVideo();
    }
    public function prestaSalarie( $idSalarie)
    {
    // $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $salarie = $this->salarie->getSalarie($idSalarie);
        $documents = $this->document->getDocuments( $idSalarie);
        $vue = new Vue("Document");
        $vue->generer(array( 'salarie'=>$salarie, 'documents'=>$documents));
    }
    public function documentAjouter()
    { 
        $documents = $this->document->getDocumentSalarie();
        $docus = $this->document->getDocumentSalarie2();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("DocumentAjouter");
         $vue->generer(array('documents'=> $documents, 'docus'=>$docus));
    }
    // public function documentAjouter2()
    // { 
    //     $docus = $this->document->getDocumentSalarie2();
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("DocumentAjouter");
    //      $vue->generer(array('docus'=> $docus));
    // }
    // public function documentSalarie()
    // { 
    //     $documents = $this->document->getDocumentSalarie();
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("DocumentAjouter");
    //      $vue->generer(array('documents'=> $documents));
    // }
    public function documentLecteur()
    { 
        $documents = $this->document->getDocumentAccueilTout();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("DocumentLecteur");
         $vue->generer(array('documents'=> $documents));
    }
    public function documentEcriture()
    { 
        $documents = $this->document->getDocumentAccueilTout();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("DocumentEcriture");
         $vue->generer(array('documents'=> $documents));
    }
    public function documentAccueil()
    { 
        $documents = $this->document->getDocumentAccueilTout();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("DocumentAccueil");
         $vue->generer(array('documents'=> $documents));
    }
    public function documents($idDocument)
    {
        $document = $this->document->getDocument($idDocument);
        $vue = new Vue("Document");
        $vue->generer(array('document'=>$document));
    }
    public function documentsModifier($idDocument)
    {
        $document = $this->document->getDocument($idDocument);
        $vue = new Vue("DocumentModifier");
        $vue->generer(array('document'=>$document));
    }
    public function document($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire, $idTheme)
    {
        $this->document->ajouterDocument($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire, $idTheme);
        header("location:index.php");
        // $this->prestaSalarie($idSalarie);
    }
    public function modifDocument($libelle, $lien, $description, $dateParution, $idDocument)
    {
        $this->document->modifierDocument($libelle, $lien, $description, $dateParution, $idDocument);
        header("location:index.php");
    //     $this->documents($idDocument);
    }
    public function deleteDocument($idDocument)
    {
        $this->document->supprimerDocument($idDocument);
        header("location:index.php");
        // $this->documents($idDocument);
    }
}