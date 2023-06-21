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
   
    width: 70%;
 }
 .export{
float: right;
 }
</style>
<br>

<h1 style="text-align: center;">Les Newsletters</h1>
<br>
<br>
<a href="index.php?action=NewsletterAjouter"><input type="submit" class="btn btn-success" value="Ajouter une personne à une newsletter"></a>
<a href="archiveInscrit.zip" download><input class="btn btn-secondary export" type="submit" value="Télécharger l'export"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr class="text-align">
        <th style="text-align: center;">Civilité</th>
        <th style="text-align: center;">Nom</th>
        <th style="text-align: center;">Prénom</th>
        <th style="text-align: center;">Mail</th>
        <th style="text-align: center;">Telephone</th>
        <th style="text-align: center;">Date de l'inscription</th>
        <th style="text-align: center;">Age</th>
        <th style="text-align: center;">Modifier</th>
        <th style="text-align: center;">Supprimer</th>
        

    </tr>
    <tr>
<?php
         $fichier = fopen("export/exportInscritNewsletter.csv", "w+");
         $chaine = "\"Civilité\";\"Nom\";\"Prenom\";\"Mail\";\"Téléphone\";\"Date de l'inscription\";\"Age\"\r\n";
        fwrite($fichier, $chaine);
    
        ?>
    <?php
    foreach($newsletters as $newsletter):
        ?>
  <td>  <?= $newsletter['civilite'] ?> </td>
  <td>  <?= $newsletter['nom'] ?> </td>
  <td>  <?= $newsletter['prenom'] ?></td>
  <td>  <?= $newsletter['mail'] ?> </td>
  <td>  0<?= $newsletter['numTelephone'] ?> </td>
  <td>  <?= $newsletter['dateInscription'] ?> </td>
  <td> <?= $newsletter['age'] ?></td>
  <td><a  href="<?= "index.php?action=NewsletterModifier&idInscrit=". $newsletter['id']?>"> <input type="submit" class="btn btn-info" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritNewsletter" method="post"><td>  <input type="hidden" name="idInscrit"  value="<?= $newsletter['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
 


</tr>
<?php

$chaine = "\"".$newsletter['civilite']."\";";
$chaine .= "\"".$newsletter['nom']."\";";
$chaine .= "\"".$newsletter['prenom']."\";";
$chaine .= "\"".$newsletter['mail']."\";";
$chaine .= "\""."0".$newsletter['numTelephone']."\";";
$chaine .= "\"".$newsletter['dateInscription']."\";";
$chaine .= "\"".$newsletter['age']."\";";

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