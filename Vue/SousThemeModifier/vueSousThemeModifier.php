<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
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
<h2 style="text-align: center;">Modifier un sous-theme</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifSousTheme"  method="post" enctype="multipart/form-data">

<?php foreach($sousThemes as $sousThm): ?>
<div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 120%;">Libelle du Sous-Theme : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" value="<?= $sousThm['libelle'] ?>" name="libelle" required>
  </div>
  <div class="col-md-6 form-group d-flex align-items-center">
  <label for="img" class="col-form-label" style="width: 130%;">Image du Sous-Theme : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" value="<?= $sousThm['img'] ?>" name="img" required>
  </div>

</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="descriptif" class="col-form-label me-3" style="width: 33%;">Descriptif du Sous-Theme : <sup class="required">*</sup></label>
    <textarea name="descriptif" rows="10" cols="50" required><?= $sousThm['descriptif'] ?></textarea>
    </div>


<!-- <label for="libelle" style="display: flex; align-items: center; justify-content: center;">Libelle du Sous-Theme:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-6">
    <input type="text" style="text-align: center;"  class="form-control" name="libelle" value="<?= $sousThm['libelle'] ?>" required>
    </div>
    </div>
<br>
    <label for="img" style="display: flex; align-items: center; justify-content: center;">Image du Sous-Theme:</label>

    <div class="row justify-content-center">
         <div class="col-9">
    <input type="file" style="text-align: center;"  class="form-control" name="img" placeholder=" <?= $sousThm['img'] ?>" required>
    </div>
    </div>
<br>
    <label for="descriptif" style="display: flex; align-items: center; justify-content: center;">Descriptif du Sous-Theme:</label>

    <textarea name="descriptif" rows="10" cols="50"><?= $sousThm['descriptif'] ?></textarea> -->
    <br>
    <input type="hidden" style="text-align: center;" class="form-control" name="idThemeParent" value="<?= $sousThm['idThemeParent'] ?> " readonly="readonly" required>
    <input type="hidden" style="text-align: center;"  class="form-control" name="id" value="<?= $sousThm['id'] ?> " readonly="readonly" required>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
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