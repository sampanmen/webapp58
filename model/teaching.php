<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $idSubject -> str limit 10
 * @param type $idUserTeacher -> str limit 10
 * @param type $idTerm -> int
 * @param type $groupLearn -> str limit 20
 * @return false or lastInserID
 */
function addTeaching($idSubject,$idUserTeacher,$idTerm,$groupLearn) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `teaching`(`idTeaching`, `idUserTeacher`, `idSubject`, `idTerm`, `groupLearn`) "
            . "VALUES (NULL,:idUserTeacher,:idSubject,:idTerm,:groupLearn)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idUserTeacher" => $idUserTeacher,
                ":idSubject" => $idSubject,
                ":idTerm" => $idTerm,
                ":groupLearn" => $groupLearn
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idTeaching = $conn->lastInsertId();
    } else {
        return false;
    }
}
/**
 * 
 * @param type $idTeaching -> int
 * @return false or idTeaching
 */
function deleteTeaching($idTeaching) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `teaching` WHERE `idTeaching`=:idTeaching";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idTeaching" => $idTeaching
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idTeaching;
    } else {
        return false;
    }  
}