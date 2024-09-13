<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parcours</title>
    <link rel="stylesheet" href="Styles/parcours.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Grey+Qo&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <h2>PARCOURS ACADEMIQUE</h2>
        <section class="maternelle">
            <table>
                <tr>
                    <caption>Maternelle</caption>
                </tr>
                <tr>
                    <td colspan="4">Maternelle</td>
                    
                </tr>
                <tr>
                    <td>N</td>
                    <td>Classe</td>
                    <td>Ecole</td>
                    <td>Année</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Maternelle2</td>
                    <td>Complexe Scolaire Saint Georges</td>
                    <td>2009</td>
                </tr>   
            </table>  
        </section>  
        <section>
            <table class="primaire" >
                <caption>Cours primaire</caption>
                <tr>
                    <td colspan="4">Cours primaire</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>Classe</td>
                    <td>Ecole</td>
                    <td>Année</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CM2</td>
                    <td rowspan="6">Complexe Scolaire Saint Georges</td>
                    <td>2016</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CM1</td>
                    <td>2015</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CE2</td>
                    <td>2014</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>CE1</td>
                    <td>2013</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>CP</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>CI</td>
                    <td>2011</td>
                </tr>       
            </table>
        </section>
        <section class="secondaire">
            <table>
                <caption>Cours Secondaire</caption>
                <tr>
                    <td colspan="4">Cours secondaire</td>
                </tr>
                <tr>
                    <td>N</td>
                    <td>Classe</td>
                    <td>Ecole</td>
                    <td>Année</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Terminale</td>
                    <td rowspan="3"> Collège Catholique Don Zéfirino Agostini (CCDZA) </td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Première (1ère) </td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Seconde (2nde) </td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Troisième (3ème)</td>
                    <td rowspan="4">Complexe Scolaire Saint Georges</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Quatrième (4ème)</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Cinquième (5ème)</td>
                    <td>2018</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sixième (6ème)</td>
                    <td>2017</td>
                </tr>
            </table>

        </section>
        <?php require_once(__DIR__ . '/footer.php'); ?>   
    </main>

    
</body>
</html>