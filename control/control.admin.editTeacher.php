<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

require_once '../model/user.php';

$idUser = isset($_POST['userid']) ? $_POST['userid'] : "";
$titleName = isset($_POST['titlename']) ? $_POST['titlename'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$surname = isset($_POST['sname']) ? $_POST['sname'] : "";
$position = isset($_POST['position']) ? $_POST['position'] : "";
$status = isset($_POST['statusteacher']) ? $_POST['statusteacher'] : "";

if (updateUserInfo($idUser, $titleName, $name, $surname, $position, $status) != FALSE) {
    header("Location: ../Admin/AviewTeacher.php?p=edit_teacher_completed");
} else {
    header("Location: ../Admin/AviewTeacher.php?p=edit_teacher_error");
}