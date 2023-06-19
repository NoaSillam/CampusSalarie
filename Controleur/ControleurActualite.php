<?php



// require_once 'Modele/Prestataire.php';
// require_once 'Modele/AnimationPartenaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurActualite
{
    private $referent;
    private $actualite;

    public function __construct()
    {
        $this->referent = new Referent();
        $this->actualite = new Actualite();
    }
    public function actualite($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("Actualite");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));
    }
    public function actualiteLecteur($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("ActualiteLecteur");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));
    }
    public function actualiteEcriture($idReferent)
    {
        $referent = $this->referent->getReferentActualite($idReferent);
        $actualites = $this->actualite->getActualitesReferent($idReferent);
        $vue = new Vue("ActualiteEcriture");
        $vue->generer(array('referent'=>$referent, 'actualites'=>$actualites));
    }
    public function actualiteAjouter()
    { 
        $actualites = $this->actualite->getActualites();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("ActualiteAjouter");
         $vue->generer(array('actualites'=> $actualites));
    }
    public function actualiterModifier($idActualite)
    {
        $actualite = $this->actualite->getActualiteReferent($idActualite);
        // var_dump($animationPartenaire);
        $vue = new Vue("ActualiteModifier");
        $vue->generer(array('actualite'=>$actualite));

    }
    public function actualites($idActualite)
    {
        $actualite = $this->actualite->getActualiteReferent($idActualite);
        $vue = new Vue("Actualite");
        $vue->generer(array('actualite'=>$actualite));
    }
    // public function prest($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
    //     $vue = new Vue("AnimationPartenaire");
    //     $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    // }
    // public function prestLecteur($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
    //     $vue = new Vue("AnimationPartenaireLecteur");
    //     $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    // }
    // public function prestEcriture($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
    //     $vue = new Vue("AnimationPartenaireEcriture");
    //     $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    // }
    // public function prest($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
    //     $vue = new Vue("AnimationPartenaire");
    //     $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    // }
   
    // public function animPartenaireAjouter()
    // { 
    //     $animationPartenaires = $this->animationPartenaire->getAnimPartenaires();
    //     // $vue = new Vue("Accueil", "index.php");
    //     $vue = new Vue("AnimPartenaireAjouter");
    //      $vue->generer(array('animationPartenaires'=> $animationPartenaires));
    // }
  
    // public function animationPartenaireModifier($idAnimationPartenaire)
    // {
    //     $animationPartenaire = $this->animationPartenaire->getAnimationPartenaire($idAnimationPartenaire);
    //     // var_dump($animationPartenaire);
    //     $vue = new Vue("AnimationPartenaireModifier");
    //     $vue->generer(array('animationPartenaire'=>$animationPartenaire));

    // }
    // public function actualites($idActualite)
    // {
    //     $actualite = $this->actualite->getActualiteReferent($idActualite);
    //     $vue = new Vue("Actualite");
    //     $vue->generer(array('actualite'=>$actualite));
    // }
    // public function animationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude)
    // {
    //                 $adresselatlon = str_replace(" ", "%20", $adresse);
    //                 $villelatlon = str_replace(" ", "%20", $ville);
    //                 $code = str_replace(" ", "%20", $codePostal);
    //                 $ch = curl_init("https://api-adresse.data.gouv.fr/search/?q=".$adresselatlon."%20".$villelatlon."%20".$code."&format=json");
    //                 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //                 $reponse = curl_exec($ch);
    //                 curl_close($ch);
    //                 $data = json_decode($reponse, true);
    //                 $longitude =  $data['features'][0]['geometry']['coordinates'][0];
    //                 $latitude = $data['features'][0]['geometry']['coordinates'][1];
                   
    //                $this->animationPartenaire->ajouterAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude);
    //    // header("location:index.php");
    //     $this->prest($idPrestataire);
       
    // }
    public function AjouterActualiter($nom, $description, $type, $lien, $idReferent, $imgActualite)
    {
        $this->actualite->ajouterActualite($nom, $description, $type, $lien, $idReferent, $imgActualite);
        header("location:index.php?action=actualite&id=".$idReferent);
        $this->actualite($idReferent);
       // header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }
    public function modifActualite($nom, $description, $type, $lien, $imgActualite, $idActualite)
    {
        $this->actualite->modifierActualite($nom, $description, $type, $lien, $imgActualite, $idActualite);
        header("location:index.php");
        $this->actualites($idActualite);
    }
    public function deleteActualite($idActualite)
    {
        $this->actualite->supprimerActualite($idActualite);
        header("location:index.php");
        $this->actualites($idActualite);

    }
}