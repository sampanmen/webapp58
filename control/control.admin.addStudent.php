<?php

require_once '../model/user.php';

$get_id = isset($_POST['idstudent']) ? $_POST['idstudent'] : "";
$get_titlename = isset($_POST['titlename']) ? $_POST['titlename'] : "";
$get_name = isset($_POST['namestudent']) ? $_POST['namestudent'] : "";
$get_sname = isset($_POST['snamestudent']) ? $_POST['snamestudent'] : "";
$get_position = isset($_POST['position']) ? $_POST['position'] : "";
$get_username = isset($_POST['username']) ? $_POST['username'] : "";
$get_password = isset($_POST['password']) ? $_POST['password'] : "";
$get_permission = "teacher";
$get_status = "active";

if (($res = addUser($get_id, $get_titlename, $get_name, $get_sname, $get_username, $get_password, $get_status, $get_position, $get_permission)) != FALSE) {
    header("Location: ../Admin/AviewTeacher.php?p=add_student_completed");
//    echo "yes";
} else {
    header("Location: ../Admin/AviewTeacher.php?p=add_student_error");
//    echo "no";
}
