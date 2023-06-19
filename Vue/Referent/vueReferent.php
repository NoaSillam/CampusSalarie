<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 .hidden{
    visibility: hidden;
 }
 .supprimer{

    width: 70%;
 }
</style>


<br>
<h1 style="text-align: center;">Liste des référents du <?= $prestataire['nomPrestataire'] ?></h1>
<br>
<br>

    <a href="index.php?action=referentAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float:left;" value="Ajouter un référent"></a>

<br>
<br>


<!-- <a href="index.php?action=referent"><input type="submit" value="ajouter" /><a> -->
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Prénom</th>
            <th style="text-align: center;">Mail</th>
            <th style="text-align: center;">Numéro de Téléphone</th>
            <th style="text-align: center;">Actualité</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>
        </tr>
        <tr>

<?php foreach($referents as $referent):?>

   <!-- <td> </td> -->
  
   <td><?= $referent['nom'] ?></td>
    <td> <?= $referent['prenom']?> </td>
    <td> <?= $referent['mail']?> </td>
 <?php if($referent['numTelephone'] == "0")
 {
    echo "<td>non renseigné</td>";
 } else{ ?>
    <td> 0<?= $referent['numTelephone']?> </td>
    <?php
 }
 ?>
    
    <td> <a href="<?= "index.php?action=actualite&id=". $referent['idReferent']?>"> <input type="submit" class="btn btn-primary" value="Actualité" /></a></td>
    <td><a  href="<?= "index.php?action=referentModifier&idReferent=". $referent['idReferent']?>"> <input type="submit" style="width: 100%;" class="btn btn-info" value="Modifier" /></a></td>
    <form action="index.php?action=deleteReferent" method="post"><td>  <input type="hidden" class="hidden" name="idReferent" value="<?= $referent['idReferent'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>





