<?php

require_once '../model/user.php';

$get_id = isset($_POST['idteacher']) ? $_POST['idteacher'] : "";
$get_titlename = isset($_POST['titlename']) ? $_POST['titlename'] : "";
$get_name = isset($_POST['nameteacher']) ? $_POST['nameteacher'] : "";
$get_sname = isset($_POST['snameteacher']) ? $_POST['snameteacher'] : "";
$get_position = isset($_POST['position']) ? $_POST['position'] : "";
$get_username = isset($_POST['username']) ? $_POST['username'] : "";
$get_password = isset($_POST['password']) ? $_POST['password'] : "";
$get_permission = "teacher";
$get_status = "active";
$get_classid = NULL;

if (($res = addUser($get_id, $get_titlename, $get_name, $get_sname, $get_username, $get_password, $get_status, $get_position, $get_permission, $get_classid)) != FALSE) {
    header("Location: ../Admin/AviewTeacher.php?p=add_teacher_completed");
//    echo "yes";
} else {
    header("Location: ../Admin/AviewTeacher.php?p=add_teacher_error");
//    echo "no";
}
