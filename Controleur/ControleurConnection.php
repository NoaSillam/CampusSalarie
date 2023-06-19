<?php

require_once 'autoload.php';

class ControleurConnection
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
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
    }

    public function cnx($mail, $password)
    {
        $this->connection->getConnection($mail, $password);
        header("location:index.php");
    }

    public function cnx3($mail, $password)
    {
           $this->connection->getCon($mail, $password);
           $autho =  $this->connection->getCon($mail, $password);
            $_SESSION["status"] = session_status();
            if($_SESSION['status'] == 2)
            {
                header("location:index.php");
            }
            else{
               header("location:index.php?action=cnx1");
            }
            
    }
    public function getAutho($mail, $password)
    {
        $this->connection->getAuthentification($mail, $password);
        $_SESSION["status"] = session_status();
        if($_SESSION['status'] == 2)
            {
                header("location:index.php");
            }
            else{
                header("location:index.php?action=cnx1");
            }
    }
//     public function getAuthoStatut($mail, $password)
//     {
//         $this->connection->getAuthentificationStatut($mail, $password);
//         $_SESSION['status'] = session_status();
//         if ($_SESSION['status'] == 2) {
//             // Check if 60 seconds have passed since the last activity
//             if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 60) {
//                 $this->connection->getDeconnection(); // Log out the user
//                 return;
//             }
//             $_SESSION['timestamp'] = time(); // Update the timestamp
//             header("location:index.php?action=accueil");
//         } else {
//             header("location:index.php?action=cnx1");
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


// public function getAuthoStatut($mail, $password)
// {
//     $this->connection->getAuthentificationStatut($mail, $password);
//     $_SESSION['status'] = session_status();
//     if ($_SESSION['status'] == 2) {
//         // Vérifier si 60 secondes se sont écoulées depuis la dernière activité
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 60) {
//             $this->connection->getDeconnection(); // Déconnecter l'utilisateur
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
//         header("location:index.php?action=accueil");
//     } else {
//         header("location:index.php?action=cnx1");
//     }
// }


// public function getAuthoStatut($mail, $password)
// {
//     $this->connection->getAuthentificationStatut($mail, $password);
//     $_SESSION['status'] = session_status();
//     if ($_SESSION['status'] == 2) {
//         // Vérifier si 30 secondes se sont écoulées depuis la dernière activité
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
//             $this->getDeconnection(); // Déconnecter l'utilisateur
//             return;
//         }
//         // $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
//         header("location:index.php?action=accueil");
//     } else {
//         header("location:index.php?action=getDeconnection");
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


public function getAuthoStatut($mail, $password)
{
    $this->connection->getAuthentificationStatut($mail, $password);
    $_SESSION['status'] = session_status();
    if ($_SESSION['status'] == 0) {
        header("location:index.php?action=getDeconnection");
        return;
    }
    // if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
    //     $this->getDeconnection(); // Déconnecter l'utilisateur
    //     return;
    // }
    
    $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
    header("location:index.php?action=accueil");
    // Vérifier si 15 minutes se sont écoulées depuis la dernière activité
    // if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 900) {
    //     $this->getDeconnection(); // Déconnecter l'utilisateur
    //     return;
    // }
    // $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
    // header("location:index.php?action=accueil");
}

// public function getDeconnection()
// {
//     // Détruire la session et supprimer le cookie de session
//     session_unset();
//     session_destroy();
//     setcookie(session_name(), '', time() - 3600);
//     header("location:index.php?action=cnx1");
// }
public function getDeconnection()
{
    // Détruire la session
    session_unset();
    session_destroy();
    header("location:index.php?action=cnx1");
}

// public function getAuthoStatut($mail, $password)
// {
//     $this->connection->getAuthentificationStatut($mail, $password);
//     $_SESSION['status'] = session_status();
//     if ($_SESSION['status'] == 2) {
//         // Vérifier si 30 secondes se sont écoulées depuis la dernière activité
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 30) {
//             $this->connection->getDeconnection(); // Déconnecter l'utilisateur
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
//         header("location:index.php?action=accueil");
//     } else {
//         header("location:index.php?action=cnx1");
//     }
// }



// public function getAuthoStatut($mail, $password)
// {
//     $this->connection->getAuthentificationStatut($mail, $password);
//     $_SESSION['status'] = session_status();
//     if ($_SESSION['status'] == 2) {
//         // Vérifier si 30 secondes se sont écoulées depuis la dernière activité
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 30) {
//             $this->connection->getDeconnection(); // Déconnecter l'utilisateur
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Mettre à jour le timestamp
//         header("location:index.php?action=accueil");
//     } else {
//         header("location:index.php?action=cnx1");
//     }
// }

// public function getAuthoStatut($mail, $password)
// {
//     $this->connection->getAuthentificationStatut($mail, $password);
//     $_SESSION['status'] = session_status();
//     if ($_SESSION['status'] == 2) {
//         // Check if 60 seconds have passed since the last activity
//         if (isset($_SESSION['timestamp']) && time() - $_SESSION['timestamp'] > 6) {
//             $this->connection->getDeconnection(); // Log out the user
//             return;
//         }
//         $_SESSION['timestamp'] = time(); // Update the timestamp
//         header("location:index.php?action=accueil");
//     } else {
//         header("location:index.php?action=cnx1");
//     }
// }



//     public function checkSessionTimeout()
// {
//     if(isset($_SESSION['timestamp'])) {
//         $timeout = 6; // Durée d'inactivité (en secondes)
//         $duration = time() - $_SESSION['timestamp'];
//         if ($duration > $timeout) {
//             $_SESSION = array();
//             session_destroy();
//             header("Location: index.php?action=cnx1"); // Redirige l'utilisateur vers la page de connexion
//             exit;
//         }
//     }
// }
  


    
}
