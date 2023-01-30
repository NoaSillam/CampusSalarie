
<style>
    .milieuBtn {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }

</style>
<div class="milieu">

<h2 style="text-align: center;">Ajouter un Document</h2>
<form action="index.php?action=document" method="post">
    <input type="text" style="text-align: center;" class="form-control" name="idDocument" placeholder="idDocument" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="libelle" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required>
    <br> -->
    <input type="file" style="text-align: center;" class="form-control" name="lien" placeholder="lien" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="description" placeholder="description" required>
    <br>
    <input type="datetime-local" style="text-align: center;" class="form-control" name="dateParution" placeholder="dateParution" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idSalarie" placeholder="idSalarie" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idPrestataire" placeholder="idPrestataire" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idTheme" placeholder="idTheme" required>
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieuBtn" value="Valider">
</form>
</div>