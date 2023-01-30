<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<a href="index.php?action=documentAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un document"></a>

<article>
    <h1>Liste mis a jour des document </h1>
</article>
<table class="table">
    <tbody>
        <tr>
            <th>Libelle</th>
            <th>Document</th>
            <th>Description</th>
            <th>Date de Parution</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <tr>

<?php foreach($documents as $document):?>

   <!-- <td> </td> -->
   <td><?= $document['libelle'] ?></td>
 
   
   <?php
  if($document['format']=='pdf')
  {
    ?>
     <td><iframe width="300" height="300" src="image/<?= $document['lien']?> " > </iframe></td>
    <?php
  }
  else if ($document['format']=='pptx')
  {
    ?>
    <td>  <img width="300" height="300" src="image/<?= $document['lien']?> " > </td>

    <?php
  }
  else{
    ?>
    <td><img width="300" height="300" class="img-fluid" src="image/<?= $document['lien']?>" ></td>
    <?php
  }

  ?>
    <td> <?= $document['description']?> </td>
    <td> <?= $document['dateParution']?> </td>
    <td><a  href="<?= "index.php?action=documentsModifier&idDocument=". $document['idDocVideo']?>"> <input type="submit" class="btn btn-primary" value="Modifier"> </a></td>
    <form action="index.php?action=deleteDocument" method="post"><td>  <input type="text" name="idDocument" value="<?= $document['idDocVideo'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>



