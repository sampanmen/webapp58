<?php
require_once '../functions/connection.inc.php';

function addTeaching($term,$year,$startDate,$endDate) {
    $conn = dbconnect();
    $SQLCommand = "INSERT INTO `term`(`idTerm`, `term`, `year`, `startDate`, `endDate`) "
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

