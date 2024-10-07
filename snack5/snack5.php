<?php
require_once 'functions.php';

$result = '';
if (isset($_GET['word'])) {
    $word = $_GET['word'];
    $result = nonSoComeFare($word) ? 'è palindroma' : 'non è palindroma';
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo Palindromi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Controllo Palindromi</h1>
        <form method="GET" class="mb-3">
            <div class="mb-3">
                <label for="word" class="form-label">Inserisci una parola o frase:</label>
                <input type="text" class="form-control" id="word" name="word" required>
            </div>
            <button type="submit" class="btn btn-primary">Controlla</button>
        </form>
    </div>
</body>

</html>