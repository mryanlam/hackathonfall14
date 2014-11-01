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
    $query = "SELECT username, shaPassHash, first, last FROM account WHERE username='".$_POST['userlog']."'";
    $result = $dbc->query($query);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row['shaPassHash'] = hash("sha512", $_POST['userlog'].$_POST['passlog'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['first'] = $row['first'];
            $_SESSION['last'] = $row['last'];
            $_SESSION['user'] = $row['username'];
        }
    } else {
        print("<p>username does not exist!</p>");
    }
    
    $dbc->close();
}
?>