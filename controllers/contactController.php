<?php 

  require_once ('models/User.php'); 

  $errors = [];
  $page = $_GET['page'];

  if ($page == 'contact') {

    if (!empty($_POST)) {

      $submittedUsername = $_POST['username'];
      $submittedFirstname = $_POST['firstname'];
      $submittedLastname = $_POST['lastname'];
      $submittedEmail = $_POST['email'];
      $submittedBio = $_POST['bio'];

      if (!empty($submittedUsername)) {
        if(usernameVerify($submittedUsername)){
          $errors[] = "Le pseudo existe déja !";
        }
      }
      else {
        $errors[] = "Merci de renseigner votre Pseudo !";
      }

      if (empty($submittedFirstname)) {
        $errors[] = "Le prénom est obligatoire !";
      }

      if (empty($submittedLastname)){
        $errors[] = "Le nom est obligatoire !";
      }
      
      if (empty($submittedBio)){
        $errors[] = "La biographie est obligatoire !";
      }

      if (!empty($submittedEmail)) {

        if(checkEmailFormat($submittedEmail))  {
          
          if(emailVerify($submittedEmail)){
            $errors[] = "L'email existe déja !";
          }
        }
        else {
          $errors[] = "L'email n'est pas au bon format !";
        }
        
      }
      else {
        $errors[] = "Merci de renseigner votre Email !";
      }

      if (empty($errors)) {

        $register = addUser($_POST);
        $_SESSION['message'] = 'Utilisateur ajouté !';
        header('Location: index.php?page=contact');
        exit;
        
      }

    }
    $view = 'views/contactView.php'; 
  }


?>