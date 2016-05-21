<?php

/*
 * @para roomid return all student in classid
 */

require_once '../model/user.php';

$get_classid = isset($_REQUEST['roomid']) ? $_REQUEST['roomid'] : "";

if ($get_classid != "") {
    $getStudents = getUserStudentByIdClass($get_classid);
    $json = json_encode($getStudents);
} else {
    $json = "";
}

echo $json;
