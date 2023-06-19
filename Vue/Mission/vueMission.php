
<style>
     .hidden{
    visibility: hidden;
 }
 .supprimer{

    width: 100%;
 }
</style>
<br>
<h1 style="text-align: center;">Les Missions</h1>

<br>
<br>
<a href="index.php?action=BenevoleMssionAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter une mission"></a>
<br>
<br>
<table class="table table-bordered align-middle">
<tbody>
    <tr>
        <th style="text-align: center;">Titre</th>
        <th  style="text-align: center;">Annonce</th>
         <th style="text-align: center;">Adresse</th>
        <th style="text-align: center;">Code Postal</th>
        <th style="text-align: center;">Ville</th> 
        <th  style="text-align: center;">Bénévole</th>
        <th style="text-align: center;">Modifier</th>
        <th  style="text-align: center;">Supprimer</th>
        </tr>
        <tr>
<?php foreach($missions as $mission):?>

    <!-- <td> </td> -->
    <td><?= $mission['titre'] ?></td>
    <td>
   <?php 
      $description = strip_tags(htmlspecialchars_decode($mission['annonce'])); // Supprime les balises HTML de la description
      if (strlen($description) > 255) {
         $description = substr($description, 0, 255);
         $last_space = strrpos($description, ' ');
         if ($last_space !== false) {
            $description = substr($description, 0, $last_space) . '...';
         } else {
            $description .= '...';
         }
      }
      echo $description;
   ?>
</td>
     <!-- <td> <?= $mission['annonce']?> </td> -->
     <td> <?= $mission['adresse']?> </td>
     <td> <?= $mission['codePostal']?> </td>
     <td> <?= $mission['ville']?> </td> 
     <td> <a href="<?= "index.php?action=BenevoleMissionInscrit&idMission=". $mission['idMission']?>"> <input type="submit" style="width: 100%;" class="btn btn-primary" value="Bénévole" /></a></td>
     <td><a  href="<?= "index.php?action=mission&idMission=". $mission['idMission']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" name="modifier" value="Modifier"> </a></td>
     <form action="index.php?action=deleteMission" method="post"><td>  <input type="hidden" name="idMission" class="hidden" value="<?= $mission['idMission'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
     
 
     </tr>
         <?php endforeach;?>
     </tbody>
 </table>
 <br/>

