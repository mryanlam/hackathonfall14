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
    $query = "INSERT INTO account (username, shaPassHash, email, first, last) VALUES ('".$_POST['user']."', '".hash("sha512", $_POST['user'].$_POST['pass'])."', '".$_POST['email']."', '".$_POST['first']."', '".$_POST['last']."')";
    $result = $dbc->query($query);
    if($result) {
        $_SESSION['loggedin'] = true;
        $_SESSION['first'] = $_POST['first'];
        $_SESSION['last'] = $_POST['last'];
        $_SESSION['user'] = $_POST['user'];
        header("Refresh:0");
    } else {
        print("<p>OOPS ".$dbc->error."</p>");
    }
    $dbc->close();
}
?>