<?php
session_start();
include 'functions.php';
if (isset($_GET['password_length'])) {
    $passwordLength = intval($_GET['password_length']);
    if ($passwordLength > 0) {
        $generatedPassword = randomPassword($passwordLength);
        $_SESSION['generatedPassword'] = $generatedPassword;
        header("Location: result.php");
        exit;
    } else {
        $_SESSION['error'] = "Inserisci un numero valido.";
        header("Location: index.php");
        exit;
    }
}
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
<div class="container mt-3">
        <h1>Generatore Password</h1>
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="password_length" class="form-label">Inserisci la lunghezza della password</label>
                <input type="number" class="form-control" id="password_length" name="password_length" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="text-danger mt-3">
                <?= $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>