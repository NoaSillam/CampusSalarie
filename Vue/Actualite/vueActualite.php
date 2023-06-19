
<style>
.scroll {
  border: 1px solid #333333;
  max-width: 500px;
  max-height: 300px;
  overflow-y: scroll;
}
p{
    color: black;
}
.hidden{
    visibility: hidden;
 }
 .supprimer{
    /* margin-top: -95%; */
    width: 100%;
 }
 .table{
    margin-left: -5%;
 }
</style>
<br>

<article>
    <h1 style="text-align: center;">Liste des actualités du référent: <?= $referent['nom'] ?>, <?= $referent['prenom'] ?> </h1>
</article>

<br>
<br>
<a href="index.php?action=actualiteAjouter"><input type="submit" class="btn btn-success" style="width: 20%;  margin-left: -5%;" value="Ajouter une actualité"></a>
<br>
<br>
<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
            <th style="text-align: center;">Nom</th>
          <th style="text-align: center;"> Image</th>
          <th style="text-align: center;">Description</th>
          <th style="text-align: center;">Lien</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>
        </tr>
        <tr>

<?php foreach($actualites as $actualite):?>

   <!-- <td> </td> -->
   <td><?= $actualite['NomActualite'] ?></td>
   <td width="10%"> <img src="<?= $actualite['imgActualite']?>" class="img-top" width="100%" height="100%" alt="">  </td>
   <td>
   <?php 
      $description = strip_tags(htmlspecialchars_decode($actualite['DescriptionActualite'])); // Supprime les balises HTML de la description
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
   
    <td> <?= $actualite['LienActualite']?> </td>
    <td><a  href="<?= "index.php?action=actualiterModifier&idActualite=". $actualite['idActualite']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier" /></a></td>
    <form action="index.php?action=deleteActualite" method="post"> <td>  <input type="hidden" name="idActualite" class="hidden" value="<?= $actualite['idActualite'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
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






