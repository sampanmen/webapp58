<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

require_once '../model/user.php';

$idUser = isset($_POST['']) ? $_POST[''] : "";
$titleName = isset($_POST['']) ? $_POST[''] : "";
$name = isset($_POST['']) ? $_POST[''] : "";
$surname = isset($_POST['']) ? $_POST[''] : "";
$position = isset($_POST['']) ? $_POST[''] : "";

updateUserInfo($idUser, $titleName, $name, $surname, $position);
