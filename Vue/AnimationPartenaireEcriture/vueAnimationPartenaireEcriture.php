
<style>
    .scroll
{
    border: 1px solid #333333;
    width: 200px;
  height: 200px;
  overflow-y: scroll;
}
.hidden{
    visibility: hidden;
 }
 .supprimer{
    margin-top: -75%;
    width: 80%;
 }
</style>
<br>
<article>
    <h1 style="text-align: center;">Liste des Cartographies du <?= $prestataire['nomPrestataire'] ?></h1>
</article>
<br>
<br>
<a href="index.php?action=animPartenaireAjouter"><input type="submit" class="btn btn-success" style="width: 30%; float:left;" value="Ajouter une Animation Partenaire"></a>
<br>
<br>

<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
            <th style="text-align: center;">Nom</th>
          
            <th style="text-align: center;">adresse</th>
            <th style="text-align: center;">code postal</th>
            <th style="text-align: center;">ville</th>
       
            <th style="text-align: center;">descriptif</th>
            <th style="text-align: center;">dateParution</th>
            <th style="text-align: center;">Modifier</th>
            <!-- <th>Supprimer</th> -->
        </tr>
        <tr>

<?php foreach($animationPartenaires as $animationPartenaire):?>

   <!-- <td> </td> -->
   <td><?= $animationPartenaire['nom'] ?></td>
    <td> <?= $animationPartenaire['adresseAnim']?> </td>
    <td> <?= $animationPartenaire['codePostalAnim']?> </td>
    <td> <?= $animationPartenaire['villeAnim']?> </td>

    <td>
   <?php 
      $description = strip_tags($animationPartenaire['descriptif']); // Supprime les balises HTML de la description
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
    <td> <?= $animationPartenaire['dateParution']?> </td>
    <td><a  href="<?= "index.php?action=animationPartenaireModifier&idAnimationPartenaire=". $animationPartenaire['idAnimPartenaire']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier" /></a></td>
    <!-- <form action="index.php?action=deleteAnimationPartenaire" method="post"><td>  <input type="text" name="idAnimationPartenaire" value="<?= $animationPartenaire['idAnimPartenaire'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>