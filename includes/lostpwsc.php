<?php
if(isset($_POST['submittedlog'])) {
    DEFINE('USER', 'root');
    DEFINE('PASSWORD', '');
    DEFINE('HOST', 'localhost');
    DEFINE('DB', 'auth');
    $dbc = new mysqli(HOST, USER, PASSWORD, DB);
    if($dbc->connect_error) {
        trigger_error("Could not connect! ".$dbc->connect_error, E_USER_ERROR);
    }
    $query = "SELECT email,username FROM account WHERE email='".$_POST['email']."'";
    $result = $dbc->query($query);
    if($result) {
        $row = $result->fetch_assoc();
        $query = "UPDATE account SET shaPassHash='".hash("sha512", $row["username"].$_POST['password'])."' WHERE email='".$_POST['email']."'";
        $result = $dbc->query($query);
        if($result) {
            print("password changed");
        } else {
            print("failed to change password");
        }
    } else {
        print("<p>incorrect email</p>");
    }
    $dbc->close();
}
?>