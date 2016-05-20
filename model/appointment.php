<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $startDateTime -> datetime format 'yyyy-mm-dd hh:mm:ss'
 * @param type $endDateTime -> datetime format 'yyyy-mm-dd hh:mm:ss'
 * @param type $detail -> str limit 250
 * @param type $idUserTeacher -> str limit 10
 * @param type $idUserStudent -> str limit 10
 * @return false or lastInserID 
 */
function addAppointment($startDateTime,$endDateTime,$detail,$idUserTeacher,$idUserStudent) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `appointment`(`idAppointment`, `statusApp`, `startDateTimeApp`, `endDateTimeApp`,"
            . " `detailApp`, `idUserTeacher`, `idUserStudent`) "
            . "VALUES (NULL,'รออนุมัติ',:startDateTime,:endDateTime,:detail,:idUserTeacher,:idUserStudent)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":startDateTime" => $startDateTime,
                ":endDateTime" => $endDateTime,
                ":detail" => $detail,
                ":idUserTeacher" => $idUserTeacher,
                ":idUserStudent" => $idUserStudent
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idAppointment = $conn->lastInsertId();
    } else {
        return false;
    }
}
