
<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<h2 style="text-align: center;">Ajouter un theme</h2>
<form action="index.php?action=ajoutTheme" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="Libelle du Theme" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="descriptif" placeholder="descriptif" required>
    <br>
    <input type="file" style="text-align: center;" class="form-control" name="img" placeholder="img" required>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>