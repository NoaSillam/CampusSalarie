
<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>



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

        </tr>
        <tr>
<?php foreach($prestataires as $prestataire):
?>

   <td> <?= $prestataire['nomPrestataire'] ?></td>
    <td><?= $prestataire['logo'] ?></td>
    <td> <?= $prestataire['adresse'] ?></td>
    <td><?= $prestataire['codePostal'] ?></td>
    <td> <a href="<?= "index.php?action=referentLecteur&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="referent" /></a></td>
    <td> <a href="<?= "index.php?action=prestLecteur&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Animation Partenaire" /></a></td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>