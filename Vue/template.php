
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
session_start();

$value_status = 0;
if (isset($_SESSION["status"]))
{
  $value_status = $_SESSION["status"];
  // $statut = $_SESSION['statut'];
  


}
//echo session_status();

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
    
<nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <!--<a class="navbar-brand" href="#"><img src="./Logo_delta7.png" alt="Logo" width="30px"></a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="navbar-collapse" style="background: linear-gradient(to right,rgb(120, 186, 240), rgb(241, 120, 140));"> -->
    <div class="navbar-collapse">
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
   

 <?php
        
         
         // echo session_status();
          
           // session_start();
        // if (isset($mail) && isset($password)) {
          // if(isset($_POST['mail']) && isset($_POST['password']))
          //   {
          
            // if(isset($_SESSION['mail'])&& isset($_SESSION['password']))
            // {
            
            // if(!empty($_POST['mail']) && !empty($_POST['password']))
            // {
            if($value_status == 2)
            {
            //  $statut = $_SESSION['statut'];

             // session_start();
          //    echo ' session 2 ';
             
           // echo session_id();
          //  foreach($autho as $auth):
           // if(!isset($_SESSION['mail'])):
        //  if($auth == 'lecteur')

        // if($_SESSION['statut'] == 'admin')
        //   {
          
          // if($_POST['statut'] == 'admin')
          // {
            // if($statut == 'admin')
            // {
              // foreach($autho as $auth)
              // {
                  // if( $statut == 'admin')
                  // {

                 
             
                    // if($lecture)
                    // {
                      if($_SESSION['statut'] == 'admin')
                      {
                        // 'je suis admin';
                     
                        

                    
            
            ?>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Prestataire</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=themes">theme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=salaries">salaries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=videoAccueil">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=documentAccueil">Document</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueilDictionnaire">dictionnaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listeDonateur">Liste des donateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listeBenevole">Liste des bénévoles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listeNewsletters">Liste des newsletters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listePreventions">Liste des préventions</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->

<?php

                    // }
                    // else if($ecriture)
                    // {

                    
        //  }
        //  else if($statut == 'ecriture')
        //  {

         
        //   else if($_SESSION['statut'] == 'ecriture')
        //  else if($statut == 'ecriture')
        //  {
        }
        else  if($_SESSION['statut'] == 'lecture')
        {
         // echo 'je suis lecteur';
      
          ?>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueilLecteur">Prestataire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueilDictionnaireLecteur">dictionnaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=themesLecteur">theme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=documentLecteur">Document</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=videoLecteur">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=MssionLecteur">Mission</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listeDonateur">Liste des donateurs</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
<?php
        // }
        // else if($statut == 'lecture')
        // {

       
        //  else if($statut == 'lecteur' && $statut == 'ecriture')
        //  {
        // }
        // else if($admin)
        // {
        }
        else
        {
        
        
          ?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueilEcriture">Prestataire</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueilDictionnaireEcriture">dictionnaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=themesEcriture">theme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=documentEcriture">Document</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=videoEcriture">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=MssionEcriture">Mission</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
          <?php
          //  }
          // else
          // {
           // echo 'je suis ecriture';
          }
          
        //  else if($statut == 'admin')
//         //  {?>
<!-- //  <li class="nav-item">
//           <a class="nav-link" aria-current="page" href="./">Prestataire</a>
//         </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=listePreventions">Liste des préventions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=BenevoleMssion">Mission</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li>
      
<?php
          // }
        // endforeach;
// }
           
?>
 
       
        
       
       
<?php
            }
         else 
          {
        //    echo ' session 1 ';
            //echo $_SESSION['mail'];
              // session_start();
              //     session_destroy();
              //    unset($_SESSION['mail']);
              //    unset($_SESSION['password']);
              //     session_unset();
              //      $_SESSION = array();
              
              // session_destroy();
              // session_unset();
              // session_write_close();
              // setcookie(session_name(),'',0,'/');
          
          
          // session_destroy();
          ?>
          
        
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=cnx1">Connection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li>
        
        <?php 
      } 
    
    
      ?>
        
        
      
        
      </ul>

    </div>
  </div>
</nav>
<main>
    <div class="container">
     
        <?= $logo ?>
        </div>


</main>
<footer>
    <p >&copy; delta7</p>
</footer>
</html>



<!-- 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->

</body>
</html>

