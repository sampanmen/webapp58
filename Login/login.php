<?php
session_start();
$_SESSION['error']; 
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error'] = "Username or Password is invalid";
        header('Location: ../Login/index.php');
    } else {
        // Call webservice
        $ws_url = '/VetSystem/vetkukps/login/webservice/login';
        $user= $_POST['username'];
        $pass = md5($_POST['password']);
        $ws_postData = 'username=' . $user . '&password=' . $pass;
        
        $data = getDataCURL($ws_url, $ws_postData);
        
       if ($data == null) {
            $_SESSION['error'] = 'Cannot connect to server.';
            header('Location: ../Login/index.php');
        } else {
            if ($data['status'] == TRUE) {
               // print_r($data);
                $_SESSION['login_user'] = $data['results']['titlename']." ".$data['results']['firstname']." ".$data['results']['lastname'];
                $_SESSION['permission'] = $data['results']['permission'];
                $_SESSION['userID'] = $data['results']['id'];
                if($_SESSION['permission']== 01||$_SESSION['permission']== 99)
                header("location: ../Patient/homeview.php");
                else if($_SESSION['permission']== 02||$_SESSION['permission']== 03)
                header("location: ../Dispensation/dispensationView.php");
                else if($_SESSION['permission']== 04 || $_SESSION['permission']== 05)
                header("location: ../Remedy/remedyView.php");
            
            } else {
                $_SESSION['error'] = "Username or Password is invalid";
                header('Location: ../Login/index.php');
            }
        }
    }
    
}
?>