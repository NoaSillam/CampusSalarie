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
 .export{
float: right;
 }
</style>

<br>
<h1 style="text-align: center;">Les donateurs</h1>
<br>
<br>
<a href="index.php?action=donateurAjouter"><input class="btn btn-success" type="submit" value="Ajouter un donateur"></a>
<a href="archiveInscrit.zip" download><input class="btn btn-secondary export" type="submit" value="Télécharger l'export"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr class="text-align">
        <th  style="text-align: center;">Civilité</th>
        <th  style="text-align: center;">Nom</th>
        <th style="text-align: center;">Prénom</th>
        <th style="text-align: center;">Mail</th>
        <th style="text-align: center;">Téléphone</th>
        <th style="text-align: center;">Montant</th>
        <th style="text-align: center;">Date du don</th>
        <th  style="text-align: center;">Age</th>
        <th style="text-align: center;">Modifier</th>
        <th style="text-align: center;">Supprimer</th>

    </tr>
    <tr>

<?php
//  $fichier = fopen("export/exportInscritDonateur.csv", "w+");
//  $chaine = " ";

$fichier = fopen("export/exportInscritDonateur.csv", "w+");
$chaine = "\"Civilité\";\"Nom\";\"Prenom\";\"Mail\";\"Téléphone\";\"Montant\";\"Date de l'inscription\";\"Age\";\r\n";
fwrite($fichier, $chaine);

?>
    <?php
  // Initialiser le tableau des décomptes de mails
//   $mails = array();

  // Parcourir le tableau des donateurs
  foreach ($donateurs as $donateur):
    //   $mail = $donateur['mail'];
    //   $count = isset($mails[$mail]) ? $mails[$mail] : 0;
    //   $count++;
    //   $mails[$mail] = $count;
        ?>
    
<td>  <?= $donateur['civilite'] ?> </td>
  <td>  <?= $donateur['nom'] ?> </td>
  <td> <?= $donateur['prenom'] ?> </td>
  <td>  <?= $donateur['mail'] ?> </td>
  <td>  0<?= $donateur['numTelephone'] ?> </td>
  <td> <?= $donateur['montant'] ?> </td>
  <td>  <?= $donateur['dateInscription'] ?> </td>
  <td> <?= $donateur['age'] ?> </td>

  <!-- <td><?= $count ?></td> -->
  <td><a  href="<?= "index.php?action=donateurModifier&idInscrit=". $donateur['id']?>"> <input type="submit" class="btn btn-info" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritDonateur" method="post"><td>  <input type="hidden" name="idInscrit"  value="<?= $donateur['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
 


</tr>
<?php


$chaine = "\"".$donateur['civilite']."\";";
$chaine .= "\"".$donateur['nom']."\";";
$chaine .= "\"".$donateur['prenom']."\";";
$chaine .= "\"".$donateur['mail']."\";";
$numeroTelephone = '0'.$donateur['numTelephone'];
$chaine .= "\"".$numeroTelephone."\";";
$chaine .= "\"".$donateur['montant']."\";";
$chaine .= "\"".$donateur['dateInscription']."\";";
$chaine .= "\"".$donateur['age']."\";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>
        <?php
        fclose($fichier);
        ?>
    </tbody>
</table>





<?php
$folderPath = 'export';
$zipFileName = 'archiveInscrit.zip';

$zip = new ZipArchive();
$zip = new ZipArchive();
if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
    // Récupérer la liste des fichiers du dossier
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folderPath),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $name => $file) {
        // S'assurer que le fichier est un fichier et non un dossier
        if (!$file->isDir()) {
            // Obtenir le chemin relatif à partir du dossier "export" sans les dossiers parents
            $relativePath = substr($file->getPathname(), strlen($folderPath) + 1);

            // Ajouter le fichier au ZIP avec le chemin relatif
            $zip->addFile($file->getPathname(), $relativePath);
        }
    }

    // Fermer le ZIP
    $zip->close();

} else {
    echo 'Erreur lors de la création du fichier ZIP.';
}