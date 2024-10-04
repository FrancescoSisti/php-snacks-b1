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
            <label for="linguaggio">Linguaggio preferito:</label>
            <input type="text" id="linguaggio" name="linguaggio">
            <input type="submit" value="Filtra">
        </form>
    </section>

    <?php
    //Versione del filtro reworkata
    $voto_max = 10;
    $linguaggio = '';
    if (isset($_GET['voto_max'])) {
        $voto_max = $_GET['voto_max'];
    }
    if (isset($_GET['linguaggio'])) {
        $linguaggio = $_GET['linguaggio'];
    }

    foreach ($classi as $nomeClasse => $studenti) {
        echo "<h2>" . $nomeClasse . "</h2>";
        echo "<ul>";
        for ($i = 0; $i < count($studenti); $i++) {
            $studente = $studenti[$i];
            if (
                $studente['voto_medio'] < $voto_max &&
                (empty($linguaggio) || strtolower($studente['linguaggio_preferito']) === strtolower($linguaggio))
            ) {
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

    // Filtro originale
    /*
    foreach ($classi as $nomeClasse => $studenti) {
        echo "<h2>" . $nomeClasse . "</h2>";
        echo "<ul>";
        foreach ($studenti as $studente) {
            if ($studente['voto_medio'] <= $voto_max) {
                echo "<li>";
                echo "<img src='" . $studente['immagine'] . "' alt='Foto di " . $studente['nome'] . " " . $studente['cognome'] . "'>";
                echo "<p>Nome: " . $studente['nome'] . " " . $studente['cognome'] . "</p>";
                echo "<p>Età: " . $studente['anni'] . "</p>";
                echo "<p>Voto medio: " . $studente['voto_medio'] . "</p>";
                echo "<p>Linguaggio preferito: " . $studente['linguaggio_preferito'] . "</p>";
                echo "</li>";
            }
        }
        echo "</ul>";
    }
    */
    ?>
</body>

</html>