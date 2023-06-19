<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
 .hidden{
    visibility: hidden;
 }
 .supprimer{
    /* margin-left: 9%; */
    width: 70%;
 }
</style>

<br>
<h1 style="text-align: center;">Les donateurs</h1>
<br>
<br>
<a href="index.php?action=donateurAjouter"><input class="btn btn-success" type="submit" value="Ajouter un donateur"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr class="text-align">
        <th  style="text-align: center;">Civilité</th>
        <th  style="text-align: center;">Nom</th>
        <th style="text-align: center;">Prénom</th>
        <th style="text-align: center;">Mail</th>
        <th style="text-align: center;">Montant</th>
        <th style="text-align: center;">Date du don</th>
        <th  style="text-align: center;">Age</th>
        <th style="text-align: center;">Modifier</th>
        <th style="text-align: center;">Supprimer</th>

    </tr>
    <tr>

<?php
 $fichier = fopen("export/exportInscritDonateur.csv", "w+");
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
    foreach($donateurs as $donateur):
        ?>
<td>  <?= $donateur['civilite'] ?> </td>
  <td>  <?= $donateur['nom'] ?> </td>
  <td> <?= $donateur['prenom'] ?> </td>
  <td>  <?= $donateur['mail'] ?> </td>
  <td> <?= $donateur['montant'] ?> </td>
  <td>  <?= $donateur['dateInscription'] ?> </td>
  <td> <?= $donateur['age'] ?> </td>
  <td><a  href="<?= "index.php?action=donateurModifier&idInscrit=". $donateur['id']?>"> <input type="submit" class="btn btn-info" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritDonateur" method="post"><td>  <input type="hidden" name="idInscrit"  value="<?= $donateur['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
 


</tr>
<?php
//$date = date_create('1901-01-01');
//$dateInscription = date_diff($benevole['dateInscription'], $date);

$chaine = "\"".$donateur['nom']."\";";
$chaine .= "\"".$donateur['prenom']."\";";
$chaine .= "\"".$donateur['mail']."\";";
$chaine .= "".$donateur['dateInscription'].";";
$chaine .= "".$donateur['age'].";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>
        <?php
        fclose($fichier);
        ?>
    </tbody>
</table>


