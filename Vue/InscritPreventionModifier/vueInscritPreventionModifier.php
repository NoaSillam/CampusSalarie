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
 label{
    font-weight : bold;
    font-size: 20px;
 }
</style>



<h2 style="text-align: center;">Modifier une inscription prévention</h2>
<form action="index.php?action=modifInscrit" id="modifier" method="post">
<?php foreach($inscrit as $inscrt):?>
<label for="nom" style="display: flex; align-items: center; justify-content: center;" >Nom de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="nom" value="<?= $inscrt['nom'] ?>" required>
    </div>
    </div>
  <br>
    <label for="prenom" style="display: flex; align-items: center; justify-content: center;">Prenom de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" value="<?= $inscrt['prenom'] ?>" required>
    </div>
    </div>
   <br>
    <!-- <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="numTelephone" required>
    <br> -->
    <label for="mail" style="display: flex; align-items: center; justify-content: center;">Mail de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text"  style="text-align: center;" class="form-control" name="mail" value="<?= $inscrt['mail'] ?> " required>
    </div>
    </div>
   <br>
    <label for="numTelephone" style="display: flex; align-items: center; justify-content: center;">Telephone de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" value="0<?= $inscrt['numTelephone'] ?> " required>
    </div>
    </div>
    <br>
    <label for="adresse" style="display: flex; align-items: center; justify-content: center;">Adresse postal de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text"  style="text-align: center;" class="form-control" name="adresse" value="<?= $inscrt['adresse'] ?> " required>
    </div>
    </div>
   <br>
    <label for="codePostal" style="display: flex; align-items: center; justify-content: center;">Code postal de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="codePostal" value="<?= $inscrt['codePostal'] ?> " required>
    </div>
    </div>
   <br>
    <label for="ville" style="display: flex; align-items: center; justify-content: center;">Ville de l'inscrit à la prévention:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="ville" value="<?= $inscrt['ville'] ?> " required>
    </div>
    </div>
    <br>
    <input type="hidden"  style="text-align: center;" class="form-control" name="id" value="<?= $inscrt['id'] ?> " readonly="readonly" required>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit"  style="text-align: center; width:30%;" class="btn btn-primary "  value="Valider">
    </div>
    <br>
    <?php endforeach;?>
</form>