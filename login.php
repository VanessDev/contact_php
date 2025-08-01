<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
</head>
<body>
  <h2>Connexion</h2>
  <form action="login_traitement.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Se connecter</button>
  </form>
</body>
</html>
