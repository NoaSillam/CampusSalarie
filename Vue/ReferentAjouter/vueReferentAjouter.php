<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>



<h2 style="text-align: center;">Ajouter un Referent</h2>
<form action="index.php?action=referent" method="post">
    <input type="text" style="text-align: center;" class="form-control" name="nom" placeholder="Nom" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="prenom" placeholder="prenom" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="mail" placeholder="mail" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="numTelephone" placeholder="numero de telephone" required>
    <br>
    <select name="id" class="form-select" id="">
    <?php foreach($referents as $ref):?>
        <option value="<?= $ref['id'] ?>"><?= $ref['nomPrestataire'] ?></option>
        <?php endforeach; ?>
    </select>
    
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>