<?php
require_once '../functions/connection.inc.php';

function getEnrollments() {
    
}

function getEnrollmentByID($idEnrollment) {
    
}

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

function deleteAppointment($idEnrollment) {
    $conn = dbconnect();
    $SQLCommand = "DELETE FROM `enrollment` WHERE `idEnrollment`=:idEnrollment";
    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute(
            array(
                ":idEnrollment" => $idEnrollment
            )
    );
    if ($SQLPrepare->rowCount() > 0) {
        return $idEnrollment;
    } else {
        return false;
    }  
}