<?php

require_once 'Modele/Modele.php';

class Inscrit extends Modele
{
    public function getInscrits()
    {
        $sql = 'select * from inscrit ';
        $inscrits = $this->executerRequete($sql);
        return $inscrits;
    }
    public function getInscritDonateurs()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.prenom, inscrit.mail, inscrit.montant, inscrit.dateInscription, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 2';
        $donateurs = $this->executerRequete($sql);
        return $donateurs;
    }
    public function getInscritBenevoles()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom, inscrit.dateInscription, inscrit.prenom, inscrit.mail, datediff(inscrit.dateInscription, "1901-01-01") as dateInscrit , (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 1;';
        $benevoles = $this->executerRequete($sql);
        return $benevoles;
    }
    public function getMissionsInscrit($idMission)
    {
        $sql = 'select mission.titre, mission.annonce, mission.adresse, mission.codePostal, mission.ville, inscrit.id, inscrit.civilite, inscrit.dateInscription,  (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age, inscrit.nom, inscrit.prenom, inscrit.mail from mission inner join inscritStatut on mission.idMission = inscritStatut.idMission inner join inscrit on inscritStatut.idInscrit = inscrit.id where mission.idMission = ?';
        $missions = $this->executerRequete($sql, array($idMission));
        return $missions;
    }
    public function getInscritNewsletters()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom, inscrit.dateInscription, inscrit.prenom, inscrit.mail, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 3';
        $newsletters = $this->executerRequete($sql);
        return $newsletters;
    }
    public function getInscritPreventions()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.dateInscription, inscrit.prenom, inscrit.mail, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 4';
        $preventions = $this->executerRequete($sql);
        return $preventions;
    }

    public function getInscrit($idInscrit)
    {
        $sql = 'select * from inscrit where id = ?';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        if($inscrit->rowCount() > 0)
        {
            return $inscrit->fetch();
        }
        else{
            throw new Exception("Aucun inscrit ne correspond a l'identififiant '$idInscrit'");
        }
    }
    
   
    public function getInscritBenevoleId($idInscrit)
    { 
        $sql = 'select * from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 1 and id = ? ';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        return $inscrit;
    }
    public function getInscritDonateurId($idInscrit)
    { 
        $sql = 'select * from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 2 and id = ? ';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        return $inscrit;
    }

    public function getInscritNewsletterId($idInscrit)
    { 
        $sql = 'select * from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 3 and id = ? ';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        return $inscrit;
    }
    public function getInscritPreventionId($idInscrit)
    { 
        $sql = 'select * from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 4 and id = ? ';
        $inscrit = $this->executerRequete($sql, array($idInscrit));
        return $inscrit;
    }
    public function ajouterInscritBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal) values(?,?,?,?,?,?,?)';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 1)';
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function ajouterInscritDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant)
    {
        $sql = 'insert into inscrit values(?,?,?,?,?,?,?,?)';
       $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 2)';
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant));
        $this->executerRequete($sql1, array($idInscrit));
    }
    
    public function ajouterInscritNewsletter($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal) values(?,?,?,?,?,?,?)';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 3)';
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function ajouterInscritPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal) values(?,?,?,?,?,?,?)';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 4)';
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function modifierInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idInscrit)
    {
        $sql = 'update inscrit set nom = ?, prenom = ?, mail = ?, numTelephone = ?, adresse = ?, codePostal = ? where id = ?';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idInscrit));
    }
    public function supprimerInscritDonateur($idInscrit)
    {
        $sql = 'delete from inscritStatut where idStatut = 2 and idInscrit = ? ;';
        $sql1 = 'delete from inscrit where id = ?';
        $this->executerRequete($sql, array($idInscrit));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function supprimerInscritBenevole($idInscrit)
    {
        $sql = 'delete from inscritStatut where idStatut = 1 and idInscrit = ? ;';
        $sql1 = 'delete from inscrit where id = ?';
        $this->executerRequete($sql, array($idInscrit));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function supprimerInscritNewsletter($idInscrit)
    {
        $sql = 'delete from inscritStatut where idStatut = 3 and idInscrit = ? ;';
        $sql1 = 'delete from inscrit where id = ?';
        $this->executerRequete($sql, array($idInscrit));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function supprimerInscritPrevention($idInscrit)
    {
        $sql = 'delete from inscritStatut where idStatut = 4 and idInscrit = ? ;';
        $sql1 = 'delete from inscrit where id = ?';
        $this->executerRequete($sql, array($idInscrit));
        $this->executerRequete($sql1, array($idInscrit));
    }

}