<?php
require_once '../functions/connection.inc.php';

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
