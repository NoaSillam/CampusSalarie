<article>
    <h1>Liste des documents et videos du themes <?= $theme['libelle'] ?></h1>
</article>


<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table">
    <tbody>
        <tr>

<?php foreach($themeDocs as $themeDoc):?>

   <!-- <td> </td> -->
   <td><?= $theme['libelle'] ?></td>
    <td> <?= $themeDoc['idDocument']?> </td>
    <td> <?= $themeDoc['idVideo']?> </td>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>
<h2>Ajouter un document ou une video a un theme</h2>
<form action="index.php?action=themeDoc" method="post">
    <input type="text" name="idTheme" value="<?= $theme['libelle'] ?>" required>
    <input type="text" name="idDocument" placeholder="idDocument" >
    <input type="text" name="idVideo" placeholder="idVideo" >
    <input type="submit" value="Valider">
</form>


<h2>Supprimer un document et/ou une video a un theme</h2>
<form action="index.php?action=deleteThemeDoc" method="post">
    <input type="text" name="idThemeDoc" value="<?= $theme['libelle'] ?>" />
    <input type="text" name="idDocument" value="<?= $themeDoc['idDocument'] ?>" />
    <input type="text" name="idVideo" value="<?= $themeDoc['idVideo'] ?>" />
    <input type="submit" value="Valider">
</form>


