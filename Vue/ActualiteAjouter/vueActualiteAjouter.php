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
 .centre{
    width: 150%;
    margin: auto;
 }
 form{
    width: 300%;
    margin-right: auto;
    margin-left: auto;
 }
 label .required {
  color: red;
}
.required{
     color: red;  
}
</style>
<h2 style="text-align: center;">Ajouter une actualité</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=AjouterActualiter" method="post" enctype="multipart/form-data">
    <!-- <div class="centre" > -->
    <div class="row justify-content-center align-items-center" >
  <div class="col-4 form-group d-flex align-items-center">
    <label for="nom" class="col-form-label " style="width: 100%;">Nom de l'actualité : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" required>
  </div>
  <div class="col-6 form-group d-flex align-items-center">
  <label for="imgApercu" class="col-form-label" style="width: 55%;">Image de l'actualité : <sup class="required">*</sup></label>
  <input type="file" style="text-align: center;" class="form-control " name="imgApercu" required>
</div>
</div>
<br>
<div class="row justify-content-center align-items-center">
  <div class="col-md-3 form-group d-flex align-items-center">
    <label for="type" class="col-form-label me-3" style="width: 95%;">Type du lien : <sup class="required">*</sup></label>
    <select name="type" class="form-select" id="type" required onchange="toggleInputType()">
      <option value="video">Video</option>
      <option value="pdf">pdf</option>
    </select>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
    <label for="lien" class="col-form-label me-3" style="width: 84%;">Lien de l'actualité : <sup class="required">*</sup></label>
    <input type="text" style="text-align: center;" class="form-control" name="lien" id="lien" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
    <label for="id" class="col-form-label me-3" style="width: 84%;">Nom du référent : <sup class="required">*</sup></label>
    <select name="id" class="form-select" id="id" required>
      <?php foreach($actualites as $ref):?>
        <option value="<?= $ref['idReferent'] ?>"><?= $ref['nom'] ?>, <?= $ref['prenom'] ?> </option>
      <?php endforeach; ?>
    </select>
  </div>
</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="description" class="col-form-label me-3" style="width: 24%;">Description de l'actualité : <sup class="required">*</sup></label>
    <textarea name="description" rows="10" cols="50" required>Entrez votre texte ici</textarea>
    </div>
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary container" style="width: 30%;" value="Valider">
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
  height: 400,
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

function toggleInputType() {
  var selectedOption = document.getElementById("type").value;
  var lienInput = document.getElementById("lien");

  if (selectedOption === "video") {
    lienInput.type = "text";
  } else if (selectedOption === "pdf") {
    lienInput.type = "file";
  }
}
</script>