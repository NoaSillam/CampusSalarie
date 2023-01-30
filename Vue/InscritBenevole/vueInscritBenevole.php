<h1>Les benevoles</h1>

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
         $fichier = fopen("export/exportInscritBenevole.csv", "w+");
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
    foreach($benevoles as $benevole):
        ?>
 <td><?= $benevole['civilite'] ?> </td>
  <td><?= $benevole['nom'] ?> </td>
  <td>  <?= $benevole['prenom'] ?> </td>
  <td> <?= $benevole['mail'] ?></td>
  <td> <?= $benevole['dateInscription'] ?> </td>
  <td> <?= $benevole['age'] ?></td>
  <td><a  href="<?= "index.php?action=benevoleModifier&idInscrit=". $benevole['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritBenevole" method="post"><td>  <input type="text" name="idInscrit" value="<?= $benevole['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
</tr>
<?php
//$date = date_create('1901-01-01');
//$dateInscription = date_diff($benevole['dateInscription'], $date);

$chaine = "\"".$benevole['nom']."\";";
$chaine .= "\"".$benevole['prenom']."\";";
$chaine .= "\"".$benevole['mail']."\";";
$chaine .= "".$benevole['dateInscription'].";";
$chaine .= "".$benevole['age'].";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>

        <?php
        fclose($fichier);
        ?>
    </tbody>
</table>

<!-- <h2 style="text-align: center;">Modifier un benevole</h2>
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
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;" value="Valider">
</form> -->


