<?php

require_once '../model/appointment.php';
require_once '../model/term.php';

$getTerm = getCurrentTerm();
$term = $getTerm['term'];
$year = $getTerm['yearTerm'];

$getSubjectID = isset($_REQUEST['subjectid']) ? $_REQUEST['subjectid'] : "";

echo json_encode(getAppointmentOnlyApproveBySubject($getSubjectID, $term, $year));
