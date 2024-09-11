<?php
session_start();

if (!isset($_SESSION['generatedPassword'])) {
    header("Location: index.php");
    exit;
}

$generatedPassword = $_SESSION['generatedPassword'];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
</head>

<body>
<div class="container mt-5">
        <h1>Password Generata</h1>
        <div class="mt-4">
            <label class="form-label">La tua password è:</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($generatedPassword) ?>" readonly>
        </div>
        <a href="index.php" class="btn btn-primary mt-3">Genera un'altra password</a>
    </div>
</body>

</html>