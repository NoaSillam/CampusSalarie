<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 100%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    margin-left: 30%;
    width: 50%;
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






<h2 style="text-align: center;">Modifier une Mission</h2>
<br>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifierBenevoleMission" id="modifier" method="post">
<?php foreach($mission as $mss):?>
<!-- <label for="titre" style="display: flex; align-items: center; justify-content: center;">Titre de la Mission:</label> -->


<div class="row justify-content-center align-items-center">
  <div class="col-md-7 form-group d-flex align-items-center">
    <label for="titre" class="col-form-label me-3" style="width: 150%;">Titre de la Mission : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 350%;" class="form-control" name="titre" value="<?= $mss['titre'] ?>" required>
  </div>
  </div>
  <br>
  <div class="col-md-10 form-group d-flex align-items-center">
    <label for="annonce" class="col-form-label me-3" style="width: 30%;">Annonce de la Mission : <sup class="required">*</sup></label>
    <textarea name="annonce" rows="10" cols="50" required><?= $mss['annonce'] ?></textarea>
    </div>


    <!-- <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;"  class="form-control" name="titre" value="<?= $mss['titre'] ?>" required>
    </div>
    </div>
    <br>
    <label for="annonce" style="display: flex; align-items: center; justify-content: center;">Annonce de la Mission:</label>
    
    <textarea name="annonce" rows="10" cols="50"><?= $mss['annonce'] ?></textarea>
 <br> -->
    <!-- <label for="adresse" style="display: flex; align-items: center; justify-content: center;">Adresse de la Mission:</label>
 
    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;"  class="form-control" name="adresse" value="<?= $mss['adresse'] ?>" required>
    </div>
    </div>
    <br>
    <label for="codePostal" style="display: flex; align-items: center; justify-content: center;">Code Postal de la Mission:</label>

    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;"  class="form-control" name="codePostal" value="<?= $mss['codePostal'] ?>" required>
    </div>
    </div>
    <br>
    <label for="ville" style="display: flex; align-items: center; justify-content: center;">Ville de la Mission:</label>
   
    <div class="row justify-content-center">
         <div class="col-7">
    <input type="text" style="text-align: center;"  class="form-control" name="ville" value="<?= $mss['ville'] ?>" required>
    </div>
    </div> -->
    
    <input type="hidden" style="text-align: center;"  class="form-control" name="idMission" value="<?= $mss['idMission'] ?>" readonly="readonly" />
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <?php endforeach?>
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
