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
<h1 style="text-align: center;">Liste des Themes</h1>

<br>
<br>
<a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-success"style="width: 20%; float: left;" value="Ajouter un theme"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
        <th style="text-align: center;">Libelle</th>
        <th style="text-align: center;">Descriptif</th>
        <th style="text-align: center;">Image</th>
        <th style="text-align: center;">Sous-theme</th>
        <th style="text-align: center;">Video</th>
        <th style="text-align: center;">Document</th>
        <th style="text-align: center;">Modfier</th>
        <!-- <th>Supprimer</th> -->
    </tr>

        <tr>
<?php
foreach($themes as $theme):
?>

   <td><?= $theme['libelle'] ?> </td>
   <td>
   <?php 
      $description = strip_tags($theme['descriptif']); // Supprime les balises HTML de la description
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
    <td><img width="300" height="200" src="image/<?= $theme['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=sousThmEcriture&idThemeParent=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Sous-Themes" /></a></td>
    <td> <a href="<?= "index.php?action=themeVideoEcriture&idTheme=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Vidéo" /></a></td>
    <td> <a href="<?= "index.php?action=themeDocumentEcriture&idTheme=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Document" /></a></td>
    <td><a href="<?="index.php?action=themesIdTheme&idTheme=".$theme['id']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier"> </a></td>
    <!-- <form action="index.php?action=deleteTheme" method="post"><td>  <input type="text" name="idTheme" value="<?= $theme['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->

</tr>
        <?php endforeach;?>
    </tbody>
</table>