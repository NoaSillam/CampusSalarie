
<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>


<a href="index.php?action=accueilAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un prestataire"></a>
<h1>Liste des Prestataires</h1>
<table class="table">
    <tbody>
    <tr>
            <th>Nom</th>
            <th>Logo</th>
            <th>Adresse</th>
            <th>CodePostal</th>
            <th>Les Referents associés</th>
            <th>Les Animations Partenaires associés</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <tr>
<?php foreach($prestataires as $prestataire):
?>

   <td> <?= $prestataire['nomPrestataire'] ?></td>
    <td><?= $prestataire['logo'] ?></td>
    <td> <?= $prestataire['adresse'] ?></td>
    <td><?= $prestataire['codePostal'] ?></td>
    <td> <a href="<?= "index.php?action=prestataire&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="referent" /></a></td>
    <td> <a href="<?= "index.php?action=prest&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Animation Partenaire" /></a></td>
    <td><a  href="<?= "index.php?action=prestataireModifier&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
    <form action="index.php?action=deletePrestataire" method="post"><td>  <input type="text" name="idPrestataire" value="<?= $prestataire['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>

</tr>
        <?php endforeach;?>
    </tbody>
</table>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!-- 
<h2>Modifier un Prestataire</h2>
<form action="index.php?action=modifPrestataire" method="post">
    <input type="text" name="nomPrestataire" placeholder="Nom du Prestataire" required>
    <input type="text" name="logo" placeholder="logo" required>
    <input type="text" name="adresse" placeholder="adresse" required>
    <input type="text" name="codePostal" placeholder="code Postal" required>
    <input type="text" name="id" placeholder="id" required>
    <input type="submit" value="Valider">
</form> -->



