<?php

require_once 'Modele/Modele.php';
class ThemeDoc extends Modele
{
    public function getThemeDocs($idTheme)
    {
        $sql = 'select * from themeDoc inner join video on themeDoc.idVideo = video.id inner join document on themeDoc.idDocument = document.id inner join theme on themeDoc.idTheme = theme.id where theme.id = ?';
        $themeDocs  = $this->executerRequete($sql, array($idTheme));
        return $themeDocs;
    }
    public function getThemeDoc($idThemeDoc)
    {
        $sql = 'select * from themeDoc where idTheme = ?';
        $themeDoc = $this->executerRequete($sql, array($idThemeDoc));
        return $themeDoc;
    }
    public function ajouterThemeDoc($idTheme, $idDocument, $idVideo)
    {
        $sql = 'insert into themeDoc(idTheme, idDocument, idVideo) values (?,?,?)';
        $this->executerRequete($sql, array($idTheme, $idDocument, $idVideo));
    }
    public function supprimerThemeDoc($idThemeDoc, $idDocument, $idVideo)
    {
        $sql = 'delete from themeDoc where idTheme = ? and idDocument = ? and idVideo = ?';
        $this->executerRequete($sql, array($idThemeDoc, $idDocument, $idVideo));
    }
}

