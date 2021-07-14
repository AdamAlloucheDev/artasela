<?php


  function addUser($data){
    $db = $GLOBALS['db'] ;
    $query = $db->prepare('INSERT INTO users (username, firstname, lastname, email, bio) VALUES (?,?,?,?,?)');
    $result = $query->execute(
      [
        $data['username'],
        $data['firstname'],
        $data['lastname'],
        $data['email'],
        $data['bio']
      ]
    );
    return $result;
  }


  function deleteUser($userId){
    $db = $GLOBALS['db'] ;
    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute( [$userId] );
    return $result;
  }


  function emailVerify($email){
    $db = $GLOBALS['db'] ;
    $query = $db->prepare('SELECT 1 FROM users WHERE email = ?');
    $query->execute( [ $email ] );
    return $query->fetchColumn();
  }


  function usernameVerify($username){
    $db = $GLOBALS['db'] ;
    $query = $db->prepare('SELECT 1 FROM users WHERE username = ?');
    $query->execute( [ $username ] );
    return $query->fetchColumn();
  }


  function getAllUsers(){
    $db = $GLOBALS['db'] ;
    $query = $db->query("SELECT * FROM users");
    return 	$query->fetchAll();
  }

  function getUser($userId) {
	  $db = $GLOBALS['db'] ;
    $query = $db->prepare("SELECT *
    FROM users
    WHERE id = ?");
    $query->execute([$userId]);
    return $query->fetch();
  }

?>