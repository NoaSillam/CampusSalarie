<?php



// require_once 'Modele/Prestataire.php';
// require_once 'Modele/AnimationPartenaire.php';

// require_once 'Vue/Vue.php';
require_once 'autoload.php';

class ControleurAnimationPartenaire
{
    private $prestataire;
    private $animationPartenaire;

    public function __construct()
    {
        $this->prestataire = new Prestataire();
        $this->animationPartenaire = new AnimationPartenaire();
    }
    public function prest($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaire");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }
    public function prestLecteur($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaireLecteur");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }
    public function prestEcriture($idPrestataire)
    {
        $prestataire = $this->prestataire->getPrestataire($idPrestataire);
        $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
        $vue = new Vue("AnimationPartenaireEcriture");
        $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    }
    // public function prest($idPrestataire)
    // {
    //     $prestataire = $this->prestataire->getPrestataire($idPrestataire);
    //     $animationPartenaires = $this->animationPartenaire->getAnimationPartenaires($idPrestataire);
    //     $vue = new Vue("AnimationPartenaire");
    //     $vue->generer(array('prestataire'=>$prestataire, 'animationPartenaires'=>$animationPartenaires));
    // }
    public function animPartenaireAjouter()
    { 
        $animationPartenaires = $this->animationPartenaire->getAnimPartenaires();
        // $vue = new Vue("Accueil", "index.php");
        $vue = new Vue("AnimPartenaireAjouter");
         $vue->generer(array('animationPartenaires'=> $animationPartenaires));
    }
    public function animationPartenaireModifier($idAnimationPartenaire)
    {
        $animationPartenaire = $this->animationPartenaire->getAnimationPartenaire($idAnimationPartenaire);
        // var_dump($animationPartenaire);
        $vue = new Vue("AnimationPartenaireModifier");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));

    }
    public function animationPartenaires($idAnimationPartenaire)
    {
        $animationPartenaire = $this->animationPartenaire->getAnimationPartenaire($idAnimationPartenaire);
        $vue = new Vue("AnimationPartenaire");
        $vue->generer(array('animationPartenaire'=>$animationPartenaire));
    }
    public function animationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude)
    {
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
                   
                   $this->animationPartenaire->ajouterAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $type, $img, $descriptif, $dateParution, $idPrestataire, $latitude, $longitude);
       // header("location:index.php");
        $this->prest($idPrestataire);
       
    }
    public function modifAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $idAnimationPartenaire)
    {
        $this->animationPartenaire->modifierAnimationPartenaire($nom, $lienVideo, $lienPdf, $adresse, $codePostal, $ville, $idAnimationPartenaire);
        header("location:index.php");
        $this->animationPartenaires($idAnimationPartenaire);
    }
    public function deleteAnimationPartenaire($idAnimationPartenaire)
    {
        $this->animationPartenaire->supprimerAnimationPartenaire($idAnimationPartenaire);
        header("location:index.php");
        $this->animationPartenaires($idAnimationPartenaire);

    }
}