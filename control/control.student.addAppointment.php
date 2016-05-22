<?php

//
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

require_once '../model/appointment.php';

$getDate = isset($_POST['date']) ? $_POST['date'] : "";
$getStartTime = isset($_POST['startime']) ? $_POST['startime'] : "";
$getEndTime = isset($_POST['endtime']) ? $_POST['endtime'] : "";
$getTitle = isset($_POST['title']) ? $_POST['title'] : "";
$getContent = isset($_POST['content']) ? $_POST['content'] : "";

$getSubjectID = isset($_POST['subjectid']) ? $_POST['subjectid'] : "";
$getTeacherID = isset($_POST['userid']) ? $_POST['userid'] : "";
$getStudentID = isset($_POST['stdid']) ? $_POST['stdid'] : "";

$getTeachingID = isset($_POST['teachingid']) ? $_POST['teachingid'] : "";

if (($appointmentID = addAppointment($getDate . " " . $getStartTime, $getDate . " " . $getEndTime, $getContent, $getTeacherID, $getStudentID, $getTitle, $getTeachingID)) != FALSE) {
    header("Location: ../Student/Steachingschedule.php?subjectid=$getSubjectID&userid=$getTeacherID&p=add_appointment_completed");
//    echo "yes";
    //addAppointment($startDateTime, $endDateTime, $detail, $idUserTeacher, $idUserStudent, $topicApp);
} else {
    header("Location: ../Student/Steachingschedule.php?subjectid=$getSubjectID&userid=$getTeacherID&p=add_appointment_error");
//    echo "no";
}
