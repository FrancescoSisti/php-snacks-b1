<?php
$classi = [
    [
        'nome' => '1A',
        'studenti' => [
            ['nome' => 'Marco', 'cognome' => 'Rossi'],
            ['nome' => 'Laura', 'cognome' => 'Bianchi'],
            ['nome' => 'Giovanni', 'cognome' => 'Verdi'],
        ]
    ],
    [
        'nome' => '2A',
        'studenti' => [
            ['nome' => 'Sofia', 'cognome' => 'Russo'],
            ['nome' => 'Andrea', 'cognome' => 'Ferrari'],
            ['nome' => 'Giulia', 'cognome' => 'Esposito'],
        ]
    ],
    [
        'nome' => '3A',
        'studenti' => [
            ['nome' => 'Francesco', 'cognome' => 'Romano'],
            ['nome' => 'Alessia', 'cognome' => 'Colombo'],
            ['nome' => 'Davide', 'cognome' => 'Ricci'],
        ]
    ],
];

foreach ($classi as $classe) {
    echo "<h2>Classe {$classe['nome']}</h2>";
    echo "<ul>";
    foreach ($classe['studenti'] as $studente) {
        echo "<li>{$studente['nome']} {$studente['cognome']}</li>";
    }
    echo "</ul>";
}