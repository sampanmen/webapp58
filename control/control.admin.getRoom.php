<?php

require_once '../model/class.php';

$getRoomID = isset($_REQUEST['roomid']) ? $_REQUEST['roomid'] : "";

if ($getRoomID != "") {
        $getClassByID = getClassByIdClass($getRoomID);
    $getClassByIDJSON = json_encode($getClassByID);
    echo $getClassByIDJSON;
} else {
    $getClass = getClasses();
    $getClassJSON = json_encode($getClass);
    echo $getClassJSON;
}