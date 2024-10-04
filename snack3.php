<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

echo "<div style='background-color: #CCCCCC; padding: 10px; margin-bottom: 10px;'>";
foreach ($db['teachers'] as $teacher) {
    echo "<p>{$teacher['name']} {$teacher['lastname']}</p>";
}
echo "</div>";

echo "<div style='background-color: #00FF00; padding: 10px; margin-bottom: 10px;'>";
foreach ($db['pm'] as $pm) {
    echo "<p>{$pm['name']} {$pm['lastname']}</p>";
}
echo "</div>";