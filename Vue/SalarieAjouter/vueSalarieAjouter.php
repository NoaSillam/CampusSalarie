

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

<h2 style="text-align: center;">Ajouter un salarié</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=ajoutSalarie" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br> -->

    <div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 100%;">Nom du Salarié : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="prenom" class="col-form-label" style="width: 110%;">Prénom du Salarié : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="prenom" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="mail" class="col-form-label" style="width: 100%;">Mail du Salarié : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center;" class="form-control" name="mail" required>
  </div>
</div>
<br>
<div class="row justify-content-center align-items-center" >
  <div class="col-4 form-group d-flex align-items-center">
    <label for="pole" class="col-form-label " >Pôle du Salarié : <sup class="required">*</sup></label>
    <select name="pole" class="form-select" style="width: 60%;" id="">
            <option value="CAJ/PFR">CAJ / PFR</option>
            <option value="Prévention">Prévention</option>
            <option value="Siège">Siège</option>
    </select>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
    <label for="statut" class="col-form-label me-3">Statut du Salarié : <sup class="required">*</sup></label>
    <select name="statut" class="form-select" style="width: 50%;"  id="">
            <option value="écriture">Écriture</option>
            <option value="Admin">Admin</option>
    </select>
  </div>
  <!-- <div class="col-md-4 form-group d-flex align-items-center">
  <label for="password" class="col-form-label" style="width: 100%;">Mot de passe du Salarié : <sup class="required">*</sup></label>
  <input type="password" style="text-align: center;" class="form-control" name="password" required>
  </div> -->
</div>

<br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary container" style="width: 20%;"  value="Valider">
</div>
<br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire


<!-- 
    <label for="nom">Nom du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="nom"  required>
    </div>
    </div>
    
    <label for="prenom">Prenom du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text" style="text-align: center;" class="form-control" name="prenom" required>
    </div>
    </div>
    
    <label for="mail">Mail du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-6">
    <input type="text" style="text-align: center;" class="form-control" name="mail"  required>
    </div>
    </div>

    <label for="pole">Pole du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-4">
    <select name="pole" class="form-select"  id="">
            <option value="Prévention">Prévention</option>
            <option value="Informatique">Informatique</option>
            <option value="Média">Média</option>
            <option value="Siège">Siège</option>
    </select>
    </div>
    </div>
   <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="pole" placeholder="pole" required> -->

    <!-- <label for="statut">Statut du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-4">
    <select name="statut" class="form-select"  id="">
            <option value="écriture">Écriture</option>
            <option value="Lecture">Lecture</option>
            <option value="Admin">Admin</option>
    </select>
    </div>
    </div>
<br>
    <label for="password">Mot de passe du Salarié:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-5">
    <input type="password" style="text-align: center;" class="form-control" name="password" required>
    </div>
    </div>
    <br>
    <input type="submit" class="btn btn-primary container"  value="Valider"> --> 
</form>
</div>