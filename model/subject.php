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
    $SQLCommand = "SELECT s.*,t.idTeaching,GROUP_CONCAT(c.classroom )as groupLearn,tm.yearTerm,tm.term,ut.name,ut.titleName,ut.surname,ut.idUser "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "INNER JOIN class c on c.idClass = t.groupLearn "
            . "INNER JOIN user us on us.idClass = c.idClass "
            . "where us.idUser = :idStudent and tm.term=:term and tm.yearTerm =:year "
            . "group by s.idSubject";

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

/**
 * 
 * @param type $idTeacher -> str limit 10
 * @param type $term tinyint
 * @param type $year int
 * @return false or results
 */
function getAllSubjectByTeacher($idTeacher, $term, $year) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching,GROUP_CONCAT(c.classroom )as groupLearn,tm.yearTerm,tm.term,ut.name,ut.titleName,ut.surname,ut.idUser "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN class c on c.idClass = t.groupLearn "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "where t.idUserTeacher = :idTeacher and tm.term=:term and tm.yearTerm =:year "
            . "group by s.idSubject ";

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

/**
 * 
 * @param type $term -> tinyint
 * @param type $year -> int
 * @return false or results
 */
function getAllSubjectByAdmin($term, $year) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.*,ut.titleName,ut.name,ut.surname,t.idTeaching,GROUP_CONCAT(c.classroom) as groupLearn,tm.yearTerm,tm.term,ut.name,ut.titleName,ut.surname,ut.idUser "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "INNER JOIN class c on c.idClass = t.groupLearn "
            . "inner join term tm on tm.idTerm = t.idTerm "
            . "INNER JOIN user ut on ut.idUser = t.idUserTeacher "
            . "where tm.yearTerm =:year and tm.term=:term "
            . "group by s.idSubject";

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

/**
 * 
 * @return false or results
 */
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
 * @param type $idSubject -> str limi 10
 * @param type $term -> tiny int
 * @param type $yearTerm -> int
 * @return false or result
 */
function getSubjecScheduleByIdSubjectAndTerm($idSubject, $term, $yearTerm) {
    $conn = dbconnect();
    $SQLCommand = "SELECT ss.*,t.groupLearn "
            . "FROM subject s "
            . "INNER JOIN teaching t on t.idSubject = s.idSubject "
            . "INNER JOIN subject_schedule ss on ss.idTeaching = t.idTeaching "
            . "INNER JOIN term tm ON tm.idTerm =t.idTerm "
            . "INNER JOIN class c ON c.idClass = t.groupLearn "
            . "WHERE s.idSubject =:idSubject and tm.term =:term AND tm.yearTerm =:yearTerm";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idSubject" => $idSubject,
                ":term" => $term,
                ":yearTerm" => $yearTerm
            )
    );

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
 * @return false or results
 */
function getSubjectByIdSubject($idSubject) {
    $conn = dbconnect();
    $SQLCommand = "SELECT * FROM subject s where s.idSubject=:idSubject ";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(array(":idSubject" => $idSubject));

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetch(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}
/**
 * 
 * @param type $idSubject -> str limit 10
 * @param type $nameSubject -> limit 150
 * @return false or results
 */
function updateSubject($idSubject,$nameSubject) {
    $conn = dbconnect();
    $SQLCommand = "UPDATE `subject` SET `nameSubject`=:nameSubject WHERE `idSubject`=:idSubject";
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
 * Get schedule teacher is ordered by day and time
 * @param type $idTeacher -> str limit 10
 * @return false or result
 */
function getSubjectAllSubjectAndSchedule($idTeacher) {
    $conn = dbconnect();
    $SQLCommand = "SELECT sb.*,ss.*,t.groupLearn "
            . "FROM subject sb "
            . "INNER JOIN teaching t ON t.idSubject = sb.idSubject "
            . "INNER JOIN subject_schedule ss ON ss.idTeaching = t.idTeaching "
            . "INNER JOIN term tm ON tm.idTerm = t.idTerm "
            . "INNER JOIN user u ON u.idUser = t.idUserTeacher "
            . "where u.idUser = :idUser "
            . "ORDER BY FIELD(ss.daySche , 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),ss.startTimeSche ;";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idUser" => $idTeacher
            )
    );

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
    $SQLCommand = "SELECT c.classroom as groupLearn,s.*,ss.startTimeSche,ss.endTimeSche,ss.roomSche,ss.daySche "
            . "FROM teaching t "
            . "INNER JOIN subject s ON s.idSubject = t.idSubject "
            . "INNER JOIN subject_schedule ss on ss.idTeaching = t.idTeaching "
            . "inner join class c on c.idClass = t.groupLearn "
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

/**
 * 
 * @param type $idSubject -> int
 * @return false or idSubject
 */
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
/**
 * 
 * @param type $idSchedule -> int
 * @return false or idSchedule
 */ 
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


//echo '<pre>',  print_r(getSubjectScheduleByIdTeaching(1)),'</pre>';
