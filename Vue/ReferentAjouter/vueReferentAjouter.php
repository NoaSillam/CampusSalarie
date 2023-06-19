<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 80%;
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



<h2 style="text-align: center;">Ajouter un Referent</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=referent" method="post">

<!-- <div class="row justify-content-center align-items-center" >
  <div class="col-4 form-group d-flex align-items-center">
    <label for="nom" class="col-form-label " style="width: 100%;">Nom du Referent : </label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" required>
  </div>
  <div class="col-4 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 100%;">Prenom du Referent:</label>
  <input type="text"  style="text-align: center;" class="form-control" name="prenom" required>
</div>
<div class="col-5 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 100%;">Mail du Referent:</label>
  <input type="text"  style="text-align: center;" class="form-control" name="mail" required>
</div>
</div> -->


<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 100%;">Nom du Referent : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 110%;">Prenom du Referent : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="prenom" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label" style="width: 100%;">Mail du Referent : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="mail" required>
  </div>
</div>
<br>
<div class="row justify-content-center align-items-center" >
  <div class="col-6 form-group d-flex align-items-center">
    <label for="numTelephone" class="col-form-label " style="width: 90%;">Numéro telephone du Referent : </label>
    <input type="text"  style="text-align: center; width: 70%;" class="form-control" name="numTelephone">
  </div>
  <div class="col-md-6 form-group d-flex align-items-center">
    <label for="id" class="col-form-label me-3">Le referent representent : <sup class="required">*</sup></label>
    <select name="id" style="width: 50%;" class="form-select" id="id">
    <?php foreach($referents as $ref):?>
    <option value="<?= $ref['id'] ?>"><?= $ref['nomPrestataire'] ?></option>
      <?php endforeach; ?>
    </select>
  </div>
</div>
</div>




<!-- <label for="nom" style="display: flex; align-items: center; justify-content: center;">Nom du Referent:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="nom" placeholder="Nom" required>
    </div>
    </div>
<br>
    <label for="prenom" style="display: flex; align-items: center; justify-content: center;">Prenom du Referent:</label>
 
    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="prenom" placeholder="prenom" required>
    </div>
    </div>
<br>
    <label for="mail" style="display: flex; align-items: center; justify-content: center;">Mail du Referent:</label>
   
    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="mail" placeholder="mail" required>
    </div>
    </div> -->

 
    
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary container" style="width: 20%;"  value="Valider">
</div>
<br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
</form>
</div>