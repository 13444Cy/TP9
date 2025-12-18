<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
</head>
<body>
  <?php
    session_start();
    if(!isset($_SESSION['CONNECT'])){
      header('Location: login.php');
    }
    else{
      if($_SESSION['CONNECT'] != 'OK')
      {
        header('Location: login.php');
      }
    }
    
    echo 'Hello! '.$_SESSION['username'].'<br>';
  ?>
  <a href="validation.php?afaire=deconnexion">Deconnecxion</a>
</body>
</html>