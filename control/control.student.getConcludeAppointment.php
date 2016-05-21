<?php

require_once '../model/appointment.php';

echo json_encode(getConcludeAppointmentByStudent(isset($_REQUEST['studentid']) ? $_REQUEST['studentid'] : ""));
