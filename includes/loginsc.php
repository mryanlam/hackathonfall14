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
    $query = "SELECT id, shaPassHash, first, last, email FROM account WHERE username='".$_POST['userlog']."' OR email='".$_POST['userlog']."'";
    $result = $dbc->query($query);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        //print($row['shaPassHash'].'<br>');
        //print(hash("sha512", $_POST['userlog'].$_POST['passlog']));
        if(strcmp($row['shaPassHash'], hash("sha512", $_POST['userlog'].$_POST['passlog'])) == 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['first'] = $row['first'];
            $_SESSION['last'] = $row['last'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['user'] = $row['id'];
            header("Refresh:0");
        }
        else
        {
            print("<p>Incorrect Username or Password</p>");
        }
    } else {
        print("<p>Incorrect Username or Password</p>");
    }
    $dbc->close(); 
}
?>