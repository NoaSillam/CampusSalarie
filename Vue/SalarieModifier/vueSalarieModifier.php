


<h2 style="text-align: center;">Modifier un salarie</h2>
<form action="index.php?action=modifSalarie" id="modifier" method="post">

<?php foreach($salaries as $salarie):?>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" placeholder="<?= $salarie['nom'] ?>" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" placeholder="<?= $salarie['prenom'] ?>" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="mail" placeholder="<?= $salarie['mail'] ?>" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="pole" placeholder="<?= $salarie['pole'] ?>" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="id" value="<?= $salarie['id'] ?>" readonly="readonly" required>
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;" value="Valider">
    <?php endforeach?>
</form>

