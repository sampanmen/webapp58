<?php
require_once '../functions/connection.inc.php';


/**
 * 
 * @param type $startDateTime -> datetime format 'yyyy-mm-dd hh:mm:ss'
 * @param type $endDateTime -> datetime format 'yyyy-mm-dd hh:mm:ss'
 * @param type $detail -> str limit 250
 * @param type $idUserTeacher -> str limit 10
 * @param type $idUserStudent -> str limit 10
 * @param type $topicApp -> str limit 45 
 * @return false or lastInserID 
 */
function addAppointment($startDateTime,$endDateTime,$detail,$idUserTeacher,$idUserStudent,$topicApp) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `appointment`(`idAppointment`, `statusApp`, `startDateTimeApp`, `endDateTimeApp`,"
            . " `detailApp`, `idUserTeacher`, `idUserStudent`, `topicApp`) "
            . "VALUES (NULL,'รออนุมัติ',:startDateTime,:endDateTime,:detail,:idUserTeacher,:idUserStudent,:topicApp)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":startDateTime" => $startDateTime,
                ":endDateTime" => $endDateTime,
                ":detail" => $detail,
                ":idUserTeacher" => $idUserTeacher,
                ":idUserStudent" => $idUserStudent,
                ":topicApp" => $topicApp
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idAppointment = $conn->lastInsertId();
    } else {
        return false;
    }
}

function updateStatus($idAppointment,$statusApp) {
    $conn = dbconnect();
    $SQLCommand = "UPDATE `appointment` SET `statusApp`=:statusApp WHERE `idAppointment`=:idAppointment ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":statusApp" => $statusApp,
                ":idAppointment" => $idAppointment
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        return $idAppointment;
    } else {
        return false;
    }
}

function deleteAppointment($idAppointment) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `appointment` WHERE `idAppointment`=:idAppointment";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idAppointment" => $idAppointment
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idAppointment;
    } else {
        return false;
    }
}

