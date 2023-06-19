
<style>
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
            <th style="text-align: center;"> Supprimer</th>
        </tr>
        <tr>
<?php foreach($prestataires as $prestataire):

?>

   <td> <?= $prestataire['nomPrestataire'] ?></td>
    <td width="10%"><img src="<?= $prestataire['logo'] ?>" width="100%" height="100%" class="img-fluid" alt=""></td>
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
    <td> <a href="<?= "index.php?action=prestataire&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Référent" /></a></td>
    <td> <a href="<?= "index.php?action=prest&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Cartographies" /></a></td>
    <td><a  href="<?= "index.php?action=prestataireModifier&idPrestataire=". $prestataire['id']?>"> <input type="submit" style="width: 100%;" class="btn btn-info" value="Modifier" /></a></td>
    <form action="index.php?action=deletePrestataire" method="post">
      <td>  
      <input type="hidden" class="hidden" name="idPrestataire" value="<?= $prestataire['id'] ?>" readonly="readonly" /> 
      <input type="submit" class="btn btn-danger supprimer" value="Supprimer" />
      </td>
   </form>
</tr>
        <?php endforeach;?>
    </tbody>
</table>


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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!-- 
<h2>Modifier un Prestataire</h2>
<form action="index.php?action=modifPrestataire" method="post">
    <input type="text" name="nomPrestataire" placeholder="Nom du Prestataire" required>
    <input type="text" name="logo" placeholder="logo" required>
    <input type="text" name="adresse" placeholder="adresse" required>
    <input type="text" name="codePostal" placeholder="code Postal" required>
    <input type="text" name="id" placeholder="id" required>
    <input type="submit" value="Valider">
</form> -->



