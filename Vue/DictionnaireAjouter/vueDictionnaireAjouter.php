<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>



<h2 style="text-align: center;">Ajouter un mot dans le Dictionnaire</h2>
<form action="index.php?action=dictionnaire" method="post">
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="libelle" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="definition" placeholder="definition" required>
    <br>
    <input type="file" style="text-align: center;" class="form-control" name="img" placeholder="img" required>
    <br>
    <select name="id" class="form-select">
    <?php foreach($dictionnaires as $dic):?>
        <option value="<?= $dic['id'] ?>"><?= $dic['nom']." , ".$dic['prenom'] ?></option>
    <?php endforeach; ?>
    
    </select>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>