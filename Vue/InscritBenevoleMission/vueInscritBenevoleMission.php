<h1>Les benevoles</h1>
<table class="table align-middle">
    <tbody>
    <tr class="text-align">
        <th>Civilite</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Mail</th>
        <th>Date de l'inscription</th>
        <th>Age</th>
        <th>Modifier</th>
        <th>Supprimer</th>

    </tr>
        <tr>
    <?php
    foreach($inscrits as $inscrit):
        ?>
 <td><?= $inscrit['civilite'] ?> </td>
  <td><?= $inscrit['nom'] ?> </td>
  <td>  <?= $inscrit['prenom'] ?> </td>
  <td> <?= $inscrit['mail'] ?></td>
  <td> <?= $inscrit['dateInscription'] ?> </td>
  <td> <?= $inscrit['age'] ?></td>
  <td><a  href="<?= "index.php?action=benevoleModifier&idInscrit=". $inscrit['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
  <form action="index.php?action=deleteInscritBenevole" method="post"><td>  <input type="text" name="idInscrit" value="<?= $inscrit['id'] ?>" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
  
 


</tr>
        <?php endforeach;?>
    </tbody>
</table>
<!-- 
<h2 style="text-align: center;">Modifier un benevole</h2>
<form action="index.php?action=modifInscrit" id="modifier" method="post">
    <input type="text"  style="text-align: center;" class="form-control" name="nom" placeholder="nom" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="prenom" placeholder="prenom" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="numTelephone" placeholder="numTelephone" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="mail" placeholder="mail" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="adresse" placeholder="adresse" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="codePostal" placeholder="codePostal" required>
    <br>
    <input type="text"  style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu" style="margin-left: 25%;" value="Valider">
</form>
 -->
