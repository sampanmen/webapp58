<?php

require_once '../model/subject.php';

$getTeacherID = isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : "";

echo json_encode(getSubjectAllSubjectAndSchedule($getTeacherID));
