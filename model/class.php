<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $idClass -> int
 * @return false or result
 */
function getClassByIdClass($idClass) {
    $conn = dbconnect();
    $SQLCommand = "select c.*,u.titlename,u.name,u.surname,u.position "
            . "FROM `class` c inner join user u on  u.idUser = c.idUserTeacher and c.`idClass`=:idClass";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
             ":idClass" => $idClass   
            ));

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

/**
 * 
 * @return false or result
 */
function getClasses() {
    $conn = dbconnect();
    $SQLCommand = "SELECT c.*,u.titlename,u.name,u.surname,u.position FROM `class` c inner join user u on  u.idUser = c.idUserTeacher ";
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
 * @param type $classRoom -> str limit 20
 * @param type $idUserTeacher -> str limit 10
 * @return false or lastInsertID
 */
function addClass($classRoom,$idUserTeacher,$termClass) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `class`(`idClass`, `classRoom`, `idUserTeacher`, `termClass`) "
            . "VALUES (NULL,:classRoom,:idUserTeacher,:termClass)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":classRoom" => $classRoom,
                ":idUserTeacher" => $idUserTeacher,
                ":termClass" => $termClass
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idClass = $conn->lastInsertId();
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idClass -> int
 * @return false or idClass
 */
function deleteClass($idClass) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `class` WHERE `idClass`=:idClass";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idClass" => $idClass
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idClass;
    } else {
        return false;
    }
}

//print_r(getClassByIdClass(1));