<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>



<!-- <a href="index.php?action=referentAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un referent"></a> -->
<article>
    <h1>Liste des Referents du <?= $prestataire['nomPrestataire'] ?></h1>
</article>


<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table">
    <tbody>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Numero de Telephone</th>

        </tr>
        <tr>

<?php foreach($referents as $ref):?>

   <!-- <td> </td> -->
  
   <td><?= $ref['nom'] ?></td>
    <td> <?= $ref['prenom']?> </td>
    <td> <?= $ref['mail']?> </td>
    <td> 0<?= $ref['numTelephone']?> </td>

   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>





