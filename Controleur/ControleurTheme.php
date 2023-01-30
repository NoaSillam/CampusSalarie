<?php 

// require_once 'Modele/Prestataire.php';
// require_once 'Modele/Theme.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';


class ControleurTheme{
    private $prestataire;
    private $referent;
    private $theme;

    public function __construct()
    {
        $this->prestataire = new Prestataire();
      //  $this->referent = new Referent();
        $this->theme = new Theme();
    }
    public function themes()
    { 
        $themes = $this->theme->getThemes();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("Theme");
         $vue->generer(array('themes'=> $themes));
    }
    public function themesLecteur()
    { 
        $themes = $this->theme->getThemes();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ThemeLecteur");
         $vue->generer(array('themes'=> $themes));
    }
    public function themesEcriture()
    { 
        $themes = $this->theme->getThemes();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ThemeEcriture");
         $vue->generer(array('themes'=> $themes));
    }
    public function themesId()
    { 
        $themesId = $this->theme->getThemesId();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("Theme");
         $vue->generer(array('themesId'=> $themesId));
    }
    public function themesIdTheme($idTheme)
    { 
        $theme = $this->theme->getThemeId($idTheme);
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ThemeModifier");
         $vue->generer(array('theme'=> $theme));
    }
    

    // public function sousThm($idThemeParent)
    // { 
    //     $sousThemes = $this->theme->getSousThm($idThemeParent);
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("SousTheme");
    //      $vue->generer(array('sousThemes'=> $sousThemes));
    // }
    public function sousThmModifier($idThemeParent)
    {
        $sousThemes = $this->theme->getSousThmModifier($idThemeParent);
        $vue = new Vue("SousThemeModifier");
        $vue->generer(array('sousThemes'=>$sousThemes));

    }

    public function sousThmLecteur($idThemeParent)
    {
        $sousThemes = $this->theme->getSousThm($idThemeParent);
        $vue = new Vue("SousThemeLecteur");
        $vue->generer(array('sousThemes'=>$sousThemes));
    }
    public function sousThmEcriture($idThemeParent)
    {
        $sousThemes = $this->theme->getSousThm($idThemeParent);
        $vue = new Vue("SousThemeEcriture");
        $vue->generer(array('sousThemes'=>$sousThemes));
    }
    public function sousThm($idThemeParent)
    {
        $sousThemes = $this->theme->getSousThm($idThemeParent);
        $vue = new Vue("SousTheme");
        $vue->generer(array('sousThemes'=>$sousThemes));
    }



    // public function sousThm($idThemeParent)
    // {
    //     $sousThemes = $this->theme->getSousThm($idThemeParent);
    //     $vue = new Vue("SousTheme");
    //     $vue->generer(array('sousThemes'=>$sousThemes));
    // }
    // public function sousTheme($idTheme)
    // {
    //     $theme = $this->theme->getThm($idTheme);
    //     $sousThemes = $this->theme->getSousTheme($idTheme);

    //     $vue = new Vue("SousTheme");
    //     $vue->generer(array('theme'=> $theme, 'sousThemes'=>$sousThemes));
    //    //  $vue->generer(array('theme'=>$theme, 'sousThemes'=> $sousThemes));
    // }
    // public function sousTheme1($idThemeParent)
    // {
    //    // $theme = $this->theme->getThm($idTheme);
    //     $sousThemes = $this->theme->getSousTheme($idThemeParent);
    //     $vue = new Vue("SousTheme");
    //    // $vue->generer(array('theme'=> $theme, 'sousThemes'=>$sousThemes));
    //     $vue->generer(array('sousThemes'=>$sousThemes));
    //    //  $vue->generer(array('theme'=>$theme, 'sousThemes'=> $sousThemes));
    // }
    
    public function SousThmeAjouter()
    {
        $sousThemes = $this->theme->getSousThms();
        $vue = new Vue("SousThemeAjouter");
        $vue->generer(array('sousThemes'=>$sousThemes));
    }
    public function themesAjouter()
    { 
        $themes = $this->theme->getThemes();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ThemeAjouter");
         $vue->generer(array('themes'=> $themes));
    }

    // public function theme($idTheme)
    // {
    //     $theme = $this->theme->getTheme($idTheme);
    //   //  $referents = $this->referent->getReferents($idPrestataire);
    //     //$vue = new Vue("Prestataire", "index.php");
    //     $vue = new Vue("Theme");
    //     $vue->generer(array('theme'=>$theme));

    // }
    public function ajoutSousTheme($libelle, $descriptif, $img, $idThemeParent)
    {
        $this->theme->ajouterSousTheme($libelle, $descriptif, $img, $idThemeParent);
        header("location:index.php?action=themes");

       // $this->prestataire($idPrestataire);
    }
    public function ajoutTheme($libelle, $descriptif, $img)
    {
        $this->theme->ajouterTheme($libelle, $descriptif, $img);
        header("location:index.php?action=themes");

       // $this->prestataire($idPrestataire);
    }
    public function modifTheme($libelle, $descriptif, $img, $idTheme)
    {
        $this->theme->modifierTheme($libelle, $descriptif, $img, $idTheme);
        header("location:index.php?action=themes");

       //$this->referents($idReferent); 
    }
    public function modifSousTheme($libelle, $descriptif, $img, $idThemeParent, $idTheme)
    {
        $this->theme->modifierSousTheme($libelle, $descriptif, $img, $idThemeParent, $idTheme);
        header("location:index.php?action=themes");

       //$this->referents($idReferent); 
    }
    public function deleteTheme($idTheme)
    {
        $this->theme->supprimerTheme($idTheme);
        header("location:index.php?action=themes");

       // $this->prestataire($idPrestataire);
    }
}