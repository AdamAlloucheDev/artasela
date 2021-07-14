<?php 
 
  require_once ('models/User.php'); 


  if (isset($_GET['id'])) {
    $userID = $_GET['id'];
    $view = 'views/userView.php'; 
  }
  else {
    header('Location: index.php?page=404');
    exit;
  }
  
  $user = getUser($userID );
  
  if (!$user) {
    header('Location: index.php?page=404');
    exit;
  }
  
  

?>

