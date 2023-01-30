<?php


require_once 'Modele/Modele.php';
class DocVideo extends Modele

{
    public function getDocuments( $idSalarie)
    {
        $sql = 'select * from docVideo inner join prestataire on docVideo.idPrestataire = prestataire.id inner join salarie on docVideo.idSalarie = salarie.id where type = "document" and salarie.id = ?';
        $documents = $this->executerRequete($sql , array( $idSalarie));
        return $documents;
    }
    public function getDocumentSalarie()
    {
        $sql = 'select docvideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.type, docVideo.description, docVideo.dateCreation, salarie.id, salarie.nom, prestataire.id, prestataire.nomPrestataire from docVideo inner join prestataire on docVideo.idPrestataire = prestataire.id inner join salarie on docVideo.idSalarie = salarie.id where type = "document"';
        $documents = $this->executerRequete($sql );
        return $documents;
    }
    public function getVideoSalarie()
    {
        $sql = 'select docvideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.type, docVideo.description, docVideo.dateCreation, salarie.id, salarie.nom, prestataire.id, prestataire.nomPrestataire from docVideo inner join prestataire on docVideo.idPrestataire = prestataire.id inner join salarie on docVideo.idSalarie = salarie.id where type = "video"';
        $documents = $this->executerRequete($sql );
        return $documents;
    }
    public function getDocumentSalarie2()
    {
        $sql = 'select docvideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.type, docVideo.description, docVideo.dateCreation, salarie.id, salarie.nom, prestataire.id, prestataire.nomPrestataire from docVideo inner join prestataire on docVideo.idPrestataire = prestataire.id inner join salarie on docVideo.idSalarie = salarie.id where type = "document"';
        $docus = $this->executerRequete($sql );
        return $docus;
    }
    public function getVideoSalarie2()
    {
        $sql = 'SELECT docvideo.idDocVideo, docVideo.libelle, docVideo.lien, docVideo.type, docVideo.description, docVideo.dateCreation, prestataire.id AS idPrestataire, prestataire.nomPrestataire, salarie.id AS idSalarie, salarie.nom, salarie.prenom, theme.id AS idTheme, theme.libelle AS libelleTheme FROM docVideo INNER JOIN salarie ON docVideo.idSalarie = salarie.id INNER JOIN prestataire ON docVideo.idPrestataire = prestataire.id INNER JOIN themeDoc ON docVideo.idDocVideo = themeDoc.idTheme INNER JOIN theme ON themeDoc.idTheme = theme.id WHERE type = "video"';
        // $sql1= 'select salarie.id as idSalarie, nom, prenom, mail from salarie';
        // // $sql2 = 'select prestataire.id as idPrestataire, nomPrestataire from prestataire';
        // $sql3 = 'select theme.id as idTheme, libelle as libelleTheme from theme';
        $docus = $this->executerRequete($sql );
        // $docus = $this->executerRequete($sql1 );
        // // $docus = $this->executerRequete($sql2 );
        // $docus = $this->executerRequete($sql3 );
        return $docus;
    }
    // public function getVideoSalarieAjouter()
    // {
    //     $sql2 = 'select prestataire.id as idPrestataire, nomPrestataire from prestataire';
    //     $sql3 = 'select theme.id as idTheme, libelle as libelleTheme from theme';
    //     $vidSalarie = $this->executerRequete($sql2 );
    //     $vidSalarie = $this->executerRequete($sql3 );
    //     return $vidSalarie;
    // }
    
