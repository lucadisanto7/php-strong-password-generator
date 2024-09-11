<?php
session_start();

if (!isset($_SESSION['generatedPassword'])) {
    header("Location: index.php");
    exit;
}

$generatedPassword = $_SESSION['generatedPassword'];
?>