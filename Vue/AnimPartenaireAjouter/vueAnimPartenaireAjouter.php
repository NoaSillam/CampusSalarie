<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>



<h2 style="text-align: center;">Ajouter une Animation Partenaire</h2>
<form action="index.php?action=animationPartenaire" method="post">
    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
    <br>
    <input type="text" class="form-control" name="lienVideo" placeholder="lienVideo" required>
    <br>
    <input type="file" class="form-control" name="lienPdf" placeholder="lienPdf" required>
    <br>
    <input type="text" class="form-control" name="adresse" placeholder="adresse" required>
    <br>
    <input type="text" class="form-control" name="codePostal" placeholder="code Postal" required>
    <br>
    <input type="text" class="form-control" name="ville" placeholder="ville" required>
    <br>
    <input type="text" class="form-control" name="type" placeholder="type" required>
    <br>
    <input type="text" class="form-control" name="img" placeholder="img" required>
    <br>
    <input type="text" class="form-control" name="descriptif" placeholder="descriptif" required>
    <br>
    <input type="datetime-local" class="form-control" name="dateParution" placeholder="dateParution" required>
    <br>

    <select name="idPrestataire" class="form-select" id="">
    <?php foreach($animationPartenaires as $anim):?>
        <option value="<?= $anim['id'] ?>"><?= $anim['nomPrestataire'] ?></option>
        <?php endforeach; ?>
    </select>

  
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>