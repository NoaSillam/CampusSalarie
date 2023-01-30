<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>



<a href="index.php?action=accueilDictionnaireAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un mot dans le dictionnaire"></a>

<article>
    <h1>Liste mis a jour du dictionnaire <?php
    if(isset($salarie['nom']))echo "de".$salarie['nom'] ?></h1>
</article>
<table class="table">
    <tbody>
        <tr>
            <th>Libelle</th>
            <th>Définition</th>
            <th>Img</th>
            <th>Modifier</th>
            <th>Supprimer</th>

        </tr>
        <tr>

<?php foreach($dictionnaires as $dictionnaire):?>

   <!-- <td> </td> -->
   <td><?= $dictionnaire['libelle'] ?></td>
    <td> <?= $dictionnaire['definition']?> </td>
    <td> <?= $dictionnaire['img']?> </td>
    <td><a  href="<?= "index.php?action=dictionnaireModifier&idDictionnaire=". $dictionnaire['idDictionnaire']?>"> <input type="submit" class="btn btn-primary" value="Modifier"> </a></td>
    <form action="index.php?action=deleteDictionnaire" method="post"><td>  <input type="text" name="idDictionnaire" value="<?= $dictionnaire['idDictionnaire'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
   
   
    </tr>
        <?php endforeach;?>
    </tbody>
</table>
<br/>






