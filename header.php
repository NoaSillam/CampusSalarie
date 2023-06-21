<!-- <head>
  <style>
    /* Modal styles */
    .modal-Dic {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content-Dic {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      width: 80%;
      height: 80%;
    }
    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    .close-button:hover,
    .close-button:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    .active {
      font-weight: bold;
      color: #000;
    }
    #connextion{
        margin-right: 82%;
    }
   
  </style>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <nav class="navbar">
      <img src="image/Logo_delta7.png" alt="Delta7 logo">

<?php

// if($value_status == 2)
//                       {
//                       if($_SESSION['statut'] == 'admin')
//                       {
                        ?>
    <a href="index.php?action=accueil" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueil') ? 'active' : ''; ?>">Prestataire</a> -->
     <!-- <a href="index.php?action=accueil" class="<?= (!isset($_GET['action']) && $_GET['action'] == 'accueil') ? 'active' : ''; ?>">Prestataire</a> -->
    <!-- <a href="index.php?action=themes" class="<?= (isset($_GET['action']) && $_GET['action'] == 'themes') ? 'active' : ''; ?>">theme</a>
    <a href="index.php?action=salaries" class="<?= (isset($_GET['action']) && $_GET['action'] == 'salaries') ? 'active' : ''; ?>">salaries</a>
    <a href="index.php?action=accueilDictionnaire" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaire') ? 'active' : ''; ?>">dictionnaire</a>
    <a href="index.php?action=videoAccueil" class="<?= (isset($_GET['action']) && $_GET['action'] == 'videoAccueil') ? 'active' : ''; ?>">Video</a>
    <a href="index.php?action=documentAccueil" class="<?= (isset($_GET['action']) && $_GET['action'] == 'documentAccueil') ? 'active' : ''; ?>">Document</a>
    <div class="dropdown">
      <a href="#" class="<?= (isset($_GET['action']) && in_array($_GET['action'], ['listeDonateur', 'listeBenevole', 'listeNewsletters', 'listePreventions'])) ? 'active' : ''; ?>">Les inscrits</a>
      <div class="dropdown-content">

      <a href="index.php?action=listeDonateur" >Liste des donateurs</a>
    <a href="index.php?action=listeBenevole" >Liste des bénévoles</a>
    <a href="index.php?action=listeNewsletters" >Liste des newsletters</a>
    <a href="index.php?action=listePreventions" >Liste des préventions</a> -->
        <!-- <a href="index.php?action=listeNewsletters">Pour s'inscrire à notre Newsletters</a>
        <a href="index.php?action=listeBenevole">Pour devenir bénévole</a>
        <a href="index.php?action=listeDonateur">Pour faire partie de nos donateurs</a> -->
      <!-- </div>
    </div>
    <a href="index.php?action=BenevoleMssion" class="<?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>">Mission</a> -->

    
    <!-- <a href="index.php?action=listeDonateur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeDonateur') ? 'active' : ''; ?>">Liste des donateurs</a>
    <a href="index.php?action=listeBenevole" class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeBenevole') ? 'active' : ''; ?>">Liste des bénévoles</a>
    <a href="index.php?action=listeNewsletters" class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeNewsletters') ? 'active' : ''; ?>">Liste des newsletters</a>
    <a href="index.php?action=listePreventions" class="<?= (isset($_GET['action']) && $_GET['action'] == 'listePreventions') ? 'active' : ''; ?>">Liste des préventions</a> -->


    <?php

            
        
// }
// else  if($_SESSION['statut'] == 'lecture')
// {


  ?>
    <!-- <a href="index.php?action=accueilLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueilLecteur') ? 'active' : ''; ?>">Prestataire</a>
    <a href="index.php?action=themesLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'themesLecteur') ? 'active' : ''; ?>">theme</a>
    <a href="index.php?action=accueilDictionnaireLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaireLecteur') ? 'active' : ''; ?>">dictionnaire</a>
    <a href="index.php?action=documentLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'documentLecteur') ? 'active' : ''; ?>">Document</a>
    <a href="index.php?action=videoLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'videoLecteur') ? 'active' : ''; ?>">Video</a>
    <a href="index.php?action=MssionLecteur" class="<?= (isset($_GET['action']) && $_GET['action'] == 'MssionLecteur') ? 'active' : ''; ?>">Mission</a> -->
    
