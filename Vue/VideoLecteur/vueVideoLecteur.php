<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
 p{
  color: black;
 }
</style>

<!-- <a href="index.php?action=videoAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une video"></a> -->

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
           

        </tr>
        <tr>

<?php foreach($videos as $video):?>

   <!-- <td> </td> -->

   <td><?= $video['libelle'] ?></td>
    <td> <?= htmlspecialchars_decode($video['description'])?> </td>
    <td><iframe width="300" height="220" src=" <?= $video['lien']?>"></iframe> </td>
    <td> <?= $video['dateParution']?> </td>
   

   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>