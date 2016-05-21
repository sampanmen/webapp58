<?php

require_once '../functions/connection.inc.php';

function login($username, $password) {
    $conn = dbconnect();
    $SQLCommand = "SELECT `idUser`,`titleName`,`name`,`surname`,`username`,`status`,`position`,`permission`,classRoom "
            . "FROM user "
            . "left join class c on c.idclass = user.idclass "
            . "WHERE username =:username AND password = :password";

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
