<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 p{
    color: black;
 }
</style>
<br>
<a href="index.php?action=SousThmeAjouter"><input type="submit" class="btn btn-success" style="width: 30%; float: left;" value="Ajouter un sous-theme"></a>
<br>
<br>
<!-- <a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un theme"></a> -->
<h1>Liste des Sous Themes</h1>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
        <th style="text-align: center;">Libelle</th>
        <th style="text-align: center;">Descriptif</th>
        <th style="text-align: center;">Image</th>
        <th style="text-align: center;">Video</th>
        <th style="text-align: center;">Document</th>
        <th style="text-align: center;">Modfier</th>
        <!-- <th>Supprimer</th> -->
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
    <td><img width="300" height="200" src="<?= $sousThm['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=themeVideoEcriture&idTheme=".$sousThm['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Vidéo" /></a></td>
    <td> <a href="<?= "index.php?action=themeDocumentEcriture&idTheme=".$sousThm['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Document" /></a></td>
    <td><a  href="<?= "index.php?action=sousThmModifier&idThemeParent=". $sousThm['id']?>">  <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier"> </a></td>
    
    <!-- <form action="index.php?action=deleteTheme" method="post"><td>  <input type="text" name="idTheme" value="<?= $sousThm['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
 

</tr>
        <?php endforeach;?>
    </tbody>
</table>



<br>
<br>
<br>
<br>
