<?php if(!empty($errors)): ?>
  <div class="alert alert-danger alert-dismissible fade show errors" role="alert">
    <strong>Erreur !</strong><br>
    <?php foreach($errors as $error): ?>
      <?= $error ?><br>
    <?php endforeach; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-success alert-dismissible fade show errors" role="alert">
    <strong>Merci !</strong>
    <p><?= $_SESSION['message'] ?></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<h1 class="mb-3">Inscription</h1>
<form class="needs-validation" action="" method="POST">
  <div class="row g-3">
    <div class="col-sm-6">
      <label for="firstName" class="form-label">Prénom</label>
      <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="<?= isset($submittedFirstname) ? $submittedFirstname : '' ;?>" >
    </div>

    <div class="col-sm-6">
      <label for="lastName" class="form-label">Nom</label>
      <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?= isset($submittedLastname) ? $submittedLastname : '' ;?>" >
    </div>

    <div class="col-12">
      <label for="username" class="form-label">Pseudo</label>
      <div class="input-group has-validation">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?= isset($submittedUsername) ? $submittedUsername : '' ;?>">
      </div>
    </div>

    <div class="col-12">
      <label for="email" class="form-label">Email <span class="text-muted">(Valide)</span></label>
      <input type="text" class="form-control" id="email" name="email" placeholder="ton@email.com" value="<?= isset($submittedEmail) ? $submittedEmail : '' ;?>">
    </div>

    <div class="col-12">
      <label for="address" class="form-label">Biographie</label>
      <textarea  class="form-control" id="bio" name="bio"  placeholder="Parlez nous un peu de vous…" cols="30" rows="3"><?= isset($submittedBio) ? $submittedBio : '' ;?></textarea>
    </div>
    <button type="submit" id="button" onclick="openModal()" class="w-50 mx-auto btn btn-success btn-lg">Envoyer</button>
  </div>
</form>

<div class="popup" id="modal">
  <div class="popup-content">
    <p>Le formulaire à bien été envoyé !</p>
  </div>
</div>