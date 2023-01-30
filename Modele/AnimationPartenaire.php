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
    public function ajouterAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude)
    {
        $sql = 'insert into animationPartenaire(nom, lienVideo, lienPdf, adresseAnim, codePostalAnim, villeAnim, type, img, descriptif, dateParution, idPrestataire, latitude, longitude) values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
       // $dateParution = date(DATE_W3C);
        $this->executerRequete($sql, array( $nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude));
    }
    public function modifierAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $idAnimationPartenaire)
    {
        $sql = 'update animationPartenaire set nom = ?, lienVideo = ?, lienPdf = ?, adresseAnim = ?, codePostalAnim = ?, villeAnim=? where idAnimPartenaire = ? ';
        $this->executerRequete($sql, array($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $idAnimationPartenaire));
    }
    public function supprimerAnimationPartenaire($idAnimationPartenaire)
    {
        $sql = 'delete from animationPartenaire where idAnimPartenaire = ?';
        $this->executerRequete($sql, array($idAnimationPartenaire));
    }
}