
<style>
    .scroll
{
    border: 1px solid #333333;
    width: 200px;
  height: 200px;
  overflow-y: scroll;
}
</style>
<!-- <a href="index.php?action=animPartenaireAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une Animation Partenaire"></a> -->




<article>
    <h1>Liste des Animations Partenaire du <?= $prestataire['nomPrestataire'] ?></h1>
</article>


<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table">
    <tbody>
    <tr>
            <th>Nom</th>
            <th>lienVideo</th>
            <th>lienPdf</th>
            <th>adresse</th>
            <th>code postal</th>
            <th>ville</th>
            <th>type</th>
            <th>descriptif</th>
            <th>dateParution</th>
            <!-- <th>Modifier</th>
            <th>Supprimer</th> -->
        </tr>
        <tr>

<?php foreach($animationPartenaires as $animationPartenaire):?>

   <!-- <td> </td> -->
   <td><?= $animationPartenaire['nom'] ?></td>
    <td> <?= $animationPartenaire['lienVideo']?> </td>
    <td> <?= $animationPartenaire['lienPdf']?> </td>
    <td> <?= $animationPartenaire['adresseAnim']?> </td>
    <td> <?= $animationPartenaire['codePostalAnim']?> </td>
    <td> <?= $animationPartenaire['villeAnim']?> </td>
    <td> <?= $animationPartenaire['type']?> </td>
    <td> <p class="scroll"><?= $animationPartenaire['descriptif']?></p> </td>
    <td> <?= $animationPartenaire['dateParution']?> </td>

   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>