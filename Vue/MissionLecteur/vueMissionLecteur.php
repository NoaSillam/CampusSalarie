

<h1>Les Missions</h1>
<!-- <a href="index.php?action=BenevoleMssionAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une mission"></a> -->
<table class="table">
<tbody>
    <tr>
        <th>Titre</th>
        <th>Annonce</th>
        <th>Adresse</th>
        <th>Code Postal</th>
        <th>Ville</th>
        <!-- <th>Benevole</th> -->
        <!-- <th>Modifier</th>
        <th>Supprimer</th> -->
        </tr>
        <tr>
<?php foreach($missions as $mission):?>

    <!-- <td> </td> -->
    <td><?= $mission['titre'] ?></td>
     <td> <?= $mission['annonce']?> </td>
     <td> <?= $mission['adresse']?> </td>
     <td> <?= $mission['codePostal']?> </td>
     <td> <?= $mission['ville']?> </td>
     <!-- <td> <a href="<?= "index.php?action=BenevoleMissionInscrit&idMission=". $mission['idMission']?>"> <input type="submit" class="btn btn-primary" value="Benevole" /></a></td> -->
     <!-- <td><a  href="<?= "index.php?action=mission&idMission=". $mission['idMission']?>"> <input type="submit" class="btn btn-primary" name="modifier" value="Modifier"> </a></td>
     <form action="index.php?action=deleteMission" method="post"><td>  <input type="text" name="idMission" value="<?= $mission['idMission'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
     
 
     </tr>
         <?php endforeach;?>
     </tbody>
 </table>
 <br/>

