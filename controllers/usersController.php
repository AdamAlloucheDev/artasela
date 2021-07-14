<?php 

  require_once ('models/User.php'); 
  
  $users = getAllUsers();

  if(isset($_GET['action'])){

    $action = $_GET['action'];
    
    if($action == 'delete'){
      
      deleteUser($_GET['id']);
      header('Location: index.php?page=users');
      exit;
    }
  }

  $view = 'views/usersView.php'; 

?>