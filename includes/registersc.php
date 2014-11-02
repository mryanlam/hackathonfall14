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
    $emailCheck = '@';
    $pos = strpos($_POST['email'], $emailCheck);
    if ($pos === false)
    {
        print(<myErr>Must be a valid email address<br></myErr>);
    }
    else
    {
        $query = "INSERT INTO account (username, shaPassHash, email, first, last) VALUES ('".$_POST['user']."', '".hash("sha512", $_POST['user'].$_POST['pass'])."', '".$_POST['email']."', '".$_POST['first']."', '".$_POST['last']."')";
        $result = $dbc->query($query);
        if($result) {
            $_SESSION['loggedin'] = true;
            $_SESSION['first'] = $_POST['first'];
            $_SESSION['last'] = $_POST['last'];
            $_SESSION['email'] = $_POST['email'];
            $query = "SELECT id FROM account WHERE username='".$_POST['user']."'";
            $result = $dbc->query($query);
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['id'];
            header("Refresh:0");
        } else {
            print("<p>OOPS ".$dbc->error."</p>");
        }
        $dbc->close();
    }
}
?>