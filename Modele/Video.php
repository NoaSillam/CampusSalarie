<?php

require_once 'Modele/Modele.php';
class Video extends Modele

{
    public function getVideos($idSalarie)
    {
        $sql = 'select * from video inner join prestataire on video.idPrestataire = prestataire.id inner join salarie on video.idSalarie = salarie.id where salarie.id = ?';
        $videos = $this->executerRequete($sql, array($idSalarie));
        return $videos;
    }
    public function getThemes()
    {
        $sql = 'select * from theme';
        $themes = $this->executerRequete($sql);
        return $themes;
    }
    public function getVideo($idVideo)
    {
        $sql = 'select * from video where idVideo = ?';
        $video = $this->executerRequete($sql, array($idVideo));
        return $video;
    }
    public function getVideoAccueil()
    {
        $sql = 'select * from video ';
        $video = $this->executerRequete($sql);
        return $video;
    }
    public function ajouterVideo($idVideo, $libelle, $type, $lien, $description, $format, $duree, $imgApercu, $dateParution, $dateCreation, $idSalarie, $idPrestataire, $idTheme)
    {
        $sql = 'insert into video(idVideo, libelle, type, lien, description, format, duree, imgApercu, dateParution, dateCreation, idSalarie, idPrestataire) values (?,?,?,?,?,?,?,?,?,?,?,?)';
        $sql1 = 'insert into themeDoc(idTheme, idVideo) values(?,?)';
        $this->executerRequete($sql, array($idVideo, $libelle, $type, $lien, $description, $format, $duree, $imgApercu, $dateParution, $dateCreation, $idSalarie, $idPrestataire));
        $this->executerRequete($sql1, array($idTheme, $idVideo));
    }
    public function modifierVideo($libelle, $type, $lien, $description, $format, $duree, $imgApercu, $dateParution, $idVideo)
    {
        $sql = 'update video set libelle = ?, type = ?, lien = ?, description = ?, format = ?, duree = ?, imgApercu = ?, dateParution = ? where idVideo = ?';
        $this->executerRequete($sql, array($libelle, $type, $lien, $description, $format, $duree, $imgApercu, $dateParution, $idVideo));
    }
    public function supprimerVideo($idVideo)
    {
        $sql = 'delete from video where idVideo = ?';
        $this->executerRequete($sql, array($idVideo));
    }
}