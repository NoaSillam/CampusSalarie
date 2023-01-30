<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>


<h1>Les Newsletters</h1>

<!-- <a href="index.php?action=ajoutDonateur"><input type="submit" value="valider"></a> -->
<table class="table align-middle">
    <tbody>
    <tr class="text-align">
        <th>Civilite</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Date de l'inscription</th>
        <th>Age</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        

    </tr>
    <tr>

<?php
 $fichier = fopen("export/exportInscritNewsletter.csv", "w+");
 $chaine = " ";
//  $nom = "Nom";
//  $prenom = "Prenom";
//  $mail = "Mail";
//  $dateInscription = "Date de l'inscription";
//  $age = "Age";
//  $chaine = "\"Nom\";";
//  $chaine .= "\"".$prenom."\";";
//  $chaine .= "\"".$mail."\";";
//  $chaine .= "\"".$dateInscription."\";";
//  $chaine .= "\"".$age."\";";
?>
    <?php
    foreach($newsletters as $newsletter):
        ?>
  <td>  <?= $newsletter['civilite'] ?> </td>
  <td>  <?= $newsletter['nom'] ?> </td>
  <td>  <?= $newsletter['prenom'] ?></td>
  <td>  <?= $newsletter['mail'] ?> </td>
  <td>  <?= $newsletter['dateInscription'] ?> </td>
  <td> <?= $newsletter['age'] ?></td>
  <td><a  href="<?= "index.php?action=NewsletterModifier&idInscrit=". $newsletter['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritNewsletter" method="post"><td>  <input type="text" name="idInscrit" value="<?= $newsletter['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
 


</tr>
<?php
//$date = date_create('1901-01-01');
//$dateInscription = date_diff($benevole['dateInscription'], $date);

$chaine = "\"".$newsletter['nom']."\";";
$chaine .= "\"".$newsletter['prenom']."\";";
$chaine .= "\"".$newsletter['mail']."\";";
$chaine .= "".$newsletter['dateInscription'].";";
$chaine .= "".$newsletter['age'].";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>
        <?php
        fclose($fichier);
        ?>
    </tbody>
</table>
<!-- 
<h2 style="text-align: center;">Modifier une personne inscrit a la newsletter</h2>
<form action="index.php?action=modifInscrit" id="modifier" method="post">
    <input type="text"  style="text-align: center;" class="form-control" name="nom" placeholder="nom" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" placeholder="prenom" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="numTelephone" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="mail" placeholder="mail" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="adresse" placeholder="adresse" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="codePostal" placeholder="codePostal" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br>
    <input type="submit"  style="text-align: center; margin-left: 25%;" class="btn btn-primary milieu"  value="Valider">
</form> -->


