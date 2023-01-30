<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>


<h1>Les donateurs</h1>

<!-- <a href="index.php?action=ajoutDonateur"><input type="submit" value="valider"></a> -->
<table class="table align-middle">
    <tbody>
    <tr class="text-align">
        <th>Civilité</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Montant</th>
        <th>Date du don</th>
        <th>Age</th>
        <th>Modifier</th>
        <th>Supprimer</th>

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
  <td><a  href="<?= "index.php?action=donateurModifier&idInscrit=". $donateur['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritDonateur" method="post"><td>  <input type="text" name="idInscrit" value="<?= $donateur['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
 


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


