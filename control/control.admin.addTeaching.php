<?php

require_once '../model/teaching.php';
require_once '../model/subject.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

$getTermId = isset($_POST['termid']) ? $_POST['termid'] : "";
$getTerm = isset($_POST['term']) ? $_POST['term'] : "";
$getYear = isset($_POST['year']) ? $_POST['year'] : "";

$get_subjectid = isset($_POST['subjectid']) ? $_POST['subjectid'] : "";
$get_teacherid = isset($_POST['teacherid']) ? $_POST['teacherid'] : "";

$get_date_arr = isset($_POST['date']) ? $_POST['date'] : "";
$get_starttime_arr = isset($_POST['startime']) ? $_POST['startime'] : "";
$get_endtime_arr = isset($_POST['endtime']) ? $_POST['endtime'] : "";
$get_room_arr = isset($_POST['room']) ? $_POST['room'] : "";
$get_location_arr = isset($_POST['location']) ? $_POST['location'] : "";

foreach ($get_date_arr as $key => $value) {
    $idTeaching = addTeaching($get_subjectid, $get_teacherid, $getTermId, $get_room_arr[$key]);
    
    $idScd = addSubjectSchedule($idTeaching, $get_starttime_arr[$key], $get_endtime_arr[$key], $get_location_arr[$key], $get_date_arr[$key]);
    if ($idTeaching == FALSE || $idScd == FALSE) {
        if ($idTeaching == FALSE) {
            deleteTeaching($idTeaching);
        }
        if ($idScd == FALSE) {
            deleteSubjectSchedule($idScd);
        }
        header("Location: ../Admin/AviewSubject.php?p=add_teaching_error&term=$getTerm&year=$getYear&termid=$getTermId");
    }
}
header("Location: ../Admin/AviewSubject.php?p=add_teaching_conpleted&term=$getTerm&year=$getYear&termid=$getTermId");
