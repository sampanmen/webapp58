<?php
require '../functions/connection.inc.php';

function login($username, $password) {
    $conn = dbconnect();
    $SQLCommand = "SELECT * FROM user WHERE username =:username AND password = :password";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":username" => $username,
                ":password" => $password
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function logout() {
    unset($_SESSION['member']);
    return TRUE;
}

