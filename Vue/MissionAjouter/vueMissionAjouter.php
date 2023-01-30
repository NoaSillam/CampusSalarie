<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<h2 style="text-align: center;">Ajouter une Mission</h2>
<form action="index.php?action=ajouterBenevoleMission" method="post">
    <input type="text" style="text-align: center;" class="form-control" name="idMission" placeholder="idMission" />
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="titre" placeholder="titre" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="annonce" placeholder="annonce" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="adresse" placeholder="adresse" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="codePostal" placeholder="codePostal" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="ville" placeholder="ville" required>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>