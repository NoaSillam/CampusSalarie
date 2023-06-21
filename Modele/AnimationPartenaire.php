<?php

require_once 'Modele/Modele.php';
class AnimationPartenaire extends Modele
{
    public function getAnimationPartenaires($idPrestataire)
    {
        $sql = 'select * from animationPartenaire inner join prestataire on animationPartenaire.idPrestataire = prestataire.id where prestataire.id = ?';
        $animationPartenaires = $this->executerRequete($sql, array($idPrestataire));
        return $animationPartenaires;
    }
    public function getAnimationPartenaire($idAnimationPartenaire){
        $sql = 'select * from animationPartenaire where idAnimPartenaire = ?';
        $animationPartenaire = $this->executerRequete($sql, array($idAnimationPartenaire));
        return $animationPartenaire;
    }
    public function getAnimPartenaires(){
        $sql = 'select * from animationPartenaire  ';
        $sql1 = 'select * from prestataire';
        $animationPartenaire = $this->executerRequete($sql);
        $animationPartenaire = $this->executerRequete($sql1);

        return $animationPartenaire;
    }
    public function ajouterAnimationPartenaire($nom, $lienPdf, $adresse, $codePostal, $ville, $img, $descriptif, $idPrestataire, $latitude, $longitude)
    {
        $sql = 'insert into animationPartenaire(nom, lienPdf, adresseAnim, codePostalAnim, villeAnim, img, descriptif, idPrestataire, latitude, longitude) values(?, ?,?,?,?,?,?,?,?,?)';
       // $dateParution = date(DATE_W3C);
        $this->executerRequete($sql, array( $nom, $lienPdf, $adresse, $codePostal, $ville, $img, $descriptif, $idPrestataire, $latitude, $longitude));
    }
    public function modifierAnimationPartenaire($nom, $descriptif, $adresse, $codePostal, $ville, $latitude, $longitude, $idAnimationPartenaire)
    {
        $sql = 'update animationPartenaire set nom = ?, descriptif = ?, adresseAnim = ?, codePostalAnim = ?, villeAnim=?, latitude=?, longitude=? where idAnimPartenaire = ? ';
        $this->executerRequete($sql, array($nom, $descriptif, $adresse, $codePostal, $ville, $latitude, $longitude, $idAnimationPartenaire));
    }
    public function supprimerAnimationPartenaire($idAnimationPartenaire)
    {
        $sql = 'delete from animationPartenaire where idAnimPartenaire = ?';
        $this->executerRequete($sql, array($idAnimationPartenaire));
    }
}