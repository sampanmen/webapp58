<?php

require_once '../model/user.php';

$get_id = isset($_POST['idstudent']) ? $_POST['idstudent'] : "";
$get_titlename = isset($_POST['titlename']) ? $_POST['titlename'] : "";
$get_name = isset($_POST['namestudent']) ? $_POST['namestudent'] : "";
$get_sname = isset($_POST['snamestudent']) ? $_POST['snamestudent'] : "";
$get_position = "นักเรียน";
$get_username = isset($_POST['username']) ? $_POST['username'] : "";
$get_password = isset($_POST['password']) ? $_POST['password'] : "";
$get_permission = "student";
$get_status = "active";
$get_classid = isset($_POST['roomid']) ? $_POST['roomid'] : "";

if (($res = addUser($get_id, $get_titlename, $get_name, $get_sname, $get_username, $get_password, $get_status, $get_position, $get_permission, $get_classid)) != FALSE) {
    header("Location: ../Admin/AviewStudent.php?p=add_student_completed");
//    echo "yes";
} else {
    header("Location: ../Admin/AviewStudent.php?p=add_student_error");
//    echo "no";
}
