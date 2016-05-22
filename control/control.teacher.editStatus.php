<?php

require_once '../model/appointment.php';

$idAppointment = isset($_POST['idappointment']) ? $_POST['idappointment'] : "";
$statusApp = isset($_POST['status']) ? $_POST['status'] : "";
if (updateStatus($idAppointment, $statusApp) != FALSE) {
    header("Location: ../Teacher/TsummeryAppoint.php?p=edit_status_completed");
} else {
    header("Location: ../Teacher/TsummeryAppoint.php?p=edit_status_error");
}