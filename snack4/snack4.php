<?php
require_once 'classes.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtro Studenti</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Filtro Studenti</h1>
        <section class="mb-4">
            <form method="GET" class="row g-3">
                <div class="col-md-2">
                    <label for="voto_max" class="form-label">Voto medio massimo:</label>
                    <input type="number" class="form-control" id="voto_max" name="voto_max" step="1" min="0" max="10"
                        required>
                </div>
                <div class="col-md-2">
                    <label for="linguaggio" class="form-label">Linguaggio preferito:</label>
                    <input type="text" class="form-control" id="linguaggio" name="linguaggio">
                </div>
                <div class="col-md-2">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="col-md-2">
                    <label for="cognome" class="form-label">Cognome:</label>
                    <input type="text" class="form-control" id="cognome" name="cognome">
                </div>
                <div class="col-md-2">
                    <label for="eta_min" class="form-label">Età minima:</label>
                    <input type="number" class="form-control" id="eta_min" name="eta_min" min="0">
                </div>
                <div class="col-md-2">
                    <label for="eta_max" class="form-label">Età massima:</label>
                    <input type="number" class="form-control" id="eta_max" name="eta_max" min="0">
                </div>
                <div class="col-md-2">
                    <label for="classe" class="form-label">Nome Classe:</label>
                    <input type="text" class="form-control" id="classe" name="classe">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Filtra</button>
                </div>
            </form>
        </section>

        <?php
        //Versione del filtro reworkata
        $voto_max = 10;
        $linguaggio = '';
        $nome = '';
        $cognome = '';
        $eta_min = 20;
        $eta_max = 40;
        $classe_filtro = '';

        if (isset($_GET['voto_max'])) {
            $voto_max = $_GET['voto_max'];
        }
        if (isset($_GET['linguaggio'])) {
            $linguaggio = $_GET['linguaggio'];
        }
        if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
        }
        if (isset($_GET['cognome'])) {
            $cognome = $_GET['cognome'];
        }
        if (isset($_GET['eta_min'])) {
            $eta_min = $_GET['eta_min'];
        }
        if (isset($_GET['eta_max'])) {
            $eta_max = $_GET['eta_max'];
        }
        if (isset($_GET['classe'])) {
            $classe_filtro = $_GET['classe'];
        }

        foreach ($classi as $nomeClasse => $studenti) {
            if (empty($classe_filtro) || stripos($nomeClasse, $classe_filtro) !== false) {
                echo "<h2 class='mt-4'>" . $nomeClasse . "</h2>";
                echo "<ul class='list-group'>";
                for ($i = 0; $i < count($studenti); $i++) {
                    $studente = $studenti[$i];
                    if (
                        $studente['voto_medio'] < $voto_max &&
                        (empty($linguaggio) || strtolower($studente['linguaggio_preferito']) === strtolower($linguaggio)) &&
                        (empty($nome) || stripos($studente['nome'], $nome) !== false) &&
                        (empty($cognome) || stripos($studente['cognome'], $cognome) !== false) &&
                        $studente['anni'] >= $eta_min && $studente['anni'] <= $eta_max
                    ) {
                        echo "<li class='list-group-item'>";
                        echo "<strong>ID:</strong> " . $studente['id'] . ", ";
                        echo "<strong>Nome:</strong> " . $studente['nome'] . ", ";
                        echo "<strong>Cognome:</strong> " . $studente['cognome'] . ", ";
                        echo "<strong>Età:</strong> " . $studente['anni'] . ", ";
                        echo "<strong>Voto medio:</strong> " . $studente['voto_medio'] . ", ";
                        echo "<strong>Linguaggio preferito:</strong> " . $studente['linguaggio_preferito'];
                        echo "</li>";
                    }
                }
                echo "</ul>";
            }
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
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>