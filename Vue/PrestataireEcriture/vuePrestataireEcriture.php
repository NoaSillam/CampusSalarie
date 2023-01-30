
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
            
        </tr>
        <tr>
<?php foreach($prestataires as $prestataire):
?>

   <td> <?= $prestataire['nomPrestataire'] ?></td>
    <td><?= $prestataire['logo'] ?></td>
    <td> <?= $prestataire['adresse'] ?></td>
    <td><?= $prestataire['codePostal'] ?></td>
    <td> <a href="<?= "index.php?action=referentEcriture&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="referent" /></a></td>
    <td> <a href="<?= "index.php?action=prestEcriture&id=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Animation Partenaire" /></a></td>
    <td><a  href="<?= "index.php?action=prestataireModifier&idPrestataire=". $prestataire['id']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>


</tr>
        <?php endforeach;?>
    </tbody>
</table>