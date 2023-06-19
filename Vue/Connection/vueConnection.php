<?php
// if(isset($_SESSION))
// {
//   session_start();
// }
?>
<h1 style="text-align: center;">La connexion</h1>
<br>
<div style="margin: auto; width: 30%;">
<form action="index.php?action=getAuthoStatut" method="post">

<div class="form-floating mb-3" >
  <input type="email" class="form-control" id="floatingInput" name="mail" style="text-align: center;" placeholder="name@example.com">
  <label for="floatingInput">Adresse mail</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" style="text-align: center;" name="password" placeholder="Password">
  <label for="floatingPassword">Mot de passe</label>
</div>
<br>
<div class="d-flex align-items-center justify-content-center">
    <input type="submit" class="btn btn-primary" style="width: 50%;"  value="Valider">
    </div>

</form>
</div>