
<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<h2 style="text-align: center;">Ajouter un sous-theme</h2>
<form action="index.php?action=ajoutSousTheme" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="Libelle du Theme" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="descriptif" placeholder="descriptif" required>
    <br>
    <input type="file" style="text-align: center;" class="form-control" name="img" placeholder="img" required>
    <br>
    <select name="idThemeParent" id="" class="form-select" >
    <?php foreach($sousThemes as $sth):?>
        <option value="<?= $sth['id'] ?>"><?= $sth['libelle'] ?></option>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="idThemeParent" placeholder="idThemeParent" required> -->
    <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>