
<h2 style="text-align: center;">Modifier une Video</h2>
<form action="index.php?action=modifVideo" id="modifier" method="post">
    <?php foreach($video as $vid):?>
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="<?= $vid['libelle'] ?>" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="lien" placeholder="<?= $vid['lien'] ?>" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="format" placeholder="format" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="duree" placeholder="<?= $vid['duree'] ?>" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="imgApercu" placeholder="imgApercu" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="description" placeholder="<?= $vid['description'] ?>" required>
    <br>
    <input type="datetime-local" style="text-align: center;" class="form-control"  name="dateParution" placeholder="<?= $vid['dateParution'] ?>" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idVideo" value="<?= $vid['idDocVideo'] ?>" readonly="readonly" />
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;"  value="Valider">
    <?php endforeach; ?>
</form>

