<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>
<h2 style="text-align: center;">Modifier un sous-theme</h2>
<form action="index.php?action=modifTheme"  method="post">

<?php foreach($sousThemes as $sousThm): ?>
    <input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="<?= $sousThm['libelle'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="descriptif" placeholder="<?= $sousThm['descriptif'] ?>" required>
    <br>
    <input type="file" style="text-align: center;"  class="form-control" name="img" placeholder=" <?= $sousThm['img'] ?>" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idThemeParent" value="<?= $sousThm['idThemeParent'] ?> " readonly="readonly" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="id" value="<?= $sousThm['id'] ?> " readonly="readonly" required>
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;"  value="Valider">
    <?php endforeach;?>
</form>