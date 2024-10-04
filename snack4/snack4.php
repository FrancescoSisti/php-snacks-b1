<?php
require_once 'classes.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro Studenti</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <form method="GET">
            <label for="voto_max">Voto medio massimo:</label>
            <input type="number" id="voto_max" name="voto_max" step="1" min="0" max="10" required>
            <input type="submit" value="Filtra">
        </form>
    </section>

    <?php
    $voto_max = 10;
    if (isset($_GET['voto_max'])) {
        $voto_max = $_GET['voto_max'];
    }

    foreach ($classi as $nomeClasse => $studenti) {
        echo "<h2>" . $nomeClasse . "</h2>";
        echo "<ul>";
        for ($i = 0; $i < count($studenti); $i++) {
            $studente = $studenti[$i];
            if ($studente['voto_medio'] < $voto_max) {
                echo "<li>";
                echo "ID: " . $studente['id'] . ", ";
                echo "Nome: " . $studente['nome'] . ", ";
                echo "Cognome: " . $studente['cognome'] . ", ";
                echo "Età: " . $studente['anni'] . ", ";
                echo "Voto medio: " . $studente['voto_medio'] . ", ";
                echo "Linguaggio preferito: " . $studente['linguaggio_preferito'];
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>

</html>