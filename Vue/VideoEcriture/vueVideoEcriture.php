<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<a href="index.php?action=videoAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une video"></a>

<article>
    <h1>Liste mis a jour des Videos </h1>
</article>
<table class="table">
    <tbody>
        <tr>
            <th>Libelle</th>
            <!-- <th>Type</th> -->
            <th>Description</th>
            <th>Video</th>
            <!-- <th>duree</th> -->
            <th>Date de Parution</th>
            <th>Date de Creation</th>
            <th>Modifier</th>
            <!-- <th>Supprimer</th> -->
        </tr>
        <tr>

<?php foreach($videos as $video):?>

   <!-- <td> </td> -->

   <td><?= $video['libelle'] ?></td>
    <td> <?= $video['description']?> </td>
    <td><iframe width="300" height="220" src=" <?= $video['lien']?>"></iframe> </td>
    <td> <?= $video['dateParution']?> </td>
    <td> <?= $video['dateCreation']?> </td>
    <td><a  href="<?= "index.php?action=videoModifier&idVideo=". $video['idDocVideo']?>"> <input type="submit" class="btn btn-primary" value="Modifier"> </a></td>
    <!-- <form action="index.php?action=deleteVideo" method="post"><td>  <input type="text" name="idVideo" value="<?= $video['idDocVideo'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form> -->
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>