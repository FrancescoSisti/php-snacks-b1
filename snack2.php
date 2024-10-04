<?php
$userName = $_GET['name'] ?? '';
$userMail = $_GET['mail'] ?? '';
$userAge = $_GET['age'] ?? '';

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    if (strpos($userMail, "@") !== false && is_numeric($userAge) && $userAge > 0) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Accesso</title>
</head>

<body>
    <form action="" method="GET">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required><br><br>

        <label for="age">Età:</label>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Invia">
    </form>
</body>

</html>