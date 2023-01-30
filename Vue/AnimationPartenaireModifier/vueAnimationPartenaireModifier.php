
<h2 style="text-align: center;">Modifier une Animation Partenaire</h2>
<form action="index.php?action=modifAnimationPrestataire" id="modifier" method="post">
    <?php foreach($animationPartenaire as $anim):?>
    <input type="text" style="text-align: center;"  class="form-control" name="nom" placeholder="<?= $anim['nom']?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="lienVideo" placeholder="<?= $anim['lienVideo']?>" required>
    <br>
    <input type="file" style="text-align: center;"  class="form-control" name="lienPdf" placeholder="<?= $anim['lienPdf'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="adresse" placeholder="<?= $anim['adresseAnim'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="codePostal" placeholder="<?= $anim['codePostalAnim'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="ville" placeholder="<?= $anim['villeAnim'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="idAnimationPartenaire" value="<?= $anim['idAnimPartenaire'] ?>" readonly="readonly" />
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider">
    <?php endforeach;?>
</form>