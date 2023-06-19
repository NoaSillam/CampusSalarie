<style>
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
<h2 style="text-align: center;">Modifier une Actualite</h2>
<br>
<form action="index.php?action=modifActualite" method="post" enctype="multipart/form-data">
    <?php foreach($actualite as $actu):?>

    <div class="row justify-content-center align-items-center" >
  <div class="col-4 form-group d-flex align-items-center">
    <label for="nom" class="col-form-label " style="width: 70%;">Nom de l'actualité : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="nom" value="<?= $actu['NomActualite']?>" required>
  </div>
  <div class="col-6 form-group d-flex align-items-center">
  <label for="imgApercu" class="col-form-label" style="width: 70%;">image de l'actualité : <sup class="required">*</sup></label>
  <input type="file" style="text-align: center; width: 70%;" class="form-control col-6" name="imgApercu" value="<?= $actu['imgActualite']?>" required>
</div>
</div>
    <br>
    <div class="row justify-content-center align-items-center" >
    <div class="col-4 form-group d-flex align-items-center">
    <label for="type"  class="col-form-label " style="width: 50%;"> Type du lien : <sup class="required">*</sup></label>
    <select name="type" class="form-select" id="type" required>
        <?php if($actu['TypeActualite'] == "video")
        {
            ?>
             <option value="<?= $actu['TypeActualite']?>"><h3><?= $actu['TypeActualite'] ?></h3></option>
            <option value="pdf">pdf</option>
    <?php
        } else{
            ?>
             <option value="<?= $actu['TypeActualite']?>"><?= $actu['TypeActualite'] ?></option>
             <option value="video">Video</option>
            <?php
        } ?>
    </select>
    </div>
    <?php if($actu['TypeActualite'] == "video")
        {
            ?>
              <div class="col-7 form-group d-flex align-items-center">
  <label for="lien" class="col-form-label me-3" style="width: 21%;" >lien de l'actualite : <sup class="required">*</sup></label>
  <input type="text" style="text-align: center; width: 60%;" class="form-control col-6" name="lien" id="lien"  value="<?= $actu['LienActualite'] ?>" required>
</div>
             <?php
        } else{
            ?>
                    <div class="col-7 form-group d-flex align-items-center">
  <label for="lien" class="col-form-label me-3" style="width: 21%;" >lien de l'actualite : <sup class="required">*</sup></label>
  <input type="file" style="text-align: center; width: 60%;" class="form-control col-6" name="lien" id="lien"  value="<?= $actu['LienActualite'] ?>" required>
</div>
             <?php
        } ?>
  
    </div>
<br>
    <div class="col-md-10 form-group d-flex align-items-center">
<label for="description" class="col-form-label me-3" >Description de l'actualite : <sup class="required">*</sup></label>
    <textarea name="description" rows="10" cols="50" required> <?= $actu['DescriptionActualite']?></textarea>
    </div>

<br>
    <input type="hidden" style="text-align: center;" class="form-control" name="idActualite"  value="<?= $actu['idActualite'] ?>" required>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" style="text-align: center; width: 30%;" class="btn btn-primary mlu" value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
    <?php endforeach;?>
</form>
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

</script>