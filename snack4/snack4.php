<?php
require_once 'classes.php';

foreach ($classi as $nomeClasse => $studenti) {
    echo "<h2>$nomeClasse</h2>";
    echo "<ul>";
    foreach ($studenti as $studente) {
        echo "<li>";
        echo "ID: {$studente['id']}, ";
        echo "Nome: {$studente['nome']}, ";
        echo "Cognome: {$studente['cognome']}, ";
        echo "Età: {$studente['anni']}, ";
        echo "Voto medio: {$studente['voto_medio']}, ";
        echo "Linguaggio preferito: {$studente['linguaggio_preferito']}";
        echo "</li>";
    }
    echo "</ul>";
}