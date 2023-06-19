
<style>
    .milieuBtn {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    width: 100%;
    
 }
 .label{
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
<div class="milieu">

<h2 style="text-align: center;">Ajouter un Document</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=document" method="post" enctype="multipart/form-data">


<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label label" style="width: 120%;">Libelle du Document : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="libelle" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="dateParution" class="col-form-label label" style="width: 125%;">Date de parution du Document : <sup class="required">*</sup></label>
  <input type="datetime-local"  style="text-align: center; width: 80%;" class="form-control" name="dateParution" required>
  </div> 
</div>
 <br>
  <div class="row justify-content-center align-items-center">
  <div class="col-md-9 form-group d-flex flex-wrap justify-content-center align-items-center">
    <label for="idTheme" class="col-form-label label" style="text-align: center;">Theme du document : <sup class="required">*</sup></label>
    <?php foreach($themes as $sth):?>
      <div class="form-check d-flex justify-content-center align-items-center" style="margin: 5px;">
        <input class="form-check-input" type="checkbox" value="<?= $sth['id'] ?>" name="idTheme[]" id="theme<?= $sth['id'] ?>">
        <label class="form-check-label" for="theme<?= $sth['id'] ?>"><?= $sth['libelle'] ?></label>
      </div>
    <?php endforeach; ?>
  </div>
</div> 
<br>
<div class="row justify-content-center align-items-center">
<div class="col-md-5 form-group d-flex align-items-center">
  <label for="imgApercu" class="col-form-label label" style="width: 50%;">Image : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" name="imgApercu" required>
  </div>
</div>
<br>
<div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="lien" class="col-form-label label" style="width: 130%;">Lien du Document : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" name="lien" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="format" class="col-form-label label me-3">Le format du document: <sup class="required">*</sup></label>
  <select name="format" style="width: 50%;" class="form-select" id="format">
    <option value="" selected disabled>choisir le format</option>
    <option value="pdf">pdf</option>
    <option value="jpeg">jpeg</option>
    <option value="jpg">jpg</option>
    <option value="png">png</option>
    <option value="gif">gif</option>
  </select>
</div>
</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="description" class="col-form-label me-3 label" style="width: 30%;">Description du Document : <sup class="required">*</sup></label>
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



  window.onload = function() {
    var selectElement = document.getElementById('format');
    selectElement.addEventListener('click', function() {
      this.selectedIndex = -1; // Désélectionne l'option "choisir le format"
    });
  };

</script>