<h2 style="text-align: center;">Modifier un Document</h2>
<form action="index.php?action=modifDocument" id="modifier" method="post">
    <?php foreach($document as $doc): ?>
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="<?= $doc['libelle'] ?>" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required>
    <br> -->
    <input type="file" style="text-align: center;" class="form-control" name="lien" placeholder="<?= $doc['lien'] ?>" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="description" placeholder="<?= $doc['description'] ?>" required>
    <br>
    <input type="datetime-local" style="text-align: center;" class="form-control" name="dateParution" placeholder="<?= $doc['dateParution'] ?>" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idDocument" value="<?= $doc['idDocVideo'] ?>"  readonly="readonly"/>
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu" value="Valider">
    <?php endforeach;?>
</form>