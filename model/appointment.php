<?php
require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $idSubject -> str limit 10
 * @param type $teaching -> int 
 * @param type $term -> tiny int 
 * @param type $yearTerm -> int
 * @return boolean
 */
function getAppointmentByStudentOnlyApprove($idSubject, $term, $yearTerm) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ap.*,ut.titleName "
            . "FROM teaching t "
            . "INNER JOIN class c on c.idClass =t.groupLearn "
            . "INNER JOIN user us on us.idClass = c.idClass "
            . "INNER JOIN appointment ap on ap.idUserStudent = us.idUser "
            . "INNER JOIN user ut on ut.idUser = ap.idUserTeacher "
            . "INNER JOIN term tm on tm.idTerm =t.idTerm "
            . "WHERE  us.idUser=:idStudent and t.t "
            . "AND ap.startDateTimeApp >= CURRENT_DATE AND ap.endDateTimeApp>= CURRENT_DATE  "
            . "group by ap.idAppointment";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idStudent" => $idStudent,
                
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
/**
 * 
 * @param type $idStudent -> str limit 10
 * @return  false or result
 */
function getConcludeAppointmentByStudent($idStudent) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ap.*,s.nameSubject,ut.titleName,ut.name,ut.surname FROM appointment ap "
            . "INNER JOIN teaching t on t.idTeaching = ap.idTeaching "
            . "INNER JOIN subject s on s.idSubject = t.idSubject "
            . "INNER JOIN user ut ON ut.idUser = t.idUserTeacher "
            . "where ap.idUserStudent=:idStudent "
            . "and ap.startDateTimeApp >= CURRENT_DATE AND ap.endDateTimeApp>= CURRENT_DATE ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(array(":idStudent" => $idStudent) );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idTeacher -> str limit 10
 * @return false or result
 */
function getConcludeAppointmentByTeacher($idUserTeacher) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ap.*,s.nameSubject,ut.titleName,ut.name,ut.surname FROM appointment ap "
            . "INNER JOIN teaching t on t.idTeaching = ap.idTeaching "
            . "INNER JOIN subject s on s.idSubject = t.idSubject "
            . "INNER JOIN user ut ON ut.idUser = t.idUserTeacher "
            . "where ap.idUserTeacher=:idUserTeacher "
            . "and ap.startDateTimeApp >= CURRENT_DATE AND ap.endDateTimeApp>= CURRENT_DATE ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(array(":idUserTeacher" => $idUserTeacher) );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idAppointment -> int
 * @return false or result
 */
function getAppointmentByIdAppointment($idAppointment) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ap.* ,ut.titleName as titleNameTeacher,ut.name nameTeacher,ut.surname surnameTeacher,"
            . "us.titleName titleNameStudent,us.name nameStudent,us.surname surnameStudent "
            . "FROM appointment ap "
            . "INNER JOIN user us on us.idUser = ap.idUserStudent "
            . "INNER JOIN user ut on ut.idUser =ap.idUserTeacher "
            . "WHERE ap.idAppointment = :idAppointment  "
            . "and ap.startDateTimeApp >= CURRENT_DATE AND ap.endDateTimeApp>= CURRENT_DATE";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(array(":idAppointment" => $idAppointment) );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
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
function addAppointment($startDateTime,$endDateTime,$detail,$idUserTeacher,$idUserStudent,$topicApp,$idTeaching) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `appointment`(`idAppointment`, `statusApp`, `startDateTimeApp`, `endDateTimeApp`,"
            . " `detailApp`, `idUserTeacher`, `idUserStudent`, `topicApp`,`idTeaching`) "
            . "VALUES (NULL,'รออนุมัติ',:startDateTime,:endDateTime,:detail,:idUserTeacher,:idUserStudent,:topicApp,:idTeaching)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":startDateTime" => $startDateTime,
                ":endDateTime" => $endDateTime,
                ":detail" => $detail,
                ":idUserTeacher" => $idUserTeacher,
                ":idUserStudent" => $idUserStudent,
                ":topicApp" => $topicApp,
                ":idTeaching" => $idTeaching
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

