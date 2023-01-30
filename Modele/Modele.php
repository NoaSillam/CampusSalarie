<?php


abstract class Modele {
    private static $_instance = null;

    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); 
        }
        else {
            $resultat = $this->getBdd()->prepare($sql); 
            $resultat->execute($params);
        }
        return $resultat;
    }

 
    private function getBdd() {



        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        if(is_null(self::$_instance))
        {
            try{
                self::$_instance = new PDO("mysql:host=$servername; dbname=testCampusSeniorMission", $username, $password , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                // , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'/,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION/)
               // echo '<h2>coucou</h2>';
            }
            catch(Exception $e)
            {
                
            }
            
        }
        return self::$_instance;
        // if ($this->bdd == null) {
     
        //     $this->bdd = new PDO('mysql:host=localhost;dbname=testCampusSeniorMission;charset=utf8',
        //             'root', 'root',
        //             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // }
        // return $this->bdd;
    }

}