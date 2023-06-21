<style>
     .export{
float: right;
 }
</style>

<?php
    foreach($mission as $miss):
        ?>
<h1 style="text-align: center;">Les bénévoles de la mission <span style="color: red;"><?= $miss['titre'] ?> </span></h1>
<?php endforeach;?>
<a href="archiveInscrit.zip" download><input class="btn btn-secondary export" type="submit" value="Télécharger l'export"></a>
<table class="table table-bordered align-middle">
    <tbody>
    <tr class="text-align">
        <th style="text-align: center;">Civilité</th>
        <th style="text-align: center;">Nom</th>
        <th style="text-align: center;">Prénom</th>
        <th style="text-align: center;">Mail</th>
        <th style="text-align: center;">Date de l'inscription</th>
        <th style="text-align: center;">Age</th>
        <th style="text-align: center;">Commentaire</th>
        <th style="text-align: center;">Modifier</th>
        <th style="text-align: center;">Supprimer</th>

    </tr>
        <tr>
    <?php
    foreach($inscrits as $inscrit):
        ?>
     
 <td><?= $inscrit['civilite'] ?> </td>
  <td><?= $inscrit['nom'] ?> </td>
  <td>  <?= $inscrit['prenom'] ?> </td>
  <td> <?= $inscrit['mail'] ?></td>
  <td> <?= $inscrit['dateInscription'] ?> </td>
  <td> <?= $inscrit['age'] ?></td>
  <td><?= $inscrit['commentaire'] ?></td>
  <td><a  href="<?= "index.php?action=benevoleModifier&idInscrit=". $inscrit['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritBenevole" method="post"><td>  <input type="hidden" name="idInscrit" value="<?= $inscrit['id'] ?>" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
  
 


</tr>
        <?php endforeach;?>
    </tbody>
</table>


<!-- 
<h2 style="text-align: center;">Modifier un benevole</h2>
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
</form>
 -->
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