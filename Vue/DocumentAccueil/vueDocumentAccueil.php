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
    <h1 style="text-align: center;">Liste mise à jour des documents </h1>
</article>
<br>
<br>

<a href="index.php?action=documentAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter un document"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Libellé</th>
            <th style="text-align: center;">Document</th>
            <th style="text-align: center;">Description</th>
            <th style="text-align: center;">Date de Parution</th>
            <th style="text-align: center;">Disponibilité</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;"> Supprimer</th>
        </tr>
        <tr>

<?php foreach($documents as $document):?>

   <!-- <td> </td> -->
   <td><?= $document['libelle'] ?></td>
 
   
    <td><img width="300" height="300" class="img-fluid" src="<?= $document['imgApercu']?>" ></td>
  
     <td>
   <?php 
      $description = strip_tags( htmlspecialchars_decode($document['description'])); // Supprime les balises HTML de la description
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
    <!-- <td> <?= htmlspecialchars_decode($document['description'])?> </td> -->
    <td> <?= date('d/m/Y', strtotime($document['dateParution'])) ?> </td>
    <td> <?php
   if($document['dateParution'] <= date('Y-m-d H:i'))
   {
    echo "disponible";
   }else{
    echo "indisponible";
   }
    ?>
  </td>
    <td><a  href="<?= "index.php?action=documentsModifier&idDocument=". $document['idDocVideo']?>"> <input type="submit" class="btn btn-info" style="width: 100%;" value="Modifier"> </a></td>
    <form action="index.php?action=deleteDocument" method="post"><td>  <input type="hidden" class="hidden" name="idDocument" value="<?= $document['idDocVideo'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>



