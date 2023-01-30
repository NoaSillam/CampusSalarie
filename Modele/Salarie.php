<?php
require_once 'Modele/Modele.php';

class Salarie extends Modele
{
    public function getSalaries()
    {
        $sql = 'select * from salarie ';
        $salaries = $this->executerRequete($sql);
        return $salaries;
    }
    public function getSalarieModifier($idSalarie)
    {
        $sql = 'select * from salarie where id = ? ';
        $salaries = $this->executerRequete($sql, array($idSalarie));
        return $salaries;
    }
    public function getSalarie($idSalarie)
    {
        $sql = 'select * from salarie where id = ?';
        $salarie = $this->executerRequete($sql, array($idSalarie));
        if($salarie->rowCount() > 0)
        {
            return $salarie->fetch();
        }
        else{
            throw new Exception("Aucun salarie ne correspond a l'identififiant '$idSalarie'");
        }
    }
    public function ajouterSalarie($nom, $prenom, $mail, $pole, $statut,$password)
    {
        $sql = 'insert into salarie(nom, prenom, mail, pole, statut, password) values(?,?,?,?,?,?)';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $pole, $statut, $password));
    }
    public function modifierSalarie($nom, $prenom, $mail, $pole, $idSalarie)
    {
        $sql = 'update salarie set nom = ?, prenom = ?, mail  = ?, pole = ? where id = ?';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $pole, $idSalarie));
    }
    public function supprimerSalarie($idSalarie)
    {
        $sql = 'delete from salarie where id = ?';
        $this->executerRequete($sql, array($idSalarie));
    }

}