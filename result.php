<?php
require_once("fonction.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    // Valider le mot de passe
    $result = validatePassword($password);

    if (is_string($result)) {
        echo "Mot de passe haché : " . $result;
    }
}
?>
