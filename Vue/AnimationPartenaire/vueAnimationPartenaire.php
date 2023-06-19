
<style>
/* .scroll {
  border: 1px solid #333333;
  max-width: 500px;
  max-height: 300px;
  overflow-y: scroll;
} */
/* .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
p{
    color: black;
}
.hidden{
    visibility: hidden;
 }
 .supprimer{
    /* margin-top: -95%; */
    /* width: 100%;
 }
 .table{
    margin-left: -5%;
 } */ 
 .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 .hidden{
    visibility: hidden;
 }
 .supprimer{
 
    width: 100%;
 }
 
</style>
<br>

<article>
    <h1 style="text-align: center;">Liste des Cartographies du <?= $prestataire['nomPrestataire'] ?></h1>
</article>
<br>
<br>
<a href="index.php?action=animPartenaireAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter une Cartographie"></a>
<br>
<br>
<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Image</th>
            <th style="text-align: center;">adresse</th>
            <th style="text-align: center;">code postal</th>
            <th style="text-align: center;">ville</th>
            <th style="text-align: center;">descriptif</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>
        </tr>
        <tr>

<?php foreach($animationPartenaires as $animationPartenaire):?>

   <!-- <td> </td> -->
   <td><?= $animationPartenaire['nom'] ?></td>
   <td width="10%"> <img src="<?= $animationPartenaire['img'] ?>" style="width: 300%; height:300%;" class="img-fluid" alt=""></td>
    <td > <?= $animationPartenaire['adresseAnim']?> </td>
    <td> <?= $animationPartenaire['codePostalAnim']?> </td>
    <td> <?= $animationPartenaire['villeAnim']?> </td>
    <td width="10px">
   <?php 
      $description = strip_tags( htmlspecialchars_decode($animationPartenaire['descriptif'])); // Supprime les balises HTML de la description
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
 
    <td><a  href="<?= "index.php?action=animationPartenaireModifier&idAnimationPartenaire=". $animationPartenaire['idAnimPartenaire']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier" /></a></td>
    <form action="index.php?action=deleteAnimationPartenaire" method="post"><td>  <input type="hidden" name="idAnimationPartenaire" class="hidden" value="<?= $animationPartenaire['idAnimPartenaire'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>






