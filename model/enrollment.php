<?php
require_once '../functions/connection.inc.php';

function addEnrollment($enrollDate,$idUserStudent,$idTeaching) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `enrollment`(`idEnrollment`, `enrollDate`, `idUserStudent`, `idTeaching`) "
            . "VALUES (NULL,:enrollDate,:idUserStudent,:idTeaching)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":enrollDate" => $enrollDate,
                ":idUserStudent" => $idUserStudent,
                ":idTeaching" => $idTeaching
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idEnrollment = $conn->lastInsertId();
    } else {
        return false;
    }

}