<?php


require_once 'Modele/Modele.php';
class Document extends Modele

{
    public function getDocuments( $idSalarie)
    {
        $sql = 'select * from document inner join prestataire on document.idPrestataire = prestataire.id inner join salarie on document.idSalarie = salarie.id where salarie.id = ?';
        $documents = $this->executerRequete($sql , array( $idSalarie));
        return $documents;
    }
    public function getDocument($idDocument)
    {
        $sql = 'select * from document where idDocument= ?';
        $document = $this->executerRequete($sql, array($idDocument));
        return $document;
    }
    public function getDocumentAccueil()
    {
        $sql = 'select * from document ';
        $document = $this->executerRequete($sql);
        return $document;
    }
    public function ajouterDocument($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire)
    {
        $sql = 'insert into document(idDocument, libelle, type, lien, description, dateParution, idSalarie, idPrestataire) values(?,?,"document",?,?,?,?,?)';
        $this->executerRequete($sql, array($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire));
    }
    public function modifierDocument( $libelle, $type, $lien, $description, $dateParution, $idDocument)
    {
        $sql = 'update document set libelle = ?, type = ?, lien = ?, description = ?, dateParution = ? where idDocument = ?';
        $this->executerRequete($sql, array( $libelle, $type, $lien, $description, $dateParution, $idDocument ));
    }
    public function supprimerDocument($idDocument)
    {
        $sql = 'delete from document where idDocument = ?';
        $this->executerRequete($sql, array($idDocument));
    }

}