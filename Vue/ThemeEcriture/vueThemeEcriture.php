<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un theme"></a>
<h1>Liste des Themes</h1>
<table class="table">
    <tbody>
    <tr>
        <th>Libelle</th>
        <th>Descriptif</th>
        <th>Image</th>
        <th>Sous-theme</th>
        <th>Modfier</th>
        <!-- <th>Supprimer</th> -->
    </tr>

        <tr>
<?php
foreach($themes as $theme):
?>

   <td><?= $theme['libelle'] ?> </td>
    <td><?= $theme['descriptif'] ?></td>
    <td><img width="300" height="200" src="image/<?= $theme['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=sousThmEcriture&idThemeParent=".$theme['id']?>" > <input type="submit" class="btn btn-primary" value="Sous-Themes" /></a></td>
    <td><a href="<?="index.php?action=themesIdTheme&idTheme=".$theme['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier"> </a></td>
    <!-- <form action="index.php?action=deleteTheme" method="post"><td>  <input type="text" name="idTheme" value="<?= $theme['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->

</tr>
        <?php endforeach;?>
    </tbody>
</table>