<?php
require_once 'Modele/Modele.php';

class Referent extends Modele
{
    public function getRefs()
    {
    $sql = 'Select * from referent ';
    $sql1 = 'select * from prestataire';
    $referents = $this->executerRequete($sql);
    $referents = $this->executerRequete($sql1);
    return $referents;
    }
    // public function getReferent($idReferent)
    // {
    //     $sql = 'select * from referent where id = ?';
    //     $referent = $this->executerRequete($sql, array($idReferent));
    //     if($referent->rowCount() > 0)
    //     {
    //         return $referent->fetch();
    //     }
    //     else{
    //         throw new Exception("Aucun referent de corespond a l'identififiant '$idReferent'");
    //     }
    // }
    public function getReferents($idPrestataire)
    {
        $sql = 'select * from referent inner join prestataire on referent.idPrestataire  = prestataire.id where prestataire.id=?';
        $referents = $this->executerRequete($sql , array($idPrestataire));
        return $referents;

    }
    public function getReferent($idReferent)
    {
        $sql = 'select * from referent where idReferent= ?';
        $referent = $this->executerRequete($sql, array($idReferent));
        return $referent;
    }
    public function ajouterReferent($nom, $prenom, $mail, $numTelephone, $idPrestataire)
    {
        $sql = 'insert into referent(nom, prenom, mail, numTelephone, idPrestataire) values(?,?,?,?,?)';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $numTelephone, $idPrestataire));
    }
    public function modifierReferent( $mail, $numTelephone, $idReferent)
    {
        $sql = 'update referent set mail = ?, numTelephone = ? where idReferent = ?';
        $this->executerRequete($sql, array( $mail, $numTelephone, $idReferent ));
    }
    public function supprimerReferent($idReferent)
    {
        $sql = 'delete from referent where idReferent = ?';
        $this->executerRequete($sql, array($idReferent));
    }

    
    


}

?>