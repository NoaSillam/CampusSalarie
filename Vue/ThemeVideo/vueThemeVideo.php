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
    <h1 style="text-align: center;">Liste mise à jour des vidéos de ce thème </h1>
</article>
<br>
<br>
<a href="index.php?action=videoAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter une vidéo"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Libellé</th>
            <!-- <th>Type</th> -->
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Vidéo</th>
            <!-- <th>duree</th> -->
            <th style="text-align: center;">Date de parution</th>
            <th style="text-align: center;">Disponibilité</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>
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
    <form action="index.php?action=deleteVideo" method="post"><td>  <input type="hidden" class="hidden" name="idVideo" value="<?= $video['idDocVideo'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>
<!-- <h2>Ajouter une Video</h2>
<form action="index.php?action=video" method="post">
<input type="text" name="idVideo" placeholder="idVideo" required>
    <input type="text" name="libelle" placeholder="libelle" required>
    <input type="text" name="type" placeholder="type" required>
    <input type="text" name="lien" placeholder="lien" required>
    <input type="text" name="description" placeholder="description" required>
    <input type="text" name="format" placeholder="format" required>
    <input type="text" name="duree" placeholder="duree" required>
    <input type="text" name="imgApercu" placeholder="imgApercu" required>
    <input type="date" required pattern="\d{4}-\d{2}-\d{2}" name="dateParution" placeholder="dateParution" required>
    <input type="date" required pattern="\d{4}-\d{2}-\d{2}" name="dateCreation" placeholder="dateCreation" required>
    <input type="text" name="idSalarie" placeholder="idSalarie" required>
    <input type="text" name="idPrestataire" placeholder="idPrestataire" required>
    <input type="text" name="idTheme" placeholder="idTheme" required>
    <input type="submit" value="Valider">
</form> -->




