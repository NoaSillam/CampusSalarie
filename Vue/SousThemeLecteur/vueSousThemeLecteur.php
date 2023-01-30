<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>
<a href="index.php?action=SousThmeAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un sous-theme"></a>
<!-- <a href="index.php?action=themesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un theme"></a> -->
<h1>Liste des Sous Themes</h1>
<table class="table">
    <tbody>
    <tr>
        <th>Libelle</th>
        <th>Descriptif</th>
        <th>Image</th>

    </tr>

        <tr>
<?php
foreach($sousThemes as $sousThm):
?>

   <td><?= $sousThm['libelle'] ?> </td>
    <td><?= $sousThm['descriptif'] ?></td>
    <td><img width="300" height="200" src="image/<?= $sousThm['img'] ?>"></td>
 

</tr>
        <?php endforeach;?>
    </tbody>
</table>



<br>
<br>
<br>
<br>
