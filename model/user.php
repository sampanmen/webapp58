<?php

require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $id -> str limit 10
 * @param type $titleName -> str limit 10
 * @param type $name -> str limit 45
 * @param type $surname -> str limit 45
 * @param type $username -> str limit 20
 * @param type $password -> str limit 45 ***must md5()***
 * @param type $status -> str 20
 * @param type $position -> str 45
 * @param type $permission -> str 20
 * @param type $idClass -> int
 * @return boolean or lastInsertID
 */
function addUser($id, $titleName, $name, $surname, $username, $password, $status, $position, $permission,$idClass) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `user`(`idUser`, `titleName`, `name`, `surname`,"
            . " `username`, `password`, `status`, `position`, `permission`,`idClass`) "
            . "VALUES (:id,:titlename,:name,:surname,:username,:password,:status,:position,:permission,:idClass)";
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
                ":permission" => $permission,
                ":idClass" => $idClass
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $id;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idUser -> str limit 10
 * @return boolean or idUser 
 */
function deleteUser($idUser) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `user` WHERE `idUser` =:idUser";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idUser" => $idUser
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idUser;
    } else {
        return false;
    }
}

