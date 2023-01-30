<?php
// if(isset($_SESSION))
// {
//   session_start();
// }
?>
<h1>La connection</h1>

<form action="index.php?action=getAuthoStatut" method="post">

<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name="mail" placeholder="name@example.com">
  <label for="floatingInput">Adresse mail</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
  <label for="floatingPassword">Mot de passe</label>
</div>
<br>
    <input type="submit" style="text-align: center;" name="valider" class="btn btn-primary milieu" value="Valider">

</form>