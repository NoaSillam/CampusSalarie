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
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.prenom, inscrit.mail, inscrit.numTelephone, inscrit.montant, inscrit.dateInscription, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 2 group by inscrit.mail, inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.prenom, inscrit.numTelephone, inscrit.montant, inscrit.dateInscription';
        $donateurs = $this->executerRequete($sql);
       
        return $donateurs;
    }
//     public function getInscritDonateurs()
// {
//     $sqlDonateurs = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom, inscrit.prenom, inscrit.mail, inscrit.numTelephone, inscrit.montant, inscrit.dateInscription, (YEAR(CURRENT_DATE()) - inscrit.anneeNaissance) AS age FROM inscrit INNER JOIN inscritStatut ON inscrit.id = inscritStatut.idInscrit WHERE inscritStatut.idStatut = 2';

//     $sqlEmailsMultiples = 'SELECT inscrit.mail, COUNT(inscrit.mail) AS occurrences FROM inscrit INNER JOIN inscritStatut ON inscrit.id = inscritStatut.idInscrit WHERE inscritStatut.idStatut = 2 GROUP BY inscrit.mail HAVING COUNT(*) > 1';

//     $donateurs = $this->executerRequete($sqlDonateurs);
//     $emailsMultiples = $this->executerRequete($sqlEmailsMultiples);

//     return [
//         'donateurs' => $donateurs,
//         'emailsMultiples' => $emailsMultiples
//     ];
// }
    public function getInscritDonateursAjout()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.prenom, inscrit.mail, inscrit.numTelephone, inscrit.montant, inscrit.dateInscription, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 2 group by inscrit.mail, inscrit.id, inscrit.civilite, inscrit.nom,  inscrit.prenom, inscrit.numTelephone, inscrit.montant, inscrit.dateInscription';
        $donateurs = $this->executerRequete($sql);
        return $donateurs;
    }
    public function getInscritBenevoles()
    {
        $sql = 'SELECT mission.titre, inscrit.id, inscrit.civilite, inscrit.nom, inscrit.dateInscription, inscrit.commentaire, inscrit.prenom, inscrit.numTelephone, inscrit.mail, datediff(inscrit.dateInscription, "1901-01-01") as dateInscrit , (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age 
        FROM inscrit 
        INNER JOIN inscritStatut ON inscrit.id = inscritStatut.idInscrit 
        LEFT JOIN mission ON inscritStatut.idMission = mission.idMission 
        WHERE inscritStatut.idStatut = 1;
        ';
        $benevoles = $this->executerRequete($sql);
        return $benevoles;
    }
    public function getMissionsInscrit($idMission)
    {
        $sql = 'select mission.titre, mission.annonce, mission.adresse, mission.codePostal, mission.ville, inscrit.id, inscrit.commentaire, inscrit.civilite, inscrit.dateInscription,  (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age, inscrit.nom, inscrit.prenom, inscrit.mail from mission inner join inscritStatut on mission.idMission = inscritStatut.idMission inner join inscrit on inscritStatut.idInscrit = inscrit.id where mission.idMission = ?';
        $missions = $this->executerRequete($sql, array($idMission));
        return $missions;
    }
    public function getInscritNewsletters()
    {
        $sql = 'SELECT inscrit.id, inscrit.civilite, inscrit.nom, inscrit.dateInscription, inscrit.numTelephone, inscrit.prenom, inscrit.mail, (year(CURRENT_DATE()) - inscrit.anneeNaissance) as age from inscrit inner join inscritStatut on inscrit.id = inscritStatut.idInscrit where inscritStatut.idStatut = 3';
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
    public function ajouterInscritBenevole($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
        $sql = 'INSERT INTO inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, dateInscription) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE())';
    $sql1 = 'INSERT INTO inscritStatut(idInscrit, idStatut) VALUES (?, 1)';
    $nbInscrits = $this->getNombreInscrits();
    $idInscrit = 301 + $nbInscrits;
    $numTelephone = !empty($numTelephone) ? $numTelephone : 0; // Ajout de la condition if
    $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite));
    $this->executerRequete($sql1, array($idInscrit));
    }
//     public function ajouterInscritBenevole($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite)
// {
//     $sql = 'insert into inscrit(nom, prenom, mail, numTelephone, adresse, codePostal, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?, CURRENT_DATE())';
//     $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $anneeNaissance, $civilite));
//     $idInscrit = $this->getBdd()->lastInsertId();
//     $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 1)';
//     $this->executerRequete($sql1, array($idInscrit));
// }
public function getNombreInscrits() {
    $sql = 'select count(*) as nbInscrits from inscrit ';
    $resultat = $this->executerRequete($sql);
     $nbInscrits = $resultat->fetch(PDO::FETCH_ASSOC)['nbInscrits'];
     return $nbInscrits;
  }

    public function ajouterInscritBenevoleMission($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite,  $commentaire, $idMission)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, commentaire, dateInscription) values(?,?,?,?,?,?,?,?,?,? ,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idStatut, idInscrit, idMission) values( 1, ?, ?)';
        $nbInscrits = $this->getNombreInscrits();
        $idInscrit = 301 + $nbInscrits ;
        $numTelephone = !empty($numTelephone) ? $numTelephone : 0;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire));
        $this->executerRequete($sql1, array($idInscrit, $idMission));
    }
    public function ajouterInscritDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, montant,anneeNaissance,civilite,dateInscription) values(?,?,?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
       $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 2)';
       $nbInscrits = $this->getNombreInscrits();
        $idInscrit = 301 + $nbInscrits ;
        $numTelephone = !empty($numTelephone) ? $numTelephone : 0;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
    
    public function ajouterInscritNewsletter( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite)
    {
        $sql = 'insert into inscrit(id, nom, prenom, mail, numTelephone, adresse, codePostal, ville, anneeNaissance, civilite, dateInscription) values(?,?,?,?,?,?,?,?,?,?, CURRENT_DATE())';
        $sql1 = 'insert into inscritStatut(idInscrit, idStatut) values(?, 3)';
        $nbInscrits = $this->getNombreInscrits();
        $idInscrit = 301 + $nbInscrits ;
        $numTelephone = !empty($numTelephone) ? $numTelephone : 0;
        $this->executerRequete($sql, array($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite));
        $this->executerRequete($sql1, array($idInscrit));
    }
    public function modifierInscrit($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $idInscrit)
    {
        $sql = 'update inscrit set nom = ?, prenom = ?, mail = ?, numTelephone = ?, adresse = ?, codePostal = ?, ville = ? where id = ?';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $idInscrit));
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