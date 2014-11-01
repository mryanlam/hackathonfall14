<?php
if(isset($_POST['submitted'])) {
    DEFINE('USER', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('HOST', 'localhost');
    DEFINE('DB', 'auth');
    $dbc = new mysqli(HOST, USER, PASSWORD, DB);
    if($dbc->connect_error) {
        trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
    }
    $query = "INSERT INTO account (username, pass, email) VALUES ('".$_POST['user']."', '".hash("sha512", $_POST['user'].$_POST['pass'])."', '".$_POST['email']."')";
    $result = $dbc->query($query);
    if($result) {
        print("<p>REGISTERED: ".$_POST['user']."</p>");
    }
    else {
        print("<p>OOPS ".$dbc->error."</p>");
    }
    $dbc->close();
}
?>