<?php
//require_once 'Controleur/ControleurAccueil.php';
// require_once 'Controleur/ControleurReferent.php';
// require_once 'Controleur/ControleurPrestataire.php';
// require_once 'Controleur/ControleurTheme.php';
// require_once 'Controleur/ControleurSalarie.php';
// require_once 'Controleur/ControleurDictionnaire.php';
// require_once 'Controleur/ControleurAnimationPartenaire.php';
// require_once 'Controleur/ControleurDocument.php';
// require_once 'Controleur/ControleurVideo.php';
// require_once 'Controleur/ControleurThemeDoc.php';
// require_once 'Controleur/ControleurInscrit.php';
// require_once 'Controleur/ControleurConnection.php';
// require_once 'Controleur/ControleurMission.php';
// require_once 'Vue/Vue.php';
require_once 'autoload.php';
class Routeur

{
   // private $ctrlAccueil;
    private $ctrlReferent;
    private $ctrlPrestataire;
    private $ctrlTheme;
    private $ctrlSalarie;
    private $ctrlDictionnaire;
    private $ctrlAnimationPartenaire;
    private $ctrlDocument;
    private $ctrlVideo;
    private $ctrlThemeDoc;
    private $ctrlInscrit;
    private $ctrlConnection;
    private $ctrlMission;
    private $ctrlActualite;


