

<h2 style="text-align: center;">Modifier un Referent</h2>
<form action="index.php?action=modifReferent" id="modifier" method="post">
    <?php foreach($referent as $ref):?>
    <input type="text"  style="text-align: center;"  class="form-control" name="mail" placeholder="<?= $ref['mail']?>" required>
    <br>
    <input type="text"  style="text-align: center;"  class="form-control" name="numTelephone" placeholder="0<?= $ref['numTelephone']?>" required>
    <br>
    <input type="text"  style="text-align: center;"  class="form-control" name="idReferent" value="<?= $ref['idReferent']?>" readonly="reaonly" />
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu"  value="Valider">
    <?php endforeach;?>
</form>

