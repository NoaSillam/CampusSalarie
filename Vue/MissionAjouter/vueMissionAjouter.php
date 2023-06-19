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

<h2 style="text-align: center;">Ajouter une Mission</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=ajouterBenevoleMission" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control" name="idMission" placeholder="idMission" />
    <br> -->


    <div class="row justify-content-center align-items-center">
  <div class="col-md-7 form-group d-flex align-items-center">
    <label for="titre" class="col-form-label me-3" style="width: 150%;">Titre de la Mission : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 350%;" class="form-control" name="titre" required>
  </div>
    </div>
    <div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
    <label for="adresse" class="col-form-label me-3" style="width: 240%;">Adresse de la Mission : </label>
    <input type="text"  style="text-align: center; width: 210%;" class="form-control" name="adresse" >
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
    <label for="codePostal" class="col-form-label me-3" style="width: 250%;">Code postal de la Mission : </label>
    <input type="text"  style="text-align: center; width: 200%;" class="form-control" name="codePostal" >
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
    <label for="ville" class="col-form-label me-3" style="width: 170%;">Ville de la Mission : </label>
    <input type="text"  style="text-align: center; width: 350%;" class="form-control" name="ville" >
  </div>
  </div>
<br>
  <div class="col-md-10 form-group d-flex align-items-center">
    <label for="annonce" class="col-form-label me-3" style="width: 30%;">Annonce de la Mission : <sup class="required">*</sup></label>
    <textarea name="annonce" rows="10" cols="50">Entrez votre annonce ici</textarea>
    </div>

<!-- 
    <label for="titre" style="display: flex; align-items: center; justify-content: center;">Titre de la Mission:</label>
 
    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;" class="form-control" name="titre"  required>
    </div>
    </div>
    <br>
    <label for="annonce" style="display: flex; align-items: center; justify-content: center;">Annonce de la Mission:</label>
  
    <textarea name="annonce" rows="10" cols="50">Entrez votre annonce ici</textarea> -->
    <br>
    <!-- <label for="adresse" style="display: flex; align-items: center; justify-content: center;">Adresse de la Mission:</label>
   
    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;" class="form-control" name="adresse"  required>
    </div>
    </div>
    <br>
    <label for="codePostal" style="display: flex; align-items: center; justify-content: center;">Code Postal de la Mission:</label>

    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;" class="form-control" name="codePostal" required>
    </div>
    </div>
    <br>
    <label for="ville" style="display: flex; align-items: center; justify-content: center;">Ville de la Mission:</label>

    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;" class="form-control" name="ville"  required>
    </div>
    </div> -->
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
</form>
</div>
<script src="https://cdn.tiny.cloud/1/xi3fv210yjl2ttd482biaayx94emsrcjs4jc7qx37pccqnwz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>
<script>
     tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'print', 'preview', 'anchor', 'pagebreak',
    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'emoticons', 'template', 'codesample', 'contextmenu', 'paste', 'code'
  ],
  toolbar: 'insertfile undo redo | blocks fontfamily fontsize | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullscreen | forecolor backcolor emoticons',
  menu:{
     favs:{title:'menu', items:'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'favs file edit view insert format tools table',
  content_style: 'body{font-family: Helvetica,Arial,sans-serif; font-size:16px}'
//   content_css: [
//     '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
//     '//www.tinymce.com/css/codepen.min.css'
//   ]
});
</script>