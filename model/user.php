<?php

require_once '../functions/connection.inc.php';

function getUserByID($idUser) {
    $conn = dbconnect();
    $SQLCommand = "SELECT `idUser`,`titleName`,`name`,`surname`,`status`,`position`,`idClass` FROM `user` "
            . "WHERE `idUser`=:idUser";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idUser" => $idUser   
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getUserByPermission($permission) {
    $conn = dbconnect();
    $SQLCommand = "SELECT `idUser`,`titleName`,`name`,`surname`,`status`,`position`,`permission`,c.classRoom,GROUP_CONCAT(ct.classRoom) as Advisors FROM `user` "
            . "LEFT JOIN class c on c.idClass = user.idClass "
            . "LEFT JOIN class ct on ct.idUserTeacher = user.idUser "
            . "WHERE `permission`=:permission "
            . "Group by user.idUser ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":permission" => $permission
            ) 
            );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getUsers(){
    $conn = dbconnect();
    $SQLCommand = "SELECT `idUser`,`titleName`,`name`,`surname`,`status`,`position`,c.`idClass`,c.classRoom "
            . "FROM `user` "
            . "left join class c on c.idClass =  user.idClass";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute();

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

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

function updateUserInfo($idUser,$titleName,$name,$surname,$position) {
    $conn = dbconnect();
    $SQLCommand = "UPDATE `user` SET `titleName`=;titleName,`name`=:name,`surname`=:surname,"
            . "`position`=:postionWHERE `idUser`=:idUser";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":titleName" => $titleName,
                ":name" => $name,
                ":surname" => $surname,
                ":position" => $position,
                ":idUser" => $idUser
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        return $idUser;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $username -> str limit 20
 * @param type $oldPass -> str limit 45 md5()
 * @return boolean
 */
function checkoldPassword($username,$oldPass) {
    $conn = dbconnect();
    $SQLCommand = "SELECT `username` FROM `user` WHERE `username`=:username AND `password`=:password";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":username" => $username,
                ":password" => $oldPass
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $username;
    } else {
        return false;
    }
}

function updateUserPassword($username,$newPassword){
    $conn = dbconnect();
    $SQLCommand = "UPDATE `user` SET `password`=:password WHERE `username`=:username";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":username" => $username,
                ":password" => $newPassword
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        return $username;
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

