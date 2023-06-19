<?php
require_once 'Modele/Modele.php';
// require_once 'src/PHPMailer.php';
// require 'src/Exception.php';
// require 'src/SMTP.php';
//require 'vendor/autoload.php';
require 'sendgrid-php/sendgrid-php.php';

// require 'src/OAuth/OAuthTokenProvider.php';
// require_once 'vendor/autoload.php';


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\OAuth;
// use League\OAuth2\Client\Provider\Google;
// use League\OAuth2\Client\Grant\RefreshToken;
// use League\OAuth2\Client\Token\AccessToken;
// use League\OAuth2\Client\Provider\AbstractProvider;
// use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
// use SendGrid\Mail\From;
// use SendGrid\Mail\To;
// use SendGrid\Mail\PlainTextContent;
// use SendGrid\Mail\Mail;
// use SendGrid\SendGrid;
//use SendGrid;

class Salarie extends Modele
{
    public function getSalaries()
    {
        $sql = 'select * from salarie ';
        $salaries = $this->executerRequete($sql);
        return $salaries;
    }
    public function getSalarieModifier($idSalarie)
    {
        $sql = 'select * from salarie where id = ? ';
        $salaries = $this->executerRequete($sql, array($idSalarie));
        return $salaries;
    }
    public function getSalarieMail($mail)
    {
        $sql = 'select * from salarie where mail = ? ';
        $salaries = $this->executerRequete($sql, array($mail));
        return $salaries;
    }
    public function getSalarie($idSalarie)
    {
        $sql = 'select * from salarie where id = ?';
        $salarie = $this->executerRequete($sql, array($idSalarie));
        if($salarie->rowCount() > 0)
        {
            return $salarie->fetch();
        }
        else{
            throw new Exception("Aucun salarie ne correspond a l'identififiant '$idSalarie'");
        }
    }
    // public function ajouterSalarie($nom, $prenom, $mail, $pole, $statut)
    // {
    //     $sql = 'insert into salarie(nom, prenom, mail, pole, statut) values(?,?,?,?,?)';
    //     $this->executerRequete($sql, array($nom, $prenom, $mail, $pole, $statut));
    
    //     // Send email notification
    //     $mailInstance = new PHPMailer();
    //     $mailInstance->CharSet = 'UTF-8';
    //     $mailInstance->setFrom('noasillam@gmail.com', 'gmail');
    
    //     $mailInstance->addAddress($mail, $prenom . ' ' . $nom);
    //     $mailInstance->isHTML(true);
    //     $mailInstance->Subject = 'New employee added';
    //     $mailInstance->Body = 'Dear ' . $prenom . ',<br><br>A new employee has been added to the system with the following details:<br><br>Name: ' . $prenom . ' ' . $nom . '<br>Email: ' . $mail . '<br>Pole: ' . $pole . '<br>Statut: ' . $statut . '<br><br>Best regards,<br>Your Company';
    
    //     $clientId = '594865093430-6qj2tedkpasumn3tgmkqius3jjs1m3oo.apps.googleusercontent.com';
    //     $clientSecret = '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';
    //     $refreshToken = '1//04M8ZlsYmkDEuCgYIARAAGAQSNwF-L9Irqj9bT4UnUXMbTLwVvjTeVfEowICiC5Ok7dGKJhib2aCG_vKTHQ8lOunbWe9ebMyt4-k';
    
    //     $provider = new Google([
    //         'clientId' => $clientId,
    //         'clientSecret' => $clientSecret,
    //     ]);
    
    //     $accessToken = new UserRefreshCredentials(
    //         $provider->getConfig(),
    //         [
    //             'client_id' => $clientId,
    //             'client_secret' => $clientSecret,
    //             'refresh_token' => $refreshToken,
    //         ]
    //     );
    
    //     $mailInstance->setOAuth(
    //         new OAuth([
    //             'user' => 'no-reply',
    //             'clientId' => $clientId,
    //             'clientSecret' => $clientSecret,
    //             'refreshToken' => $refreshToken,
    //             'accessToken' => $accessToken,
    //         ])
    //     );
    