<?php
    
        // }
        // else
        // {
        
        
          ?>
    <!-- <a href="index.php?action=accueilEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueilEcriture') ? 'active' : ''; ?>">Prestataire</a>
    <a href="index.php?action=themesEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'themesEcriture') ? 'active' : ''; ?>">theme</a>
    <a href="index.php?action=accueilDictionnaireEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaireEcriture') ? 'active' : ''; ?>">dictionnaire</a>
    <a href="index.php?action=documentEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'documentEcriture') ? 'active' : ''; ?>">Document</a>
    <a href="index.php?action=videoEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'videoEcriture') ? 'active' : ''; ?>">Video</a>
    <a href="index.php?action=MssionEcriture" class="<?= (isset($_GET['action']) && $_GET['action'] == 'MssionEcriture') ? 'active' : ''; ?>">Mission</a>
 -->



    <?php

// }
?>
    <!-- <a href="index.php?action=getDeconnection" class="<?= (isset($_GET['action']) && $_GET['action'] == 'getDeconnection') ? 'active' : ''; ?>">Deconnection</a> -->
    <!-- <a href="index.php?action=getDeconnection" class="<?= (!isset($_GET['action']) && $_GET['action'] == 'getDeconnection') ? 'active' : ''; ?>">Deconnection</a> -->


    <?php
        //     }
        //  else 
        //   {
            ?>
              <!-- <a href="index.php?action=cnx1" class="<?= (!isset($_GET['action']) || $_GET['action'] == '' || $_GET['action'] == 'cnx1') ? 'active' : ''; ?> " id="connextion">Connection</a> -->

              <?php 
      // } 
    
    
      ?>



   

<!-- 

  </nav>
  </div>
</body> -->









