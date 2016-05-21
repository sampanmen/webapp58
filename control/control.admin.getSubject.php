<?php

/*
 * @param subjectid return record for subjectid
 * @param studentid, term and year return student's subject
 * @param teacherid, term and year return teacher's subject
 * @param term and year only return all for admin
 * no param return all subject
 */

require_once '../model/subject.php';
require_once '../model/term.php';

$getSubjectID = isset($_REQUEST['subjectid']) ? $_REQUEST['subjectid'] : "";
$getIdStudent = isset($_REQUEST['studentid']) ? $_REQUEST['studentid'] : "";
$getIdTeacher = isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : "";

$getTermDB = getCurrentTerm();

$getTerm = isset($_REQUEST['term']) ? $_REQUEST['term'] : "";
$getYear = isset($_REQUEST['year']) ? $_REQUEST['year'] : "";

if ($getIdStudent != "") {
    $getTerm = $getTerm == "" ? $getTerm : $getTermDB['term'];
    $getYear = $getYear == "" ? $getYear : $getTermDB['yearTerm'];

    $getSubject = getAllSubjectByStudent($getIdStudent, $getTerm, $getYear);
} else if ($getIdTeacher != "") {
    $getTerm = $getTerm == "" ? $getTerm : $getTermDB['term'];
    $getYear = $getYear == "" ? $getYear : $getTermDB['yearTerm'];
    $getSubject = getAllSubjectByTeacher($getIdTeacher, $getTerm, $getYear);
} else if ($getSubjectID != "") {
    $getSubject = getSubjectByIdSubject($getSubjectID);
} else if ($getTerm != "" && $getYear != "") {
    $getSubject = getAllSubjectByAdmin($getTerm, $getYear);
} else {
    $getSubject = getAllSubject();
}

echo $json = json_encode($getSubject);

