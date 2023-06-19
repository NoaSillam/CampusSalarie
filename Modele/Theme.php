<?php
require_once 'Modele/Modele.php';

class Theme extends Modele
{
    public function getThemes()
    {
        $sql = 'select * from theme where idThemeParent is null ';
        $themes = $this->executerRequete($sql);
        return $themes;
    }

    public function getThemesId()
    {
        $sql = 'select * from theme where idThemeParent is null ';
        $themesId = $this->executerRequete($sql);
        return $themesId;
    } 
    public function getVideoTheme($idTheme)
    {
        $sql = 'select docVideo.idDocVideo, docVideo.libelle, docVideo.type, docVideo.lien, docVideo.description, docVideo.format, docVideo.dateParution from docVideo inner join themeDoc on docVideo.idDocVideo = themeDoc.idDocVideo where type = "video" and idTheme = ? order by dateParution desc';
        $videoDoc = $this->executerRequete($sql, array($idTheme));
        return $videoDoc;
    }
    public function getDocumentTheme($idTheme)
    {
        $sql = 'select docVideo.idDocVideo, docVideo.libelle, docVideo.type, docVideo.lien, docVideo.description, docVideo.format, docVideo.dateParution from docVideo inner join themeDoc on docVideo.idDocVideo = themeDoc.idDocVideo where type = "document" and idTheme = ? order by dateParution desc';
        $videoDoc = $this->executerRequete($sql, array($idTheme));
        return $videoDoc;
    }
    
    // public function getTheme($idPrestataire)
    // {
    //     $sql = 'select * from prestataire where id = ?';
    //     $prestataire = $this->executerRequete($sql, array($idPrestataire));
    //     if($prestataire->rowCount() > 0)
    //     {
    //         return $prestataire->fetch();
    //     }
    //     else{
    //         throw new Exception("Aucun prestataire ne correspond a l'identififiant '$idPrestataire'");
    //     }
    // }
    public function getThm($idTheme)
    {
        $sql = 'select * from theme where idThemeParent is null and id = ?';
        $themes = $this->executerRequete($sql, array($idTheme));
        return $themes;
    }
    // public function getSousThm($idThemeParent)
    // {
    //     $sql = 'select * from theme where idThemeParent = ?';
    //     $sousThemes = $this->executerRequete($sql, array($idThemeParent));
    //     return $sousThemes;
    // }

    public function getSousThm($idThemeParent)
    {
        $sql = 'SELECT `id`, `libelle`, `descriptif`, `img`, `idThemeParent` from theme where `idThemeParent` = ?';
        $sousThemes = $this->executerRequete($sql, array($idThemeParent));
        return $sousThemes;
    }

    public function getSousThmModifier($idThemeParent)
    {
        $sql = 'SELECT `id`, `libelle`, `descriptif`, `img`, `idThemeParent` from theme  where `idThemeParent` is not null and `id` = ?';
        $sousThemes = $this->executerRequete($sql, array($idThemeParent));
        return $sousThemes;
    }
    public function getSousThms()
    {
        $sql = 'SELECT `id`, `libelle`, `descriptif`, `img`, `idThemeParent` from theme where `idThemeParent` is  null';
        $sousThemes = $this->executerRequete($sql);
        return $sousThemes;
    }

    // public function getSousTheme($idThemeParent)
    // {
    //     $sql = 'select * from theme where idThemeParent = ? ';
    //     $themes = $this->executerRequete($sql, array($idThemeParent));
    //     if($themes->rowCount() > 0)
    //     {
    //         return $themes->fetch();
    //     }
    //     else{
    //         throw new Exception("Aucun salarie ne correspond a l'identififiant '$idThemeParent'");
    //     }
        
    // }

    public function getTheme($idTheme)
    {
        $sql = 'select * from theme where id = ?';
        $theme = $this->executerRequete($sql, array($idTheme));
        if($theme->rowCount() > 0)
        {
            return $theme->fetch();
        }
        else{
            throw new Exception("Aucun theme ne correspond a l'identififiant '$idTheme'");
        }
    }
    public function getThemeId($idTheme)
    {
        $sql = 'select * from theme where idThemeParent is null and id = ? ';
        $theme = $this->executerRequete($sql, array($idTheme));
        return $theme;
        
       // return $mission;
    }
    public function ajouterTheme($libelle, $descriptif, $img)
    {
        $sql = 'insert into theme(libelle, descriptif, img) values(?,?,?)';
        $this->executerRequete($sql, array($libelle, $descriptif, $img));
    }
    public function ajouterSousTheme($libelle, $descriptif, $img, $idThemeParent)
    {
        $sql = 'insert into theme(libelle, descriptif, img, idThemeParent) values(?,?,?,?)';
        $this->executerRequete($sql, array($libelle, $descriptif, $img, $idThemeParent));
    }
    public function modifierTheme($libelle, $descriptif, $img, $idTheme)
    {
        $sql = 'update theme set libelle = ?, descriptif = ?, img = ? where id = ?';
        $this->executerRequete($sql, array($libelle, $descriptif, $img, $idTheme));
    }
    public function modifierSousTheme($libelle, $descriptif, $img, $idTheme)
    {
        $sql = 'update theme set libelle = ?, descriptif = ?, img = ? where id = ?';
        $this->executerRequete($sql, array($libelle, $descriptif, $img, $idTheme));
    }
    public function supprimerTheme($idTheme)
    {
        $sql = 'delete from theme where id = ?';
        $this->executerRequete($sql, array($idTheme));
    }

}