<style>
     label{
    font-weight : bold;
    font-size: 20px;
 }
 .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 label .required {
  color: red;
}
.required{
     color: red;  
}
</style>


<h2 style="text-align: center;">Modifier un salarié</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifSalarie" id="modifier" method="post">

<?php foreach($salaries as $salarie):?>

<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 100%;">Nom du Salarié : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" value="<?= $salarie['nom'] ?>" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 110%;">Prénom du Salarié : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="prenom" value="<?= $salarie['prenom'] ?>" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label" style="width: 100%;">Mail du Salarié : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="mail" value="<?= $salarie['mail'] ?>" required>
  </div>
  
</div>
<br>
<div class="row justify-content-center align-items-center">
<div class="col-4 form-group d-flex align-items-center">
    <label for="pole" class="col-form-label " >Pôle du Salarié : <sup class="required">*</sup></label>
    <select name="pole" class="form-select" style="width: 60%;" id="">
    <?php if( $salarie['pole'] == "Prévention") {?>
            <option value="Prévention">Prévention</option>
            <option value="Informatique">Informatique</option>
            <option value="Média">Média</option>
            <option value="Siège">Siège</option>
            <?php } else if($salarie['pole'] == "Informatique"){?>
               <option value="Informatique">Informatique</option>
               <option value="Prévention">Prévention</option>
               <option value="Média">Média</option>
               <option value="Siège">Siège</option>

          <?php  } else if($salarie['pole'] == "Média"){ ?>
               <option value="Média">Média</option>
               <option value="Informatique">Informatique</option>
               <option value="Prévention">Prévention</option>
               <option value="Siège">Siège</option>
         <?php } else{?>
          <option value="Siège">Siège</option>
          <option value="Prévention">Prévention</option>
            <option value="Informatique">Informatique</option>
            <option value="Média">Média</option>
        <?php  } ?>
    </select>
  </div>
</div>



<!-- 
<label for="nom">Nom du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="nom" value="<?= $salarie['nom'] ?>" required>
    </div>
    </div>
    
    <label for="prenom">Prenom du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-2">
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" value="<?= $salarie['prenom'] ?>" required>
    </div>
    </div>
    
    <label for="mail">Mail du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="mail" value="<?= $salarie['mail'] ?>" required>
    </div>
    </div>
    
    <label for="pole">Pole du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text"  style="text-align: center;" class="form-control" name="pole" value="<?= $salarie['pole'] ?>" required>
    </div>
    </div>
    -->
    <input type="hidden"  style="text-align: center;" class="form-control" name="id" value="<?= $salarie['id'] ?>" readonly="readonly" required>
   
  
<br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary container" style="width: 20%;"  value="Valider">
</div>
<br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire

    <?php endforeach?>
</form>
</div>

