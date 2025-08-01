<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Ici tu peux stocker les données ou les envoyer par mail

    echo "Merci $pseudo ! Votre message a été envoyé avec succès.";
    echo '<br><a href="index.php">Retour à l\'accueil</a>';
} else {
    echo "Erreur : formulaire non soumis correctement.";
}
