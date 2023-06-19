<?php

require_once 'Modele/Modele.php';
class Actualite extends Modele
{
    public function getActualitesReferent($idReferent)
    {
        $sql = 'select * from actualitePrestataire inner join referent on actualitePrestataire.idReferent = referent.idReferent where referent.idReferent = ? order by dateAjout desc';
        $actualites = $this->executerRequete($sql, array($idReferent));
        return $actualites;
    }
    public function getActualiteReferent($idActualite){
        $sql = 'select * from actualitePrestataire where idActualite = ?';
        $actualite = $this->executerRequete($sql, array($idActualite));
        return $actualite;
    }
    public function getActualites(){
        $sql = 'select * from actualitePrestataire order by dateAjout desc ';
        $sql1 = 'select * from referent';
        $actualites = $this->executerRequete($sql);
        $actualites = $this->executerRequete($sql1);

        return $actualites;
    }
    public function ajouterActualite($nom, $description, $type, $lien, $idReferent, $imgActualite)
    {
        $sql = 'insert into actualitePrestataire(NomActualite, DescriptionActualite, TypeActualite, LienActualite, idReferent, imgActualite, dateAjout) values(?,?,?,?,?,?, NOW())';
       // $dateParution = date(DATE_W3C);
        $this->executerRequete($sql, array( $nom, $description, $type, $lien, $idReferent, $imgActualite));
    }
    public function modifierActualite($nom, $description, $type, $lien, $idActualite, $imgActualite)
    {
        $sql = 'update actualitePrestataire set NomActualite = ?, DescriptionActualite = ?, TypeActualite = ?, LienActualite = ?, imgActualite = ? where idActualite = ? ';
        $this->executerRequete($sql, array($nom, $description, $type, $lien, $idActualite, $imgActualite));
    }
    public function supprimerActualite($idActualite)
    {
        $sql = 'delete from actualitePrestataire where idActualite = ?';
        $this->executerRequete($sql, array($idActualite));
    }
}