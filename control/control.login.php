<?php

require_once '../model/login.php';

$getUser = $_POST['username'];
$getPass = $_POST['password'];

session_start();

if (($resLogin = login($getUser, $getPass)) != FALSE) {
    $getPermission = $resLogin['permission'];
    $getUsername = $resLogin['username'];
    $getIdUser = $resLogin['idUser'];

    $_SESSION['permission'] = $getPermission;
    $_SESSION['username'] = $getUsername;
    $_SESSION['idUser'] = $getIdUser;

    switch ($getPermission) {
        case 'student':
            header("Location: ../Student/SallSubject.php");
            break;
        case 'teacher':
            header("Location: ../Teacher/TappointSchedule.php");
            break;
        case 'admin':
            header("Location: ../Admin/ATerm.php");
            break;
        default:
            unset($_SESSION['permission']);
            header("Location: ../index.php?p=permission_error");
            break;
    }

    //header("Location: ../");
} else {
    header("Location: ../index.php?p=login_error");
}