<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="styles/a.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Grey+Qo&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
<?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <section class="premiere-partie">
            <div class="description-de-lexercice">
                <h1 class="phrase-de-bienvenue">Bienvenue sur mon site web</h1><br>
                <p class="mon-paragraphe">Bonjour !!! <br><br> Je suis Doriane ASSOGBA. Je vous présente un exercice qui consiste à créer mon
                propre site web en y inscrivant des informations sur ma personne
                et sur mon parcours académique. <br> La première page que voici constitue une description de l'exercice.
                La seconde page comporte ma biographie tandis qu'à la troisième, je décris mon parcours académiques.
                Je reste ouverte à toutes vos appréciations.
                </p> 
            </div>
            <div class="ma-photo">
                <a href="images/femme.jpeg">
                    <img  src="images/femme.jpeg" alt="portrait de Doriane" title="Cliquez pour voir" id="ma-photo">
                </a>
            </div>
        </section>
        <section>        
            <form action="" method="get">
                <label for="conseils">Des conseils pour améliorer mon site ?<br></label>
                <br><textarea name="ameliorer"></textarea>
            </form>
        </section>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>   
</body>
</html>