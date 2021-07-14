<?php

  session_start();
  require_once('tools.php');
  $db = dbConnect();

  if(isset($_GET['page'])){

    $page = $_GET['page'];

    switch ($page){

      case 'contact': //page contact
        require_once('controllers/contactController.php');
        break;
      
      case 'users': //page users
        require_once('controllers/usersController.php');
        break;

      case 'user'://pages user
        require_once('controllers/userController.php');
        break;

      case '404': //page 404
        require_once('controllers/404Controller.php');
        break;

      default : //page par defaut
        header('Location: index.php?page=404');
        exit;
    }
  }

  else {
    $page = "";
    require_once('controllers/indexController.php');
  }

  require_once('layouts/layout.php');

  if(isset($_SESSION['message'])){
		unset($_SESSION['message']);
	} 

?>