    //     if ($mailInstance->send()) {
    //         echo 'Email sent successfully.';
    //     } else {
    //         echo 'Error sending email: ' . $mailInstance->ErrorInfo;
    //     }
    // }




//     public function ajouterSalarie($nom, $prenom, $mail, $pole, $statut)
// {
//     // 1. Insert the new employee's information into the database
//     $sql = 'insert into salarie(nom, prenom, mail, pole, statut) values(?,?,?,?,?)';
//     $this->executerRequete($sql, array($nom, $prenom, $mail, $pole, $statut));

//     // 2. Send a welcome email to the new employee
//     $mailInstance = new PHPMailer();
//     $mailInstance->CharSet = 'UTF-8';
//     $mailInstance->setFrom('youremail@gmail.com', 'Your Company');

//     $mailInstance->addAddress($mail, $prenom . ' ' . $nom);
//     $mailInstance->isHTML(true);
//     $mailInstance->Subject = 'Welcome to Your Company';
//     $mailInstance->Body = 'Dear ' . $prenom . ',<br><br>Welcome to Your Company! We are excited to have you on board.<br><br>Best regards,<br>Your Company';

//     $clientId = '594865093430-6qj2tedkpasumn3tgmkqius3jjs1m3oo.apps.googleusercontent.com';
//     $clientSecret = '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';
//     $refreshToken = '1//04M8ZlsYmkDEuCgYIARAAGAQSNwF-L9Irqj9bT4UnUXMbTLwVvjTeVfEowICiC5Ok7dGKJhib2aCG_vKTHQ8lOunbWe9ebMyt4-k';

//     $provider = new Google([
//         'clientId' => $clientId,
//         'clientSecret' => $clientSecret,
//     ]);

//     $accessToken = new UserRefreshCredentials(
//         $provider->getConfig(),
//         [
//             'client_id' => $clientId,
//             'client_secret' => $clientSecret,
//             'refresh_token' => $refreshToken,
//         ]
//     );

//     $mailInstance->setOAuth(
//         new OAuth([
//             'user' => 'youremail@gmail.com',
//             'clientId' => $clientId,
//             'clientSecret' => $clientSecret,
//             'refreshToken' => $refreshToken,
//             'accessToken' => $accessToken,
//         ])
//     );

//     if ($mailInstance->send()) {
//         echo 'Welcome email sent successfully.';
//     } else {
//         echo 'Error sending welcome email: ' . $mailInstance->ErrorInfo;
//     }
// }

public function ajouterSalarie($nom, $prenom, $mail, $pole, $statut)
{
    // 1. Insert the new employee's information into the database
    $sql = 'insert into salarie(id,nom, prenom, mail, pole, statut) values(?,?,?,?,?,?)';
    $nbSalaries = $this->getNombreSalaries();
    $idSalarie = $nbSalaries +1;
    $this->executerRequete($sql, array($idSalarie, $nom, $prenom, $mail, $pole, $statut));
   
    //$apiKey = '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';
    //$apiKey = "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";
    $apiKey = "--";
    $email = new SendGrid\Mail\Mail(); 
    $email->setFrom("noasillam@gmail.com");
    $email->setSubject("Première connexion au campus");
    $email->addTo($mail);
    $email->addContent("text/plain", "Bonjour " . $prenom . ",<br><br>Bienvenue à Delta 7.<br><br> Vous trouverez ci-joint vos identifiants pour accéder au campus.<br> <br> Avant votre première connexion, veuillez vérifier que les informations ci-dessous sont correctes et changer votre mot de passe :  <a href='http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesignCCopie/index.php?action=ModifierMdp&idSalarie=".$idSalarie."'>changer de mot de passe</a><br><br>Nom : " . $prenom . " " . $nom . "<br>Identifiant : " . $mail . "<br>Pôle : " . $pole . "<br>Vous avez le statut : " . $statut . "<br><br>Bien cordialement,<br>Delta 7</strong>");
    $email->addContent(
        "text/html", "Bonjour " . $prenom . ",<br><br>Bienvenue à Delta 7.<br><br> Vous trouverez ci-joint vos identifiants pour accéder au campus.<br> <br> Avant votre première connexion, veuillez vérifier que les informations ci-dessous sont correctes et changer votre mot de passe :  <a href='http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesignCCopie/index.php?action=ModifierMdp&idSalarie=".$idSalarie."'>changer de mot de passe</a><br><br>Nom : " . $prenom . " " . $nom . "<br>Identifiant : " . $mail . "<br>Pôle : " . $pole . "<br>Vous avez le statut : " . $statut . "<br><br>Bien cordialement,<br>Delta 7</strong>"
    );
    
    $sendgrid = new SendGrid($apiKey);
    try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}
public function modifierMdp( $password, $idSalarie)
{
    $sql = 'update salarie set password = ? where id = ?';
    $this->executerRequete($sql, array($password, $idSalarie));
}
public function getNombreSalaries() {
    $sql = 'select max(id) as nbSalaries from salarie';
    $resultat = $this->executerRequete($sql);
     $nbSalaries = $resultat->fetch(PDO::FETCH_ASSOC)['nbSalaries'];
     return $nbSalaries;
  }
    public function modifierSalarie($nom, $prenom, $mail, $pole, $idSalarie)
    {
        $sql = 'update salarie set nom = ?, prenom = ?, mail  = ?, pole = ? where id = ?';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $pole, $idSalarie));
    }
    public function supprimerSalarie($idSalarie)
    {
        $sql = 'delete from salarie where id = ?';
        $this->executerRequete($sql, array($idSalarie));
    }

}



   // $mailInstance = new PHPMailer();
    // $mailInstance->CharSet = 'UTF-8';
    // $mailInstance->setFrom('noasillam@gmail.com', 'Delta 7');
    // $mailInstance->addAddress($mail, $prenom . ' ' . $nom);
    // $mailInstance->isHTML(true);
    // $mailInstance->Subject = 'Nouveau Salarié';
    // $mailInstance->Body = 'Cher ' . $prenom . ',<br><br>Bienvenue à Delta 7 :<br><br>Name: ' . $prenom . ' ' . $nom . '<br>Email: ' . $mail . '<br>Pole: ' . $pole . '<br>Statut: ' . $statut . 'En cliquant sur le lien suivant tu pourra changer ton mot de passe!!!!!  <a href="http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesign/index.php?action=modifierMdp&idSalarie='.$idSalarie.'">changer mot de passe</a><br><br>Best regards,<br>Your Company';
    
    // if ($mailInstance->send()) {
    //     echo 'Email sent successfully.';
    // } else {
    //     echo 'Error sending email: ' . $mailInstance->ErrorInfo;
    // }