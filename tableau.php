<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Multiplication</title>
    <link rel="stylesheet" href="../table_multiplication/table.css">
</head>
<body>
<style>
    /* Style général du body */
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(45deg, #4A90E2, #50A398);
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Style de la table */
    table {
        width: 80%;
        max-width: 1000px;
        border-collapse: collapse;
        margin: 20px auto;
        text-align: center;
        background-color: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

    /* Style des cellules */
    td {
        font-size: 18px;
        padding: 15px;
        border: 1px solid #ddd;
        transition: background-color 0.3s ease;
    }

    /* Style des lignes et colonnes */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover td {
        background-color: #e0f7fa;
    }

    .premiere {
        font-weight: bold;
        background-color: #4A90E2;
        color: white;
        border-radius: 8px;
    }

    /* Style du titre de la table */
    caption {
        font-weight: bold;
        font-size: 50px;
        padding-bottom: 20px;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        margin-top: 3em;
    }

    /* Style des bordures arrondies pour la table */
    table, td {
        border-radius: 8px;
    }
</style>

<!-- Table de multiplication en PHP -->
<table>
  <caption>Tables de multiplication</caption>
  <?php for($i=1;$i<13;$i++): ?>
    <tr>
        <td class="premiere"> <?php echo "Table ". $i. "x" ?></td>
        <?php for($j=1;$j<13;$j++): ?> 
            <td><?php echo $i. "x". $j. " = ". $i*$j ; ?> </td> 
        <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>

</body>
</html>
