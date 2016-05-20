<?php

define("DNS", "mysql:dbname=webapp58;host=db.webapp58.16mb.com");
define("DBUSER", "webapp58");
define("DBPASS", "123456");

$con;

function dbconnect() {
    global $con;
    if (!$con) {
        $con = new PDO(DNS, DBUSER, DBPASS);
        $con->query("SET NAMES UTF8");
    }
    return $con;
}

function testDB() {
    $conn = dbconnect();
    $SQLCommand = "SELECT * FROM `user`";

    $SQLPrepare = $conn->prepare($SQLCommand);
    $SQLPrepare->execute();

    print_r($SQLPrepare->fetchAll());
}
