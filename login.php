<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>APP name</h1>
  <form action="validation.php" method="post">
    <label for="username">Login:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" ><br><br>
    <input type="submit" value="Se connecter"><br><br>
    <p><?php if(isset($_GET['Error'])){ echo $_GET['Error'];} ?></p>
  </form>
</body>
</html>