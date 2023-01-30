<?php


require_once 'Modele/Modele.php';

class Dictionnaire extends Modele
{
    public function getDictionnaires($idSalarie)
    {
        $sql = 'select * from dictionnaire inner join salarie on dictionnaire.idSalarie  = salarie.id where salarie.id=?';
        $dictionnaires = $this->executerRequete($sql , array($idSalarie));
        return $dictionnaires;

    }
    public function getDicAccueil()
    {
        $sql = 'select * from dictionnaire';
        $dictionnaires = $this->executerRequete($sql);
        return $dictionnaires;
    }
    public function getDic()
    {
        $sql = 'select * from dictionnaire';
        $sql1 = 'select * from salarie';
        $dictionnaires = $this->executerRequete($sql);
        $dictionnaires = $this->executerRequete($sql1);
        return $dictionnaires;
    }
    public function getDictionnaire($idDictionnaire)
    {
        $sql = 'select * from dictionnaire where idDictionnaire = ?';
        $dictionnaire = $this->executerRequete($sql, array($idDictionnaire));
        return $dictionnaire;
    }
    public function ajouterDictionnaire($libelle, $definition, $img, $idSalarie)
    {
        $sql = 'insert into dictionnaire(libelle, definition, img, idSalarie) values(?,?,?,?)';
        $this->executerRequete($sql, array($libelle, $definition, $img, $idSalarie));
    }
    public function modifierDictionnaire( $definition, $img, $idDictionnaire)
    {
        $sql = 'update dictionnaire set definition = ?, img = ? where idDictionnaire = ?';
        $this->executerRequete($sql, array( $definition, $img, $idDictionnaire ));
    }
    public function supprimerDictionnaire($idDictionnaire)
    {
        $sql = 'delete from dictionnaire where idDictionnaire = ?';
        $this->executerRequete($sql, array($idDictionnaire));
    }
}