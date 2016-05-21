<?php

require_once '../model/class.php';

$get_nameroom = isset($_POST['nameroom']) ? $_POST['nameroom'] : "";
$get_teacherID = isset($_POST['teacherid']) ? $_POST['teacherid'] : "";
$get_year = isset($_POST['year']) ? $_POST['year'] : "";


if (($res = addClass($get_nameroom, $get_teacherID, $get_year)) != FALSE) {
    header("Location: ../Admin/ARoom.php?p=add_room_completed");
} else {
    header("Location: ../Admin/ARoom.php?p=add_room_error");
}
