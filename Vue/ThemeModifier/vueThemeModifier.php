<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>
<h2 style="text-align: center;">Modifier un theme</h2>
<form action="index.php?action=modifTheme" id="modifier" method="post">
<?php
        foreach($theme as $them):
            ?>
    <input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="<?= $them['libelle'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="descriptif" placeholder="<?= $them['descriptif'] ?>" required>
  
    <br>
    <input type="file" style="text-align: center;"  class="form-control" name="img" placeholder="img" required>
  
    <br>
   
    <input type="text" style="text-align: center;"  class="form-control" name="id" placeholder="id" value="<?= $them['id'] ?>" readonly="readonly" >
    <br>
    <?php endforeach?>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;"  value="Valider">
</form>