<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    margin-left: 30%;
    width: 50%;
 }
</style>



<h2 style="text-align: center;">Modifier un Benevole</h2>
<form action="index.php?action=modifInscrit" id="modifier" method="post">
<?php foreach($inscrit as $inscrt):?>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" placeholder="<?= $inscrt['nom'] ?>" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" placeholder="<?= $inscrt['prenom'] ?>" required>
    <br>
    <!-- <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="numTelephone" required>
    <br> -->
    <input type="text"  style="text-align: center;" class="form-control" name="mail" placeholder="<?= $inscrt['mail'] ?> " required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="0<?= $inscrt['numTelephone'] ?> " required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="adresse" placeholder="<?= $inscrt['adresse'] ?> " required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="codePostal" placeholder="<?= $inscrt['codePostal'] ?> " required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="id" value="<?= $inscrt['id'] ?> " readonly="readonly" required>
    <br>
    <input type="submit"  style="text-align: center; margin-left: 25%;" class="btn btn-primary milieu"  value="Valider">
    <br>
    <?php endforeach;?>
</form>