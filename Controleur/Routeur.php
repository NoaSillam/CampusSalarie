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
                else if($_GET['action'] == 'ajoutPrestataire')
                {
                    // $idPrestataire =  $this->getParametre($_POST, 'id');
                    $nomPrestataire = htmlspecialchars( ($this->getParametre($_POST, 'nomPrestataire')), ENT_QUOTES);
                    $logo = $this->getParametre($_POST, 'logo');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $this->ctrlPrestataire->ajoutPrestataire($nomPrestataire, $logo, $adresse, $codePostal);
                }
                else if($_GET['action'] == 'modifPrestataire')
                {
                    
                    $nomPrestataire = htmlspecialchars( ($this->getParametre($_POST, 'nomPrestataire')), ENT_QUOTES);;
                    $logo = $this->getParametre($_POST, 'logo');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $idPrestataire = $this->getParametre($_POST, 'id');
                    $this->ctrlPrestataire->modifPrestataire($nomPrestataire, $logo, $adresse, $codePostal, $idPrestataire);
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
                else if ($_GET['action']== 'modifReferent')
                {
                   
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $idReferent = $this->getParametre($_POST, 'idReferent');
                    $this->ctrlReferent->modifReferent($mail, $numTelephone, $idReferent);


                }
                else if ($_GET['action']== 'deleteReferent')
                {
                    $idReferent = $this->getParametre($_POST, 'idReferent');
                    $this->ctrlReferent->deleteReferent($idReferent);
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
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                    $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                   
                    $this->ctrlTheme->ajoutSousTheme($libelle, $descriptif, $img, $idThemeParent);
                }
                else if($_GET['action'] == 'modifSousTheme')
                {
                    
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                    $idTheme = $this->getParametre($_POST, 'id');
                    $idThemeParent = $this->getParametre($_POST, 'idThemeParent');
                    $this->ctrlTheme->modifSousTheme( $libelle, $descriptif, $img, $idThemeParent, $idTheme);
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
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    $descriptif =  htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                   
                    $this->ctrlTheme->ajoutTheme($libelle, $descriptif, $img);
                }
                else if($_GET['action'] == 'modifTheme')
                {
                    
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                    $idTheme = $this->getParametre($_POST, 'id');
                    $this->ctrlTheme->modifTheme( $libelle, $descriptif, $img, $idTheme);
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
                    $password1 = $this->getParametre($_POST, 'password');
                    $password = hash('sha512', $password1);
                   
                    $this->ctrlSalarie->ajoutSalarie($nom, $prenom, $mail, $pole, $statut, $password);
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
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                    $definition = htmlspecialchars( ($this->getParametre($_POST, 'definition')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                    $idSalarie = $this->getParametre($_POST, 'id');
                    $this->ctrlDictionnaire->dictionnaire($libelle, $definition, $img, $idSalarie);


                }
                else if ($_GET['action']== 'modifDictionnaire')
                {
                   
                    $definition = htmlspecialchars( ($this->getParametre($_POST, 'definition')), ENT_QUOTES);
                    $img = $this->getParametre($_POST, 'img');
                    $idDictionnaire = $this->getParametre($_POST, 'idDictionnaire');
                    $this->ctrlDictionnaire->modifDictionnaire( $definition, $img, $idDictionnaire);


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
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $lienVideo = $this->getParametre($_POST, 'lienVideo');
                    $lienPdf = $this->getParametre($_POST, 'lienPdf');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville =  $this->getParametre($_POST, 'ville');
                    $type = $this->getParametre($_POST, 'type');
                    $img = $this->getParametre($_POST, 'img');
                    $descriptif = htmlspecialchars( ($this->getParametre($_POST, 'descriptif')), ENT_QUOTES);
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                    $idPrestataire = $this->getParametre($_POST, 'idPrestataire');
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
                    $this->ctrlAnimationPartenaire->animationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude);
                  //  var_dump( $this->ctrlAnimationPartenaire->animationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude));
                    

                }
                else if ($_GET['action']== 'modifAnimationPrestataire')
                {
                   
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $lienVideo = $this->getParametre($_POST, 'lienVideo');
                    $lienPdf = $this->getParametre($_POST, 'lienPdf');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $idAnimationPartenaire = $this->getParametre($_POST, 'idAnimationPartenaire');
                    $this->ctrlAnimationPartenaire->modifAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $idAnimationPartenaire);


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
                else if ($_GET['action']== 'ajoutDonateur')
                {
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $montant = $this->getParametre($_POST, 'montant');
                    $this->ctrlInscrit->ajoutDonateur($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $montant);


                }
                else if($_GET['action'] == 'listeBenevole')
                {
                    $this->ctrlInscrit->listeBenevole();
                }
                else if ($_GET['action']== 'ajoutBenevole')
                {
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                   
                    $this->ctrlInscrit->ajoutBenevole($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);


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
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $this->ctrlInscrit->modifInscrit( $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal, $idInscrit);
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
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $this->ctrlInscrit->ajoutNewsletters($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);
                }
                else if($_GET['action'] == 'listePreventions')
                {
                    $this->ctrlInscrit->listePreventions();
                }
                else if ($_GET['action']== 'ajoutPrevention')
                {
                    $idInscrit = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $numTelephone = $this->getParametre($_POST, 'numTelephone');
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $this->ctrlInscrit->ajoutPrevention($idInscrit, $nom, $prenom, $mail, $numTelephone, $adresse, $codePostal);
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
                    $idDocument = $this->getParametre($_POST, 'idDocument');
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                   // $type = $this->getParametre($_POST, 'type');
                    $lien = $this->getParametre($_POST, 'lien');
                    $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                    $idSalarie = $this->getParametre($_POST, 'idSalarie');
                    $idPrestataire = $this->getParametre($_POST, 'idPrestataire');
                    $idTheme = $this->getParametre($_POST, 'idTheme');
                    $this->ctrlDocument->document($idDocument, $libelle, $lien, $description, $dateParution, $idSalarie, $idPrestataire, $idTheme);
                }
                else if ($_GET['action']== 'modifDocument')
                {
                   
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                   // $type = $this->getParametre($_POST, 'type');
                    $lien = $this->getParametre($_POST, 'lien');
                    $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                    $idDocument = $this->getParametre($_POST, 'idDocument');
                  $this->ctrlDocument->modifDocument($libelle, $lien, $description, $dateParution, $idDocument);
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
                    $idVideo = $this->getParametre($_POST, 'idVideo');
                    $libelle = htmlspecialchars( ($this->getParametre($_POST, 'libelle')), ENT_QUOTES);
                   // $type = $this->getParametre($_POST, 'type');
                    $lien = $this->getParametre($_POST, 'lien');
                    $description = htmlspecialchars( ($this->getParametre($_POST, 'description')), ENT_QUOTES);
                   // $format = $this->getParametre($_POST, 'format');
                    $duree = $this->getParametre($_POST, 'duree');
                   // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                   // $dateCreation = $this->getParametre($_POST, 'dateCreation');
                    $idSalarie = $this->getParametre($_POST, 'idSalarie');
                    $idPrestataire = $this->getParametre($_POST, 'idPrestataire');
                    $idTheme = $this->getParametre($_POST, 'idTheme');
                    $this->ctrlVideo->video($idVideo, $libelle, $lien, $description, $duree, $dateParution, $idSalarie, $idPrestataire, $idTheme);
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
                    $duree = $this->getParametre($_POST, 'duree');
                    // $imgApercu = $this->getParametre($_POST, 'imgApercu');
                    $dateParution = $this->getParametre($_POST, 'dateParution');
                    $idVideo = $this->getParametre($_POST, 'idVideo');
                  $this->ctrlVideo->modifVideo($libelle, $lien, $description, $duree, $dateParution, $idVideo);
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

            else if($_GET['action'] == 'getAuthoStatut')
            {
                if(!isset($_SESSION)){
                        session_start();
                    }
                   
                $mail = $this->getParametre($_POST, 'mail');
                $password = $this->getParametre($_POST, 'password');
               // $statut =  $this->getParametre($_SESSION, 'statut');
                if(isset($_SESSION['mail']) && isset($_SESSION['password']))
                {
                   
                  
                //     $this->ctrlConnection->getAuthoStatut($mail, $password, $statut);
                //   //  var_dump($statut);
                // var_dump($this->ctrlConnection->getAuthoStatut($mail, $password, $statut));
                $test = $this->ctrlConnection->getAuthoStatut($mail, $password);
                 var_dump($test);
             // var_dump($this->ctrlConnection->getAuthoStatut($mail, $password));
            
               // var_dump(session_status());
            }
            else{
            //    var_dump( $this->ctrlConnection->getAuthoStatut($mail, $password, $statut));
            var_dump( $this->ctrlConnection->getAuthoStatut($mail, $password));
               // var_dump(session_status());
                //return false;
                
            }

            }
            else if ($_GET['action']== 'getDeconnection')
            {
                session_start();
            //     session_destroy();
            //    unset($_SESSION['mail']);
            //    unset($_SESSION['password']);
            //     session_unset();
            //      $_SESSION = array();
            $_SESSION = [];
            session_destroy();
            session_unset();
          //  session_write_close();
           // setcookie(session_name(),'',0,'/');
           //session_regenerate_id(true);
                $this->ctrlConnection->getDeconnection();
                var_dump( $this->ctrlConnection->getDeconnection());
                var_dump(session_status());
            }





                else if ($_GET['action']== 'ajouterBenevoleMission')
                {
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $titre = htmlspecialchars( ($this->getParametre($_POST, 'titre')), ENT_QUOTES);
                    $annonce = htmlspecialchars( ($this->getParametre($_POST, 'annonce')), ENT_QUOTES);
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $this->ctrlMission->ajouterBenevoleMission($idMission, $titre, $annonce, $adresse, $codePostal, $ville);
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
                    $adresse = $this->getParametre($_POST, 'adresse');
                    $codePostal = $this->getParametre($_POST, 'codePostal');
                    $ville = $this->getParametre($_POST, 'ville');
                    $idMission = $this->getParametre($_POST, 'idMission');
                    $this->ctrlMission->modifierBenevoleMission( $titre, $annonce, $adresse, $codePostal, $ville, $idMission);
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
                
                


              
                else
                {
                    throw new Exception("action non valide");
                }
                
            }
            else {
                $this->ctrlPrestataire->accueil();

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