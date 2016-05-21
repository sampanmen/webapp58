<?php

require_once '../model/user.php';

$roomid = isset($_POST['roomid']) ? $_POST['roomid'] : "";
$idUser = isset($_POST['userid']) ? $_POST['userid'] : "";
$titleName = isset($_POST['titlename']) ? $_POST['titlename'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$surname = isset($_POST['sname']) ? $_POST['sname'] : "";
$position = isset($_POST['position']) ? $_POST['position'] : "";
$status = isset($_POST['status']) ? $_POST['status'] : "";

if (updateUserInfo($idUser, $titleName, $name, $surname, $position, $status) != FALSE) {
    header("Location: ../Admin/AviewStudent.php?roomid=$roomid&p=edit_student_completed");
} else {
    header("Location: ../Admin/AviewStudent.php?roomid=$roomid&p=edit_student_error");
}