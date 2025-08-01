    <?php
    //démarre avec sessionstart()on commence ou on reprend une session existante
    session_start();
    //on vérifie que $_session existe sinon on redirige vers login.php
    //si connecté affiche la page avec un messge de bienvenue
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
        <meta charset="UTF-8">
        <title>Accueil</title>
    </head>
    <body>
    <!-- //contient un formulaire de contact  envoyé à traitement.php -->
    <?php include("assets/header/header.html"); ?>

    <main>
        <h1>Bienvenue <?= htmlspecialchars($_SESSION['user']) ?> !</h1>
        <p>Voici une introduction à ma page d'accueil.</p>

        <div class="container">
            <h2>Contactez-moi</h2>
            <form action="traitement.php" method="post">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" required minlength="5" maxlength="255" placeholder="Ex: VanessaB123" />

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required minlength="5" maxlength="255" placeholder="Ex: email@example.com" />

                <label for="message">Message :</label>
                <textarea id="message" name="message" required minlength="5" maxlength="255" placeholder="Votre message..."></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    <!-- affiche un lien vers logout -->
        <p><a href="logout.php">Se déconnecter</a></p>
    </main>

    <?php include("assets/header/footer/footer.html");

    if(!empty($pseudo)  && !empty($email)  && !empty($message)) {
        $newcontact = [
            "pseudo" => $pseudo,
            "email" => $email,
            "message" => $message
        ];
    }

        if($newcontact) {
            $newcontact = [
                "pseudo" => $pseudo,
                "email" => $email,
                "message" => $message
            ];
            
        }
        var_dump($newcontact);
    ?>
    </body>
    </html>
