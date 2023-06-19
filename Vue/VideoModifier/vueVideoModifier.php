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
<h2 style="text-align: center;">Modifier une Video</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=modifVideo" id="modifier" method="post">
    <?php foreach($video as $vid):?>
   <div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 100%;">Libelle de la video : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 150%;" class="form-control" value="<?= $vid['libelle'] ?>" name="libelle" required>
  </div>
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="dateParution" class="col-form-label" style="width: 100%;">Date de parution de la video : <sup class="required">*</sup></label>
  <input type="datetime-local"  style="text-align: center; width: 70%;" class="form-control" name="dateParution" value="<?= $vid['idDocVideo'] ?>" required>
  </div> 
  </div>
  <br>
  <div class="row justify-content-center align-items-center">
  <div class="col-md-7 form-group d-flex align-items-center">
    <label for="lien" class="col-form-label me-3" style="width: 150%;">Lien de la Vidéo : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center; width: 450%;" class="form-control" name="lien" value="<?= $vid['lien'] ?>" required>
  </div>
  </div>

<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="description" class="col-form-label me-3" style="width: 30%;">Description de la video : <sup class="required">*</sup></label>
    <textarea name="description" rows="10" cols="50" required><?= $vid['description'] ?></textarea>
    </div>

    <!-- <label for="libelle" style="display: flex; align-items: center; justify-content: center;">Libelle de la video:</label>

     <div class="row justify-content-center">
     <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="libelle" value="<?= $vid['libelle'] ?>" required>
    </div>
    </div>
    -->
  
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required>
    <br> -->
    <!-- <label for="lien" style="display: flex; align-items: center; justify-content: center;">Lien de la Vidéo:</label>
  
     <div class="row justify-content-center">
     <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="lien" value="<?= $vid['lien'] ?>" required>
    </div>
    </div> -->
   
    <!-- <input type="text" style="text-align: center;" class="form-control" name="format" placeholder="format" required>
    <br> -->

    
    <!-- <input type="text" style="text-align: center;" class="form-control" name="imgApercu" placeholder="imgApercu" required>
    <br> -->
    <!-- <label for="description" style="display: flex; align-items: center; justify-content: center;">Description de la Vidéo:</label>
 
    <textarea name="description" rows="10" cols="50"><?= $vid['description'] ?></textarea> -->
 
    <!-- <br> -->
    <!-- <label for="dateParution" style="display: flex; align-items: center; justify-content: center;">Date de parution de la Vidéo:</label>

     <div class="row justify-content-center">
     <div class="col-5">
    <input type="datetime-local" style="text-align: center;" class="form-control"  name="dateParution" value="<?= $vid['dateParution'] ?>" required>
    </div>
    </div> -->
<br>
    <input type="hidden" style="text-align: center;" class="form-control" name="idVideo" value="<?= $vid['idDocVideo'] ?>" readonly="readonly" />
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <?php endforeach; ?>
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

