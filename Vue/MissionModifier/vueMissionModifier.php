<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    margin-left: 30%;
    width: 50%;
 }
</style>






<h2 style="text-align: center;">Modifier une Mission</h2>
<form action="index.php?action=modifierBenevoleMission" id="modifier" method="post">
<?php foreach($mission as $mss):?>
    <input type="text" style="text-align: center;"  class="form-control" name="titre" placeholder="<?= $mss['titre'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="annonce" placeholder="<?= $mss['annonce'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="adresse" placeholder="<?= $mss['adresse'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="codePostal" placeholder="<?= $mss['codePostal'] ?>" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="ville" placeholder="<?= $mss['ville'] ?>" value="" required>
    <br>
    <input type="text" style="text-align: center;"  class="form-control" name="idMission" value="<?= $mss['idMission'] ?>" readonly="readonly" />
    <br>
    <input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider">
    <?php endforeach?>
</form>
