<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
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
 label .required {
  color: red;
}
.required{
     color: red;  
}
</style>



<h2 style="text-align: center;">Modifier un donateur</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifInscrit" id="modifier" method="post">
<?php foreach($inscrit as $inscrt):?>

<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 45%;">Nom du donateur : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 60%;" class="form-control" name="nom" value="<?= $inscrt['nom'] ?>" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 70%;">Prénom du donateur : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 70%;" class="form-control" name="prenom" value="<?= $inscrt['prenom'] ?>" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label" style="width: 50%;">Mail du donateur : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 70%;" class="form-control" name="mail" value="<?= $inscrt['mail'] ?>" required>
  </div>
</div>
<br>
<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="numTelephone" class="col-form-label " style="width: 55%;">Téléphone du donateur : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 40%" class="form-control" name="numTelephone" value="0<?= $inscrt['numTelephone'] ?>" required>
  </div>
  <div class="col-md-6 form-group d-flex align-items-center">
  <label for="adresse" class="col-form-label" style="width: 100%;">Adresse postal du donateur : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 100%;" class="form-control" name="adresse" value="<?= $inscrt['adresse'] ?>" required>
  </div>
  </div>
  <br>
  <div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="codePostal" class="col-form-label" style="width: 100%;">Code postal du donateur : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 50%;" class="form-control" name="codePostal" value="<?= $inscrt['codePostal'] ?>" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="ville" class="col-form-label" style="width: 65%;">Ville du donateur : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="ville" value="<?= $inscrt['ville'] ?>" required>
  </div>
</div>

<!-- 
<label for="nom" style="display: flex; align-items: center; justify-content: center;">Nom du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="nom" value="<?= $inscrt['nom'] ?>" required>
    </div>
    </div>
  <br>
    <label for="prenom" style="display: flex; align-items: center; justify-content: center;">Prenom du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" value="<?= $inscrt['prenom'] ?>" required>
    </div>
    </div>
   <br>
   <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="numTelephone" required>
    <br> -->
    <!-- <label for="mail" style="display: flex; align-items: center; justify-content: center;">Mail du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text"  style="text-align: center;" class="form-control" name="mail" value="<?= $inscrt['mail'] ?> " required>
    </div>
    </div>
    <br>
    <label for="numTelephone" style="display: flex; align-items: center; justify-content: center;">Telephone du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" value="0<?= $inscrt['numTelephone'] ?> " required>
    </div>
    </div>
   <br>
    <label for="adresse" style="display: flex; align-items: center; justify-content: center;">Adresse postal du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text"  style="text-align: center;" class="form-control" name="adresse" value="<?= $inscrt['adresse'] ?> " required>
    </div>
    </div>
    <br>
    <label for="codePostal" style="display: flex; align-items: center; justify-content: center;">Code postal du donateur:</label>

    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="codePostal" value="<?= $inscrt['codePostal'] ?> " required>
    </div>
    </div>
<br>
    <label for="ville" style="display: flex; align-items: center; justify-content: center;">Ville du donateur:</label>
 
    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="ville" value="<?= $inscrt['ville'] ?> " required>
    </div>
    </div>
    <br> -->
    <br>
    <input type="hidden"  style="text-align: center;" class="form-control" name="id" value="<?= $inscrt['id'] ?> " readonly="readonly" required>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <br>
    <?php endforeach;?>
</form>
</div>