<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $classRoom -> str limit 20
 * @param type $idUserTeacher -> str limit 10
 * @return false or lastInsertID
 */
function addClass($classRoom,$idUserTeacher) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `class`(`idClass`, `classRoom`, `idUserTeacher`) "
            . "VALUES (NULL,:classRoom,:idUserTeacher)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":classRoom" => $classRoom,
                ":idUserTeacher" => $idUserTeacher
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idClass = $conn->lastInsertId();
    } else {
        return false;
    }
}
