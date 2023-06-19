
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

<h2 style="text-align: center;">Ajouter un sous-theme</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=ajoutSousTheme" method="post" enctype="multipart/form-data">

<div class="row justify-content-center align-items-center">
  <div class="col-md-4 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 110%;">Libelle du Sous-Theme : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="libelle" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="img" class="col-form-label" style="width: 138%;">Image du Sous-Theme : <sup class="required">*</sup> </label>
  <input type="file"  style="text-align: center; width: 210%;" class="form-control" name="img" required>
  </div>
  <div class="col-md-3 form-group d-flex align-items-center">
  <label for="idThemeParent" class="col-form-label" style="width: 50%;">Theme associé : <sup class="required">*</sup></label>
  <select name="idThemeParent" class="form-select" style="width: 50%;" id="">
  <?php foreach($sousThemes as $sth):?>
        <option value="<?= $sth['id'] ?>"><?= $sth['libelle'] ?></option>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="idThemeParent" placeholder="idThemeParent" required> -->
    <?php endforeach; ?>
    </select>
  </div>
</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="descriptif" class="col-form-label me-3" style="width: 22%;">Descriptif du Sous-Theme : <sup class="required">*</sup></label>
    <textarea name="descriptif" rows="10" cols="50" required>Entrez votre texte ici</textarea>
    </div>






    <!-- <input type="text" style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br> -->
    <!-- <label for="libelle" style="display: flex; align-items: center; justify-content: center;">Libelle du Sous-Theme:</label>

    <div class="row justify-content-center">
         <div class="col-6">
    <input type="text" style="text-align: center;" class="form-control" name="libelle" required>
    </div>
    </div>
    
<br>
    <label for="img" style="display: flex; align-items: center; justify-content: center;">Image du Sous-Theme:</label>

    <div class="row justify-content-center">
         <div class="col-9">
         <input type="file" style="text-align: center;" class="form-control" name="img" placeholder="img" required>
         </div>
    </div>
    <br>
    <label for="descriptif" style="display: flex; align-items: center; justify-content: center;">Descriptif du Sous-Theme:</label>

    <textarea name="descriptif" rows="10" cols="50">Entrez votre texte ici</textarea>
    <br>
  
    <label for="idThemeParent" style="display: flex; align-items: center; justify-content: center;">Theme associé:</label>
    <br>
    <div class="row justify-content-center">
         <div class="col-6">
    <select name="idThemeParent" id="" class="form-select" >
    <?php foreach($sousThemes as $sth):?>
        <option value="<?= $sth['id'] ?>"><?= $sth['libelle'] ?></option>
     <input type="text" style="text-align: center;" class="form-control" name="idThemeParent" placeholder="idThemeParent" required> -->
    <?php endforeach; ?>
    <!-- </select>
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