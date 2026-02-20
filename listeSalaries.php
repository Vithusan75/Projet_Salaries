
<?php
require_once('header.html');
require_once("fonctions.php");

$lesSalaries = getLesSalaries();
$nbsalarie = nbrsalaries();
$salairemoyen = salairemoyen();
$salairemin = salairemin();
$salairemax = salairemax();
$nbrsalariesrv = nbrsalairesrv();

?>
<div class="container my-5">
   <a href="formsalarie.php" class="btn btn-success mb-3">
    Ajouter un salarié
</a>
  <table class="table table-hover">
      <th>id</th> 
      <th>nom</th>
      <th>prenom</th>
      <th>date-naissance</th>
      <th>date-embauche</th>
      <th>salaire</th>
      <th>service</th>
      <th>update</th>
      <th>delete</th>
    <?php foreach ($lesSalaries as $leSalarie): ?>
      <tr>      
        <td><?= htmlspecialchars( $leSalarie['id']); ?></td> 
        <td><?= htmlspecialchars( $leSalarie['nom']); ?></td>  
        <td><?= htmlspecialchars($leSalarie['prenom']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['date_naissance']); ?></td> 
        <td><?= htmlspecialchars( $leSalarie['date_embauche']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['salaire']); ?></td>
        <td><?= htmlspecialchars( $leSalarie['service']); ?></td>
      
      <td>
      <button type="button" class="btn btn-primary btn-sm mb-2"><i class="bi bi-pen"></i> 
        <a href="updateForm.php?id=<?= $leContact['id']; ?>"
           class="btn btn-primary" >
          Update
        </a>
      </button>
    </td>

    <td>
        <button type="button" class="btn btn-danger btn-sm mb-2"><i class="bi bi-trash"></i> 
        <a href="deletesalaries.php?id=<?= $leSalarie['id']; ?>" 
   class="btn btn-danger" 
   onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce salarié ?');">
    Supprimer
</a>
      
      </button>
    </td>
    </tr> 
    <?php endforeach; ?>
  </table>


<div class="container ">
    <div class="row row-cols-4">


<div class="card text-white bg-primary mx-1 my-2" >
  
    <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">Nombre salariés : <?= $nbsalarie;?></h5>
    <p class="card-text"></p>
  </div>
</div>
<div class="card text-white bg-secondary m-1" >
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">Salaire moyen : <?= round($salairemoyen,2);?></h5>
    <p class="card-text"></p>
  </div>
</div>
<div class="card text-white bg-success m-1" >
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">Salaire minimum : <?= $salairemin;?></h5>
    <p class="card-text"></p>
  </div>
</div>
<div class="card text-white bg-danger m-1" >
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">salaire max : <?= $salairemax;?></h5>
    <p class="card-text"></p>
  </div>
</div>
<div class="card text-dark bg-warning m-1" >
  <div class="card-header"></div>
  <div class="card-body">
    <h5 class="card-title">Nombre de salariés par service : <p></p><?php foreach ($nbrsalariesrv as $salService): ?>
  <p><?= $salService['service'] ; ?> : <?= $salService['nb'] ; ?></p>
<?php endforeach; ?> </h5>
    <p class="card-text"></p>
  </div>
</div>

    </div>

</div>


</div>
</ul>
<?php
require_once('footer.html');
?>
