<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<h1>Les Preventions</h1>

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

    </tr>
    <tr>

<?php
 $fichier = fopen("export/exportInscritPreventions.csv", "w+");
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
    foreach($preventions as $prevention):
        ?>
  <td>  <?= $prevention['civilite'] ?> </td>
  <td>  <?= $prevention['nom'] ?> </td>
  <td>  <?= $prevention['prenom'] ?></td>
  <td> <?= $prevention['mail'] ?> </td>
  <td> <?= $prevention['dateInscription'] ?> </td>
  <td> <?= $prevention['age'] ?> </td>
  <td><a  href="<?= "index.php?action=PreventionModifier&idInscrit=". $prevention['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritPrevention" method="post"><td>  <input type="text" name="idInscrit" value="<?= $prevention['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
 


</tr>
<?php
//$date = date_create('1901-01-01');
//$dateInscription = date_diff($benevole['dateInscription'], $date);

$chaine = "\"".$prevention['nom']."\";";
$chaine .= "\"".$prevention['prenom']."\";";
$chaine .= "\"".$prevention['mail']."\";";
$chaine .= "".$prevention['dateInscription'].";";
$chaine .= "".$prevention['age'].";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>
        <?php
        fclose($fichier);
        ?>
    </tbody>
</table>
<!-- <h2 style="text-align: center;">Modifier une personne inscrite à la prevention</h2>
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
</form>
 -->
