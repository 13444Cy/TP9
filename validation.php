<?php
  $Error1 = 'Veuillez saisir un login et un mot de passe';
  $Error2 = 'Erreur de login/mot de passe';
  $Error3 = 'Vous avez été déconnecté du service ';
  if(isset($_GET['afaire'])){
    if($_GET['afaire'] == 'deconnexion'){
      session_destroy();
      header('Location: login.php?Error='.$Error3);
    }
  }
  require 'config.php';
  

  if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header('Location: login.php?Error='.$Error1);
    exit();
  }
  $user = $_POST['username'];
  $pass = $_POST['password'];
  if($user == USERNAME && $pass == PASSWORD){
    session_start();
    $_SESSION['CONNECT'] = 'OK';
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    header('Location: accueil.php');
    exit();
  }
  else {
    header('Location: login.php?Error='.$Error2);
    exit();
  }
  
   
?>