<style>
    .custom-navbar {
    background: linear-gradient(to right, #a9045d, #a9045d);
  background-color: transparent;
  color: white;
  font-size: 20px;
}
.d-inline-block{
  left: 0;
  top: 0;
  margin-left: -10%;
  margin-top: -9.5%;
}
header .logo {
  height: 100%;
  justify-content: center;
  align-items: flex-start;
  padding: 0;
  display: flex;
  margin-left: -24px;
}

img{
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-text-size-adjust: none;
  text-size-adjust: none;
  border: 0;
  margin: 0;
  padding: 0;
}
header .logo img {
  height: auto;
  width: 250px;
  margin: 0;
  padding: 0;
  margin-top: -2px;
  margin-left: 24px;
  
}

@media (max-width: 1199px) {
  header .logo {
    justify-content: flex-start;
    align-items: center;
    padding: 0 0 0 0;
    display: inline-flex;
  }

  header .logo a {
    height: var(--header-height);
  }

  header .logo img {
    height: var(--header-height);
    width: auto;
  }
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<nav class="navbar navbar-dark navbar-expand-lg bg-transparent custom-navbar" >
  <div class="container-fluid logo">

    <a class="navbar-brand ms-0" href="https://www.delta7.org/fr" target="_blank">
      <img src="image/Logo-Delta7-Campus2.png" srcset="image/Logo-Delta7-Campus2@2x.png 1200w" width="180" height="auto" alt="Delta7 logo" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler show" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
      <img src="image/Logo_delta7.png" id="logo" alt="Delta7 logo">
      </li> -->


<?php

if($value_status == 2)
                      {
                     

                      
                      if($_SESSION['statut'] == 'admin' || $_SESSION['statut'] == 'Admin')
                      {?>
        <li class="nav-item mx-3">
        <a href="index.php?action=accueil" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueil') ? 'active' : ''; ?>">Prestataire</a>
         
        </li>
        <li class="nav-item mx-3">
        <a href="index.php?action=themes" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'themes') ? 'active' : ''; ?>">Thème</a>
        </li>
      
        <li class="nav-item mx-3">
        <a href="index.php?action=accueilDictionnaire" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaire') ? 'active' : ''; ?>">Dictionnaire</a>
        </li>
        <li class="nav-item mx-3">
        <a href="index.php?action=videoAccueil" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'videoAccueil') ? 'active' : ''; ?>">Vidéo</a>
        </li>
        <!-- <a href="index.php?action=salaries" class="<?= (isset($_GET['action']) && $_GET['action'] == 'salaries') ? 'active' : ''; ?>">salaries</a> -->
        <li class="nav-item mx-3">
        <a href="index.php?action=documentAccueil" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'documentAccueil') ? 'active' : ''; ?>">Document</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-3">
        <a href="index.php?action=salaries" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'salaries') ? 'active' : ''; ?>">Salariés</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
      
        <li class="nav-item dropdown mx-3">
          <a class="nav-link dropdown-toggle <?= (isset($_GET['action']) && in_array($_GET['action'], ['listeDonateur', 'listeBenevole', 'listeNewsletters', 'listePreventions'])) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Les inscrits</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?action=listeDonateur">Liste des donateurs</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeBenevole">Liste des bénévoles</a></li>
            <li><a class="dropdown-item" href="index.php?action=listeNewsletters">Liste des newsletters</a></li>
            <!-- <li><a class="dropdown-item" href="index.php?action=listePreventions">Liste des préventions</a></li> -->
            <!-- <li><hr class="dropdown-item "></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item mx-3">
        <a href="index.php?action=BenevoleMssion" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>">Mission</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <?php

            
        
}
else  if($_SESSION['statut'] == 'lecture' || $_SESSION['statut'] == 'Lecture')
{


  ?>
         <li class="nav-item mx-6">
        <a href="index.php?action=accueilLecteur" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueilLecteur') ? 'active' : ''; ?>">Prestataire</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-6">
        <a href="index.php?action=themesEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'themesEcriture') ? 'active' : ''; ?>">Thème</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-6">
        <a href="index.php?action=accueilDictionnaireLecteur" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaireLecteur') ? 'active' : ''; ?>">Dictionnaire</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-6">
        <a href="index.php?action=videoEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'videoEcriture') ? 'active' : ''; ?>">Vidéo</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-6">
        <a href="index.php?action=documentLecteur" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'documentLecteur') ? 'active' : ''; ?>">Document</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item mx-6">
        <a href="index.php?action=MssionLecteur" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'MssionLecteur') ? 'active' : ''; ?>">Mission</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
      
        <?php
  }
  else if($_SESSION['statut'] == 'écriture' || $_SESSION['statut'] == 'Ecriture' || $_SESSION['statut'] == 'ecriture')
  {
    ?>
      <li class="nav-item mx-5">
        <a href="index.php?action=accueilEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueilEcriture') ? 'active' : ''; ?>">Prestataire</a>
        </li>
        <li class="nav-item mx-5">
        <a href="index.php?action=themesEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'themesEcriture') ? 'active' : ''; ?>">Thème</a>
        </li>
        <li class="nav-item mx-5">
        <a href="index.php?action=accueilDictionnaireEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'accueilDictionnaireEcriture') ? 'active' : ''; ?>">Dictionnaire</a>
        </li>
        <li class="nav-item mx-5">
        <a href="index.php?action=videoEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'videoEcriture') ? 'active' : ''; ?>">Vidéo</a>
        </li>
        <li class="nav-item mx-5">
        <a href="index.php?action=documentEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'documentEcriture') ? 'active' : ''; ?>">Document</a>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <!-- <li class="nav-item mx-4">
        <a href="index.php?action=MssionEcriture" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'MssionEcriture') ? 'active' : ''; ?>">Mission</a>
           <a class="nav-link active" aria-current="page" href="#">Home</a> 
        </li> -->


        <?php

}
?>

<li class="nav-item mx-4">
        <a href="index.php?action=getDeconnection" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'getDeconnection') ? 'active' : ''; ?>">Déconnexion</a>
        </li>
        <?php
            }
         else 
          {?>
          <li class="nav-item mx-4">
        <a href="index.php?action=cnx1" class="nav-link <?= (isset($_GET['action']) && $_GET['action'] == 'cnx1') ? 'active' : ''; ?>">Connexion</a>
        </li>


              <?php 
      } 
                   
    
      ?>


   
      
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
      </ul>
     
    </div>
  </div>
</nav>

 
 <script>
//    document.getElementById("logo").addEventListener("click", function(){
//  window.location.href = "https://www.delta7.org/fr";
// });
   

function myFunction() {
 var x = document.getElementById("myTopnav");
 if (x.className === "navbar topnav") {
   x.className += " responsive";
 } else {
   x.className = "navbar topnav";
 }
}
</script>
