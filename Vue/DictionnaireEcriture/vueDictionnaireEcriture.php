<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<br>

<article>
    <h1>Liste mis a jour du dictionnaire <?php
    if(isset($salarie['nom']))echo "de".$salarie['nom'] ?></h1>
</article>

<br>
<br>
<a href="index.php?action=accueilDictionnaireAjouter"><input type="submit" class="btn btn-success" style="width: 30%; float:left;" value="Ajouter un mot dans le dictionnaire"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Libelle</th>
            <th style="text-align: center;">Définition</th>
            <th style="text-align: center;">Img</th>
            <th style="text-align: center;">Modifier</th>
            <!-- <th>Supprimer</th> -->

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
    <td><img src="image/dictionnaire/<?= $dictionnaire['img']?>" alt="" style="width: 150px"> </td>
    <td><a  href="<?= "index.php?action=dictionnaireModifier&idDictionnaire=". $dictionnaire['idDictionnaire']?>"> <input type="submit" class="btn btn-info" style="width:100%;" value="Modifier"> </a></td>
    <!-- <form action="index.php?action=deleteDictionnaire" method="post"><td>  <input type="text" name="idDictionnaire" value="<?= $dictionnaire['idDictionnaire'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
   
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>



