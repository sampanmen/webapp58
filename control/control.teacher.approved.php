<?php

require_once '../model/appointment.php';
require_once '../model/term.php';

$getTerm = getCurrentTerm();
$term = $getTerm['term'];
$year = $getTerm['yearTerm'];

$getteacherid = isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : "";

echo json_encode(getAppointmentOnlyApproveByIdTeacher($getteacherid, $term, $year));
