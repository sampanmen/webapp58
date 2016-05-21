<?php
require_once '../functions/connection.inc.php';
/**
 * 
 * @param type $idUserTeacher -> str limit 10
 * @return false or result
 */
function getAppointmentByTeacher($idUserTeacher) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ap.*,ut.titleName as titleNameTeacher,ut.name nameTeacher,ut.surname surnameTeacher,"
            . "us.titleName titleNameStudent,us.name nameStudent,us.surname surnameStudent "
            . "FROM appointment ap INNER JOIN  "
            . "user ut ON ut.idUser = ap.idUserTeacher  "
            . "INNER JOIN user us ON us.idUser = ap.idUserStudent  "
            . "WHERE ap.startDateTimeApp >= CURRENT_DATE AND ap.endDateTimeApp>= CURRENT_DATE and ap.idUserTeacher=:idUserTeacher";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
             ":idUserTeacher" => $idUserTeacher   
            ));

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getAppointmentByStudent($idStudent) {
    
}
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

/**
 * Update Appointment by approve status
 * @param type $idAppointment -> 
 * @param type $statusApp
 * @return boolean
 */
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

