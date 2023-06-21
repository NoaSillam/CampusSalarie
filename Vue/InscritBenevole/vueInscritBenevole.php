<style>
     .hidden{
    visibility: hidden;
 }
 .supprimer{
    
    width: 85%;
 }
 .export{
float: right;
 }
</style>

<br>

<h1 style="text-align: center;">Les bénévoles</h1>
<br>
<br>

<a href="index.php?action=benevoleAjouter"><input type="submit" class="btn btn-success" value="Ajouter un bénévole"></a>
<a href="archiveInscrit.zip" download><input class="btn btn-secondary export" type="submit" value="Télécharger l'export"></a>
<br>
<br>
<table  class="table table-bordered align-middle">
    <tbody>
    <tr class="text-align">
        <th style="text-align: center;">Civilité</th>
        <th style="text-align: center;">Nom</th>
        <th style="text-align: center;">Prénom</th>
        <th style="text-align: center;">Mail</th>
        <th style="text-align: center;">Téléphone</th>
        <th  style="text-align: center;">Date de l'inscription</th>
        <th style="text-align: center;">Age</th>
        <th style="text-align: center;" >Mission</th>
        <th style="text-align: center;">Modifier</th>
        <th style="text-align: center;">Supprimer</th>

    </tr>
        <tr>

        <?php
         $fichier = fopen("export/exportInscritBenevole.csv", "w+");
        $chaine = "\"Civilité\";\"Nom\";\"Prénom\";\"Mail\";\"Téléphone\";\"Date de l'inscription\";\"Age\";\"Titre de la mission\";\"Commentaire\"\r\n";
        fwrite($fichier, $chaine);
    
        ?>
    <?php
    foreach($benevoles as $benevole):
        ?>

 <td><?= $benevole['civilite'] ?> </td>
  <td><?= $benevole['nom'] ?> </td>
  <td>  <?= $benevole['prenom'] ?> </td>
  <td> <?= $benevole['mail'] ?></td>
  <td>  0<?= $benevole['numTelephone'] ?></td>
  <td > <?= $benevole['dateInscription'] ?> </td>
  <td> <?= $benevole['age'] ?></td>
  <td> <?= $benevole['titre'] ?></td>
  <td><a  href="<?= "index.php?action=benevoleModifier&idInscrit=". $benevole['id']?>"> <input type="submit" class="btn btn-info" style="margin-top: 3%;" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritBenevole" method="post"><td>  <input type="hidden" name="idInscrit"  value="<?= $benevole['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
</tr>
<?php

$chaine = "\"".$benevole['civilite']."\";";
$chaine .= "\"".$benevole['nom']."\";";
$chaine .= "\"".$benevole['prenom']."\";";
$chaine .= "\"".$benevole['mail']."\";";
$chaine .= "\""."0".$benevole['numTelephone']."\";";
$chaine .= "".$benevole['dateInscription'].";";
$chaine .= "".$benevole['age'].";";
$chaine .= "".$benevole['titre'].";";
$chaine .= "".$benevole['commentaire'].";";
fwrite($fichier, $chaine."\r\n");

?>
        <?php endforeach;?>

        <?php
        fclose($fichier);
        
        ?>
    </tbody>
</table>
<!-- 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#benevolesTable').DataTable({
        "columnDefs": [{
            "targets": "sortable",
            "orderable": true
        }],
        "order": [[6, 'asc']]
    });
});
</script> -->

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

