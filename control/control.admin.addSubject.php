<?php

require_once '../model/subject.php';

$get_subjectid = isset($_POST['subjectid']) ? $_POST['subjectid'] : "";
$get_namesubject = isset($_POST['namesubject']) ? $_POST['namesubject'] : "";

if (($addRes = addSubject($get_subjectid, $get_namesubject)) != FALSE) {
    header("Location: ../Admin/AviewAllSubject.php?p=add_subject_completed");
} else {
    header("Location: ../Admin/AviewAllSubject.php?p=add_subject_error");
}