    public function __construct()
    {
       // $this ->ctrlAccueil= new ControleurAccueil();
        $this->ctrlReferent = new ControleurReferent();
        $this->ctrlPrestataire = new ControleurPrestataire();
        $this->ctrlTheme = new ControleurTheme();
        $this->ctrlSalarie = new ControleurSalarie();
        $this->ctrlDictionnaire = new ControleurDictionnaire();
        $this->ctrlAnimationPartenaire = new ControleurAnimationPartenaire();
        $this->ctrlDocument = new ControleurDocument();
        $this->ctrlVideo = new ControleurVideo();
        $this->ctrlThemeDoc = new ControleurThemeDoc();
        $this->ctrlInscrit = new ControleurInscrit();
        $this->ctrlConnection = new ControleurConnection();
        $this->ctrlMission = new ControleurMission();
        $this->ctrlActualite = new ControleurActualite();
    }
    public function routeurRequete()
    {
        try{
            if(isset($_GET['action']))
            {
                if($_GET['action']=='prestataire')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'id'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlPrestataire->prestataire($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
               else if($_GET['action']=='referentLecteur')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'idPrestataire'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlPrestataire->referentLecteur($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='BenevoleMissionInscrit')
                {
                    $idMission =intval($this->getParametre($_GET, 'idMission'));
                    if($idMission != 0)
                    {
                        $this->ctrlMission->BenevoleMissionInscrit($idMission);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                // else if($_GET['action']=='prestataireRefAjouter')
                // {
                //     $idPrestataire =intval($this->getParametre($_GET, 'id'));
                //     if($idPrestataire != 0)
                //     {
                //         $this->ctrlReferent->prestataireRefAjouter($idPrestataire);
                //     }
                //     else{
                //         throw new Exception("identifiant de prestataire non validée");

                //     }
                // }
                else if($_GET['action']=='actualite')
                {
                    $idReferent =intval($this->getParametre($_GET, 'id'));
                    if($idReferent != 0)
                    {
                        $this->ctrlActualite->actualite($idReferent);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='actualiteLecteur')
                {
                    $idReferent =intval($this->getParametre($_GET, 'id'));
                    if($idReferent != 0)
                    {
                        $this->ctrlActualite->actualiteLecteur($idReferent);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='actualiteEcriture')
                {
                    $idReferent =intval($this->getParametre($_GET, 'id'));
                    if($idReferent != 0)
                    {
                        $this->ctrlActualite->actualiteEcriture($idReferent);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='prestLecteur')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'id'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlAnimationPartenaire->prestLecteur($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='prestEcriture')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'id'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlAnimationPartenaire->prestEcriture($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if($_GET['action']=='referentAjouter')
                {
                   $this->ctrlReferent->referentAjouter();
                }
                else if($_GET['action']=='animPartenaireAjouter')
                {
                   $this->ctrlAnimationPartenaire->animPartenaireAjouter();
                }
                // else if($_GET['action']=='actualiterModifier')
                // {
                //    $this->ctrlActualite->actualiterModifier($idActualite);
                // }
                else if($_GET['action']=='actualiteAjouter')
                {
                   $this->ctrlActualite->actualiteAjouter();
                }
                else if($_GET['action'] == 'ajoutPrestataire')
                {
                    $nomPrestataire = htmlspecialchars($_POST['nomPrestataire'], ENT_QUOTES);
                    $logo = $_FILES['logo']['tmp_name'];
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $codePostal = $_POST['codePostal'];

                    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
                        $logoDestination = 'image/prestataire/' . $_FILES['logo']['name'];
                       copy($_FILES['logo']['tmp_name'], $logoDestination);
                       $logoDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/prestataire/' . $_FILES['logo']['name'];
                       copy($_FILES['logo']['tmp_name'], $logoDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlPrestataire->ajoutPrestataire($nomPrestataire, $logoDestination, $description, $codePostal);
                }
                else if($_GET['action'] == 'modifPrestataire')
                {

                    $nomPrestataire = htmlspecialchars($_POST['nomPrestataire'], ENT_QUOTES);
                    $logo = $_FILES['logo']['tmp_name'];
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $codePostal = $_POST['codePostal'];
                    $idPrestataire = $_POST['id'];
                    if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
                        $logoDestination = 'image/prestataire/' . $_FILES['logo']['name'];
                       copy($_FILES['logo']['tmp_name'], $logoDestination);
                       $logoDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/prestataire/' . $_FILES['logo']['name'];
                       copy($_FILES['logo']['tmp_name'], $logoDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlPrestataire->modifPrestataire($nomPrestataire, $logoDestination, $description, $codePostal, $idPrestataire);
                }
                else if ($_GET['action']== 'deletePrestataire')
                {
                    $idPrestataire = $this->getParametre($_POST, 'idPrestataire');
                    $this->ctrlPrestataire->deletePrestataire($idPrestataire);
                }
                else if ($_GET['action']== 'referent')
                {
                    $nom =htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $idPrestataire = $this->getParametre($_POST, 'id');
                    $this->ctrlReferent->referent($nom, $prenom, $mail, $numTelephone, $idPrestataire);

                }
                else if ($_GET['action']== 'AjouterActualiter')
                {
                    // $nom =htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    // $description =$this->getParametre($_POST, 'description');
                    // $type =htmlspecialchars( ($this->getParametre($_POST, 'type')), ENT_QUOTES);
                    // $lien =$this->getParametre($_POST, 'lien');
                    // $idReferent = $this->getParametre($_POST, 'id');
                    // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    // $this->ctrlActualite->AjouterActualiter($nom, $description, $type, $lien, $idReferent, $imgApercu);


                    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
                    $idReferent = $_POST['id'];
                    $imgApercu = $_FILES['imgApercu']['tmp_name'];
                    if ($type === 'video') {
                        // Traitement pour le type "video"
                        $lien = $_POST['lien'];
                    } elseif ($type === 'pdf') {
                        $lien = $_FILES['lien']['tmp_name'];
                        if (isset($_FILES['lien']) && $_FILES['lien']['error'] === UPLOAD_ERR_OK) {
                            $lienDestination = 'image/actualite/' . $_FILES['lien']['name'];
                           copy($_FILES['lien']['tmp_name'], $lienDestination);
    
                           $lienDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/actualite/' . $_FILES['lien']['name'];
                           copy($_FILES['lien']['tmp_name'], $lienDestination2);
                        } else {
                           echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                           // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                           // header("Location: index.php?error=upload_failed");
                           exit;
                       }
                    }
                    if (isset($_FILES['imgApercu']) && $_FILES['imgApercu']['error'] === UPLOAD_ERR_OK) {
                        $imgApercuDestination = 'image/actualite/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination);

                       $imgApercuDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/actualite/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   if ($type === 'video') {
                    // Traitement pour le type "video"
                    $this->ctrlActualite->AjouterActualiter($nom, $description, $type, $lien, $idReferent, $imgApercuDestination);
                } elseif ($type === 'pdf') {
                    $this->ctrlActualite->AjouterActualiter($nom, $description, $type, $lienDestination, $idReferent, $imgApercuDestination);
                }

                }
                else if ($_GET['action']== 'modifReferent')
                {
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $idReferent = $this->getParametre($_POST, 'idReferent');
                    $this->ctrlReferent->modifReferent($mail, $numTelephone, $idReferent);
                }
                else if ($_GET['action']== 'modifActualite')
                {
                    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
                    $idActualite = $_POST['idActualite'];
                    $imgApercu = $_FILES['imgApercu']['tmp_name'];
                    if ($type === 'video') {
                        // Traitement pour le type "video"
                        $lien = $_POST['lien'];
                    } elseif ($type === 'pdf') {
                        $lien = $_FILES['lien']['tmp_name'];
                        if (isset($_FILES['lien']) && $_FILES['lien']['error'] === UPLOAD_ERR_OK) {
                            $lienDestination = 'image/actualite/' . $_FILES['lien']['name'];
                           copy($_FILES['lien']['tmp_name'], $lienDestination);
    
                           $lienDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/actualite/' . $_FILES['lien']['name'];
                           copy($_FILES['lien']['tmp_name'], $lienDestination2);
                        } else {
                           echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                           // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                           // header("Location: index.php?error=upload_failed");
                           exit;
                       }
                    }
                    if (isset($_FILES['imgApercu']) && $_FILES['imgApercu']['error'] === UPLOAD_ERR_OK) {
                        $imgApercuDestination = 'image/actualite/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination);

                       $imgApercuDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/actualite/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   if ($type === 'video') {
                    // Traitement pour le type "video"
                    $this->ctrlActualite->modifActualite($nom, $description, $type, $lien, $imgApercuDestination, $idActualite);
                } elseif ($type === 'pdf') {
                    $this->ctrlActualite->modifActualite($nom, $description, $type, $lienDestination, $imgApercuDestination, $idActualite);
                }


                }
                else if ($_GET['action']== 'deleteReferent')
                {
                    $idReferent = $this->getParametre($_POST, 'idReferent');
                    $this->ctrlReferent->deleteReferent($idReferent);
                }
                else if ($_GET['action']== 'deleteActualite')
                {
                    $idActualite = $this->getParametre($_POST, 'idActualite');
                    $this->ctrlActualite->deleteActualite($idActualite);
                }
                else if ($_GET['action']== 'themesIdTheme')
                {
                    $idTheme = intval($this->getParametre($_GET, 'idTheme'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlTheme->themesIdTheme($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'themeVideo')
                {
                    $idTheme = intval($this->getParametre($_GET, 'idTheme'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlTheme->themeVideo($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'themeDocument')
                {
                    $idTheme = intval($this->getParametre($_GET, 'idTheme'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlTheme->themeDocument($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'themeVideoEcriture')
                {
                    $idTheme = intval($this->getParametre($_GET, 'idTheme'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlTheme->themeVideoEcriture($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'themeDocumentEcriture')
                {
                    $idTheme = intval($this->getParametre($_GET, 'idTheme'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlTheme->themeDocumentEcriture($idTheme);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if($_GET['action']=='themes')
                {
                   $this->ctrlTheme->themes();
                }
                else if($_GET['action']=='themesId')
                {
                   $this->ctrlTheme->themesId();
                }
                else if($_GET['action']=='themesAjouter')
                {
                   $this->ctrlTheme->themesAjouter();
                }
                else if($_GET['action']=='SousThmeAjouter')
                {
                   $this->ctrlTheme->SousThmeAjouter();
                }
                else if($_GET['action'] == 'ajoutSousTheme')
                {
                    // $idTheme = $this->getParametre($_POST, 'id');
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                    // $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                   
                    // $this->ctrlTheme->ajoutSousTheme($libelle, $descriptif, $img, $idThemeParent);

                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $descriptif = htmlspecialchars($_POST['descriptif'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];
                    $idThemeParent = $_POST['idThemeParent'];

                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                        $imgDestination = 'image/soustheme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination);
                       $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/soustheme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlTheme->ajoutSousTheme($libelle, $descriptif, $imgDestination, $idThemeParent);

                }
                else if($_GET['action'] == 'modifSousTheme')
                {
                    
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                    // $idTheme = $this->getParametre($_POST, 'id');
                    // $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                    // $this->ctrlTheme->modifSousTheme( $libelle, $descriptif, $img, $idThemeParent, $idTheme);




                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $descriptif = htmlspecialchars($_POST['descriptif'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];
                    $idTheme = $_POST['id'];
                    // $idThemeParent = $_POST['idThemeParent'];

                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                        $imgDestination = 'image/soustheme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination);
                       $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/soustheme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlTheme->modifSousTheme( $libelle, $descriptif, $imgDestination, $idTheme);


                }
                // else if($_GET['action']=='sousTheme')
                // {
                //     $idTheme = $this->getParametre($_POST, 'id');
                //     if($idTheme != 0)
                //     {
                //         $this->ctrlTheme->sousTheme($idTheme);
                //     }
                //     else{
                //         throw new Exception("identifiant du sous theme non validée");

                //     }
                // }
                // else if($_GET['action']=='sousThm')
                // {
                //     $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                //     if($idThemeParent != 0)
                //     {
                //         $this->ctrlTheme->sousThm($idThemeParent);
                //     }
                //     else{
                //         throw new Exception("identifiant du sous theme non validée");

                //     }
                // }
                else if($_GET['action']=='sousThmEcriture')
                {
                    $idThemeParent =intval($this->getParametre($_GET, 'idThemeParent'));
                    if(!empty($idThemeParent))
                    {
                        $this->ctrlTheme->sousThmEcriture($idThemeParent);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action']=='sousThmLecteur')
                {
                    $idThemeParent =intval($this->getParametre($_GET, 'idThemeParent'));
                    if(!empty($idThemeParent))
                    {
                        $this->ctrlTheme->sousThmLecteur($idThemeParent);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action']=='sousThm')
                {
                    $idThemeParent =intval($this->getParametre($_GET, 'idThemeParent'));
                    if(!empty($idThemeParent))
                    {
                        $this->ctrlTheme->sousThm($idThemeParent);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                    else if($_GET['action']=='sousThmModifier')
                {
                    $idThemeParent =intval($this->getParametre($_GET, 'idThemeParent'));
                    if(!empty($idThemeParent))
                    {
                        $this->ctrlTheme->sousThmModifier($idThemeParent);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                // else if($_GET['action']=='sousTheme1')
                // {
                //     $idThemeParent = $this->getParametre($_POST, 'id');
                //     if($idThemeParent != 0)
                //     {
                //         $this->ctrlTheme->sousTheme1($idThemeParent);
                //     }
                //     // $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                //     // $this->ctrlTheme->sousTheme1($idThemeParent);
                // }
                else if($_GET['action'] == 'ajoutTheme')
                {
                    // $idTheme = $this->getParametre($_POST, 'id');
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $descriptif =  htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                   
                    // $this->ctrlTheme->ajoutTheme($libelle, $descriptif, $img);


                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $descriptif = htmlspecialchars($_POST['descriptif'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];

                     // Vérifier si le fichier image a été téléchargé avec succès
                     if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                        $imgDestination = 'image/theme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination);
                       $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/theme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlTheme->ajoutTheme($libelle, $descriptif, $imgDestination);
                }
                else if($_GET['action'] == 'modifTheme')
                {
                    
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                    // $idTheme = $this->getParametre($_POST, 'id');
                    // $this->ctrlTheme->modifTheme( $libelle, $descriptif, $img, $idTheme);

                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $descriptif = htmlspecialchars($_POST['descriptif'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];
                    $idTheme = $_POST['id'];
                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                        $imgDestination = 'image/theme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination);
                       $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/theme/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlTheme->ajoutTheme($libelle, $descriptif, $imgDestination);
                }
                else if ($_GET['action']== 'deleteTheme')
                {
                    $idTheme = $this->getParametre($_POST, 'idTheme');
                    $this->ctrlTheme->deleteTheme($idTheme);
                }
                else if($_GET['action'] == 'salaries')
                {
                    $this->ctrlSalarie->accueilSalaries();  
                }
                else if($_GET['action'] == 'accueilDictionnaireAjouter')
                {
                    $this->ctrlDictionnaire->accueilDictionnaireAjouter();  
                }
                else if($_GET['action'] == 'accueilSalariesAjouter')
                {



                    $this->ctrlSalarie->accueilSalariesAjouter();  
                }
                else if($_GET['action']=='salarie')
                {
                    $idSalarie =intval($this->getParametre($_GET, 'id'));
                    if($idSalarie != 0)
                    {
                        $this->ctrlDictionnaire->salarie($idSalarie);
                    }
                    else{
                        throw new Exception("identifiant du salarie non validée");

                    }
                 
                }
                else if($_GET['action'] == 'ajoutSalarie')
                {
                    // $idSalarie = $this->getParametre($_POST, 'id');
                  
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $pole = $this->getParametre($_POST, 'pole');
                    $statut = $this->getParametre($_POST, 'statut');
                   
                    $this->ctrlSalarie->ajoutSalarie($nom, $prenom, $mail, $pole, $statut);
                }
                else if($_GET['action'] == 'modifMdp')
                {
                    $password1 = $this->getParametre($_POST, 'password');
                    $password = hash('sha512', $password1);
                    $idSalarie = $this->getParametre($_POST, 'id');
                    $this->ctrlSalarie->modifMdp($password, $idSalarie);
                }
                else if($_GET['action'] == 'modifSalarie')
                {
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                  
                    $pole = $this->getParametre($_POST, 'pole');
                    $idSalarie = $this->getParametre($_POST, 'id');
                    $this->ctrlSalarie->modifSalarie($idSalarie, $nom, $prenom, $mail, $pole);
                }
                
                else if ($_GET['action']== 'deleteSalarie')
                {
                    $idSalarie = $this->getParametre($_POST, 'idSalarie');
                    $this->ctrlSalarie->deleteSalarie($idSalarie);
                }
                else if ($_GET['action']== 'dictionnaire')
                {
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $definition = htmlspecialchars( ($this->getParametre($_POST, 'definition')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                    //     $this->ctrlDictionnaire->dictionnaire($libelle, $definition, $img);

                    // $libelle = htmlspecialchars($this->getParametre($_POST, 'libelle'), ENT_QUOTES);
                    // $definition = htmlspecialchars($this->getParametre($_POST, 'definition'), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');

                    // // Vérifier si le fichier image a été téléchargé avec succès
                    // if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                    //     $imgDestination = 'image/dictionnaire/' . $_FILES['img']['name'];
                    //     copy($_FILES['img']['tmp_name'], $imgDestination);
                    // } else {
                    // echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                    // // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                    // // header("Location: index.php?error=upload_failed");
                    //  exit;
                    // }

                    // $this->ctrlDictionnaire->dictionnaire($libelle, $definition, $imgDestination);






                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $definition = htmlspecialchars($_POST['definition'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];
                    

                    // Vérifier si le fichier image a été téléchargé avec succès
                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                         $imgDestination = 'image/dictionnaire/' . $_FILES['img']['name'];
                        copy($_FILES['img']['tmp_name'], $imgDestination);
                        $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/dictionnaire/' . $_FILES['imgApercu']['img'];
                        copy($_FILES['img']['tmp_name'], $imgDestination2);
                     } else {
                        echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                        // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                        // header("Location: index.php?error=upload_failed");
                        exit;
                    }
                   
                    $this->ctrlDictionnaire->dictionnaire($libelle, $definition, $imgDestination);
                }
                else if ($_GET['action']== 'modifDictionnaire')
                {
                   
                    // $definition = htmlspecialchars( ($this->getParametre($_POST, 'definition')), ENT_QUOTES);
                    // $img = $this->getParametre($_POST, 'img');
                    // $idDictionnaire = $this->getParametre($_POST, 'idDictionnaire');
                    // $this->ctrlDictionnaire->modifDictionnaire( $definition, $img, $idDictionnaire);

                    $definition = htmlspecialchars($_POST['definition'], ENT_QUOTES);
                    $img = $_FILES['img']['tmp_name'];
                    $idDictionnaire = $_POST['idDictionnaire'];
                    

                    // Vérifier si le fichier image a été téléchargé avec succès
                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                         $imgDestination = 'image/dictionnaire/' . $_FILES['img']['name'];
                        copy($_FILES['img']['tmp_name'], $imgDestination);

                        $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/dictionnaire/' . $_FILES['img']['name'];
                        copy($_FILES['img']['tmp_name'], $imgDestination2);
                     } else {
                        echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                        // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                        // header("Location: index.php?error=upload_failed");
                        exit;
                    }
                    $this->ctrlDictionnaire->modifDictionnaire( $definition, $imgDestination, $idDictionnaire);

                }
                else if ($_GET['action']== 'deleteDictionnaire')
                {
                    $idDictionnaire = $this->getParametre($_POST, 'idDictionnaire');
                    $this->ctrlDictionnaire->deleteDictionnaire($idDictionnaire);
                }
                else if($_GET['action'] == 'accueilDictionnaire')
                {
                    $this->ctrlDictionnaire->accueilDictionnaire();
                }
                // else if($_GET['action'] == 'themesVideoAjouter')
                // {
                //     $this->ctrlVideo->themesVideoAjouter();
                // }
                else if($_GET['action'] == 'accueilDictionnaireEcriture')
                {
                    $this->ctrlDictionnaire->accueilDictionnaireEcriture();
                }
                else if($_GET['action'] == 'accueilDictionnaireLecteur')
                {
                    $this->ctrlDictionnaire->accueilDictionnaireLecteur();
                }
                else if($_GET['action']=='prest')
                {
                    $idPrestataire =intval($this->getParametre($_GET, 'id'));
                    if($idPrestataire != 0)
                    {
                        $this->ctrlAnimationPartenaire->prest($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant de prestataire non validée");

                    }
                }
                else if ($_GET['action']== 'animationPartenaire')
                {
                    // $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    // // $lienVideo = $this->getParametre($_POST, 'lienVideo');
                    // // $lienPdf = $this->getParametre($_POST, 'lienPdf');
                    // $adresse = $this->getParametre($_POST, 'adresse');
                    // $codePostal = $this->getParametre($_POST, 'codePostal');
                    // $ville =  $this->getParametre($_POST, 'ville');
                    // // $type = $this->getParametre($_POST, 'type');
                    // $img = $this->getParametre($_POST, 'img');
                    // $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    // // $dateParution = $this->getParametre($_POST, 'dateParution');
                    // $idPrestataire = $this->getParametre($_POST, 'idPrestataire');
                    // $adresselatlon = str_replace(" ", "%20", $adresse);
                    // $villelatlon = str_replace(" ", "%20", $ville);
                    // $code = str_replace(" ", "%20", $codePostal);
                    // $ch = curl_init("https://api-adresse.data.gouv.fr/search/?q=".$adresselatlon."%20".$villelatlon."%20".$code."&format=json");
                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    // $reponse = curl_exec($ch);
                    // curl_close($ch);
                    // $data = json_decode($reponse, true);
                    // $longitude =  $data['features'][0]['geometry']['coordinates'][0];
                    // $latitude = $data['features'][0]['geometry']['coordinates'][1];
                    // $this->ctrlAnimationPartenaire->animationPartenaire($nom, $adresse, $codePostal, $ville, $img, $descriptif, $idPrestataire, $latitude, $longitude);
                  //  var_dump( $this->ctrlAnimationPartenaire->animationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude));

                  $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES);
                  $adresse = $_POST['adresse'];
                  $codePostal = $_POST['codePostal'];
                  $ville = $_POST['ville'];
                  $descriptif = htmlspecialchars($_POST['descriptif'], ENT_QUOTES);
                  $idPrestataire = $_POST['idPrestataire'];
                  $img = $_FILES['img']['tmp_name'];
                  $adresselatlon = str_replace(" ", "%20", $adresse);
                    $villelatlon = str_replace(" ", "%20", $ville);
                    $code = str_replace(" ", "%20", $codePostal);
                    $ch = curl_init("https://api-adresse.data.gouv.fr/search/?q=".$adresselatlon."%20".$villelatlon."%20".$code."&format=json");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $reponse = curl_exec($ch);
                    curl_close($ch);
                    $data = json_decode($reponse, true);
                    $longitude =  $data['features'][0]['geometry']['coordinates'][0];
                    $latitude = $data['features'][0]['geometry']['coordinates'][1];
                    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                        $imgDestination = 'image/cartographie/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination);

                       $imgDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/cartographie/' . $_FILES['img']['name'];
                       copy($_FILES['img']['tmp_name'], $imgDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlAnimationPartenaire->animationPartenaire($nom, $adresse, $codePostal, $ville, $imgDestination, $descriptif, $idPrestataire, $latitude, $longitude);


                }
                else if ($_GET['action']== 'modifAnimationPrestataire')
                {
                   
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $descriptif = $this->getParametre($_POST, 'descriptif');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $idAnimationPartenaire = $this->getParametre($_POST, 'idAnimationPartenaire');
                    $adresselatlon = str_replace(" ", "%20", $adresse);
                    $villelatlon = str_replace(" ", "%20", $ville);
                    $code = str_replace(" ", "%20", $codePostal);
                    $ch = curl_init("https://api-adresse.data.gouv.fr/search/?q=".$adresselatlon."%20".$villelatlon."%20".$code."&format=json");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $reponse = curl_exec($ch);
                    curl_close($ch);
                    $data = json_decode($reponse, true);
                    $longitude =  $data['features'][0]['geometry']['coordinates'][0];
                    $latitude = $data['features'][0]['geometry']['coordinates'][1];
                    $this->ctrlAnimationPartenaire->modifAnimationPartenaire($nom, $descriptif, $adresse, $codePostal, $ville, $latitude, $longitude, $idAnimationPartenaire);

                }
                else if ($_GET['action']== 'deleteAnimationPartenaire')
                {
                    $idAnimationPartenaire = $this->getParametre($_POST, 'idAnimationPartenaire');
                    $this->ctrlAnimationPartenaire->deleteAnimationPartenaire($idAnimationPartenaire);
                }
                else if($_GET['action'] == 'listeDonateur')
                {
                    $this->ctrlInscrit->listeDonateur();
                }
                else if($_GET['action'] == 'donateurAjouter')
                {
                    $this->ctrlInscrit->donateurAjouter();
                }
                else if($_GET['action'] == 'benevoleAjouter')
                {
                    $this->ctrlInscrit->benevoleAjouter();
                }
                else if($_GET['action'] == 'NewsletterAjouter')
                {
                    $this->ctrlInscrit->NewsletterAjouter();
                }
                else if ($_GET['action']== 'ajoutDonateur')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $montant = $this->getParametre($_POST, 'montant');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutDonateur( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $montant, $anneeNaissance, $civilite);


                }
                else if($_GET['action'] == 'listeBenevole')
                {
                    $this->ctrlInscrit->listeBenevole();
                }
                else if ($_GET['action']== 'ajoutBenevole')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    var_dump( $this->ctrlInscrit->ajoutBenevole( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite));
                }
                else if ($_GET['action']== 'ajoutBenevoleMission')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $commentaire = $this->getParametre($_POST, 'commentaire');
                    $idMission = $this->getParametre($_POST, 'idMission');
                  $this->ctrlInscrit->ajoutBenevoleMission( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite, $commentaire, $idMission);
                }
                else if ($_GET['action']== 'modifInscrit')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    //$numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $this->ctrlInscrit->modifInscrit( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $idInscrit);
                }
                else if ($_GET['action']== 'deleteInscritDonateur')
                {
                    $idInscrit = $this->getParametre($_POST, 'idInscrit');
                    $this->ctrlInscrit->deleteInscritDonateur($idInscrit);
                }
                else if ($_GET['action']== 'deleteInscritBenevole')
                {
                    $idInscrit = $this->getParametre($_POST, 'idInscrit');
                    $this->ctrlInscrit->deleteInscritBenevole($idInscrit);
                }
                else if ($_GET['action']== 'deleteInscritNewsletter')
                {
                    $idInscrit = $this->getParametre($_POST, 'idInscrit');
                    $this->ctrlInscrit->deleteInscritNewsletter($idInscrit);
                }
                else if ($_GET['action']== 'deleteInscritPrevention')
                {
                    $idInscrit = $this->getParametre($_POST, 'idInscrit');
                    $this->ctrlInscrit->deleteInscritPrevention($idInscrit);
                }
                else if($_GET['action'] == 'listeNewsletters')
                {
                    $this->ctrlInscrit->listeNewsletters();
                }
                else if ($_GET['action']== 'ajoutNewsletters')
                {
                    // $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = $this->getParametre($_POST, 'nom');
                    $prenom = $this->getParametre($_POST, 'prenom');
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $anneeNaissance = $this->getParametre($_POST, 'anneeNaissance');
                    $civilite = $this->getParametre($_POST, 'civilite');
                    $this->ctrlInscrit->ajoutNewsletters( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $ville, $anneeNaissance, $civilite);
                }
                else if($_GET['action'] == 'listePreventions')
                {
                    $this->ctrlInscrit->listePreventions();
                }
               
                else if($_GET['action']=='prestaSalarie')
                {
                   // $idPrestataire = intval($this->getParametre($_GET, 'id'));
                    $idSalarie = intval($this->getParametre($_GET, 'id'));
                    if( $idSalarie !=0)
                    {
                        $this->ctrlDocument->prestaSalarie( $idSalarie);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                }
                else if ($_GET['action']== 'document')
                {
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $lien = $this->getParametre($_POST, 'lien');
                    // $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                    // $dateParution = $this->getParametre($_POST, 'dateParution');
                    // $format = $this->getParametre($_POST, 'format');
                    // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    // $idTheme = $this->getParametre($_POST, 'idTheme', []);
                    // $this->ctrlDocument->document( $libelle, $lien, $description, $dateParution, $format, $imgApercu, $idTheme);
                    
                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $lien = $_FILES['lien']['tmp_name'];
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $dateParution = $_POST['dateParution'];
                    $format = $_POST['format'];
                    $imgApercu = $_FILES['imgApercu']['tmp_name'];
                     $idTheme = $_POST['idTheme'];

                    // Vérifier si le fichier image a été téléchargé avec succès
                    if (isset($_FILES['imgApercu']) && $_FILES['imgApercu']['error'] === UPLOAD_ERR_OK) {
                         $imgApercuDestination = 'image/document/' . $_FILES['imgApercu']['name'];
                        copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination);
                        $imgApercuDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/document/' . $_FILES['imgApercu']['name'];
                        copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination2);
                     } else {
                        echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                        // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                        // header("Location: index.php?error=upload_failed");
                        exit;
                    }
                     // Vérifier si le fichier lien a été téléchargé avec succès
                    if (isset($_FILES['lien']) && $_FILES['lien']['error'] === UPLOAD_ERR_OK) {
                    $lienDestination = 'image/document/' . $_FILES['lien']['name'];
                    copy($_FILES['lien']['tmp_name'], $lienDestination);

                    $lienDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/document/' . $_FILES['lien']['name'];
                    copy($_FILES['lien']['tmp_name'], $lienDestination2);
                    } else {
                    // Le fichier lien n'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.
                    // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                    // header("Location: index.php?error=upload_failed");
                    exit;
                     }
                     $this->ctrlDocument->document($libelle, $lienDestination, $description, $dateParution, $format, $imgApercuDestination, $idTheme);
                }
                else if ($_GET['action']== 'modifDocument')
                {
                   
                //     $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                //    // $type = $this->getParametre($_POST, 'type');
                //     $lien = $this->getParametre($_POST, 'lien');
                //     $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                //     $dateParution = $this->getParametre($_POST, 'dateParution');
                //     $imgApercu = $this->getParametre($_POST, 'imgApercu');
                //     $format = $this->getParametre($_POST, 'format');
                //     $idDocument = $this->getParametre($_POST, 'idDocument');
                //   $this->ctrlDocument->modifDocument($libelle, $lien, $description, $dateParution, $imgApercu, $format, $idDocument);

                  $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                  $lien = $_FILES['lien']['tmp_name'];
                  $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                  $dateParution = $_POST['dateParution'];
                  $format = $_POST['format'];
                  $imgApercu = $_FILES['imgApercu']['tmp_name'];
                   $idDocument = $_POST['idDocument'];

                  // Vérifier si le fichier image a été téléchargé avec succès
                  if (isset($_FILES['imgApercu']) && $_FILES['imgApercu']['error'] === UPLOAD_ERR_OK) {
                       $imgApercuDestination = 'image/document/' . $_FILES['imgApercu']['name'];
                      copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination);

                      $imgApercuDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/document/' . $_FILES['imgApercu']['name'];
                      copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination2);
                   } else {
                      echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                      // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                      // header("Location: index.php?error=upload_failed");
                      exit;
                  }
                   // Vérifier si le fichier lien a été téléchargé avec succès
                  if (isset($_FILES['lien']) && $_FILES['lien']['error'] === UPLOAD_ERR_OK) {
                  $lienDestination = 'image/document/' . $_FILES['lien']['name'];
                  copy($_FILES['lien']['tmp_name'], $lienDestination);

                  $lienDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/document/' . $_FILES['lien']['name'];
                    copy($_FILES['lien']['tmp_name'], $lienDestination2);
                  } else {
                  // Le fichier lien n'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.
                  // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                  // header("Location: index.php?error=upload_failed");
                  exit;
                   }
                   $this->ctrlDocument->modifDocument($libelle, $lienDestination, $description, $dateParution, $imgApercuDestination, $format, $idDocument);
                }
                else if ($_GET['action']== 'deleteDocument')
                {
                    $idDocument = $this->getParametre($_POST, 'idDocument');
                    $this->ctrlDocument->deleteDocument($idDocument);
                }
                else if($_GET['action']=='videoSalarie')
                {
                   // $idPrestataire = intval($this->getParametre($_GET, 'id'));
                    $idSalarie = intval($this->getParametre($_GET, 'id'));
                    if( $idSalarie !=0)
                    {
                        $this->ctrlVideo->videoSalarie( $idSalarie);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                }
                else if ($_GET['action']== 'video')
                {
                   
                    // $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    // $lien = $this->getParametre($_POST, 'lien');
                    // $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                    // $dateParution = $this->getParametre($_POST, 'dateParution');
                    // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    // $idTheme = $this->getParametre($_POST, 'idTheme', []);
                    // $this->ctrlVideo->video( $libelle, $lien, $description, $dateParution, $idTheme, $imgApercu);


                    $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                    $lien = $_POST['lien'];
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $dateParution = $_POST['dateParution'];
                    $imgApercu = $_FILES['imgApercu']['tmp_name'];
                    $idTheme = $_POST['idTheme'];

                    if (isset($_FILES['imgApercu']) && $_FILES['imgApercu']['error'] === UPLOAD_ERR_OK) {
                        $imgApercuDestination = 'image/video/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination);

                       $imgApercuDestination2 = '/Applications/MAMP/htdocs/testCampusMvcSeniorBddMissionCopieMapDesignCopie/image/video/' . $_FILES['imgApercu']['name'];
                       copy($_FILES['imgApercu']['tmp_name'], $imgApercuDestination2);
                    } else {
                       echo 'Le fichier image n\'a pas été téléchargé correctement, vous pouvez gérer cette erreur selon vos besoins.';
                       // Par exemple, vous pouvez rediriger l'utilisateur vers une page d'erreur ou afficher un message d'erreur.
                       // header("Location: index.php?error=upload_failed");
                       exit;
                   }
                   $this->ctrlVideo->video( $libelle, $lien, $description, $dateParution, $idTheme, $imgApercuDestination);


                }
                // else if ($_GET['action']== 'modifDocument')
                // {
                   
                //     $libelle = $this->getParametre($_POST, 'libelle');
                //    // $type = $this->getParametre($_POST, 'type');
                //     $lien = $this->getParametre($_POST, 'lien');
                //     $description = $this->getParametre($_POST, 'description');
                //     $dateParution = $this->getParametre($_POST, 'dateParution');
                //     $idDocument = $this->getParametre($_POST, 'idDocument');
                //   $this->ctrlDocument->modifDocument($libelle, $lien, $description, $dateParution, $idDocument);
                // }
                else if ($_GET['action']== 'modifVideo')
                {
                   
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                   // $type = $this->getParametre($_POST, 'type');
                    $lien = $this->getParametre($_POST, 'lien');
                    $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                    // $format = $this->getParametre($_POST, 'format');
                    // $duree = $this->getParametre($_POST, 'duree');
                    // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                    $idVideo = $this->getParametre($_POST, 'idVideo');
                  $this->ctrlVideo->modifVideo($libelle, $lien, $description, $dateParution, $idVideo);


                //   $libelle = htmlspecialchars($_POST['libelle'], ENT_QUOTES);
                //   $lien = $_POST['lien'];
                //   $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                //   $dateParution = $_POST['dateParution'];

                }
                
                else if ($_GET['action']== 'deleteVideo' )
                {

                    $idVideo = $this->getParametre($_POST, 'idVideo');
                    $this->ctrlVideo->deleteVideo($idVideo);
                }
                else if($_GET['action']=='themeDocVideo')
                {
                   // $idPrestataire = intval($this->getParametre($_GET, 'id'));
                    $idTheme = intval($this->getParametre($_GET, 'id'));
                    if( $idTheme !=0)
                    {
                        $this->ctrlThemeDoc->themeDocVideo( $idTheme);
                    }
                    else{
                        throw new Exception("identifiant du theme non valide");
                    }
                }
                else if ($_GET['action']== 'themeDoc')
                {
                    $idTheme = $this->getParametre($_POST, 'idTheme');
                    $idDocument = $this->getParametre($_POST, 'idDocument');
                    $idVideo = $this->getParametre($_POST, 'idVideo');

                    $this->ctrlThemeDoc->themeDoc($idTheme, $idDocument, $idVideo);
                }
                else if ($_GET['action']== 'deleteThemeDoc')
                {
                    $idThemeDoc = $this->getParametre($_POST, 'idThemeDoc');
                    $idDocument = $this->getParametre($_POST, 'idDocument');
                    $idVideo = $this->getParametre($_POST, 'idVideo');
                    $this->ctrlThemeDoc->deleteThemeDoc($idThemeDoc, $idDocument, $idVideo);
                }
                
                else if($_GET['action'] == 'accueilAjouter')
                {
                    $this->ctrlPrestataire->accueilAjouter();
                }
                else if($_GET['action'] == 'videoAccueil')
                {
                    $this->ctrlVideo->videoAccueil();
                }

                else if($_GET['action'] == 'videoLecteur')
                {
                    $this->ctrlVideo->videoLecteur();
                }
                else if($_GET['action'] == 'videoEcriture')
                {
                    $this->ctrlVideo->videoEcriture();
                }
                else if($_GET['action'] == 'accueil')
                {
                    $this->ctrlPrestataire->accueil();
                }
                else if($_GET['action'] == 'accueilLecteur')
                {
                    $this->ctrlPrestataire->accueilLecteur();
                }
                else if($_GET['action'] == 'accueilEcriture')
                {
                    $this->ctrlPrestataire->accueilEcriture();
                }
                else if($_GET['action'] == 'documentAjouter')
                {
                    $this->ctrlDocument->documentAjouter();
                }

                else if($_GET['action'] == 'documentAccueil')
                {
                    $this->ctrlDocument->documentAccueil();
                }
                else if($_GET['action'] == 'themesLecteur')
                {
                    $this->ctrlTheme->themesLecteur();
                }
                else if($_GET['action'] == 'themesEcriture')
                {
                    $this->ctrlTheme->themesEcriture();
                }
                else if($_GET['action'] == 'documentEcriture')
                {
                    $this->ctrlDocument->documentEcriture();
                }
                else if($_GET['action'] == 'documentLecteur')
                {
                    $this->ctrlDocument->documentLecteur();
                }
                else if($_GET['action'] == 'videoAjouter')
                {
                    $this->ctrlVideo->videoAjouter();
                }
                // else if($_GET['action'] == 'videoAjouterSalarie')
                // {
                //     $this->ctrlVideo->videoAjouterSalarie();
                // }
                else if($_GET['action'] == 'salarieVideo')
                {
                    $this->ctrlVideo->salarieVideo();  
                }
                else if ($_GET['action']== 'cnx')
                {
                    $mail = $this->getParametre($_POST, 'mail');
                    $password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnection->cnx($mail, $password);
                }
                else if ($_GET['action']== 'cnx1')
                {
                    
                   // $mail = $this->getParametre($_POST, 'mail');
                    //$password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnection->cnx1();
                }
                else if ($_GET['action'] == 'cnx3')
                {
                    // session_unset();
                    // $_SESSION = array();
                    // if(!isset($_SESSION)){
                    //     session_start();
                    // }
                    // session_start();
                    // $mail = $_POST['mail'];
                    // $password = $_POST['password'];
                    // $_SESSION['mail'] = $mail;
                    // $_SESSION['password'] = $password;
                    // if(isset($_SESSION['mail']) && isset($_SESSION['password']))
                    // {
                    //     $mail = $this->getParametre($_POST, 'mail');
                    //     $password = $this->getParametre($_POST, 'password');
                    //     $this->ctrlConnection->cnx3($mail, $password);
                    //    // echo 'reussit';
                    // }
                    $mail = $this->getParametre($_POST, 'mail');
                    $password = $this->getParametre($_POST, 'password');
                   // $statut = $this->getParametre($_POST, 'statut');
                        if(isset($_SESSION['mail']) && isset($_SESSION['password']))
                        {
                            
                            //session_start();
                            $this->ctrlConnection->cnx3($mail, $password);
                            //session_start();
                            //return true;
                            
                           // header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMission/index.php");
                            var_dump( $this->ctrlConnection->cnx3($mail, $password));
                           
                            var_dump(session_status());
                            
                        }
                        else{
                           var_dump( $this->ctrlConnection->cnx3($mail, $password));
                            var_dump(session_status());
                            //return false;
                            
                        }
                   
                    
                   
                }


            //     else if($_GET['action'] == 'getAutho')
            //     {
            //         // if(!isset($_SESSION)){
            //         //         session_start();
            //         //     }
            //         $mail = $this->getParametre($_POST, 'mail');
            //         $password = $this->getParametre($_POST, 'password');
            //         if(isset($_SESSION['mail']) && isset($_SESSION['password']))
            //         {
            //             $this->ctrlConnection->getAutho($mail, $password);
            //        // var_dump($this->ctrlConnection->getAutho($mail, $password));
            //       // var_dump( $_SESSION["status"]);
                
            //        // var_dump(session_status());
            //     }
            //     else{
            //        //var_dump( $this->ctrlConnection->getAutho($mail, $password));
            //        // var_dump(session_status());
            //         //return false;
                    
            //     }

            //     }
            //     else if ($_GET['action']== 'getDeconnection')
            //     {
            //         session_start();
            //     //     session_destroy();
            //     //    unset($_SESSION['mail']);
            //     //    unset($_SESSION['password']);
            //     //     session_unset();
            //     //      $_SESSION = array();
            //     $_SESSION = [];
            //     session_destroy();
            //     session_unset();
            //   //  session_write_close();
            //    // setcookie(session_name(),'',0,'/');
            //    //session_regenerate_id(true);
            //         $this->ctrlConnection->getDeconnection();
            //        // var_dump( $this->ctrlConnection->getDeconnection());
            //         //var_dump(session_status());
            //     }

            else if($_GET['action'] == 'getAutho')
            {
                if(!isset($_SESSION)){
                        session_start();
                    }
                $mail = $this->getParametre($_POST, 'mail');
                $password = $this->getParametre($_POST, 'password');
              //  var_dump($this->ctrlConnection->getAutho($mail, $password));
                //$password = hash('sha512', $password1);
                if(isset($_SESSION['mail']) && isset($_SESSION['password']))
                {
                   $this->ctrlConnection->getAutho($mail, $password);
                  // var_dump($mail, $password);
              //  var_dump($this->ctrlConnection->getAutho($mail, $password));
            
               // var_dump(session_status());
            }
            else{
               var_dump( $this->ctrlConnection->getAutho($mail, $password));
               // var_dump(session_status());
                //return false;
                
            }

            }

            // else if($_GET['action'] == 'getAuthoStatut')
            // {
            //     if(!isset($_SESSION)){
            //             session_start();
            //         }
            //     $mail = $this->getParametre($_POST, 'mail');
            //     $password = $this->getParametre($_POST, 'password');
            //     if(isset($_SESSION['mail']) && isset($_SESSION['password']))
            //     {
            //         set_time_limit(60);
            //     $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
            //      var_dump($test);
            // }
            // else{
            // var_dump( $this->ctrlConnection->getAuthoStatut($mail, $password));
            // }
            // }




            // else if($_GET['action'] == 'getAuthoStatut')
            // {
            //     if(!isset($_SESSION)){
            //         session_start();
            //     }
            //     $mail = $this->getParametre($_POST, 'mail');
            //     $password = $this->getParametre($_POST, 'password');
            //     if(isset($_SESSION['mail']) && isset($_SESSION['password']))
            //     {
            //         set_time_limit(60);
            //         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
            //         var_dump($test);
            //     }
            //     else{
            //         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
            //     }
            // }





            // else if($_GET['action'] == 'getAuthoStatut')
            // {
            //     if(!isset($_SESSION)){
            //         session_start();
            //     }
            //     $mail = $this->getParametre($_POST, 'mail');
            //     $password = $this->getParametre($_POST, 'password');
            //     if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
            //         set_time_limit(60); // Limite de temps pour l'exécution du script
            //         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
            //         var_dump($test);
            //     }
            //     else{
            //         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
            //     }
            // }
            // else if ($_GET['action'] == 'getDeconnection') {
            //     session_start();
            //     $_SESSION = [];
            //     session_destroy();
            //     session_unset();
            //     $this->ctrlConnection->getDeconnection();
            //     var_dump($this->ctrlConnection->getDeconnection());
            //     var_dump(session_status());
            // }

//             else if($_GET['action'] == 'getAuthoStatut')
// {
//     if(!isset($_SESSION)){
//         session_start();
//     }
//     $mail = $this->getParametre($_POST, 'mail');
//     $password = $this->getParametre($_POST, 'password');
//     if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
//         set_time_limit(60); // Limite de temps pour l'exécution du script
//         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
//         var_dump($test);
//     }
//     else{
//         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
//     }
// }
// else if ($_GET['action'] == 'getDeconnection') {
//     session_start();
//     $_SESSION = [];
//     session_destroy();
//     session_unset();
//     $this->ctrlConnection->getDeconnection();
//     var_dump($this->ctrlConnection->getDeconnection());
//     var_dump(session_status());
// }


else if($_GET['action'] == 'getAuthoStatut')
{
    if(!isset($_SESSION)){
        session_start();
    }
    $mail = $this->getParametre($_POST, 'mail');
    $password = $this->getParametre($_POST, 'password');
    if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
        $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
        var_dump($test);
    }
    else{
        var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
    }
}
else if ($_GET['action'] == 'getDeconnection') {
    session_start();
    $_SESSION = [];
    session_destroy();
    session_unset();
    $this->ctrlConnection->getDeconnection();
    var_dump($this->ctrlConnection->getDeconnection());
    var_dump(session_status());
}




// else if($_GET['action'] == 'getAuthoStatut')
// {
//     if(!isset($_SESSION)){
//         session_start();
//     }
//     $mail = $this->getParametre($_POST, 'mail');
//     $password = $this->getParametre($_POST, 'password');
//     if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
//         set_time_limit(30); // Limite de temps pour l'exécution du script
//         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
//         var_dump($test);
//     }
//     else{
//         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
//     }
// }
// else if ($_GET['action'] == 'getDeconnection') {
//     session_start();
//     $_SESSION = [];
//     session_destroy();
//     session_unset();
//     $this->ctrlConnection->getDeconnection();
//     var_dump($this->ctrlConnection->getDeconnection());
//     var_dump(session_status());
// }


// else if($_GET['action'] == 'getAuthoStatut')
// {
//     if(!isset($_SESSION)){
//         session_start();
//     }
//     $mail = $this->getParametre($_POST, 'mail');
//     $password = $this->getParametre($_POST, 'password');
//     if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
//         set_time_limit(30); // Limite de temps pour l'exécution du script
//         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
//         var_dump($test);
//     }
//     else{
//         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
//     }
// }
// else if ($_GET['action'] == 'getDeconnection') {
//     session_start();
//     $_SESSION = [];
//     session_destroy();
//     session_unset();
//     $this->ctrlConnection->getDeconnection();
//     var_dump($this->ctrlConnection->getDeconnection());
//     var_dump(session_status());
// }











// else if($_GET['action'] == 'getAuthoStatut')
// {
//     if(!isset($_SESSION)){
//         session_start();
//     }
//     $mail = $this->getParametre($_POST, 'mail');
//     $password = $this->getParametre($_POST, 'password');
//     if(isset($_SESSION['mail']) && isset($_SESSION['password'])) {
//         set_time_limit(6); // Limite de temps pour l'exécution du script
//         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
//         var_dump($test);
//     }
//     else{
//         var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
//     }
// }
// else if ($_GET['action'] == 'getDeconnection') {
//     session_start();
//     $_SESSION = [];
//     session_destroy();
//     session_unset();
//     $this->ctrlConnection->getDeconnection();
//     var_dump($this->ctrlConnection->getDeconnection());
//     var_dump(session_status());
// }


            

            // else if ($_GET['action'] == 'getAuthoStatut') {
            //     if (!isset($_SESSION)) {
            //         session_start();
            //     }
            //     $mail = $this->getParametre($_POST, 'mail');
            //     $password = $this->getParametre($_POST, 'password');
            //     if (isset($_SESSION['mail']) && isset($_SESSION['password'])) {
            //         set_time_limit(60);
            //         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
            //         var_dump($test);
            //     } else {
            //         session_unset();
            //         session_destroy();
            //         $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
            //         var_dump($test);
            //     }
            // }
          





                else if ($_GET['action']== 'ajouterBenevoleMission')
                {
                    // $idMission = $this->getParametre($_POST, 'idMission');
                    $titre = htmlspecialchars( ($this->getParametre($_POST, 'titre')), ENT_QUOTES);
                    $annonce = htmlspecialchars( ($this->getParametre($_POST, 'annonce')), ENT_QUOTES);
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $this->ctrlMission->ajouterBenevoleMission($titre, $annonce, $adresse, $codePostal, $ville );
                }
                else if ($_GET['action']== 'MssionEcriture')
                {
                    $this->ctrlMission->MssionEcriture();
                }
                else if ($_GET['action']== 'MssionLecteur')
                {
                    $this->ctrlMission->MssionLecteur();
                }
                else if ($_GET['action']== 'BenevoleMssion')
                {

                    $this->ctrlMission->BenevoleMssion();
                }
                else if ($_GET['action']== 'mission')
                {
                    $idMission = intval($this->getParametre($_GET, 'idMission'));
                    if( $idMission !=0)
                    {
                        $this->ctrlMission->mission($idMission);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'prestataireModifier')
                {
                    $idPrestataire = intval($this->getParametre($_GET, 'idPrestataire'));
                    if( $idPrestataire !=0)
                    {
                        $this->ctrlPrestataire->prestataireModifier($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'referentModifier')
                {
                    $idReferent = intval($this->getParametre($_GET, 'idReferent'));
                    if( $idReferent !=0)
                    {
                        $this->ctrlReferent->referentModifier($idReferent);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'referentLecteur')
                {
                    $idPrestataire = intval($this->getParametre($_GET, 'idPrestataire'));
                    if( $idPrestataire !=0)
                    {
                        $this->ctrlReferent->referentLecteur($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'referentEcriture')
                {
                    $idPrestataire = intval($this->getParametre($_GET, 'idPrestataire'));
                    if( $idPrestataire !=0)
                    {
                        $this->ctrlReferent->referentEcriture($idPrestataire);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'animationPartenaireModifier')
                {
                    $idAnimationPartenaire = intval($this->getParametre($_GET, 'idAnimationPartenaire'));
                    if( $idAnimationPartenaire !=0)
                    {
                        $this->ctrlAnimationPartenaire->animationPartenaireModifier($idAnimationPartenaire);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'actualiterModifier')
                {
                    $idActualite = intval($this->getParametre($_GET, 'idActualite'));
                    if( $idActualite !=0)
                    {
                        $this->ctrlActualite->actualiterModifier($idActualite);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'dictionnaireModifier')
                {
                    $idDictionnaire = intval($this->getParametre($_GET, 'idDictionnaire'));
                    if( $idDictionnaire !=0)
                    {
                        $this->ctrlDictionnaire->dictionnaireModifier($idDictionnaire);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'documentsModifier')
                {
                    $idDocument = intval($this->getParametre($_GET, 'idDocument'));
                    if( $idDocument !=0)
                    {
                        $this->ctrlDocument->documentsModifier($idDocument);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'ModifierSalarie')
                {
                    $idSalarie = intval($this->getParametre($_GET, 'idSalarie'));
                    if( $idSalarie !=0)
                    {
                        $this->ctrlSalarie->ModifierSalarie($idSalarie);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'ModifierMdp')
                {
                    $idSalarie = intval($this->getParametre($_GET, 'idSalarie'));
                    if( $idSalarie !=0)
                    {
                        $this->ctrlSalarie->ModifierMdp($idSalarie);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'videoModifier')
                {
                    $idVideo = intval($this->getParametre($_GET, 'idVideo'));
                    if( $idVideo !=0)
                    {
                        $this->ctrlVideo->videoModifier($idVideo);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'donateurModifier')
                {
                    $idInscrit = intval($this->getParametre($_GET, 'idInscrit'));
                    if( $idInscrit !=0)
                    {
                        $this->ctrlInscrit->donateurModifier($idInscrit);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'benevoleModifier')
                {
                    $idInscrit = intval($this->getParametre($_GET, 'idInscrit'));
                    if( $idInscrit !=0)
                    {
                        $this->ctrlInscrit->benevoleModifier($idInscrit);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'NewsletterModifier')
                {
                    $idInscrit = intval($this->getParametre($_GET, 'idInscrit'));
                    if( $idInscrit !=0)
                    {
                        $this->ctrlInscrit->NewsletterModifier($idInscrit);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'PreventionModifier')
                {
                    $idInscrit = intval($this->getParametre($_GET, 'idInscrit'));
                    if( $idInscrit !=0)
                    {
                        $this->ctrlInscrit->PreventionModifier($idInscrit);
                    }
                    else{
                        throw new Exception("identifiant du salarie non valide");
                    }
                    
                }
                else if ($_GET['action']== 'BenevoleMssionAjouter')
                {

                    $this->ctrlMission->BenevoleMssionAjouter();
                }
                else if ($_GET['action']== 'modifierBenevoleMission')
                {
                    $titre = htmlspecialchars( ($this->getParametre($_POST, 'titre')), ENT_QUOTES) ;
                    $annonce = htmlspecialchars( ($this->getParametre($_POST, 'annonce')), ENT_QUOTES);
                    // $adresse = $this->getParametre($_POST, 'adresse');
                    // $codePostal = $this->getParametre($_POST, 'codePostal');
                    // $ville = $this->getParametre($_POST, 'ville');
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $this->ctrlMission->modifierBenevoleMission( $titre, $annonce, $idMission);
                }
                // else if ($_GET['action']== 'supprimerMission')
                // {
                    
                //     $idMission = $this->getParametre($_POST, 'idMission');
                //     $this->ctrlMission->supprimerMission($idMission);
                // }
                else if ($_GET['action'] == 'deleteMission')
                {
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $this->ctrlMission->deleteMission($idMission);
                }
                
                


              
                else {
                    session_start();
                    $this->ctrlConnection->getDeconnection(); 
                }
                
            }
            else {
                $this->ctrlConnection->cnx1();

            }
            
        }
        catch(Exception $e)
        {
            $this->erreur($e->getMessage());
        }
    }
     
      private function erreur($msgErreur) {
       // $vue = new Vue("Erreur", "erreur.php");
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

  
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}



?>


