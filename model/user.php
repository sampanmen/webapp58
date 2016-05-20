<?php

require_once '../functions/connection.inc.php';

function addUser($id, $titleName, $name, $surname, $username, $password, $status, $position, $permission) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `user`(`idUser`, `titleName`, `name`, `surname`,"
            . " `username`, `password`, `status`, `position`, `permission`) "
            . "VALUES (:id,:titlename,:name,:surname,:username,:password,:status,:position,:permission)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":id" => $id,
                ":titlename" => $titleName,
                ":name" => $name,
                ":surname" => $surname,
                ":username" => $username,
                ":password" => $password,
                ":status" => $status,
                ":position" => $position,
                ":permission" => $permission
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $id;
    } else {
        return false;
    }
}

function delete($param) {
    
}
