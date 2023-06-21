<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 div[contenteditable="true"] {
  border: 1px solid #ccc;
  font-family: Arial, sans-serif;
  font-size: 18px;
  padding: 10px;
}
label{
    font-weight : bold;
    font-size: 20px;
 }
 .textarea-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  /* .centre {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  } */
  label .required {
  color: red;
}
.required{
     color: red;  
}
</style>



<h2 style="text-align: center;">Ajouter une Cartographie</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=animationPartenaire" method="post" enctype="multipart/form-data">

<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 100%;">Nom de la cartographie : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="img" class="col-form-label" style="width: 105%;">Image de la cartographie : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" name="img" required>
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="idPrestataire" class="col-form-label" style="width: 50%;">Prestataire de la cartographie : <sup class="required">*</sup></label>
  <select name="idPrestataire" class="form-select" style="width: 50%;" id="" required>
    <?php foreach($animationPartenaires as $anim):?>
        <option value="<?= $anim['id'] ?>"><?= $anim['nomPrestataire'] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
</div>


<div class="row justify-content-center align-items-center">
<div class="col-md-5 form-group d-flex align-items-center">
  <label for="adresse" class="col-form-label" style="width: 50%;">Adresse postal de la cartographie : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 70%;" class="form-control" name="adresse" required>
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="codePostal" class="col-form-label " style="width: 50%;">Code postal de la cartographie : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 50%;" class="form-control" name="codePostal" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="ville" class="col-form-label" style="width: 150%;">Ville de la cartographie : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; " class="form-control" name="ville" required>
  </div>

</div>
<br>
<div class="row justify-content-center align-items-center">
      <div class="col-md-5 form-group d-flex align-items-center">
        <label for="hasPdf" class="col-form-label" style="width: 105%;">Ajouter un lien PDF <sup class="required">*</sup>:</label>
        <select name="" class="form-select" id="type" required onchange="toggleInputType()">
          <option value="non">Non</option>
          <option value="oui">Oui</option>
        </select>
      </div>
      <div class="col-md-5 form-group d-flex align-items-center" id="pdfFileContainer" style="display: none;">
        <label for="pdfFile" class="col-form-label" id="input" style="width: 105%; visibility:hidden;">Fichier PDF de la cartographie :</label>
        <input type="hidden" style="text-align: center; width: 210%;" class="form-control" name="lienPdf" id="lienPdf">
      </div>
    </div>

<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="descriptif" class="col-form-label me-3">Descriptif : <sup class="required">*</sup></label>
    <textarea name="descriptif" rows="10" cols="50" required>Entrez votre texte ici</textarea>
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
//   content_css: [
//     '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
//     '//www.tinymce.com/css/codepen.min.css'
//   ]
});

function toggleInputType() {
  var selectedOption = document.getElementById("type").value;
  var lienInput = document.getElementById("lienPdf");
  var input = document.getElementById("input")

  if (selectedOption === "oui") {
    lienInput.type = "file";
    input.style.visibility = "visible";
  } else if (selectedOption === "non") {
    lienInput.type = "hidden";
    input.style.visibility = "hidden";
  }
}
</script>