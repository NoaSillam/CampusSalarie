<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>



<a href="index.php?action=referentAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un referent"></a>
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
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <tr>

<?php foreach($referents as $referent):?>

   <!-- <td> </td> -->
  
   <td><?= $referent['nom'] ?></td>
    <td> <?= $referent['prenom']?> </td>
    <td> <?= $referent['mail']?> </td>
    <td> 0<?= $referent['numTelephone']?> </td>
    <td><a  href="<?= "index.php?action=referentModifier&idReferent=". $referent['idReferent']?>"> <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
    <form action="index.php?action=deleteReferent" method="post"><td>  <input type="text" name="idReferent" value="<?= $referent['idReferent'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>





