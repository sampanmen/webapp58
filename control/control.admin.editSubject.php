<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

require_once '../model/subject.php';

$getSubjectID = isset($_POST['subjectid']) ? $_POST['subjectid'] : "";
$getNameSubject = isset($_POST['namesubject']) ? $_POST['namesubject'] : "";

if (updateSubject($getSubjectID, $getNameSubject)) {
    header("Location: ../Admin/AviewAllSubject.php?p=edit_subject_completed");
} else {
    header("Location: ../Admin/AviewAllSubject.php?p=edit_subject_error");
}