<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 100%;
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
<h2 style="text-align: center;">Modifier un theme</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifTheme" id="modifier" method="post" enctype="multipart/form-data">
<?php
        foreach($theme as $them):
            ?>
            <div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 100%;">Libelle du Theme : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" value="<?= $them['libelle'] ?>" name="libelle" required>
  </div>
  <div class="col-md-7 form-group d-flex align-items-center">
  <label for="img" class="col-form-label" style="width: 130%;">Image du Theme : <sup class="required">*</sup></label>
  <input type="file"  style="text-align: center; width: 310%;" class="form-control" name="img" required>
  </div>
</div>

<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="descriptif" class="col-form-label me-3" style="width: 20%;">Descriptif : <sup class="required">*</sup></label>
    <textarea name="descriptif" rows="10" cols="50"><?= $them['descriptif'] ?></textarea>
    </div>
 
    <input type="hidden" style="text-align: center;"  class="form-control" name="id" placeholder="id" value="<?= $them['id'] ?>" readonly="readonly" >
    <br>
    <?php endforeach?>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" style="text-align: center; width: 30%;" class="btn btn-primary mlu"    value="Valider">
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