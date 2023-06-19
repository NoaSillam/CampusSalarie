<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
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


<h2 style="text-align: center;">Modifier un Referent</h2>
<form action="index.php?action=modifReferent" id="modifier" method="post">
    <?php foreach($referent as $ref):?>
    <label for="" style="display: flex; align-items: center; justify-content: center;">Réferent <?= $ref['nom']?>, <?= $ref['prenom']?> : </label>
    <div class="row justify-content-center align-items-center" >
  <div class="col-4 form-group d-flex align-items-center">
    <label for="mail" class="col-form-label " style="width: 100%;">Mail du Referent : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 130%;" class="form-control" name="mail" value="<?= $ref['mail']?>" required>
  </div>
  <div class="col-4 form-group d-flex align-items-center">
    <label for="numTelephone" class="col-form-label " style="width: 650%;">Numéro de telephone du Referent : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width:250%;" class="form-control" name="numTelephone" value="0<?= $ref['numTelephone']?>" required>
  </div>
</div>






<!-- <br>

    <label for="mail" style="display: flex; align-items: center; justify-content: center;">Mail du Referent:</label>
 
    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text"  style="text-align: center;"  class="form-control" name="mail" value="<?= $ref['mail']?>" required>
    </div>
    </div>
    <br>
    <label for="numTelephone" style="display: flex; align-items: center; justify-content: center;">Numéro de telephone du Referent:</label>
    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text"  style="text-align: center;"  class="form-control" name="numTelephone" value="0<?= $ref['numTelephone']?>" required>
    </div>
    </div> -->
    <input type="hidden"  style="text-align: center;"  class="form-control" name="idReferent" value="<?= $ref['idReferent']?>" readonly="reaonly" />
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" style="text-align: center; width: 30%;" class="btn btn-primary milmluieu"  value="Valider">
</div>
<br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <?php endforeach;?>
</form>

