<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $enrollDate -> date format 'yyyy-mm-dd'
 * @param type $idUserStudent -> str limit 10
 * @param type $idClass -> int
 * @return false or lastInserID
 */
function addEnrollment($enrollDate,$idUserStudent,$idClass) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `enrollment`(`idEnrollment`, `enrollDate`, `idClass`, `idTeaching`) "
            . "VALUES (NULL,:enrollDate,:idUserStudent,:idTeaching)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":enrollDate" => $enrollDate,
                ":idUserStudent" => $idUserStudent,
                ":idClass" => $idClass
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idEnrollment = $conn->lastInsertId();
    } else {
        return false;
    }

}