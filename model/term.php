<?php
require_once '../functions/connection.inc.php';

function getAllTerm() {
    $conn = dbconnect();
    $SQLCommand = "SELECT * FROM `term`";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute();

    if ($SQLPrepare->rowCount() > 0) {
        $result = $SQLPrepare->fetchall(PDO::FETCH_ASSOC);
        return $result;
    } else {
        return false;
    }
}

function getCurrentTerm($dateToday) {
    $conn = dbconnect();
    $SQLCommand = "SELECT s.nameSubject,ut.";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idStudent" => $dateToday
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
 * @param type $startDate -> date format 'yyyy-mm-dd'
 * @param type $endDate -> date format 'yyyy-mm-dd'
 * @return false or lastInserID 
 */
function addTerm($term,$year,$startDate,$endDate) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `term`(`idTerm`, `term`, `yearTerm`, `startDateTerm`, `endDateTerm`) "
            . "VALUES (NULL,:term,:year,:startDate,:endDate)";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":term" => $term,
                ":year" => $year,
                ":startDate" => $startDate,
                ":endDate" => $endDate
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idTerm = $conn->lastInsertId();
    } else {
        return false;
    }
}

function deleteTerm($idTerm) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `term` WHERE `idTerm` =:idTerm";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idTerm" => $idTerm
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idTerm;
    } else {
        return false;
    }
}


