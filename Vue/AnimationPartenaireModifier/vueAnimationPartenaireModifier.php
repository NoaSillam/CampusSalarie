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
<h2 style="text-align: center;">Modifier une Cartographie</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifAnimationPrestataire" method="post" enctype="multipart/form-data">
    <?php foreach($animationPartenaire as $anim):?>



<div class="row justify-content-center align-items-center">
<div class="col-md-4 form-group d-flex align-items-center">
  <label for="nom" class="col-form-label " style="width: 100%;">Nom de la cartographie : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 180%;" value="<?= $anim['nom']?>" class="form-control" name="nom" required>
  </div>
<div class="col-md-5 form-group d-flex align-items-center">
  <label for="adresse" class="col-form-label" style="width: 50%;">Adresse postal de la cartographie : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; width: 70%;" class="form-control" value="<?= $anim['adresseAnim'] ?>" name="adresse" required>
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="codePostal" class="col-form-label " style="width: 50%;">Code postal de la cartographie : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 50%;" class="form-control" value="<?= $anim['codePostalAnim'] ?>" name="codePostal" required>
  </div>
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="ville" class="col-form-label" style="width: 150%;">Ville de la cartographie : <sup class="required">*</sup></label>
  <input type="text"  style="text-align: center; " class="form-control" value="<?= $anim['villeAnim'] ?>" name="ville" required>
  </div>

</div>
<br>

<div class="col-md-10 form-group d-flex align-items-center">
    <label for="descriptif" class="col-form-label me-3">Descriptif : <sup class="required">*</sup></label>
    <textarea name="descriptif" rows="10" cols="50"><?= $anim['descriptif'] ?></textarea>
    </div>



    <!-- <label for="nom" style="display: flex; align-items: center; justify-content: center;">Nom de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text" style="text-align: center;"  class="form-control" name="nom" value="<?= $anim['nom']?>" required>
    </div>
    </div>
<br> -->
    <!-- <label for="lienVideo" style="display: flex; align-items: center; justify-content: center;">Lien de la video youtube de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text" style="text-align: center;"  class="form-control" name="lienVideo" value="<?= $anim['lien']?>" required>
    </div>
    </div>
<br> -->
    <!-- <label for="lienVideo" style="display: flex; align-items: center; justify-content: center;">Lien pdf de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="file" style="text-align: center;"  class="form-control" name="lienPdf" value="<?= $anim['lienPdf'] ?>" required>
    </div>
    </div> -->
<!-- <br>
    <label for="adresse" style="display: flex; align-items: center; justify-content: center;">descriptif de la cartographie:</label>
  
    <textarea name="descriptif" rows="10" cols="50"><?= $anim['descriptif'] ?></textarea>
   <br>
    <label for="adresse" style="display: flex; align-items: center; justify-content: center;">Adresse postal de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-4">
    <input type="text" style="text-align: center;"  class="form-control" name="adresse" value="<?= $anim['adresseAnim'] ?>" required>
    </div>
    </div>
    <br>
    <label for="codePostal" style="display: flex; align-items: center; justify-content: center;">Code postal de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-2">
    <input type="text" style="text-align: center;"  class="form-control" name="codePostal" value="<?= $anim['codePostalAnim'] ?>" required>
    </div>
    </div>
    <br>
    <label for="ville" style="display: flex; align-items: center; justify-content: center;">Ville de la cartographie:</label>

    <div class="row justify-content-center">
         <div class="col-3">
    <input type="text" style="text-align: center;"  class="form-control" name="ville" value="<?= $anim['villeAnim'] ?>" required>
    </div>
    </div> -->
    <br>
    <div class="row justify-content-center" >
         <div class="col-6">
    <input type="hidden" style="text-align: center;"  class="form-control" name="idAnimationPartenaire" value="<?= $anim['idAnimPartenaire'] ?>" readonly="readonly" />
    </div>
    </div>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" style="text-align: center; width: 30%;" class="btn btn-primary mlu" value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <?php endforeach;?>
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