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
    <h1>Liste mis a jour des document de <?= $salarie['nom'] ?></h1>
</article>
<table class="table">
    <tbody>
        <tr>
            <th>Libelle</th>
            <th>Document</th>
            <th>Description</th>
            <th>Date</th>
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
    <td><a href="#modifier"> <input type="submit" class="btn btn-primary" value="Modifier"> </a></td>
    <form action="index.php?action=deleteDocument" method="post"><td>  <input type="text" name="idDocument" value="<?= $document['idDocVideo'] ?>" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>
<!-- <h2>Ajouter un Document</h2>
<form action="index.php?action=document" method="post">
<input type="text" name="idDocument" placeholder="idDocument" required>
    <input type="text" name="libelle" placeholder="libelle" required>
    <input type="text" name="type" placeholder="type" required>
    <input type="text" name="lien" placeholder="lien" required>
    <input type="text" name="description" placeholder="description" required>
    <input type="text" name="dateParution" placeholder="dateParution" required>
    <input type="text" name="idSalarie" placeholder="idSalarie" required>
    <input type="text" name="idPrestataire" placeholder="idPrestataire" required>
    <input type="submit" value="Valider">
</form> -->


<h2 style="text-align: center;">Modifier un Document</h2>
<form action="index.php?action=modifDocument" id="modifier" method="post">
    <input type="text" style="text-align: center;" class="form-control" name="libelle" placeholder="libelle" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="type" placeholder="type" required>
    <br> -->
    <input type="file" style="text-align: center;" class="form-control" name="lien" placeholder="lien" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="description" placeholder="description" required>
    <br>
    <input type="datetime-local" style="text-align: center;" class="form-control" name="dateParution" placeholder="dateParution" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="idDocument" value="<?= $document['idDocVideo'] ?>" />
    <br>
    <input type="submit"  style="text-align: center;" class="btn btn-primary milieu" value="Valider">
</form>


