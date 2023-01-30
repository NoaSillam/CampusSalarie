
<h2 style="text-align: center;">Modifier un Prestataire</h2>
<form action="index.php?action=modifPrestataire" id="modifier" method="post">
<?php foreach($prestataire as $presta):?>
    <input type="text"  style="text-align: center;"  class="form-control"  name="nomPrestataire" value="<?= $presta['nomPrestataire'] ?>">
    <br>
    <input type="file"  style="text-align: center;"  class="form-control"  name="logo" value="<?= $presta['logo']?>">
    <br>
    <input type="text"  style="text-align: center;"  class="form-control"  name="adresse" value=" <?= $presta['adresse']?> ">
    <br>
    <input type="text"  style="text-align: center;"  class="form-control"  name="codePostal" value="<?= $presta['codePostal'] ?> ">
    <br>
    <input type="text"  style="text-align: center;"  class="form-control"  name="id" value="<?= $presta['id']?>" readonly="readonly">
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu"  value="Valider">
    <?php endforeach?>
</form>
