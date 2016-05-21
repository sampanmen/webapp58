<?php

require_once '../model/appointment.php';

echo json_encode(getConcludeAppointmentByTeacher(isset($_REQUEST['teacherid']) ? $_REQUEST['teacherid'] : ""));
