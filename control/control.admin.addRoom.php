<?php

require_once '../model/class.php';

$get_nameroom = isset($_POST['nameroom']) ? $_POST['nameroom'] : "";
$get_teacherID = isset($_POST['teacherid']) ? $_POST['teacherid'] : "";

if (($res = addClass($get_nameroom, $get_teacherID)) != FALSE) {
    header("Location: ../Admin/ARoom.php?p=add_room_completed");
} else {
    header("Location: ../Admin/ARoom.php?p=add_room_error");
}
