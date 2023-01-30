<?php

require_once 'Modele/Modele.php';

class Connection extends Modele
{
    public function getConnection($mail, $password)
    {
        session_start();


        if (isset($_POST['mail']) && isset($_POST['password'])) {

        $sql = "select nom, prenom, mail, password from salarie where mail=? and password=?";
        $connection = $this->executerRequete($sql, array($mail, $password));
        if ($connection->rowCount() == 1) {
       
            $_SESSION['mail'] = $mail;
            $_SESSION['password'] = $password;
         
            $authOK = true;
        }
        return $connection;
    }
    }
    public function getConnections()
    {
        $sql = 'select nom, prenom, mail, password, statut from salarie ';
        $connection = $this->executerRequete($sql);
        return $connection;
    }
    public function getCon($mail, $password)
    {
        //session_start();

        $sql = "select nom, prenom, mail, password, statut from salarie where mail = ? ";
        $sql1 = "select nom, prenom, mail, password, statut from salarie where password = ?"; 
       // $sql2 = "select nom, prenom, mail, password, statut from salarie inner join statutSalarie on salarie.id = statutSalarie.idSalarie inner join statutAuthentification on statutSalarie.idStatutAuthentification = statutAuthentification.id where mail = ? and password = ? and statut = ?";
        $sql2 = "select nom, prenom, mail, password from salarie where mail = ? and password = ? ";
        $connection = $this->executerRequete($sql, array($mail));
        $connectionPassword = $this->executerRequete($sql1, array($password));
        // $connectionMailPassword = $this->executerRequete($sql2, array($mail, $password, $statut));
        $connectionMailPassword = $this->executerRequete($sql2, array($mail, $password));
        // if($connection->rowCount() > 0)
        // {
        //     echo ' utilisateur trouver ';
        //     if($connectionPassword->rowCount() > 0)
        //     {
        //         echo ' password trouver ';
                    if($connectionMailPassword->rowCount() > 0)
                    {
                        echo ' utilisateur && password trouver ';
                        var_dump($connectionMailPassword);

                        // return $connection;
                        // return $connectionPassword;
                        return $connectionMailPassword;
                    }
                    else
                    {
                        session_destroy();
                        session_unset();
                        echo ' utilisateur && password introuvable ';
                    }
               
        //     }
        //     else{
        //         echo ' password introuvable ';
        //     }
            
        // }
        // else
        // {
        //    echo ' utilisateur introuvable ';
        // }
       // return $connection;
    }
    // public function getAuthentification($mail, $password)
    // {
    //     $sql = 'select nom, prenom, mail, password, statut from salarie inner join statutSalarie on salarie.id = statutSalarie.idSalarie inner join statutAuthentification on statutSalarie.idStatutAuthentification = statutAuthentification.id where mail = ? and password = ? ';
    //     $autho = $this->executerRequete($sql, array($mail, $password));
    //     if($autho->rowCount() >0)
    //     {
    //         echo 'autho trouver';
    //        // $_SESSION['statut'] = $autho['statut'];
    //         return $autho;

    //     //   $auth =  $autho['statut'] == 'admin';
            
    //     }
    //     else
    //     {
    //         session_destroy();
    //         session_unset();
    //         echo ' utilisateur && password introuvable ';
    //     }
    // }
    // // public function getDeconnection()
    // // {
    // //     $_SESSION =array();
    // //     session_destroy();
    // // }

    public function getAuthentification($mail, $password)
    {
        $sql = 'select nom, prenom, mail, password, statut from salarie where mail = ? and password = ?';
        $autho = $this->executerRequete($sql, array($mail, $password));
        if($autho->rowCount() >0)
        {
            echo 'autho trouver';
           // $_SESSION['statut'] = $autho['statut'];
            return $autho;

        //   $auth =  $autho['statut'] == 'admin';
            
        }
        else
        {
            session_destroy();
            session_unset();
            echo ' utilisateur && password introuvable ';
        }
    }
    // public function getAuthentificationStatut($mail, $password, $statut)
    public function getAuthentificationStatut($mail, $password)
    {
        $sql = 'select  mail, password, statut from salarie where mail = ? and password = ?      ';
        // $autho = $this->executerRequete($sql, array($mail, $password, $statut));
        $password1 = hash('sha512', $password);
        $autho = $this->executerRequete($sql, array($mail, $password1));
       // var_dump($autho);
        if($autho->rowCount() >0)
        {
            $return = $autho->fetch(PDO::FETCH_ASSOC);
            $_SESSION['statut']=$return['statut'];
            return $return;
            
            }
            else
            {
                session_destroy();
                session_unset();
                echo ' utilisateur && password introuvable ';
            }
        }
    
           // var_dump($autho);
           // echo $mail.",".$password." , ".$_SESSION['statut'];
            // foreach($autho as $auth)
            // {
            //     if( $auth['statut'] == 'admin')
            //     {
            //         $admin = "admin";
            //         echo $mail.",".$password." , ".$admin;
            //         return $admin;
            //     }
            //     else if($auth['statut'] == 'ecriture')
            //     {
            //         $ecriture = 'ecriture';
            //         echo $mail.",".$password." , ".$ecriture;
            //         return $ecriture;
            //     }
            //     else
            //     {
            //         $lecture = 'lecture';
            //         echo $mail.",".$password." , ".$lecture;
            //         return $lecture;
            //     }
            //     //  $_SESSION['statut'] = $auth['statut'];
            //     // return $_SESSION['statut'];
            // }
            // echo $_SESSION['statut'].",".$mail.",".$password;
           
            // $_SESSION['statut'] = $autho['statut'];
            // $_SESSION['statut'] = $autho['statut'];
            
           
            // if($autho['statut'] == 'admin')
            // {
            //     echo 'autho admin trouver';
            //     // $_SESSION['statut'] = $autho['statut'];
            //      return $autho;
            // }
            // else if($autho['statut'] == 'ecriture')
            // {
            //     echo 'autho ecriture trouver';
            //     // $_SESSION['statut'] = $autho['statut'];
            //      return $autho;
            // }
            // else{
            //     echo 'autho lecture trouver';
            //     // $_SESSION['statut'] = $autho['statut'];
            //      return $autho;
            // }
           

        //   $auth =  $autho['statut'] == 'admin';
            
      



}