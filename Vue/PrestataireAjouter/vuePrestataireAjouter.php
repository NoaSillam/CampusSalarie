

<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 /* .formulaire
 {
    align-items: center;
    justify-content: center;
 } */
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


<h2 style="text-align: center;">Ajouter un Prestataire</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=ajoutPrestataire" method="post" enctype="multipart/form-data">
    <br>
    <div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nomPrestataire" class="col-form-label " style="width: 100%;">Nom du Prestataire : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nomPrestataire" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="logo" class="col-form-label" style="width: 40%;">Logo : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" name="logo" required>
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="codePostal" class="col-form-label" style="width: 45%;">Code postal : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 50%;" class="form-control" name="codePostal" required>
  </div>
</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="description" class="col-form-label me-3" style="width: 15%;">Description : <sup class="required">*</sup></label>
    <textarea name="description" rows="10" cols="50" required>Entrez votre texte ici</textarea>
    </div>
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
});
</script>


