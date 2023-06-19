


<h1 style="text-align: center;">Changer Mot de Passe</h1>
<br>
<div style="margin: auto; width: 30%;">
<form action="index.php?action=modifMdp" method="post">


<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" style="text-align: center;" name="password" placeholder="Password">
  <label for="floatingPassword">Mot de passe</label>
</div>
<br>

<?php foreach($salaries as $salarie): ?>

    <input type="hidden" style="text-align: center;" class="form-control" name="id" value="<?= $salarie['id'] ?>" readonly="readonly" required>
<?php endforeach ?>

<div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 50%;"  value="Valider">
</div>

</form>
</div>