
<style>
    .milieu {
     align-items: center;
    justify-content: center;
    width: 50%;
    margin-left: 25%;
 }
</style>

<a href="index.php?action=accueilSalariesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter un salarie"></a>
<h1>Liste des Salaries</h1>
<table class="table">
    <tbody>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
          
            <th>Pole</th>
            <th>Les Dictionnaires associées</th>
            <th>Les Documents Associées</th>
            <th>Les Vidéo associées</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <tr>
<?php foreach($salaries as $salarie):
?>

   <td>  <?= $salarie['nom'] ?>  </td>
    <td><?= $salarie['prenom'] ?></td>
    <td><?= $salarie['mail'] ?></td>
   
    <td><?= $salarie['pole'] ?></td>
    <td> <a href="<?= "index.php?action=salarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Dictionnaire" /></a></td>
    <td> <a href="<?= "index.php?action=prestaSalarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Document" /></a></td>
    <td> <a href="<?= "index.php?action=videoSalarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Video" /></a></td>
   

    <td><a  href="<?= "index.php?action=ModifierSalarie&idSalarie=". $salarie['id']?>">  <input type="submit" class="btn btn-primary" value="Modifier" /></a></td>
    <form action="index.php?action=deleteSalarie" method="post"><td>  <input type="text" name="idSalarie" value="<?= $salarie['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>

</tr>
        <?php endforeach;?>
    </tbody>
</table>
