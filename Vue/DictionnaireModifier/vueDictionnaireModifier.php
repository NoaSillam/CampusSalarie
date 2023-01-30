<h2 style="text-align: center;">Modifier un Dictionnaire</h2>
<form action="index.php?action=modifDictionnaire" id="modifier" method="post">
    <?php foreach($dictionnaire as $dic): ?>
    <input type="text" style="text-align: center;"  class="form-control" name="definition" placeholder="<?= $dic['definition'] ?>" required>
    <br>
    <input type="file" style="text-align: center;"  class="form-control" name="img" placeholder="<?= $dic['img'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="idDictionnaire" value="<?= $dic['idDictionnaire'] ?>" readonly="readonly" />
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider">
    <?php endforeach;?>
</form>
