<?php

require_once '../functions/connection.inc.php';

function addSubject($idSubject, $nameSubject) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `subject`(`idSubject`, `name`) VALUES (:idSubject,:nameSubject)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idSubject" => $idSubject,
                ":nameSubject" => $nameSubject
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idSubject;
    } else {
        return false;
    }
}

function addSubjectSchedule($idSubject, $startTime,$endTime,$room,$day) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `subject_schedule`(`idSchedule`, `startTime`, `endTime`, `room`, `day`, `idSubject`) "
            . "VALUES (NULL,:startTime,:endTime,:room,:day,:idSubject)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":startTime" => $startTime,
                ":endTime" => $endTime,
                ":room" => $room,
                ":day" => $day,
                ":idSubject" => $idSubject
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idSchedule = $conn->lastInsertId();
    } else {
        return false;
    }
}

function getSubjectbyStudent($idStudent) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "INNER JOIN enrollment e on e.idTeaching = t.idTeaching "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "INNER JOIN user us on us.idUser = e.idUserStudent AND e.idUserStudent = :idStudent";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idStudent" => $idStudent
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getSubjectbyTeacher($idTeacher) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher AND t.idUserTeacher = :idTeacher";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idTeacher" => $idTeacher
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

