<?php
require_once 'Modele/Modele.php';

class Mission extends Modele{
    
    public function getMissions()
    {
        $sql = 'select * from mission';
        $missions = $this->executerRequete($sql);
        return $missions;
    }
    // public function getMissionsInscrit($idMission)
    // {
    //     $sql = 'select mission.titre, mission.annonce, mission.adresse, mission.codePostal, mission.ville, inscrit.id, inscrit.nom, inscrit.prenom, inscrit.mail from mission inner join inscritStatut on mission.idMission = inscritStatut.idMission inner join inscrit on inscritStatut.idInscrit = inscrit.id where idMission = ?';
    //     $missions = $this->executerRequete($sql, array($idMission));
    //     return $missions;
    // }
    public function getNombreMissions() {
        $sql = 'select count(*) as nbMissions from mission ';
        $resultat = $this->executerRequete($sql);
         $nbMissions = $resultat->fetch(PDO::FETCH_ASSOC)['nbMissions'];
         return $nbMissions;
      }
    public function getMission($idMission)
    {
        $sql = 'select * from mission where idMission = ? ';
        $mission = $this->executerRequete($sql, array($idMission));
        return $mission;
        
       // return $mission;
    }
    public function ajoutMission( $titre, $annonce, $adresse, $codePostal, $ville )
    {
        $sql = 'insert into mission (idMission, titre, annonce, adresse, codePostal, ville) values (?,?,?,?,?,?);';
        $sql1 = 'insert into inscritStatut (idStatut, idMission) values (1,?)';
        // $sql2 = 'select idMission from mission order by idMission desc limit 1';
        $nbMissions = $this->getNombreMissions();
        $idMission = $nbMissions +1;
        $codePostal = !empty($codePostal) ? $codePostal : 0;
        $this->executerRequete($sql, array($idMission, $titre, $annonce, $adresse, $codePostal, $ville ));
        $this->executerRequete($sql1, array($idMission));
       // $idMission = $sql2 +1;
    }
    public function modifMission( $titre, $annonce, $idMission)
    {
        $sql = 'update mission set titre = ?, annonce = ? where idMission = ? ';
        $this->executerRequete($sql, array($titre, $annonce, $idMission));
    }
    // public function deleteMission($idMission)
    // {
    //     $sql = 'delete from mission where idMission = ?';
    //     $this->executerRequete($sql, array($idMission));
    // }

    public function supprimerMission($idMission)
    {
        $sql = 'DELETE FROM `mission` WHERE `idMission` =  ?';
        $this->executerRequete($sql, array($idMission));
    }
    // public function supprimerPrestataire($idPrestataire)
    // {
    //     $sql = 'delete from prestataire where id = ?';
    //     $this->executerRequete($sql, array($idPrestataire));
    // }
}