<?php
session_start();

//on vériifie les identifiants
$utilisateur = "admin";
$motdepasse = "1234";

//si Ok on stocke l'utilisateur en session
$username = $_POST['username'];
$password = $_POST['password'];

//on redirige vers index.php sinon on affihe un message d'erreur
if ($username === $utilisateur && $password === $motdepasse) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
    exit();
} else {
    echo "Identifiants invalides. <a href='login.php'>Réessayer</a>";
}
