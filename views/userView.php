<div class="text-white-50">
  <p>Utilisateur <?= $user['id'] ;?></p><br>
  <h3>Pseudo : <?= $user['username'] ;?>,</h3><br>
  <h4>Prénom : <?= $user['firstname'] ;?>,</h4><br>
  <h4>Nom : <?= $user['lastname'] ;?>,</h4><br>
  
  <h5>eMail : <?= $user['email'] ;?>,</h5><br>
  <h6>Sa bio : <?= $user['bio'] ;?></h6><br>
  <h6>Membre depuis : <?= $user['created_at'] ;?></h6><br>
</div>

<a href="index.php?page=users" class="btn btn-outline-secondary">Retour</a>
