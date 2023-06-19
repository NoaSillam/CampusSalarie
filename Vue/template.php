
<?php
// if(isset($_SESSION))
// {
//   session_start();
// }
//  session_start(); 
// $_SESSION = array();
// if (isset($_SESSION['mail']) && isset($_SESSION['password'])) {
//     $mail = $_SESSION['mail'];
//     $password = $_SESSION['password'];
// }
// ini_set('session.gc_maxlifetime', 1);
session_start();
$_SESSION['timestamp'] = time();

if (isset($_SESSION['timestamp'])) {
    // Vérifier si 15 minutes se sont écoulées depuis le dernier timestamp enregistré
    if (time() - $_SESSION['timestamp'] > (15 * 60)) {
        // Détruire la session et rediriger vers la page de déconnexion
        session_unset();
        session_destroy();
        header("location: index.php?action=getDeconnection");
        exit; // Arrêter l'exécution du script
    }
    // Mettre à jour le timestamp de la session
    $_SESSION['timestamp'] = time();
}

$value_status = 0;
if (isset($_SESSION["status"]))
{
  $value_status = $_SESSION["status"];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/bootstrap-5.2.1-dist/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <?php
  include_once('header.php');
    ?>
<main>
    <div class="container">
     
        <?= $logo ?>
        </div>


</main>
<footer>
    <p >&copy; delta7</p>
</footer>
</html>
<script>
// Fonction pour rediriger l'utilisateur vers la page de déconnexion après 15 minutes
function redirectToLogout() {
    window.location.href = 'index.php?action=getDeconnection';
}

// Lancer la fonction de redirection après 15 minutes d'inactivité
var timeoutID = setTimeout(redirectToLogout, 900000); // 15 minutes = 900000 millisecondes

// Réinitialiser le délai de redirection à chaque interaction de l'utilisateur
document.addEventListener('mousemove', function() {
    clearTimeout(timeoutID);
    timeoutID = setTimeout(redirectToLogout, 900000); // 15 minutes = 900000 millisecondes
});
</script>

<!-- 900000 -->

<!-- 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->

</body>
</html>

