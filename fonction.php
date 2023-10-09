<?php

function validatePassword($password) {
    // Vérifier la longueur du mot de passe
    $length = strlen($password);
    if ($length < 6 || $length > 10) {
        return "Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Créer un "salt" statique
    $salt = "ABC1234@";

    // Concaténer le "salt" au mot de passe
    $saltedPassword = $password . $salt;

    // Chiffrer le mot de passe
    $hashedPassword = password_hash($saltedPassword, PASSWORD_DEFAULT);

    return $hashedPassword;
}

?>
