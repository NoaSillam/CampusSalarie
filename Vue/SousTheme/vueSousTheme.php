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
    /* margin-top: -75%; */
    width: 100%;
 }
 td{
    color: black;
 }
 p{
    color: black;
 }
</style>
<br>
<h1 style="text-align: center;">Liste des Sous-thèmes</h1>

<br>
<br>
<!-- <a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un theme"></a> -->
<a href="index.php?action=SousThmeAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter un sous-thème"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
        <th style="text-align: center;">Libellé</th>
        <th style="text-align: center;">Descriptif</th>
        <th style="text-align: center;">Image</th>
        <th style="text-align: center;">Vidéo</th>
        <th style="text-align: center;">Document</th>
        <th style="text-align: center;">Modfier</th>
        <th style="text-align: center;">Supprimer</th>
    </tr>

        <tr>
<?php
foreach($sousThemes as $sousThm):
?>

   <td><?= $sousThm['libelle'] ?> </td>
   <td>
   <?php 
      $description = strip_tags( htmlspecialchars_decode($sousThm['descriptif'])); // Supprime les balises HTML de la description
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
   
    <td><img width="300" height="200" src="image/<?= $sousThm['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=themeVideo&idTheme=".$sousThm['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Vidéo" /></a></td>
    <td> <a href="<?= "index.php?action=themeDocument&idTheme=".$sousThm['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Document" /></a></td>
    <td><a  href="<?= "index.php?action=sousThmModifier&idThemeParent=". $sousThm['id']?>">  <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier"> </a></td>
    <form action="index.php?action=deleteTheme" method="post"><td>  <input type="hidden" class="hidden" name="idTheme" value="<?= $sousThm['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
 

</tr>
        <?php endforeach;?>
    </tbody>
</table>



<br>
<br>
<br>
<br>
