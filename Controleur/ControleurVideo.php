<?php

//require_once 'Modele/Prestataire.php';
// require_once 'Modele/Salarie.php';
// require_once 'Modele/DocVideo.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurVideo 
{
   // private $prestataire;
    private $salarie;
    private $video;

    public function __construct()
    {
       // $this->prestataire = new Prestataire();
        $this->salarie = new Salarie();
        $this->video = new DocVideo();

    }
    public function videoSalarie($idSalarie)
    {
        $salarie = $this->salarie->getSalarie($idSalarie);
        $videos = $this->video->getVideos($idSalarie);
        $vue = new Vue("Video");
        $vue->generer(array('salarie'=>$salarie, 'videos'=>$videos));
    }
    public function videos($idVideo)
    {
        $video = $this->video->getVideo($idVideo);
        $vue = new Vue("Video");
        $vue->generer(array('video'=>$video));

    }
    // public function videoAjouter()
    // { 
    //    // $videos = $this->video->getVideoSalarie();
    //     $vids = $this->video->getVideoSalarie2();
       
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("VideoAjouter");
    //      $vue->generer(array( 'vids'=>$vids));
    // }
    // public function videoAjouterSalarie()
    // { 
    //    // $videos = $this->video->getVideoSalarie();
        
    //     $vidSalarie = $this->video->getVideoSalarieAjouter();
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("VideoAjouter");
    //      $vue->generer(array( 'vidSalarie'=>$vidSalarie));
    // }
    public function videoLecteur()
    {
        $videos = $this->video->getVideoAccueilTout();
        $vue = new Vue("VideoLecteur");
         $vue->generer(array('videos'=> $videos));
    }

    public function videoEcriture()
    {
        $videos = $this->video->getVideoAccueilTout();
        $vue = new Vue("VideoEcriture");
         $vue->generer(array('videos'=> $videos));
    }
   
    public function videoAccueil()
    { 
        $videos = $this->video->getVideoAccueilTout();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("VideoAccueil");
         $vue->generer(array('videos'=> $videos));
    }
    public function salarieVideo()
    {
        $salarieDocVideo = $this->video->getSalarieDocVideo();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("VideoAjouter");
         $vue->generer(array('salarieDocVideo'=> $salarieDocVideo));
    }
    public function video($libelle, $lien, $description, $dateParution, $idTheme, $imgApercu)
    {
       $this->video->ajouterVideo( $libelle, $lien, $description, $dateParution, $idTheme, $imgApercu);
        header("location:index.php");
        // $this->videos($idVideo);
        
    }
    public function videoModifier($idVideo)
    {
        $video = $this->video->getVideo($idVideo);
        $vue = new Vue("VideoModifier");
        $vue->generer(array('video'=>$video));
    }
     public function videoAjouter()
     {
        $themes = $this->video->getThemes();
        $vue = new Vue("VideoAjouter");
        $vue->generer(array('themes'=>$themes));


     }

    
    public function modifVideo($libelle, $lien, $description, $dateParution, $idVideo)
    {
        $this->video->modifierVideo($libelle, $lien, $description, $dateParution, $idVideo);
        header("location:index.php");
        $this->videos($idVideo);
    }
    public function deleteVideo($idVideo)
    {
        $this->video->supprimerVideo($idVideo);
        header("location:index.php?action=videoAccueil");
        $this->videos($idVideo);
    }
}