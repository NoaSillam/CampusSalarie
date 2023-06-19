
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
</style>
<br>
<h1 style="text-align: center;">Liste des salariés</h1>
<br>
<br>
<a href="index.php?action=accueilSalariesAjouter"><input type="submit" class="btn btn-success" style="width: 20%; float: left;" value="Ajouter un salarié"></a>
<br>
<br>
<table class="table table-bordered align-middle">
    <tbody>
        <tr>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Prénom</th>
            <th style="text-align: center;">Mail</th>
          
            <th style="text-align: center;">Pôle</th>
           
            <th style="text-align: center;">Modifier</th>
            <th style="text-align: center;">Supprimer</th>
        </tr>
        <tr>
<?php foreach($salaries as $salarie):
?>

   <td>  <?= $salarie['nom'] ?>  </td>
    <td><?= $salarie['prenom'] ?></td>
    <td><?= $salarie['mail'] ?></td>
   
    <td><?= $salarie['pole'] ?></td>
    <!-- <td> <a href="<?= "index.php?action=salarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Dictionnaire" /></a></td>
    <td> <a href="<?= "index.php?action=prestaSalarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Document" /></a></td>
    <td> <a href="<?= "index.php?action=videoSalarie&id=". $salarie['id']?>"> <input type="submit" class="btn btn-primary" value="Video" /></a></td> -->
   

    <td><a  href="<?= "index.php?action=ModifierSalarie&idSalarie=". $salarie['id']?>">  <input type="submit" class="btn btn-info" style="width: 80%;" value="Modifier" /></a></td>
    <form action="index.php?action=deleteSalarie" method="post"><td>  <input type="hidden" class="hidden" name="idSalarie" value="<?= $salarie['id'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger supprimer" value="Supprimer" /></td></form>

</tr>
        <?php endforeach;?>
    </tbody>
</table>
