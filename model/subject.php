<?php

require_once '../functions/connection.inc.php';

/**
 * 
 * @param type $idStudent -> str limit 10
 * @param type $term -> tinyint
 * @param type $year -> int
 * @return false or results 
 */
function getAllSubjectByStudent($idStudent, $term, $year) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.nameSubject,ut.titleName,ut.name,ut.surname,t.idTeaching,t.groupLearn,tm.yearTerm,tm.term "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN enrollment e on e.idTeaching = t.idTeaching "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "INNER JOIN class c on c.idClass = e.idClass "
            . "INNER JOIN user us on us.idClass = c.idClass "
            . "where us.idUser = :idStudent and tm.term=:term and tm.yearTerm =:year";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idStudent" => $idStudent,
                ":term" => $term,
                ":year" => $year
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getAllSubjectByTeacher($idTeacher, $term, $year) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching,t.groupLearn,tm.yearTerm,tm.term "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "where t.idUserTeacher = :idTeacher and tm.term=:term and tm.yearTerm =:year";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idTeacher" => $idTeacher,
                ":term" => $term,
                ":year" => $year
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getAllSubjectByAdmin($term, $year) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching,t.groupLearn,tm.yearTerm,tm.term "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "where tm.yearTerm =:year and tm.term=:term";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":term" => $term,
                ":year" => $year
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getAllSubject() {
    $conn = dbconnect();
    $SQLCommand = "SELECT * FROM subject  ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute();

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idSubject -> str limit 10
 * @param type $nameSubject -> str limit 150
 * @return false or lastInserID
 */
function addSubject($idSubject, $nameSubject) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `subject`(`idSubject`, `nameSubject`) VALUES (:idSubject,:nameSubject)";
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

/**
 * 
 * @param type $idTeaching -> int
 * @param type $startTime -> time format 'hh:mm:ss'
 * @param type $endTime -> time format 'hh:mm:ss'
 * @param type $room -> str limit 10
 * @param type $day -> str limit 10 (Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday)
 * @return false or lastInserID
 */
function addSubjectSchedule($idTeaching, $startTime,$endTime,$room,$day) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `subject_schedule`(`idSchedule`, `startTimeSche`, `endTimeSche`, `roomSche`, `daySche`, `idTeaching`) "
            . "VALUES (NULL,:startTime,:endTime,:room,:day,:idTeaching)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":startTime" => $startTime,
                ":endTime" => $endTime,
                ":room" => $room,
                ":day" => $day,
                ":idTeaching" => $idTeaching
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idSchedule = $conn->lastInsertId();
    } else {
        return false;
    }
}

/**
 * 
 * @param type $idTeaching from getAllDubjectbyStudent or teacher
 * @return boolean
 */
function getSubjectScheduleByIdTeaching($idTeaching) {
    $conn = dbconnect();
    $SQLCommand = "SELECT t.groupLearn,s.*,ss.startTimeSche,ss.endTimeSche,ss.roomSche,ss.daySche "
            . "FROM teaching t "
            . "INNER JOIN subject s ON s.idSubject = t.idSubject "
            . "INNER JOIN subject_schedule ss on ss.idTeaching = t.idTeaching "
            . "WHERE t.idTeaching = :idTeaching";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idTeaching" => $idTeaching
            )
    );

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function deleteSubject($idSubject) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `subject` WHERE `idSubject`=:idSubject";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idSubject" => $idSubject
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idSubject;
    } else {
        return false;
    }
}

function deleteSubjectSchedule($idSchedule) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `subject_schedule` WHERE `idSchedule`=:idSchedule";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idSchedule" => $idSchedule
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idSchedule;
    } else {
        return false;
    }
}

//echo addSubjectSchedule('1', '04:00:00', '05:00:00', 'erf2', 'monday');
print_r(getSubjectScheduleByIdTeaching(2));
//print_r(getAllSubjectByTeacher('E9044',2, 2558));