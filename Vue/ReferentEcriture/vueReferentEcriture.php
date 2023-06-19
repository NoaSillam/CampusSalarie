<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>




<article>
    <h1 style="text-align: center;">Liste des Referents du <?= $prestataire['nomPrestataire'] ?></h1>
</article>
<br>
<br><a href="index.php?action=referentAjouter"><input type="submit" class="btn btn-success" style="width: 30%; float:left;" value="Ajouter un referent"></a>
<br>
<br>


<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Prenom</th>
            <th style="text-align: center;">Mail</th>
            <th style="text-align: center;">Numero de Telephone</th>
            <th style="text-align: center;">Actualité</th>
            <th style="text-align: center;">Modifier</th>
        
        </tr>
        <tr>

<?php foreach($referents as $referent):?>

   <!-- <td> </td> -->
  
   <td><?= $referent['nom'] ?></td>
    <td> <?= $referent['prenom']?> </td>
    <td> <?= $referent['mail']?> </td>
    <td> 0<?= $referent['numTelephone']?> </td>
    <td> <a href="<?= "index.php?action=actualiteEcriture&id=". $referent['idReferent']?>"> <input type="submit" class="btn btn-primary" value="Actualité" /></a></td>
    <td><a  href="<?= "index.php?action=referentModifier&idReferent=". $referent['idReferent']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier" /></a></td>
    <!-- <form action="index.php?action=deleteReferent" method="post"><td>  <input type="text"  name="idReferent" value="<?= $referent['idReferent'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>





