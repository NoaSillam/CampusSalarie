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
    
    width: 100%;
 }
 p{
  color: black;
 }
</style>
<br>

<article>
    <h1 style="text-align: center;">Liste mis a jour des Videos de ce theme </h1>
</article>
<br>
<br>
<a href="index.php?action=videoAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter une video"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Libelle</th>
            <!-- <th>Type</th> -->
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Video</th>
            <!-- <th>duree</th> -->
            <th style="text-align: center;">Date de Parution</th>
            <th style="text-align: center;">Disponibilité</th>
            <th style="text-align: center;">Modifier</th>
    
        </tr>
        <tr>

<?php foreach($videoDoc as $video):?>

   <!-- <td> </td> -->

   <td><?= $video['libelle'] ?></td>
   <td>
   <?php 
      $description = strip_tags( htmlspecialchars_decode($video['description'])); // Supprime les balises HTML de la description
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
  
    <td><iframe width="300" height="220" src=" <?= $video['lien']?>"></iframe> </td>
    <td> <?= date('d/m/Y', strtotime($video['dateParution'])) ?> </td>
   <td> <?php
   if($video['dateParution'] <= date('Y-m-d H:i'))
   {
    echo "disponible";
   }else{
    echo "indisponible";
   }
    ?>
  </td>
    <td><a  href="<?= "index.php?action=videoModifier&idVideo=". $video['idDocVideo']?>"> <input type="submit" style="width: 100%;" class="btn btn-info" value="Modifier"> </a></td>

   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>