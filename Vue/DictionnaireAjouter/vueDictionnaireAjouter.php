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



<h2 style="text-align: center;">Ajouter un mot dans le Dictionnaire</h2>
<div style="display: flex; align-items: center; justify-content: center;">
<form action="index.php?action=dictionnaire" method="post" enctype="multipart/form-data">
<div class="row justify-content-center align-items-center">
  <div class="col-md-5 form-group d-flex align-items-center">
  <label for="libelle" class="col-form-label " style="width: 50%;">Nom du Mot : <sup class="required">*</sup></label>
    <input type="text"  style="text-align: center;" class="form-control" name="libelle" required>
  </div>
  <div class="col-md-6 form-group d-flex align-items-center">
  <label for="img" class="col-form-label" style="width: 100%;">Image du Mot : <sup class="required">*</sup></label>
  <input type="file" style="text-align: center; width: 210%;" class="form-control" name="img" accept="image/dictionnaire/*" onchange="checkImageSize(this)" required>
</div>
</div>
<br>
<div class="col-md-10 form-group d-flex align-items-center">
    <label for="definition" class="col-form-label me-3" style="width: 24%;">Définition du Mot : <sup class="required">*</sup></label>
    <textarea name="definition" rows="10" cols="50" required>Entrez votre texte ici</textarea>
    </div>
    <br>
    <div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 30%;"  value="Valider">
    </div>
    <br>
    <sup class="required">*</sup> : signifie que vous devez remplir ce champ pour soumettre le formulaire
<!-- <label for="libelle"  style="display: flex; align-items: center; justify-content: center;">Nom du Mot:</label>

    <div class="row justify-content-center">
         <div class="col-5">
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="libelle" required>
    </div>
    </div>
<br>
    <label for="img"  style="display: flex; align-items: center; justify-content: center;">Image du Mot:</label>

    <div class="row justify-content-center">
         <div class="col-9">
    <input type="file" style="text-align: center;" class="form-control" name="img" placeholder="img" required>
    </div>
    </div> -->
<!-- <br>
    <label for="definition"  style="display: flex; align-items: center; justify-content: center;">Définition du Mot:</label>

    <textarea name="definition" rows="10" cols="50">Ecrivez votre texte ici</textarea>
<br>
<div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary container" value="Valider">
</div> -->
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

// function validateForm() {
//     var imgInput = document.getElementsByName('img')[0];
//     var filePath = imgInput.value;
//     var allowedPath = 'image/dictionnaire/';

//     if (filePath.indexOf(allowedPath) !== 0) {
//       alert('Veuillez sélectionner un fichier d\'image dans le chemin d\'accès spécifié.');
//       return false;
//     }

//     return true;
//   }

// function checkImageFile(input) {
//   const allowedPath = 'image/dictionnaire/'; // Spécifiez ici le chemin d'accès autorisé avec un slash à la fin

//   const file = input.files[0];
//   const filePath = file.name;
  
//   const fileExtension = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
//   const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Liste des extensions autorisées

//   if (!allowedExtensions.includes(fileExtension)) {
//     input.value = ''; // Réinitialise le champ de fichier pour désélectionner le fichier non autorisé
//     alert("Veuillez sélectionner un fichier d'image valide (extensions autorisées : " + allowedExtensions.join(', ') + ").");
//     return;
//   }

//   const fileDirectory = filePath.substring(0, filePath.lastIndexOf('/') + 1);

//   if (fileDirectory !== allowedPath) {
//     input.value = ''; // Réinitialise le champ de fichier pour désélectionner le fichier non autorisé
//     alert("L'image doit provenir du chemin d'accès spécifié.");
//   }
// }

function checkImageSize(input) {
  if (input.files && input.files[0]) {
    var img = new Image();
    img.onload = function() {
      if (img.width < 200 || img.height < 200) {
        input.setCustomValidity("L'image doit être d'au moins 200px de largeur et de hauteur.");
      } else {
        input.setCustomValidity("");
      }
    };
    img.src = URL.createObjectURL(input.files[0]);
  }
}

</script>