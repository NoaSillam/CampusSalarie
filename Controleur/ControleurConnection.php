<?php

// require_once 'Modele/Connection.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
        //session_start();
    }
    public function cnx2($mail, $password)
    {
        $connections = $this->connection->getCon($mail, $password);
        $vue = new Vue("Connection");
        $vue->generer(array('connections'=>$connections));
    }
    public function cnx1()
    {
        $connections = $this->connection->getConnections();
        $vue = new Vue("Connection");
        $vue->generer(array('connections'=>$connections));
      //  header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }

    public function cnx($mail, $password)
    {
       // session_start();
        $this->connection->getConnection($mail, $password);
        header("location:index.php");
    }

    public function cnx3($mail, $password)
    {
       
       // session_start();
            // $this->connection->getCon($mail, $password, $statut);
           $this->connection->getCon($mail, $password);
           $autho =  $this->connection->getCon($mail, $password);
        //    $auth = $autho['statut'];
            $_SESSION["status"] = session_status();
            
           // session_start();
            if($_SESSION['status'] == 2)
            {
                
               //session_start();
               // echo 'session = 2';
                // if()
                // {

                // }
                header("location:index.php");
                // session_start();
            }
            else{
                // session_start();
                // session_destroy();
                // session_unset();
                // session_write_close();
                // setcookie(session_name(),'',0,'/');
               // echo 'session = 1';
               header("location:index.php?action=cnx1");
            }
            
    }


    // public function getAutho($mail, $password)
    // {
    //     $this->connection->getAuthentification($mail, $password);
        
    //   //  $autho =  $this->connection->getCon($mail, $password);
    //     $_SESSION["status"] = session_status();
    //    //  $_SESSION['statut'] == $autho['statut'];
    //     if($_SESSION['status'] == 2)
    //         {
    //             header("location:index.php");
    //             // session_start();
    //         }
    //         else{
    //             header("location:index.php?action=salaries");
    //         }
    // }
    // public function getDeconnection()
    // {
    //    // session_start();
    //     // session_unset();
    //     // session_destroy();
    //     // $_SESSION = array();

    //     header("location:index.php?action=cnx1");
    //     // exit();
    // }


    public function getAutho($mail, $password)
    {
        $this->connection->getAuthentification($mail, $password);
        // $autho =  $this->connection->getCon($mail, $password);
        $_SESSION["status"] = session_status();
        // $_SESSION['statut'] == $autho['statut'];
        if($_SESSION['status'] == 2)
            {
                header("location:index.php");
                // session_start();
            }
            else{
                header("location:index.php?action=cnx1");
            }
    }


    // public function getAuthoStatut($mail, $password, $statut)
    public function getAuthoStatut($mail, $password)
    {
        // $this->connection->getAuthentificationStatut($mail, $password, $statut);
        $this->connection->getAuthentificationStatut($mail, $password);
        // $autho =  $this->connection->getCon($mail, $password);
        $_SESSION["status"] = session_status();
       
        // $_SESSION['statut'] == $autho['statut'];
        if($_SESSION['status'] == 2)
            {
                // var_dump( $this->connection->getAuthentificationStatut($mail, $password));
              //  $statut =  $_SESSION['statut'];
               // echo $statut;
              
                header("location:index.php");
                // session_start();
            }
            else{
           header("location:index.php?action=cnx1");
            }
    }
    public function getDeconnection()
    {
       // session_start();
        // session_unset();
        // session_destroy();
        // $_SESSION = array();

        header("location:index.php?action=cnx1");
        // exit();
    }

    
}
