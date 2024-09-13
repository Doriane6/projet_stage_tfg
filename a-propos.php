<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description</title>
    <link rel="stylesheet" href="styles/a-propos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">

</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>    
    <main>
        <section class="description">
            <h1>Qui est Doriane ?</h1><br><br>
            <p>Née le 25 Octobre 2006 à Cotonou (Bénin), de nationalité béninoise, originaire de Porto-Novo, ASSOGBA
                Houéfa Doriane Marie-Christnelle est issue d'une famille modeste constituée de ses deux parents
                et de ses soeurs Angela et Louange ASSOGBA. Après l'obtention de son baccalauréat scientifique(série C)
                elle a choisi de poursuivre ses études en Infomatique et Télécommunication à l'Institut National 
                Supérieur de Technologie Industrielle, (INSTI) de Lokossa.
            </p>

        </section>
        <section>
            <h1 class="centre">Centres d'intérêts / Loisirs</h1>
            <div >
                <div class="images">
                    <a href="Images/ai.jpg" class="lien-conteneur-photo">
                        <img src="Images/ai.jpg" alt="IA" class="ci1" id="ci">
                        <div class="photo-hover">Intelligence artificielle</div>
                    </a>
                    <a href="Images/music.jpg" class="lien-conteneur-photo">
                        <img src="Images/music.jpg" alt="Musique" class="ci2" id="ci">
                        <div class="photo-hover">Musique</div>
                    </a>
                    <a href="Images/plage.jpg" class="lien-conteneur-photo">
                        <img src="Images/plage.jpg" alt="plage" class="ci3" id="ci">
                        <div class="photo-hover">Plage</div>
                    </a>
                    <a href="Images/religion.jpg" class="lien-conteneur-photo">
                        <img src="Images/religion.jpg" alt="religion" class="ci4" id="ci">
                        <div class="photo-hover">Religion</div>
                    </a><br><br><br>
                </div>
            </div>
        </section>
            

        <section class="contacter">
            <div class="contact">
                <h2>Envoyer un mail à Doriane</h2><br><br>
                <form action="" method="get">
                    <label for="Np" class="np"> *Nom et prénom</label><br>
                    <input type="text" class="np" placeholder=" Votre nom"><br><br>
                    <input type="text" class="np1" id="screen" placeholder=" Votre Prénom"><br><br>
                    <label for="emal" class="np"> *Email</label><br>
                    <input type="email" class="np" placeholder=" Ex: agossouthomas4@gmail.com"><br><br>
                    <input type="submit" value="ENVOYER" class="envoi">
                </form>
            </div>
            <a href="Images/image.jpg"><img src="Images/image.jpg" id="illustration" title="Cliquez pour voir"></a>
        </section>     
    </main>
    <footer>
    <?php require_once(__DIR__ . '/footer.php'); ?> 
    </footer>
</body>
</html>