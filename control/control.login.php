<?php

require_once '../model/login.php';

$getUser = $_POST['username'];
$getPass = $_POST['password'];

if (($resLogin = login($getUser, $getPass)) != FALSE) {
    $getPermission = $resLogin['permission'];
//    echo $getPermission;
//    print_r($resLogin);

    switch ($getPermission) {
        case 'student':
            header("Location: ../Student/SallSubject.php");
            break;
        case 'teacher':
            header("Location: ../Teacher/TsummeryAppoint.php");
            break;
        case 'admin':
            header("Location: ../Admin/Amanage.php");
            break;
        default:
            header("Location: ../index.php?p=permission_error");
            break;
    }

    //header("Location: ../");
} else {
    header("Location: ../index.php?p=login_error");
}