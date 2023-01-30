<?php

// require_once 'Modele/Theme.php';
// require_once 'Modele/ThemeDoc.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurThemeDoc
{
    private $theme;
    private $themeDoc;

    public function __construct()
    {
        $this->theme = new Theme();
        $this->themeDoc = new ThemeDoc();
    }
     public function themeDocVideo($idTheme)
     {
        $theme = $this->theme->getTheme($idTheme);
        $themeDocs = $this->themeDoc->getThemeDocs($idTheme);
        $vue = new Vue("ThemeDoc");
        $vue->generer(array('theme'=>$theme, 'themeDocs'=>$themeDocs));
     }
     public function themeDocs($idThemeDoc)
     {
        $themeDoc = $this->themeDoc->getThemeDoc($idThemeDoc);
        $vue = new Vue("ThemeDoc");
        $vue->generer(array('themeDoc'=>$themeDoc));

     }
     public function themeDoc($idTheme, $idDocument, $idVideo)
     {
        $this->themeDoc->ajouterThemeDoc($idTheme, $idDocument, $idVideo);
        $this->themeDocVideo($idTheme);
        
     }
     public function deleteThemeDoc($idThemeDoc, $idDocument, $idVideo)
     {
    $this->themeDoc->supprimerThemeDoc($idThemeDoc, $idDocument, $idVideo);
    $this->themeDocs($idThemeDoc);
    }
}