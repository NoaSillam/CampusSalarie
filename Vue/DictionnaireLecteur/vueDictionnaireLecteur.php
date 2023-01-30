<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>



<!-- <a href="index.php?action=accueilDictionnaireAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un mot dans le dictionnaire"></a> -->

<article>
    <h1>Liste mis a jour du dictionnaire</h1>
</article>
<table class="table">
    <tbody>
        <tr>
            <th>Libelle</th>
            <th>Définition</th>
            <th>Img</th>
            

        </tr>
        <tr>

<?php foreach($dictionnaires as $dictionnaire):?>

   <!-- <td> </td> -->
   <td><?= $dictionnaire['libelle'] ?></td>
    <td> <?= $dictionnaire['definition']?> </td>
    <td> <?= $dictionnaire['img']?> </td>

   
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>



