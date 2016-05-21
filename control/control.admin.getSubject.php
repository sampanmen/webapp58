<?php

/*
 * @param studentid, term and year return student's subject
 * @param teacherid, term and year return teacher's subject
 * @param term and year only return all for admin
 * no param return all subject
 */

require_once '../model/subject.php';
require_once '../model/term.php';

$getIdStudent = isset($_REQUEST['studentid']) ? $_REQUEST['studentid'] : "";
$getIdTeacher = isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : "";

$getTermDB = getCurrentTerm();
$getTerm = isset($_REQUEST['term']) ? $_REQUEST['term'] : $getTermDB['term'];
$getYear = isset($_REQUEST['year']) ? $_REQUEST['year'] : $getTermDB['yearTerm'];

if ($getIdStudent != "") {
    $getSubject = getAllSubjectByStudent($getIdStudent, $getTerm, $getYear);
} else if ($getIdTeacher != "") {
    $getSubject = getAllSubjectByTeacher($getIdTeacher, $getTerm, $getYear);
} else if ($getTerm != "" && $getYear != "") {
    $getSubject = getAllSubjectByAdmin($getTerm, $getYear);
} else {
    $getSubject = getAllSubject();
}

echo $json = json_encode($getSubject);

