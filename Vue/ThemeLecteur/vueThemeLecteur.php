<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<!-- <a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un theme"></a> -->
<h1>Liste des Themes</h1>
<table class="table">
    <tbody>
    <tr>
        <th>Libelle</th>
        <th>Descriptif</th>
        <th>Image</th>
        <th>Sous-theme</th>

    </tr>

        <tr>
<?php
foreach($themes as $theme):
?>

   <td><?= $theme['libelle'] ?> </td>
    <td><?= $theme['descriptif'] ?></td>
    <td><img width="300" height="200" src="image/<?= $theme['img'] ?>"></td>
    <td> <a href="<?= "index.php?action=sousThmLecteur&idThemeParent=".$theme['id']?>" > <input type="submit" class="btn btn-primary" style="width: 100%;" value="Sous-Themes" /></a></td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>