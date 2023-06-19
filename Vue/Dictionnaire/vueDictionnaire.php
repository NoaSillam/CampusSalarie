<!-- <style>
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
</style> -->

<br>
<h1 style="text-align: center; ">Liste mise à jour du dictionnaire <?php
    if(isset($salarie['nom']))echo "de".$salarie['nom'] ?></h1>

<br>
<br>
<a href="index.php?action=accueilDictionnaireAjouter"><input type="submit" class="btn btn-success"  style="width: 25%; float: left;" value="Ajouter un mot dans le dictionnaire"></a>
<br>
<br>
<div style="width: 100%;">
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Libellé</th>
            <th style="text-align: center;">Définition</th>
            <th style="text-align: center;">Image</th>
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>

        </tr>
        <tr>

<?php foreach($dictionnaires as $dictionnaire):?>

   <!-- <td> </td> -->
   <td><?= $dictionnaire['libelle'] ?></td>
   <td>
   <?php 
      $description = strip_tags( htmlspecialchars_decode($dictionnaire['definition'])); // Supprime les balises HTML de la description
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
    <!-- <td> <?= $dictionnaire['definition']?> </td> -->
    <td><img src="<?= $dictionnaire['img']?>" alt="" class="img-fluid"> </td>
    <td><a  href="<?= "index.php?action=dictionnaireModifier&idDictionnaire=". $dictionnaire['idDictionnaire']?>"> <input type="submit" class="btn btn-info" style=" width: 100%;"  value="Modifier"> </a></td>
    <form action="index.php?action=deleteDictionnaire" method="post"><td>  <input type="hidden" name="idDictionnaire" class="hidden" value="<?= $dictionnaire['idDictionnaire'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>
   
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<br/>
