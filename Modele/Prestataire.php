<?php
require_once 'Modele/Modele.php';

class Prestataire extends Modele

{
    public function getPrestataires()
    {
        $sql = 'select * from prestataire ';
        $prestataires = $this->executerRequete($sql);
        return $prestataires;
    }
    public function getPrestataireId($idPrestataire)
    {
        $sql = 'select * from prestataire where id = ? ';
        $prestataire = $this->executerRequete($sql, array($idPrestataire));
        return $prestataire;
    }

    public function getPrestataire($idPrestataire)
    {
        $sql = 'select * from prestataire where id = ?';
        $prestataire = $this->executerRequete($sql, array($idPrestataire));
        if($prestataire->rowCount() > 0)
        {
            return $prestataire->fetch();
        }
        else{
            throw new Exception("Aucun prestataire ne correspond a l'identififiant '$idPrestataire'");
        }
    }
    public function ajouterPrestataire( $nomPrestataire, $logo, $description, $codePostal)
    {
        $sql = 'insert into prestataire(nomPrestataire, logo, Description, codePostal) values(?,?,?,?)';
        $this->executerRequete($sql, array( $nomPrestataire, $logo, $description, $codePostal));
        
    }
    public function modifierPrestataire($nomPrestataire, $logo, $description, $codePostal, $idPrestataire)
    {
        $sql = 'update prestataire set nomPrestataire = ?, logo = ?, description = ?, codePostal = ? where id = ?';
        $this->executerRequete($sql, array($nomPrestataire, $logo, $description, $codePostal, $idPrestataire));
    }
    public function supprimerPrestataire($idPrestataire)
    {
        $sql = 'delete from prestataire where id = ?';
        $this->executerRequete($sql, array($idPrestataire));
    }

}