<style>
  .container{
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
<h2 style="text-align: center;">Modifier un Dictionnaire</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifDictionnaire" id="modifier" method="post" enctype="multipart/form-data">
    <?php foreach($dictionnaire as $dic): ?>
    <div class="row justify-content-center align-items-center">
  <div class="col-md-6 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 135%;">Image du Mot <?= $dic['libelle'] ?> : <sup class="required">*</sup></label>
  <input type="file" style="text-align: center; width: 210%;" class="form-control" name="img" accept="image/dictionnaire/<?= $dic['img'] ?>" onchange="checkImageSize(this)" required>
  <!-- <input type="file"  style="text-align: center; width: 270%;" class="form-control" name="img" value="<?= $dic['img'] ?>" required> -->
  </div>
    </div>
<!--     
    <label style="display: flex; align-items: center; justify-content: center;" for="img">Image du Mot <?= $dic['libelle'] ?>:</label>
  
    <div class="row justify-content-center">
         <div class="col-7">
    <input type="file" style="text-align: center;"  class="form-control" name="img" placeholder="<?= $dic['img'] ?>" required>
    </div>
    </div> -->
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="definition" class="col-form-label" style="width: 30%;" >Définition du Mot <?= $dic['libelle'] ?> : <sup class="required">*</sup> </label>
    <textarea name="definition" rows="10" cols="50"><?= $dic['definition'] ?></textarea>
    </div>

    <br>
  
    
    <input type="hidden" style="text-align: center;"  class="form-control" name="idDictionnaire" value="<?= $dic['idDictionnaire'] ?>" readonly="readonly" />
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" style="text-align: center; width: 30%;" class="btn btn-primary mlu"    value="Valider">
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
