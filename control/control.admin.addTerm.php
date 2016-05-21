<?php

require_once '../model/term.php';

$get_termyear = isset($_POST['termyear']) ? $_POST['termyear'] : "";
$get_term = isset($_POST['term']) ? $_POST['term'] : "";
$get_starttimeterm = isset($_POST['starttimeterm']) ? $_POST['starttimeterm'] : "";
$get_endtimeterm = isset($_POST['endtimeterm']) ? $_POST['endtimeterm'] : "";

if (($res = addTerm($get_term, $get_termyear, $get_starttimeterm, $get_endtimeterm)) != FALSE) {
    header("Location: ../Admin/ATerm.php?p=add_term_completed");
//    echo "yes";
} else {
    header("Location: ../Admin/ATerm.php?p=add_term_error");
//    echo "no";
}
