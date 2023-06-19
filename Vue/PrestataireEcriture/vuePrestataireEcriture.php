
<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<br>
<h1 style="text-align: center;">Liste des Prestataires</h1>
<br>
<br>

<a href="index.php?action=accueilAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter un prestataire"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
    <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Logo</th>
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Code Postal</th>
            <th style="text-align: center;">Les référents associés</th>
            <th style="text-align: center;">Les cartographies associées</th>
            <th style="text-align: center;">Modifier</th>
            
        </tr>
        <tr>
<?php foreach($prestataires as $prestataire):
?>

   <td> <?= $prestataire['nomPrestataire'] ?></td>
   <td width="10%"><img src="<?= $prestataire['logo'] ?>" width="100%" height="100%" alt=""></td>
    <td>
   <?php 
      $description = strip_tags(htmlspecialchars_decode($prestataire['Description'])); // Supprime les balises HTML de la description
      if (strlen($description) > 255) {
         $description = substr($description, 0, 255);
         $last_space = strrpos($description, ' ');
         if ($last_space !== false) {
            $description = substr($description, 0, $last_space) . '...';
         } else {
            $description .= '...';
         }
      }
      echo $description;
   ?>
</td>
    <td><?= $prestataire['codePostal'] ?></td>
    <td> <a href="<?= "index.php?action=referentEcriture&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary"  value="referent" /></a></td>
    <td> <a href="<?= "index.php?action=prestEcriture&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Animation Partenaire" /></a></td>
    <td><a  href="<?= "index.php?action=prestataireModifier&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-info" value="Modifier" /></a></td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>