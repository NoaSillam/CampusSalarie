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
 p{
    color: black;
 }

</style>
<br>
<h1 style="text-align: center;">Liste des thèmes</h1>
<br>
<br>
<a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter un thème"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
    <tr>
        <th style="text-align: center;">Libellé</th>
        <th style="text-align: center;">Descriptif</th>
        <th style="text-align: center;">Image</th>
        <th style="text-align: center;">Sous-thème</th>
        <th style="text-align: center;">Vidéo</th>
        <th style="text-align: center;">Document</th>
        <th style="text-align: center;">Modfier</th>
        <th style="text-align: center;">Supprimer</th>
    </tr>

        <tr>
<?php
foreach($themes as $theme):
?>

   <td><?= $theme['libelle'] ?> </td>
   <td>
   <?php 
      $description = strip_tags(htmlspecialchars_decode( $theme['descriptif'])); // Supprime les balises HTML de la description
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
   
    <td><img width="300" height="200" src="<?= $theme['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=sousThm&idThemeParent=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Sous-thèmes" /></a></td>
    <td> <a href="<?= "index.php?action=themeVideo&idTheme=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Vidéo" /></a></td>
    <td> <a href="<?= "index.php?action=themeDocument&idTheme=".$theme['id']?>" > <input type="submit" style="width: 100%;" class="btn btn-primary" value="Document" /></a></td>
    <td><a href="<?="index.php?action=themesIdTheme&idTheme=".$theme['id']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier"> </a></td>
    <form action="index.php?action=deleteTheme" method="post"><td>  <input type="hidden" class="hidden" name="idTheme" value="<?= $theme['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>

</tr>
        <?php endforeach;?>
    </tbody>
</table>

<!-- <h2>Ajouter un theme</h2>
<form action="index.php?action=ajoutTheme" method="post">
<input type="text" name="id" placeholder="id" required>
    <input type="text" name="libelle" placeholder="Libelle du Theme" required>
    <input type="text" name="descriptif" placeholder="descriptif" required>
    <input type="text" name="img" placeholder="img" required>
    <input type="submit" value="Valider">
</form> -->

<!-- 
<h2>Supprimer un theme</h2>
<form action="index.php?action=deleteTheme" method="post">
    <input type="text" name="idTheme" value="" />
    <input type="submit" value="Valider">
</form> -->