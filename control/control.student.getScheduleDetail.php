<?php

require_once '../model/subject.php';
require_once '../model/term.php';

$getTerm = getCurrentTerm();

$termID = $getTerm['idTerm'];
$term = $getTerm['term'];
$year = $getTerm['yearTerm'];
$getSubjectID = isset($_REQUEST['subjectid']) ? $_REQUEST['subjectid'] : "";

echo json_encode(getSubjecScheduleByIdSubjectAndTerm($getSubjectID, $term, $year));