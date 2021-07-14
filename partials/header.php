<header class="mb-auto">
  <div>
    <h3 class="float-md-start mb-0">ArTaSeLa</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link <?= !isset($_GET['page']) ? 'active' : '';?>" aria-current="page" href="index.php">Accueil</a>
      <a class="nav-link <?= isset($_GET['page']) && $_GET['page'] == 'users' ? 'active' : '';?>" href="index.php?page=users">Inscrits</a>
      <a class="nav-link <?= isset($_GET['page']) && $_GET['page'] == 'contact' ? 'active' : '';?>" href="index.php?page=contact">Contact</a>
    </nav>
  </div>
</header>