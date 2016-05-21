<?php

require_once '../model/user.php';

$getTeacherID = isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : "";

if ($getTeacherID != "") {
    $getTeacher = getUserByID($getTeacherID);
    $resJSON = json_encode($getTeacher);
} else {
    $getTeachers = getUserByPermission("teacher");
    $resJSON = json_encode($getTeachers);
}

echo $resJSON;
