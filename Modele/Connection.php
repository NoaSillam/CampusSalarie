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
        $sql = "select nom, prenom, mail, password, statut from salarie where mail = ? ";
        $sql1 = "select nom, prenom, mail, password, statut from salarie where password = ?"; 
        $sql2 = "select nom, prenom, mail, password from salarie where mail = ? and password = ? ";
        $connection = $this->executerRequete($sql, array($mail));
        $connectionPassword = $this->executerRequete($sql1, array($password));
        $connectionMailPassword = $this->executerRequete($sql2, array($mail, $password));
                    if($connectionMailPassword->rowCount() > 0)
                    {
                        echo ' utilisateur && password trouver ';
                        var_dump($connectionMailPassword);
                        return $connectionMailPassword;
                    }
                    else
                    {
                        session_destroy();
                        session_unset();
                        echo ' utilisateur && password introuvable ';
                    }
    }
    public function getAuthentification($mail, $password)
    {
        $sql = 'select nom, prenom, mail, password, statut from salarie where mail = ? and password = ?';
        $autho = $this->executerRequete($sql, array($mail, $password));
        if($autho->rowCount() >0)
        {
            echo 'autho trouver';
            return $autho;  
        }
        else
        {
            session_destroy();
            session_unset();
            echo ' utilisateur && password introuvable ';
        }
    }
//     public function getAuthentificationStatut($mail, $password)
//     {
//         $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//         $password1 = hash('sha512', $password);
//         $autho = $this->executerRequete($sql, array($mail, $password1));
//         if ($autho->rowCount() > 0) {
//             $return = $autho->fetch(PDO::FETCH_ASSOC);
//             $_SESSION['statut'] = $return['statut'];
//             if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 60) {
//                 $this->getDeconnection();
//                 return;
//             }
//             $_SESSION['timestamp'] = time(); // Add timestamp to session
//             return $return;
//         } else {
//             $this->getDeconnection();
//             echo 'utilisateur && password introuvable';
//         }
//     }
//     public function getDeconnection()
// {
//     // Unset all session variables
//     $_SESSION = array();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 42000,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }
// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 60) {
//             $this->getDeconnection();
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Ajout d'un timestamp à la session
//         return $return;
//     } else {
//         $this->getDeconnection();
//         echo 'Utilisateur et/ou mot de passe introuvable';
//     }
// }

// public function getDeconnection()
// {
//     // Unset all session variables
//     $_SESSION = array();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 60,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }

// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 60) {
//             $this->getDeconnection();
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Add timestamp to session
//         return $return;
//     } else {
//         $this->getDeconnection();
//         echo 'utilisateur && password introuvable';
//     }
// }



public function getAuthentificationStatut($mail, $password)
{
    $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
    $password1 = hash('sha512', $password);
    $autho = $this->executerRequete($sql, array($mail, $password1));
    if ($autho->rowCount() > 0) {
        $return = $autho->fetch(PDO::FETCH_ASSOC);
        $_SESSION['statut'] = $return['statut'];
        // if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
        //     session_unset();
        //     session_destroy();
        //     session_set_cookie_params(900, '/');
        //     header("location:index.php?action=cnx1");
        //     return;
        // }
        
        // $_SESSION['timestamp'] = time(); // Add timestamp to session
        // return $return;

        
        // if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
        //     session_unset();
        //     session_destroy();
        //     // Delete the session cookie and destroy the session
        //     session_set_cookie_params(900);
        //     session_destroy();
        //     header("location:index.php?action=cnx1");
        // }
        // $_SESSION['timestamp'] = time(); // Add timestamp to session
        // return $return;
    } else {
        session_unset();
        session_destroy();
        // Delete the session cookie and destroy the session
        //session_set_cookie_params(900, '/');
        session_destroy();
        header("location:index.php?action=cnx1");
        echo 'utilisateur && password introuvable';
    }
}

// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
//             session_unset();
//             session_destroy();
//             // // Delete the session cookie
//             if (ini_get("session.use_cookies")) {
//                 $params = session_get_cookie_params();
//                 setcookie(session_name(), '', time() - 900,
//                     $params["path"], $params["domain"],
//                     $params["secure"], $params["httponly"]
//                 );
//             }
//             // Destroy the session
//             session_destroy();
//             header("location:index.php?action=cnx1");
            
//         }
//         $_SESSION['timestamp'] = time(); // Add timestamp to session
//         return $return;
//     } else {
//         session_unset();
//     session_destroy();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 900,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
//         echo 'utilisateur && password introuvable';
//     }
// }

// public function getDeconnection()
// {
//     // Unset all session variables
//     // $_SESSION = array();
//     session_unset();
//     session_destroy();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 3600,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }



// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 30) {
//             $this->getDeconnection();
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp dans la session
//         return $return;
//     } else {
//         $this->getDeconnection();
//         echo 'Utilisateur ou mot de passe introuvable';
//     }
// }

// public function getDeconnection()
// {
//     // Unset all session variables
//     $_SESSION = array();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 3600,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }



// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 30) {
//             $this->getDeconnection();
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Ajouter le timestamp à la session
//         return $return;
//     } else {
//         $this->getDeconnection();
//         echo 'utilisateur && password introuvable';
//     }
// }

// public function getDeconnection()
// {
//     // Unset all session variables
//     $_SESSION = array();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 3600,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }





// public function getAuthentificationStatut($mail, $password)
// {
//     $sql = 'select mail, password, statut from salarie where mail = ? and password = ?';
//     $password1 = hash('sha512', $password);
//     $autho = $this->executerRequete($sql, array($mail, $password1));
//     if ($autho->rowCount() > 0) {
//         $return = $autho->fetch(PDO::FETCH_ASSOC);
//         $_SESSION['statut'] = $return['statut'];
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 30) {
//             $this->getDeconnection(); // Déconnexion de l'utilisateur
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Ajouter le timestamp à la session
//         return $return;
//     } else {
//         $this->getDeconnection();
//         echo 'utilisateur && password introuvable';
//     }
// }


// public function getDeconnection()
// {
//     // Unset all session variables
//     $_SESSION = array();
//     // Delete the session cookie
//     if (ini_get("session.use_cookies")) {
//         $params = session_get_cookie_params();
//         setcookie(session_name(), '', time() - 60,
//             $params["path"], $params["domain"],
//             $params["secure"], $params["httponly"]
//         );
//     }
//     // Destroy the session
//     session_destroy();
//     header("location:index.php?action=cnx1");
// }


    
}