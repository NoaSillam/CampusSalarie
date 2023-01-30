

<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>


<h2 style="text-align: center;">Ajouter un Prestataire</h2>
<form action="index.php?action=ajoutPrestataire" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control"  name="id" placeholder="id" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control"  name="nomPrestataire" placeholder="Nom du Prestataire" required>
    <br>
    <input type="file" style="text-align: center;" class="form-control"  name="logo" placeholder="logo" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control"  name="adresse" placeholder="adresse" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control"  name="codePostal" placeholder="code Postal" required>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>