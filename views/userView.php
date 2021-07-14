<div class="text-white-50 user-info">
  <p>ID Utilisateur : <span class="text-white"><?= $user['id'] ;?></span><br>
  Pseudo : <span class="text-white"><?= $user['username'] ;?></span><br>
  Prénom : <span class="text-white"><?= $user['firstname'] ;?></span><br>
  Nom : <span class="text-white"><?= $user['lastname'] ;?></span><br>
  
  email : <span class="text-white"><?= $user['email'] ;?></span><br>
  Bio : <span class="text-white"><?= $user['bio'] ;?></span><br>
  Membre depuis : <span class="text-white"><?= dateFR($user['created_at']) ;?></span></p><br>
</div>

<a href="index.php?page=users" class="btn btn-outline-secondary">Retour</a>