    public function getDocument($idDocument)
    {
        $sql = 'select * from docVideo where type = "document" and idDocVideo= ? ';
        $document = $this->executerRequete($sql, array($idDocument));
        return $document;
    }
    public function getDocumentTheme($idTheme)
    {
        $sql = 'SELECT docVideo.libelle, docVideo.lien, docVideo.description, docVideo.format FROM `docVideo` inner join themeDoc on docVideo.idDocVideo = themeDoc.idDocVideo Inner join theme on themeDoc.idTheme = theme.id WHERE theme.id = ? and docVideo.type= "document"';
        $documents = $this->executerRequete($sql, array($idTheme));
        return $documents;
    }
    public function getVideo($idVideo)
    {
        $sql = 'select * from docVideo where type = "video" and idDocVideo = ? ';
        $video = $this->executerRequete($sql, array($idVideo));
        return $video;
    }
    public function getVideoTheme($idTheme)
    {
        $sql = 'SELECT docVideo.libelle, docVideo.description, docVideo.imgApercu, docVideo.lien FROM `docVideo` inner join themeDoc on docVideo.idDocVideo = themeDoc.idDocVideo Inner join theme on themeDoc.idTheme = theme.id WHERE docVideo.type="video" and theme.id = ?';
        $videos = $this->executerRequete($sql, array($idTheme));
        return $videos;
    }
    public function getSalarieDocVideo()
    {
        $sql = 'select salarie.id as "idSalarie", salarie.nom as "nomSalarie" from salarie';
        $salarieDocVideo = $this->executerRequete($sql);
        return $salarieDocVideo;
    }
    public function getVideos($idSalarie)
    {
        $sql = 'select * from docVideo inner join prestataire on docVideo.idPrestataire = prestataire.id inner join salarie on docVideo.idSalarie = salarie.id where type = "video" and salarie.id = ?';
        $videos = $this->executerRequete($sql, array($idSalarie));
        return $videos;
    }
    public function getVideoAccueil()
    {
        $sql = 'select * from docVideo where type = "video"';
        $video = $this->executerRequete($sql);
        return $video;
    }
    public function getVideoAccueilTout()
    {
        $sql = 'select * from docVideo where type = "video"';
        $video = $this->executerRequete($sql);
        return $video;
    }

   
    public function modifierVideo( $libelle, $lien, $description, $duree, $dateParution, $idDocument)
    {
        $sql = 'update docVideo set libelle = ?, lien = ?, description = ?, duree = ?,  dateParution = ? where idDocVideo = ?';
        $this->executerRequete($sql, array( $libelle, $lien, $description, $duree, $dateParution, $idDocument ));
    }
    public function supprimerVideo($idVideo)
    {
        $sql = 'delete from docVideo where idDocVideo = ?';
        $this->executerRequete($sql, array($idVideo));
    }
    public function getDocumentAccueil()
    {
        $sql = 'select * from docVideo where type = "document"';
        $document = $this->executerRequete($sql);
        return $document;
    }
    public function getDocumentAccueilTout()
    {
        $sql = 'select * from docVideo where type = "document"';
        $document = $this->executerRequete($sql);
        return $document;
    }
    public function ajouterDocument($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire, $idTheme)
    {
        $sql = 'insert into docVideo(idDocVideo, libelle, type, lien, description, dateParution, idSalarie, idPrestataire) values(?,?,"document",?,?,?,?,?)';
        $sql1 = 'insert into themeDoc(idTheme, idDocVideo) values(?,?)';
        $this->executerRequete($sql, array($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire));
        $this->executerRequete($sql1, array($idTheme, $idDocument));
        
    }
    public function ajouterVideo($idVideo, $libelle, $lien, $description, $duree, $dateParution, $idSalarie, $idPrestataire, $idTheme)
    {
        $sql = 'insert into docVideo(idDocVideo, libelle, type, lien, description, format, duree, dateParution, dateCreation, idSalarie, idPrestataire) values(?,?,"video",?,?,"youtube",?,?,NOW(),?,?)';
        $sql1 = 'insert into themeDoc(idTheme, idDocVideo) values(?,?)';
        $this->executerRequete($sql, array($idVideo, $libelle, $lien, $description, $duree, $dateParution, $idSalarie, $idPrestataire));
        $this->executerRequete($sql1, array($idTheme, $idVideo));
    }
    public function modifierDocument( $libelle, $lien, $description, $dateParution, $idDocument)
    {
        $sql = 'update docVideo set libelle = ?, lien = ?, description = ?, dateParution = ? where idDocVideo = ?';
        $this->executerRequete($sql, array( $libelle, $lien, $description, $dateParution, $idDocument ));
    }
    public function supprimerDocument($idDocument)
    {
        $sql = 'delete from docVideo where idDocVideo = ?';
        $this->executerRequete($sql, array($idDocument));
    }
    
   


}