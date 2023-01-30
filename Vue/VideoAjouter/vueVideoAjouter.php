<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>


<h2 style="text-align: center;">Ajouter une Video</h2>
<form action="index.php?action=video" method="post">

    <input type="text" style="text-align: center;" class="form-control" name="idVideo" placeholder="idVideo" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="libelle" required>
    <!-- <br> -->
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required> -->
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="lien" placeholder="lien" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="description" placeholder="description" required>
    <!-- <br> -->
    <!-- <input type="text" style="text-align: center;" class="form-control" name="format" placeholder="format" required> -->
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="duree" placeholder="duree" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="imgApercu" placeholder="imgApercu" required>
    <br> -->
    <input type="datetime-local" style="text-align: center;" class="form-control" name="dateParution" placeholder="dateParution" required>
    <!-- <br> -->
    <!-- <input type="date" style="text-align: center;" class="form-control" required pattern="\d{4}-\d{2}-\d{2}" name="dateCreation" placeholder="dateCreation" required> -->
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idSalarie" placeholder="idSalarie" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idPrestataire" placeholder="idPrestataire" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idTheme" placeholder="idTheme" required>
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
   
  
</form>


<!-- /Applications/MAMP/htdocs/testCampusMvcCCopieCopieCopieDossierBdd/Vue/VideoAjouter/vueVideoAjouter.php on line 36
"&gt; 
Warning:  Undefined array key "id" in /Applications/MAMP/htdocs/testCampusMvcCCopieCopieCopieDossierBdd/Vue/VideoAjouter/vueVideoAjouter.php on line 36 -->
